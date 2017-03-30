angular.module('myApp', ['ngRoute']);



// this should be in it's own file 
// prepare the navigation directive (to use <navigation></navigation>)
angular.module('myApp').directive('navigation', function() {

    return {
        templateUrl: 'navigation.html',

    };
});






// this should be in it's own file
// prepare the component <greet-user></greet-user>
angular.module('myApp').component('greetUser', {

    template: 'Hello, {{ $ctrl.name }}!',

    controller: function() {
        this.name = 'CJ';
    }

});