(function (ajaxUrl, $, maGlobals, nonce, order, emailTypes) {
    'use strict';

    var app = angular.module('monsart', [
        //'ngAnimate',
        'ngSanitize',
        'ui.router',
        'ui.select',
        'ngWYSIWYG'
    ]);
    /***
     * Application configuration
     */
    app.config(function ($stateProvider, $urlRouterProvider) {

        $urlRouterProvider.otherwise('/home');

        $stateProvider

                // HOME STATES AND NESTED VIEWS ========================================
                .state('home', {
                    url: '/main',
                    resolve: {
                        config: ['EmailConfig', function (EmailConfig) {

                            }]
                    }
                });


    });
    /**
     * Application constants
     * deviceConfig: breakpoints for preview devices
     */
    app.constant('devicesConfig', [
                {
                    'name' : 'desktop',
                    'icon' : 'fa-desktop',
                    'active' : 'true',
                    'width' : '100%'
                },
                {
                    'name' : 'tablet',
                    'icon' : 'fa-tablet',
                    'width' : '768px'
                },
                {
                    'name' : 'mobile',
                    'icon' : 'fa-mobile',
                    'width' : '300px'
                }
            ]);
            
    /**
     * Main controller for root scope
     */        

    app.controller('MainCtrl', ['$rootScope', '$scope', 'FontManager', 'devicesConfig', 'EmailConfig', function ($rootScope, $scope, FontManager , devicesConfig, EmailConfig) {
            
            $scope.emailTypes = emailTypes;
            $scope.currentType = emailTypes[0].key;
            $scope.loading = true;
            $scope.fonts = [];
            $scope.previewDevices = devicesConfig;
            $scope.previewStyle = {'width' : '100%'};
            $scope.changes = false;
            $scope.isDemoConfig = true;
            
            
            var tp = FontManager.loadGoogleFonts();
            angular.forEach(maGlobals, function (value, key) {
                $rootScope[key] = value;
                angular.forEach(value, function(obj, name){
                    if(_.isArray(obj.val)){
                        if(!_.isEqual(obj.val, obj.default)){
                            $scope.isDemoConfig = false;
                        }
                    }else{
                        if(obj.default != obj.val){
                            $scope.isDemoConfig = false;
                        }
                    }
                    
                });
                $scope.$watchCollection(key, function(newValue, oldValue){
                    console.log('changed');
                    if(newValue != oldValue){
                        console.log($scope.changes);
                        $scope.changes = true;
                       
                       
                    }
                });
                
                
            }, true);
            
            
            
            
            
            
            $scope.saveSettings = function(){
               
                angular.forEach(maGlobals, function(value, key){
                    maGlobals[key] = $rootScope[key];
                });
                $scope.loading = true;
                EmailConfig.saveConfig(maGlobals).then(function(data){
                    $scope.loading = false;
                });
                
            };
            $scope.resetChanges = function(){
                
            };
            $scope.restoreDemo = function(){
                $scope.isDemoConfig = false;
                
                angular.forEach(maGlobals, function(value, key){
                    angular.forEach(value, function(obj, prop){
                        $rootScope[key][prop].val = maGlobals[key][prop]['default'];
                    });
                    
                });
            };
            
            $scope.changePreviewDevice = function(deviceName){
                setActivePreviewDevice(deviceName);
            };
            
            function getActiivePreviewDevice(deviceName){
                var activeDevice = null;
                for(var key in $scope.previewDevices){
                    if($scope.previewDevices[key].name === deviceName){
                        activeDevice = $scope.previewDevices[key];
                        break;
                    }
                }
                return activeDevice;
            }
                
            
            function setActivePreviewDevice(deviceName){
                for(var key in $scope.previewDevices){
                    if($scope.previewDevices[key].name === deviceName){
                        $scope.previewDevices[key].active = true;
                        $scope.previewStyle.width =  $scope.previewDevices[key].width;
                        $scope.$broadcast('screen.changed', $scope.previewDevices[key].width);
                    }else{
                        $scope.previewDevices[key].active = false;
                    }
                }
               
            }
            function isChanged(){
                
            }


        }]);
    
    /**
     * EmailConfig is responsible for geting and saveing configuration to database
     */
    app.service('EmailConfig', ['$http', function ($http) {
            this.getTemplateConfigs = function () {
                $http.get(ajaxUrl, {
                    'action': 'ma_email',
                    'order': maGlobals.orderId
                });
            }
            this.saveConfig = function(data){
          
                return $http.get(ajaxUrl, {
                  
                  params :{
                    nonce : nonce,
                    data : data,
                    func : 'saveConfig',
                    action : 'ma_ajax_main',
                    order: order
                  
                 }}).then(function(response){
                   console.log(response);
                });
            }


        }]);
    /**
     * Some third party plugins configuration goes here
     */
    app.service('Config', function () {

        this.wysywig = {
            fontAwesome: true,
            toolbar: [
                { name: 'basicStyling', items: ['bold', 'italic', 'underline', 'strikethrough'] },
                { name: 'paragraph', items: ['orderedList', 'unorderedList', '-'] },
                { name: 'colors', items: ['fontColor', 'backgroundColor', '-'] },
                { name: 'links', items: ['hr', 'link', 'unlink', '-'] },
                { name: 'styling', items: ['size', 'format'] },
            
                
            ]
        };

    });
    /**
     * Add new fonts and fetch font list from google 
     */
    app.service('FontManager', ['$q', '$http', function ($q, $http) {
            var _googleFontList;
            this.loadGoogleFonts = function () {

                _googleFontList = $q.defer();
                var fonts = localStorage.getItem('ma.googleFonts');
                if (angular.isDefined(fonts) && fonts != null) {
                    _googleFontList.resolve(angular.fromJson(fonts));
                    return _googleFontList.promise;
                }


                $http.get(ajaxUrl, {
                    params: {
                        'action': 'ma_ajax_main',
                        'func': 'getGoogleFonts',
                        'nonce' : nonce
                    }

                }).then(function (response) {
                    if (!response.error) {
                        localStorage.setItem('ma.googleFonts', angular.toJson(response.data.items));
                        _googleFontList.resolve(response.data.items);
                    } else {
                        _googleFontList.reject({
                            error: response.message
                        });
                    }
                });
                return _googleFontList.promise;


            };
            this.getGoogleFonts = function () {
                return _googleFontList.promise;
            };
        }]);

    /*
     * DIrectives
     */
    app.directive('maMenu', [function () {
            return {
                templateUrl: '/directives/maMenu.tpl',
                restrict: 'E',
                link: function (scope, elem, attrs) {

                }
            }
        }]);
    app.directive('maColor', ['$rootScope', '$timeout', function ($rootScope, $timeout) {
            return {
                templateUrl: '/directives/maColor.tpl',
                restrict: 'E',
                scope: {
                    color: '=ngModel'
                },
                link: function (scope, elem, attrs) {
                    var data = angular.fromJson(attrs.config);

                    var $elem = angular.element(elem);

                    //scope.color = data.val;

                    $timeout(function () {
                        angular.element($elem.find('.ma-color-picker')).wpColorPicker({
                            change: function (event, ui) {
                                scope.$apply(function () {
                                    scope.color = ui.color.toString();
                                });

                            },
                            // a callback to fire when the input is emptied or an invalid color
                            clear: function () {
                            },
                            // hide the color picker controls on load
                            hide: true,
                            // set  total width
                            width: 200,
                        });
                    }, 0, false);

                }
            }
        }]);
    app.directive('maImage', ['$rootScope', function ($rootScope) {
            return {
                templateUrl: '/directives/maImage.tpl',
                restrict: 'E',
                scope: {
                    val: "=ngModel"
                },
                link: function (scope, elem, attrs) {
                    var data = angular.fromJson(attrs.config);
                    var currentDirective = false;



                    window.original_send_to_editor = window.send_to_editor;

                    scope.openThickBox = function () {
                        currentDirective = true;
                        tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');

                    };
                    scope.removeImage = function(){
                        scope.val = '';
                        
                        
                    };


                    window.send_to_editor = function (html) {
                        if (currentDirective) {
                            scope.$apply(function () {
                                scope.val = $(html).attr('src');
                            });



                            tb_remove();
                        } else {
                            window.original_send_to_editor(html);
                        }

                    };


                }
            }
        }]);
    app.directive('maText', ['Config',function (Config) {
            return {
                templateUrl: '/directives/maText.tpl',
                restrict: 'E',
                scope: {
                    text: "=ngModel"
                },
                link: function (scope, elem, attrs) {
                    
                    
                    
                    
                    
                },
                controller: function($scope){
                    $scope.wysywigConfig = Config.wysywig;
                }
            }
        }]);

    app.filter('trusted', ['$sce', function ($sce) {
            return function (text) {
                return $sce.trustAsHtml(text);
            };
        }]);
    
    app.directive('maPreviewScreen', [ '$rootScope' ,'$window' ,function($rootScope,$window){
            return {
                restrict: 'A',
                
                link: function(scope, elem){
                    var $elem = angular.element(elem);
                    $elem.css({'display' : 'none'});
                    
                    $window.onload = function(){
                        $elem.css({'display' : 'block'});
                        scope.$apply(function(){
                            scope.loading = false;
                        })
                        
                    };
                    $window.onresize = function () {
                        
                        scope.$broadcast('screen.changed', $elem.width());
                    };
                    /*scope.on('$destroy', function(){
                        $window.onresize = null;
                    });*/
                    
                }
            }
        }
    ]);
    app.directive('maFontSelector', ['FontManager', function (FontManager) {
            return {
                templateUrl: '/directives/maFontSelector.tpl',
                restrict: 'E',
                scope: {
                    font: "=ngModel",
                },
                link: function (scope, elem, attrs) {
                    scope.fontList = [];
                    scope.selectedFont = {};

                    FontManager.getGoogleFonts().then(function (data) {
                        if (!data.error) {
                            scope.fontList = data;
                            for (var i = 0; i < data.length; i++) {
                                if (data[i].family === scope.font) {
                                    scope.selectedFont = data[i];
                                }
                            }
                        }

                    });
                    scope.changeFont = function (item) {
                        WebFont.load({
                            google: {
                                families: [item.family]
                            }
                        });
                        scope.font = item.family;
                    }

                }

            }
        }]);
    app.directive('maFullHeight',[ '$window' ,function($window){
            return {
                restrict : 'A',
                link : function(scope, elem, attrs){
                    var $elem = angular.element(elem);
                    angular.element(document).ready(function () {
                        $elem.height($window.innerHeight);
                    });
                    
                    $window.onresize = function () {
                        $elem.height($window.innerHeight);
                    };
                }
            }
    }]);
    app.filter('propsFilter', function () {
        return function (items, props) {
            var out = [];

            if (angular.isArray(items)) {
                var keys = Object.keys(props);

                items.forEach(function (item) {
                    var itemMatches = false;

                    for (var i = 0; i < keys.length; i++) {
                        var prop = keys[i];
                        var text = props[prop].toLowerCase();
                        if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
                            itemMatches = true;
                            break;
                        }
                    }

                    if (itemMatches) {
                        out.push(item);
                    }
                });
            } else {
                // Let the output be the input untouched
                out = items;
            }

            return out;
        };
    });
    app.directive('maMediaStyle', function(){
        return {
            restrict : 'A',
            link: function(scope, elem, attrs){
                var $elem = angular.element(elem);
                
                var params = eval('(' + attrs.maMediaStyle + ')');
                var screenWidth = angular.element('#preview-screen').width();
                var shouldDisable = function(screen){
                    if(params.lte && params.lte < screen){
                        return true;
                    }
                    if(params.gte && params.gte > screen){
                        return true;
                    }
                    return false;
                };
                scope.$on('screen.changed', function(event, data){
                    var width = data === '100%' ? screenWidth : parseInt(data);
                    
                        if(shouldDisable(width)){
                            $elem.context.disabled = true;
                        }else{
                            $elem.context.disabled = false;
                        }
                    
                });
                if(shouldDisable(screenWidth)){
                    
                    $elem.context.disabled = true;
                    
                }
                
                
            }
            
        }
    });


})(ajaxurl, jQuery, maGlobals, nonce, orderTemplate, emailTypes);



