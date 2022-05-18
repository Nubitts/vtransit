    angular.module("hr", [])
      .controller("hrController", ["$scope", "$http", function($scope, $http) {


        $scope.init = function() {

          $('#progressbar1').LineProgressbar({
            percentage: 10,
            animation: true
          });

          $http.post("./sourced.php", angular.toJson($scope.hr1))
            .then(function(respuesta) {

              $datos = respuesta.data;

              $('#progressbar1').LineProgressbar({
                percentage: 20,
                animation: true
              });              

              $scope.hr1.global = $datos[0]['global'];
              $scope.hr1.corralon = $datos[0]['corralon'];
              $scope.hr1.batey = $datos[0]['batey'];
              $scope.hr1.transito = $datos[0]['transito'];

            

              $http.post("./sourcera.php", angular.toJson($scope.hr1))
              .then(function(respa) {

                $datosa = respa.data;
                
                $scope.hr1.yarda = $datosa[0]['corralon'];
                $scope.hr1.bateya = $datosa[0]['batey'];
                $scope.hr1.transita = $datosa[0]['transito'];

                $('#progressbar1').LineProgressbar({
                  percentage: 40,
                  animation: true
                });                  

              });        
            
              $http.post("./sourcerab.php", angular.toJson($scope.hr1))
              .then(function(respb) {

                $datosb = respb.data;

                $scope.hr1.tgrua = $datosb[0]['tgrua'];
                $scope.hr1.tplat = $datosb[0]['tplat'];
                $scope.hr1.thilo = $datosb[0]['thilo'];

                $scope.hr1.ugrua = $datosb[0]['ugrua'];
                $scope.hr1.uplat = $datosb[0]['uplat'];
                $scope.hr1.uhilo = $datosb[0]['uhilo'];

                $('#progressbar1').LineProgressbar({
                  percentage: 60,
                  animation: true
                });                    

              });
             

              $http.post("./sourcerac.php", angular.toJson($scope.hr1))
              .then(function(respc) {

                $datosc = respc.data;

                $scope.hr1.tbgrua = $datosc[0]['btgrua'];
                $scope.hr1.tbplat = $datosc[0]['btplat'];
                $scope.hr1.tbhilo = $datosc[0]['bthilo'];

                $scope.hr1.ubgrua = $datosc[0]['bugrua'];
                $scope.hr1.ubplat = $datosc[0]['buplat'];
                $scope.hr1.ubhilo = $datosc[0]['buhilo'];

                $('#progressbar1').LineProgressbar({
                  percentage: 80,
                  animation: true
                });                 

              });    
            
              
              $http.post("./sourcerfc.php", angular.toJson($scope.hr1))
              .then(function(respd) {

                $datosd = respd.data;

                $scope.hr1.ttgrua = $datosd[0]['ttgrua'];
                $scope.hr1.ttplat = $datosd[0]['ttplat'];
                $scope.hr1.tthilo = $datosd[0]['tthilo'];

                $scope.hr1.tugrua = $datosd[0]['tugrua'];
                $scope.hr1.tuplat = $datosd[0]['tuplat'];
                $scope.hr1.tuhilo = $datosd[0]['tuhilo'];

                $('#progressbar1').LineProgressbar({
                  percentage: 100,
                  animation: true
                });        
                
                $('#progressbar1').hide();

              });                   



            }); 
          
        };

      }]);

