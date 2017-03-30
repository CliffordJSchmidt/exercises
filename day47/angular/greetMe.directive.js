var module = angular.module('myApp');
module.directive('greetMe', function() {

    // data gathering here

    return {
        template : "<h1>Hello, {{ my_name }}</h1>"
    };

});