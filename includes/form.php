<div class="automobile-banner-tabs">
    <ul class="nav-tabs" role="tablist">
        <li class="radius"><a>SOLICITE COTAÇÃO</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active">
            <div class="automobile-banner-form">
                <form name="formbanner">
                    <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'">
                    <input type="hidden" ng-init="dados.LE_CodigoTipo ='2'">
                    <div class="form-group">
                        <input ng-model="dados.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" name="nome" placeholder="Digite seu nome:">
                    </div>
                    <div class="form-group">
                        <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" class="form-control" name="email" placeholder="Digite seu email:">
                    </div>
                    <div class="form-group">
                        <input ng-model="dados.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" name="telefone" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
                    </div>
                    <div class="form-group">
                        <select class="form-control" ng-model="dados.LE_CodigoProduto" ng-disabled="load" ng-required="true" >
                            <option value="" >Modelo:</option>
                            <option value="236">Range Rover</option>
                            <option value="238">Range Rover Sport</option>
                            <option value="235">Range Rover Evoque</option>
                            <option value="642">Range Rover Velar</option>
                            <option value="237">Discovery</option>
                            <option value="491">Discovery Sport</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea ng-model="dados.LE_Descricao" ng-disabled="load" ng-required="false" class="form-control" placeholder="Como podemos ajudar?"></textarea>
                    </div>
                    <div>
                        <button ng-click="enviarLead(dados)" ng-disabled="formbanner.$invalid || load" class="btn btn-m9">
                            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                            <b ng-if="!load ">ENVIAR</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>