starter.controller('TuHorarioCtrl', function($scope, $rootScope, $stateParams, $http) {
    
    $http.get($rootScope.ajaxURL+"horario2.php?dni="+$rootScope.dniDocente).success(function(data){
        $scope.horario=data;
    });
	   
});