(function() {
var scriptNames = [
    "http://cdn.marketingmidia9.com.br/js/angular.min.js",
    "http://cdn.marketingmidia9.com.br/js/ngMask.min.js",
    "http://cdn.marketingmidia9.com.br/js/ngDialog.min.js",
    "http://cdn.marketingmidia9.com.br/js/sweetalert.min.js",
    "http://cdn.marketingmidia9.com.br/js/angular-block-ui.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
];
var cssNames = [
    'http://cdn.marketingmidia9.com.br/css/sweetalert2.css',
    'http://cdn.marketingmidia9.com.br/css/ngDialog.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css',
    'http://cdn.marketingmidia9.com.br/css/angular-block-ui.css'
];
for (var i = 0; i < cssNames.length; i++) {
    var link_tag = document.createElement("link");
    link_tag.setAttribute("rel", "stylesheet"), link_tag.setAttribute("type", "text/css"), link_tag.setAttribute("href", cssNames[i]), document.head.appendChild(link_tag)
}
for (i = 0; i < scriptNames.length; i++) {
    var script = document.createElement("script");
    script.src = scriptNames[i], script.async = !1, document.head.appendChild(script)
}
})();

window.onload = function() {
angular.module('app', ['ngDialog', 'ngMask', 'blockUI'])
    .factory('swa', function(msg = null, url = !1) {
        var _success = function(msg = null, url = !1) {
            swal({
                title: "Pronto!",
                text: msg,
                type: "success",
            }, function() {
                if (url != !1) {
                    window.location.replace(url)
                } else {
                    swal.close()
                }
            })
        };
        var _error = function(msg = null) {
            swal({
                title: "Ops!",
                text: msg,
                type: "error",
            }, function() {})
        }
        return {
            success: _success,
            error: _error
        }
    })
    .controller('Lead', function($scope, $log, $http, swa, $httpParamSerializerJQLike, blockUI) {
        $log.info('Load -> Integração CRM v1.2');

        /*Variaveis de Ambiente*/
        var debug = true;
        var registra_acesso = false;
        var path = 'http://crm2.marketingmidia9.com.br/';
        var token_debug = "F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8";
        var token = "ukduRVtNaRW-E0XEAerpk7GRTe3dPtG8XfGxSkwFoAA";
        var link_redirect = false;

        /*Registrando Acesso*/
        $http.get(path + 'api2/registra_acesso/' + token)
            .success(function(retorno) {
                if (retorno.result == true) {
                    registra_acesso = true;
                    if (debug) {
                        $log.info(retorno.msg);
                        toastr.success(retorno.msg);
                    }
                } else {
                    toastr.error(retorno.msg);
                }
            })
            .error(function(retorno) {
                if (debug) {
                    $log.error(retorno);
                    toastr.error('Ocoreu um erro ao Processar sua requisição, olhe o console para mais informações');
                }
            })

        /*Enviando Lead*/
        $scope.enviarLead = function(dados, temp = null) {
            if (dados) {
                if (registra_acesso) {
                    if (debug == true) {
                        dados.EMP_Key = token_debug;
                    } else {
                        dados.EMP_Key = token;
                    }

                    if (debug == true) {
                        $log.info('Dados Formulario ->', dados);
                    }
                    blockUI.start('Enviando informações...');
                    $http({
                            method: 'POST',
                            url: path + '/api2/registraLead',
                            data: $httpParamSerializerJQLike(dados),
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            }
                        })
                        .success(function(retorno) {
                            blockUI.stop();
                            if (!retorno.error) {
                                swa.success('suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve', link_redirect);
                            } else {
                                swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
                            }
                        })
                        .error(function(retorno) {
                            if (debug) {
                                toastr.error('Ocorreu um problema ao conectar-se com o Servidor do CRM, olhe o console para mais informações');
                                $log.error(retorno);
                            }
                        })

                } else {
                    toastr.error('Você não está Sincronizado com o CRM');
                }
            } else {
                toastr.error('Dados do Formulario não informados');
            }
        }
    });
}