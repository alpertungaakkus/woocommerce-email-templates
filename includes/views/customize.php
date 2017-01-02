
<script type='text/javascript'>
    var maGlobals = <?=json_encode($jsGlobals); ?>;
    var nonce = '<?= MaApplication::getInstance()->nonce; ?>';
    var orderTemplate = <?= $order; ?>;
    var emailTypes = <?= json_encode($types); ?>
</script>
<div ng-app="monsart" id="monsart-emails" >
    <?php include MA_VIEW_PATH .'layout' . DS . 'ng-templates.php'  ?>
    <div ng-controller="MainCtrl">
        <div class='panel'>
            <div class=''>
            <h3>Email Type</h3>
            <select ng-model="currentType">
                <option ng-repeat="type in ::emailTypes" value='{{type.key}}'>{{type.name}}</option>
            </select>
            </div>
            <div class='accordion-container'>
                <ul>
                    <?php foreach ($panels as $panelName => $params) { ?>
                        <li class='control-section accordion-section'>
                            <h3 class='accordion-section-title'><?= $this->getProperTitle($panelName); ?></h3>
                            <div class='accordion-section-content'>
                                <div class='inside'>
                                    <?php foreach ($params as $key => $value){ ?>
                                    <h3><?= $this->getProperTitle($key) ?></h3>
                                    <ma-<?= implode('-',$this->excludeByUpperCase($value['type'])) ?> ng-model="<?= $panelName ?>.<?= $key ?>.val"  val='<?= $panelName ?>.<?= $key ?>.val' panel='<?= $panelName ?>' prop='<?= $key ?>' config='<?= json_encode($value, JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_QUOT) ?>'></ma-<?= $value['type'] ?>>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="actions">
                <button ng-click="::saveSettings()" class="button button-primary button-large">Save</button>
                <button ng-show="changes" ng-click="::resetChanges()" class="button button-secondary button-large">Reset changes</button>
                <button ng-show="!isDemoConfig" ng-click="::restoreDemo()" class="button button-secondary button-large">Restore Demo Data</button>
            </div>
        </div>
        <div ma-full-height class="preview-container">
            <div class="preview-devices">
                <ul class="device-lsit clearfix">
                    <li ng-repeat="device in ::previewDevices"><a ng-class="{'active' : device.active }" ng-click="changePreviewDevice(device.name)" href="#" ng-click=""><i ng-class="device.icon" class="fa"></i></a></li>
                </ul>
            </div>
            <div id='preloader'  ng-hide="!loading">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="150px" height="114px" viewBox="0 0 150 114" enable-background="new 0 0 150 114" xml:space="preserve" fill-opacity="0">

                     <path class="path" fill='#23282D'  stroke="#ffffff" stroke-width="4" stroke-miterlimit="10" d="M 150 112 L 2 112 L 75 1 L 136 92 L 67 92 L 101 42"/>

                </svg>
            </div>
            <div style="display: none" ng-show='!loading' ma-preview-screen ma-full-height ng-style="previewStyle" id="preview-screen" class='preview-template'>

                <?= $preview ?>
            </div>
            
        </div>
    </div>
</div>
