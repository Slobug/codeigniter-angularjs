<form name="myForm">

    <div class="form-group" ng-class="{error: myForm.name.$invalid}">
        <label class="control-label" for="name">Name</label>


        <input class="form-control" type="text" name="name" id="name" ng-model="project.name" required>
        <span ng-show="myForm.name.$error.required" class="help-inline">Required</span>

    </div>

    <div class="form-group" ng-class="{error: myForm.site.$invalid}">
        <label class="control-label" for="site">Website</label>


        <input class="form-control" type="url" name="site" id="site" ng-model="project.site" required>
        <span ng-show="myForm.site.$error.required" class="help-inline">Required</span>
        <span ng-show="myForm.site.$error.url" class="help-inline">Not a URL</span>

    </div>

    <div class="form-group">
        <label class="control-label" for="description">Description</label>

            <textarea class="form-control" name="description" id="description"
                      ng-model="project.description"></textarea>

    </div>
    <button ng-click="save()" ng-disabled="isClean() || myForm.$invalid" class="btn btn-primary"><i
            class="icon-ok icon-white"></i> Save
    </button>
    <a href="<?php echo site_url('#/'); ?>" class="btn btn-link">Cancel</a>
    <button ng-click="destroy()" ng-show="project.id" class="btn btn-danger pull-right"><i
            class="icon-trash icon-white"></i> Delete
    </button>

</form>