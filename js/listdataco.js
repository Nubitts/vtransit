    angular.module("hr", [])
      .controller("hrController", ["$scope", "$http", function($scope, $http) {


        $scope.init = function(option) {

          $scope.hr1.option = option;

          $http.post("./sourcecod.php", angular.toJson($scope.hr1))
            .then(function(respuesta) {

              $scope.hr1.datad = respuesta.data;

              $http.post("./sourceldetgr.php", angular.toJson($scope.hr1))
              .then(function(respa) {

                $scope.hr1.datag = respa.data;
                
              });        
            
            }); 
          
        };

      }]);

