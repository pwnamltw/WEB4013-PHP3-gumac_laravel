<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
  </head>

  <body ng-app="myApp" ng-controller="myCtrl">
       
        @include('partials.header')  
        <main ng-controller="viewCtrl">
          @yield('content')
        </main>
        @include('partials.footer')  
  </body>
  <script src="http://127.0.0.1:8000/js/index.js"></script>
  <script src="http://127.0.0.1:8000/js/angular.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
  <script
    src="https://kit.fontawesome.com/1b1f131f0a.js"
    crossorigin="anonymous"
  ></script>
  
  <script>
     var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {
  
   
    $scope.cart = {!! json_encode(session('cart')) !!} || [];
  
    $scope.addToCart = function(product_id, soluong) {
        $http.post('/api/cart', {
            product_id: product_id,
            soluong: soluong,
        }).then(function(res) {
            $scope.cart = res.data.data;
        });
    };
    $scope.totalCart = function() {
        var totalCart = 0;
        $scope.cart.forEach(item => {
            totalCart += item.soluong * item.price;
        });
        return totalCart;
    };
    // Function to calculate total
    $scope.total = function() {
        var total = 0;
        $scope.cart.forEach(item => {
            total += item.sale != null ? item.soluong * item.sale : item.soluong * item.price;
        });
        return total;
    };
    // Function to calculate sale
    $scope.sale = function() {
        var sale = 0;
        $scope.cart.forEach(item => {
            sale += item.sale != null ? (item.price * item.soluong) - (item.sale * item.soluong) : 0;
        });
        return sale;
    };
    $scope.removeCart= function(index){
      $http.delete('/api/cart/'+index).then(function(res){
        $scope.cart=res.data.data;
      });
    };
});
    var viewFunction = function($scope){}
  </script>
  @yield('viewFunction')
  <script>
    app.controller('viewCtrl', viewFunction);
  </script>
</html>
