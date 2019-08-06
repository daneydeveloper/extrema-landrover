angular.module('app', ['ngMask', 'ngDialog'])
  .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
     $scope.enviarwpp = false;
     $scope.load = false;
     $scope.load1 = false;
     $scope.dados = {};
     var host = 'http://crm2.marketingmidia9.com.br'
     var registra_acesso = function() {
         $http.get(host + '/api/registraAcesso/ukduRVtNaRW-E0XEAerpk7GRTe3dPtG8XfGxSkwFoAA')
         .success(function(result){
             $log.info(result);
             $scope.request = result.data;
         });
     }

     $scope.enviarLead = function(dados, tmp = null) {
          $scope.load = true;
          // dados.EMP_Key = $scope.request.EMP_Key;
          dados.EMP_Key = 'ukduRVtNaRW-E0XEAerpk7GRTe3dPtG8XfGxSkwFoAA';
          $log.info(dados);

          $http({
             method: 'POST',
             url: host + '/api2/registraLead',
             data:  $httpParamSerializerJQLike(dados),
             headers: {
               'Content-Type': 'application/x-www-form-urlencoded'
             }
           })
          .success(function(retorno){
             $scope.load = false;
             if (!retorno.error) {
               swal({
                 title: "Obrigado!",
                 text: "suas informações foram enviadas com sucesso, um de nossos consultores irá lhe contactar em breve",
                 type: "success",
                 confirmButtonColor: "#DD6B55",
                 confirmButtonText: "Ok",
                 closeOnConfirm: false
               },
               function(){
                  $log.info($scope.enviarwpp);
                if ($scope.enviarwpp == true) {
                  window.location.href = "https://api.whatsapp.com/send?phone=558587670229&text=Olá, me chamo  "+dados.LE_Nome+"   e gostaria de receber mais informações sobre os modelos da Orion Kia.";
                }
                else {
                  window.location.href = "";
                }
               });
             }
             else {
               swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
             }
           })
           .error(function(retorno){
             $scope.load = false;
             $log.error(retorno);
           });
       }

     $scope.openForm = function(template, tipo, whatsapp) {
       $scope.enviarwpp = whatsapp;
       $scope.dados.LE_CodigoTipo = tipo;
       ngDialog.openConfirm({
         template:template,
         scope: $scope,
         showClose: false,
         closeByDocument: true,
         closeByEscape: true
       });
     }
     registra_acesso();
    });