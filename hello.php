<html>
    <head>
      <meta charset="utf-8" />    
      <title>AngularJS MVC Demo</title>    
      <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>    
      <script>      
          angular.module('angular_mvc', []).controller('MainCtrl', function($scope) {      
          $scope.message = 'Hello';    });    
      </script>  
          
    </head>  
    
    <body ng-controller="MainCtrl" >    
        <label>Name:</label> <input type="text" ng-model="yourName" placeholder="Enter a name here">      
        <p>{{message}} {{yourName}}!</p>  
    </body> 
    
</html>