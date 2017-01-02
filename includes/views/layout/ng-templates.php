<!-- DIRECTIVES -->
<!-- Font Selector --->
<script type="text/ng-template" id="/directives/maFontSelector.tpl">
    
    <ui-select on-select="changeFont($item)" ng-model="selectedFont" theme="select2" style="min-width: 300px;" title="Choose a person" append-to-body="true">
        <ui-select-match placeholder="Select a person in the list or search his name/age...">{{$select.selected.family}}</ui-select-match>
        <ui-select-choices repeat="font in ::fontList  | propsFilter: {family: $select.search}">
            <div ng-bind-html="::font.family | highlight: $select.search"></div>
            <small>
                category: {{::font.category}}
                
            </small>
        </ui-select-choices>
    </ui-select>
</script>
<!-- /Font Selector --->
<!-- Ma Text -->
<script type="text/ng-template" id="/directives/maText.tpl">
    
    <wysiwyg-edit content="text"   config="wysywigConfig"></wysiwyg-edit>
    
</script>
<!-- /Ma Text -->
<!-- Ma Image -->
<script type="text/ng-template" id="/directives/maImage.tpl">
    <div class="input-container" ng-show="!val">
        <input  type="text" class="text upload_image" size="36" placeholder="http://" name="upload_image" value="" />
        <input ng-click="::openThickBox()"  class=button add-image upload_image_button" type="button" value="Upload Image" />
    </div>
    <div ng-show="val" class="preview-img">
        <button class="btn-icon btn-circle edit" ng-click="::openThickBox()" href="#"><i class="fa fa-edit"></i></button>
        <button class="btn-icon btn-circle remove" ng-click="::removeImage()" href="#"><i class="fa fa-remove"></i></button>
        <img src="{{val}}">
    </div>
</script> 
<!-- /Ma Image -->
<!-- Ma Color -->
<script type="text/ng-template" id="/directives/maColor.tpl">
    <input data-mode="hex" type="text" value="{{color}}" class="wp-color-picker-field ma-color-picker" data-default-color="{{color}}" />
</script>
<!-- /Ma Color -->
<!-- Ma Menu -->
<script type="text/ng-template" id="/directives/maMenu.tpl">
</script>
<!-- /Ma Menu -->




