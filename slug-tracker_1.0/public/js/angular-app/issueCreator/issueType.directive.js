root.directive("issueType", function() {
    return {
        restrict : "EA",
        scope: {
            issue: '='         
        },
        templateUrl : "js/angular-app/issueCreator/issueType.html",
        link: function ($scope, element, attrs) { 

        } 
    };
});