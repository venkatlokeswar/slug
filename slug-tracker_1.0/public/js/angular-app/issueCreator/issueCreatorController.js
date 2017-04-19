root.controller('issueCreatorController', function(){
    var issueCreatorScope = this;
     
    this.searchType="";
    this.issueData = {
         data :[
             {
             'icon':'images/epic.svg',
             'type':'Epic'
             },
             {
             'icon':'images/story.svg',
             'type':'Story'
             },
             {
             'icon':'images/task.svg',
             'type':'Task'
             },
             {
             'icon':'images/bug.svg',
             'type':'Bug'
             }
             
         ]
     }; 
     this.issueTypes ={
         data :[
             
         ]
     };
     this.updateDropDown = function(){
         var searchItem = this.searchType;
         var searchList = {data:[]};
         this.issueData.data.map(function(issue){
               if (issue.type.toLowerCase().indexOf(searchItem.toLowerCase()) >= 0){
                   searchList.data.push(issue);
               }
         }); 
        this.issueTypes = searchList;
        if(searchItem.trim().length === 0){
           this.issueTypes = {data:[{type:'no matchs'}]};
        }
     };
    
}); 