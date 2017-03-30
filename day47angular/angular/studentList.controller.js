
    // retrieve the module 
var module = angular.module('myApp');


// creates a controller 
module.controller('studentList', function($scope) {
        // scope is a object made of all the variables within the controller scope 
    console.log($scope); // can see with inspect, console

    //set color to green
    $scope.color ='blue';
    $scope.my_name = 'Batman';

    $scope.total_students = 16;
    $scope.unofficial_quitters = 2;

    $scope.present_students = 15;

    $scope.countMissingStudents = function() {
        return $scope.total_students - $scope.present_students;
    }



    $scope.students =[

        {
            name: 'Jan',
            present: true

        },

        {
            name: 'OG',
            present: true

        },
        {
            name: 'CJ',
            present: true

        },
        {
            name: 'Kristina',
            present: false
        }

    ];








}); 

