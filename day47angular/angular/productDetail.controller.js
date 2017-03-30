
// controller 'productDetail'
module.controller('productDetail', function($scope, $http){ 

    var controller = this;


    // retrieve some data from the server
    $http.get('data.php').then(function(response){
        console.log(response.data);

        // put the data from the response from database into the view
        $scope.product_name = response.data.product_name;
        $scope.description = response.data.description;
        
    });
});