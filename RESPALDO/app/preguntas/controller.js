app.controller('preguntasCtrl', function($scope, $http){
   $scope.showCreateForm = function(){
       $scope.clearForm();
       
       $('#modal-product-title').text("Crear nuevo cuestionario");
       $('#btn-upfate-product').hide();
       $('#btn-create-product').hide();
   };
   $scope.clearForm = function(){
       $scope.id = "";
       $scope.id_empresa = "";
       $scope.certificacion = "";
       $scope.etapa = "";
       $scope.verificacion = "";
       $scope.evaluacion = "";
       $scope.r_positiva = "";
       $scope.r_negativa = "";
       $scope.si = "";
       $scope.no = "";
       $scope.calificacion = "";
   };
});