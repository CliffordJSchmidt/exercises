// this is where our module configuration will go
// load after myApp.module.js in index


angular.module('myApp').config(['$locationProvider', '$routeProvider',
    function config($locationProvider, $routeProvider) { // dependancy injection

        $locationProvider.hashPrefix('!');

        $routeProvider // all routes are added on the $routeProvider object  calling methods when( ,{})

            .when('/', { //show route 
                template: '<h1>The homepage</h1>', //do/say this.. or use template to display

            })
            .when('/contact', { //show route 
                template: '<h1>The contact page</h1>', //do/say this..or template to display

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







/*  exmaples 
angular.module('myApp').config(['$locationProvider', '$routeProvider',
    function config($locationProvider, $routeProvider) { // dependancy injection

        $locationProvider.hashPrefix('!');

        $routeProvider. // all routes are added on the $routeProvider object  calling methods when( ,{})
        when('/', { //show route 
                template: '<h1>The homepage</h1>', //do this.. template to display
                controller: 'homepageController' // this is the controller of the template
            }). // :id  is a second argument 
        when('/product/:id', {
            template: '<product-detail></product-detail>' // can use angular directives - this is preferred. use a component to display content of a page 
        }).
        when('/error404', {
            templateUrl: 'error404.html' // what is displayed when no routes match  
        }).
        otherwise('/error404'); // use this route when no others are a match
    }
]);
*/