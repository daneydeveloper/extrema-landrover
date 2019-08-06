<!-- mascara.js -->
<script type="text/javascript" src="assets/js/mascara.js"></script> 
<!-- WhatsApp -->
<script type="text/ng-template " id="form">
    <div class="py-2 col-lg-12 ">
       <div class="card px-3 py-4 ">
          <form name="wpp" class="form-popup">
             <input type="hidden" ng-init="dados3.LE_Origem='<?=$origem?>'">
             <input type="hidden" ng-init="dados3.LE_CodigoTipo ='9997'">
             <input type="hidden" ng-init="dados3.LE_CodigoProduto='925'">
             <span class="deleteMeetingClose" ng-click="closeThisDialog() ">&times;</span>
             <h3 class="mb-4 form-title text-center" style="font-size:19px; ">Antes de iniciar a conversa, deixe seus dados para validação.</h3>
                <div class="form-group">
                    <input ng-model="dados3.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" name="nome" placeholder="Digite seu nome:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Email" ng-disabled="load" ng-required="true" class="form-control" name="email" placeholder="Digite seu email:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" name="telefone" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
                </div>
                <div class="form-group">
                    <button ng-click="enviarLead(dados3)" ng-disabled="wpp.$invalid || load" class="btn btn-m9">
                            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                            <b ng-if="!load ">ENVIAR</b>
                    </button>
                </div>
          </form>
       </div>
    </div>
</script>
<!-- Teste Drive -->
<script type="text/ng-template " id="form2">
    <div class="py-2 col-lg-12 ">
       <div class="card px-3 py-4 ">
          <form name="testdrive" class="form-popup">
             <input type="hidden" ng-init="dados3.LE_Origem='<?=$origem?>'">
             <input type="hidden" ng-init="dados3.LE_CodigoTipo ='9992'">
             <span class="deleteMeetingClose" ng-click="closeThisDialog() ">&times;</span>
             <h3 class="mb-4 form-title text-center" style="font-size:19px; ">Preencha o formulário e faça seu pré-agendamento.</h3>
                <div class="form-group">
                    <input ng-model="dados3.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" name="nome" placeholder="Digite seu nome:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Email" ng-disabled="load" ng-required="true" class="form-control" name="email" placeholder="Digite seu email:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" name="telefone" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
                </div>
                <div class="form-group">
                    <select class="form-control" ng-model="dados3.LE_CodigoProduto" ng-disabled="load" ng-required="true" >
                        <option value="" disabled="true">Modelo:</option>
                        <option value="236">Range Rover</option>
                        <option value="238">Range Rover Sport</option>
                        <option value="235">Range Rover Evoque</option>
                        <option value="642">Range Rover Velar</option>
                        <option value="237">Discovery</option>
                        <option value="491">Discovery Sport</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea ng-model="dados3.LE_Descricao" ng-disabled="load" ng-required="false" class="form-control" placeholder="Como podemos ajudar?"></textarea>
                </div>
                <div class="form-group">
                    <button ng-click="enviarLead(dados3)" ng-disabled="testdrive.$invalid || load" class="btn btn-m9">
                            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                            <b ng-if="!load ">ENVIAR</b>
                    </button>
                </div>
          </form>
       </div>
    </div>
</script>
<!-- Simular Financiamento -->
<script type="text/ng-template " id="form3">
    <div class="py-2 col-lg-12 ">
       <div class="card px-3 py-4 ">
          <form name="financiamento" class="form-popup">
             <input type="hidden" ng-init="dados3.LE_Origem='<?=$origem?>'">
             <input type="hidden" ng-init="dados3.LE_CodigoTipo ='9999'">
             <span class="deleteMeetingClose" ng-click="closeThisDialog() ">&times;</span>
             <h3 class="mb-4 form-title text-center" style="font-size:19px; ">Preencha o formulário e simule seu financiamento.</h3>
                <div class="form-group">
                    <input ng-model="dados3.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" name="nome" placeholder="Digite seu nome:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Email" ng-disabled="load" ng-required="true" class="form-control" name="email" placeholder="Digite seu email:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" name="telefone" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Entrada" ng-disabled="load" ng-required="true" class="form-control" name="email" placeholder="Digite sua entrada:" name="operando2" value="" size="12" onKeyUp="maskIt(this,event,'###.###.###,##',true)">
                </div>
                <div class="form-group">
                    <select class="form-control" ng-model="dados3.LE_Parcelas" ng-disabled="load" ng-required="true" >
                        <option value="" >Parcelas:</option>
                        <option value="12x">12x</option>
                        <option value="24x">24x</option>
                        <option value="36x">36x</option>
                        <option value="48x">48x</option>
                        <option value="60x">60x</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" ng-model="dados3.LE_CodigoProduto" ng-disabled="load" ng-required="true" >
                        <option value="" disabled="true">Modelo:</option>
                        <option value="236">Range Rover</option>
                        <option value="238">Range Rover Sport</option>
                        <option value="235">Range Rover Evoque</option>
                        <option value="642">Range Rover Velar</option>
                        <option value="237">Discovery</option>
                        <option value="491">Discovery Sport</option>
                    </select>
                </div>
                <div class="form-group">
                    <button ng-click="enviarLead(dados3)" ng-disabled="financiamento.$invalid || load" class="btn btn-m9">
                            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                            <b ng-if="!load ">ENVIAR</b>
                    </button>
                </div>
          </form>
       </div>
    </div>
</script>
<!-- Oficina e Revisao -->
<script type="text/ng-template " id="form4">
    <div class="py-2 col-lg-12 ">
       <div class="card px-3 py-4 ">
          <form name="offerevisao" class="form-popup">
             <input type="hidden" ng-init="dados3.LE_Origem='<?=$origem?>'">
             <input type="hidden" ng-init="dados3.LE_CodigoTipo ='9995'">
             <input type="hidden" ng-init="dados3.LE_CodigoProduto='926'">
             <span class="deleteMeetingClose" ng-click="closeThisDialog() ">&times;</span>
             <h3 class="mb-4 form-title text-center" style="font-size:19px; ">Preencha o formulário para que nossa equipe de pós-venda entre em contato o mais breve possível.</h3>
                <div class="form-group">
                    <input ng-model="dados3.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" name="nome" placeholder="Digite seu nome:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Email" ng-disabled="load" ng-required="true" class="form-control" name="email" placeholder="Digite seu email:">
                </div>
                <div class="form-group">
                    <input ng-model="dados3.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" name="telefone" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
                </div>
                <div class="form-group">
                    <textarea ng-model="dados3.LE_Descricao" ng-disabled="load" ng-required="false" class="form-control" placeholder="Como podemos ajudar?"></textarea>
                </div>
                <div class="form-group">
                    <button ng-click="enviarLead(dados3)" ng-disabled="offerevisao.$invalid || load" class="btn btn-m9">
                            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                            <b ng-if="!load ">ENVIAR</b>
                    </button>
                </div>
          </form>
       </div>
    </div>
</script>