starter.controller('fechaCtrl', function($scope,$stateParams){
	$scope.documento = $stateParams.documento;
	$scope.horad = $stateParams.horad;
	$scope.horah = $stateParams.horah;
	$scope.trab = $stateParams.trab;
	$scope.fecha = $stateParams.fecha;
});