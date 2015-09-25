<?php
/**
 * Created by PhpStorm.
 * User: shubh
 * Date: 11/9/15
 * Time: 1:13 AM
 */
?>
<html>
   <head>
      <title>Angular JS Includes</title>
      <script src = "vendor/angular.min.js"></script>

      <script src = "vendor/angular-route.min.js"></script>
      <style>
table, th , td {
    border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
         }

         table tr:nth-child(odd) {
background-color: #f2f2f2;
         }

         table tr:nth-child(even) {
background-color: #ffffff;
         }
      </style>

   </head>
   <body>

      <h2>AngularJS Sample Application</h2>
      <script src = "script/mainApp.js"></script>
      <script src = "controller/student.js"></script>
      <div ng-app = "mainApp" ng-controller="studentController">
         <div ng-view ></div>

      </div>
      <script type = "text/ng-template" id = "main.html">
          <h2> Add Student </h2>
          {{message}}
      </script>
      <script type = "text/ng-template" id = "views/subject.html">
          <h2> Add Student </h2>
          {{message}}
      </script>


   </body>
</html>
