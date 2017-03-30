angular.module('navigationApp', ['ngRoute']);



angular.module('navigationApp').config(['$locationProvider', '$routeProvider',
    function config($locationProvider, $routeProvider) { // dependancy injection

        $locationProvider.hashPrefix('!');

        $routeProvider // all routes are added on the $routeProvider object  calling methods when( ,{})

            .when('/', { //show route 
                template: '<h1>The homepage</h1>', //do/say this.. or use template to display

            })
            .when('/contact', { //show route 
                template: '<h1>The New contact page</h1>', 
            })
            .when('/product-list', { //show route 
                template: '<product-list></product-list>', //do/say this..or template to display

            })
            .when('/error404', { //show route 
                template: 'Error 404 page not found,', //do this or template to display
                // this is one example of how to handle redirect when incorrect or unknown link is put in url

            })
            .otherwise({ //show route 
                template: 'Error 404 page not found,', //do this or template to display
                // this is one example of how to handle redirect when incorrect or unknown link is put in url

            }) // use this route when no others are a match
    }
]);
