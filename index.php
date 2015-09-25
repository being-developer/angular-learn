<html  ng-app='myapp'>
<head>
      <script src = "vendor/angular.min.js"></script>
</head>

<body>
  <div >
    <label>Name:</label>
           <input type = "text" ng-model = "yourName" placeholder = "Enter a name here">
           <hr />
      <h1>hello {{yourname}}</h1>
  </div>
  <div ng-controller = "HelloController" >
        <h2>Welcome {{helloTo.title}} to the world of Tutorialspoint!</h2>
     </div>

     <script>
        var app=angular.module("myapp", [])

        app.controller("HelloController", function($scope) {
           $scope.helloTo = {};
           $scope.helloTo.title = "AngularJS";
        });

     </script>
<body>
</html>
