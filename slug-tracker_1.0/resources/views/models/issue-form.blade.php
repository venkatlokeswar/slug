<!-- Modal -->
<div class="modal fade" id="issueCreaterModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title col-lg-5">Create Issue</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" ng-controller="issueCreatorController as issueCreator">
       <div class="container-fluid">
         <div class="row">
             <div class="col-lg-6 form-group-lg">
                 <label for="typeOfIssue">Issue Type</label>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group col-lg-12">
                            <input type="text" class="form-control no-border" ng-model="issueCreator.searchType" ng-change="issueCreator.updateDropDown()"/>
                            <span class="input-group-addon no-border">
                                <i class="glyphicon glyphicon-triangle-bottom"></i>
                            </span>
                        </div>
                           <span>
                               <ul class="issue-type">
                                    <issue-type ng-repeat="issuetype in issueCreator.issueTypes.data" issue="issuetype"/>
                                </ul>
                            </span>
                    </div>
                    </div>
                 
             </div>
         </div>
         <div class="row">
            
         </div>
         <div class="row">
           
         </div>
         <div class="row">
             
         </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>