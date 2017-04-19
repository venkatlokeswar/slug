@extends('layout.index')

@section('content')
  @include('layout.nav')
  
  <div class='col-lg-12' ng-app="root">
      <div class="col-lg-11">
      </div>
      <div class="col-lg-1">
          <button style="margin-left: 60%;margin-top:-10%" id="createIssue" class="btn-shadow btn btn-block btn-primary btn-circular" data-target="#issueCreaterModel"  data-toggle="modal" ><span class="glyphicon glyphicon-plus large-text"></span></button>
      </div>
      @include('models.issue-form')
  </div>
@endsection()

<script src="js/angular/angular.js" type="text/javascript"></script>
<script src="js/angular-base/base.ctrl.js" type="text/javascript"></script>
<script src="js/angular-app/issueCreator/issueCreatorController.js"></script>
<script src="js/angular-app/issueCreator/issueType.directive.js"></script>