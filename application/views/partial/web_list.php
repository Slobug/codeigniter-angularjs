<table class="table table-hover">
    <thead>
    <tr>
        <th class="col-md-4">Website</th>
        <th class="col-md-4">Description</th>
        <th class="col-md-4 nobold">
            <div class="col-md-8 nopadding"><input type="text" ng-model="search" class="form-control" placeholder="Search"></div>
            <div class="col-md-4 nopadding"><a class="btn btn-success btn-small pull-right"
                                               href="<?php echo site_url('#/new'); ?>"><i class="icon-plus icon-white"></i> Add
                    project</a></div>

        </th>
    </tr>
    </thead>
    <tbody>
    <tr ng-repeat="project in projects | filter:search | orderBy:'name'">
        <td><a href="{{project.site}}" target="_blank">{{project.name}}</a></td>
        <td><i>{{project.description}}</i></td>
        <td>
            <div class="pull-right">
                <a class="btn btn-primary btn-mini" href="<?php echo site_url('#/edit/{{project.id}}'); ?>"><i
                        class="icon-edit icon-white"></i> Edit</a>
                <button ng-click="destroy(project)" class="btn btn-danger btn-mini"><i
                        class="icon-trash icon-white"></i> Delete
                </button>
            </div>
        </td>
    </tr>
    </tbody>
</table>