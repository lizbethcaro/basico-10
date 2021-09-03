var app = angular.module( "appdeimi", [] );

app.controller( "controlador", 

    [ "$scope", "$http", //inyeccion de dependecias.

        function( $scope, $http ){ //----------MAXIMA, no se deba tocar-----------------

            $scope.cargar_datos = function()
            {
                //console.log($scope.mitexto);

                var lin = 'datos_personas.php?texto=' + $scope.mitexto;
                console.log(lin);  
                $http.get( lin ).then( //-----------datos--------
                    
                
                    function( response )
                    {
                        console.log(lin); 
                       // console.log('datos.php?mivalor=' + $scope.mitexto + "&in=1&fn=10");
                        $scope.informacion = response.data;
                        //$scope.res = ( $scope.num4 ) + ( $scope.num5 );
                        //console.log( $scope.informacion);
                        //console.log($scope.$salida);
                    }
                    
                   
                );//--------fin datos---
            }

            // $scope.multi = function()
            // {
            //     $scope.res = ( $scope.num4 ) * ( $scope.num5 );
            // };

           
        }//-----------FIN del MAXIMA-------------------
    ]
    
);
