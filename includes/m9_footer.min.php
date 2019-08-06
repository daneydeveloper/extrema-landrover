<?php 

/**
 * =======================================================================
 * Como utilizar?
 * Classes: Todas as classes criadas devem iniciar-se com .m9-
 * Cores: Evite utilizar cores fora do Contexto do Cliente
 * Textos: Evite utilizar Texto sem um Apelo forte para Ação, o tamanho máximo indicado do texto para
 *  ação é de 21 Caracters
 * Variaveis: Utilize as Váriaveis do PHP para os textos, pois assim ficará mais fácil de alterar 
 * Estilos: Não altere o Estilo original, apenas sobrescreva o mesmo com outras classes
 * Media Queries: Não altere os Media Queries Originais, sobrescreva os mesmos com novos
*/

/*Texto dos Botões em Sequencia*/
$config['btn_1_text'] = "Fale Agora Mesmo";
$config['btn_2_text'] = "Agendar Test Drive";
$config['btn_3_text'] = "Simular Financiamento";
$config['btn_4_text'] = "Oficina e Revisão";

/*Icones*/
$config['icon_1_text'] = "whatsapp";
$config['icon_2_text'] = "calendar";
$config['icon_3_text'] = "car";
$config['icon_4_text'] = "cogs";

/*Angular Defina as Ações do ng-click*/
$config['ng_click_1'] = "openForm('form', null, true)";
$config['ng_click_2'] = "openForm('form2', null)";
$config['ng_click_3'] = "openForm('form3', null)";
$config['ng_click_4'] = "openForm('form4', null)";

?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  body{
    margin:0;
    background-color:transparent
  }
  .m9-footer{
      font-family:Oswald,sans-serif!important;
      display:table;
      background-color:transparent!important;
      position:fixed;
      margin-bottom:0;
      z-index:99999;
      width:100%;
      bottom:0;
      -moz-box-sizing:border-box;
      -webkit-box-sizing:border-box;
      box-sizing:border-box;
      padding:0
  }
  .text-white{
      color:#FFF!important
  }
  .m9-footer-child{
      width:25%;
      display:table-cell;
      padding:0
  }
  .m9-btn{
      width:100%;
      line-height:24px!important;
      font-size:18px!important;
      color:#fff;
      opacity:.99;
      padding:12px!important;
      text-transform:initial;
      text-decoration:none;
      -moz-box-sizing:border-box;
      -webkit-box-sizing:border-box;
      box-sizing:border-box!important;
      border:2px solid transparent!important;
      border-bottom:4px solid transparent!important;
      display:block;
      text-align:center
  }
  .m9-whatsapp{
      border-bottom-color:#6e954b!important;
      background-color:#7ebb48!important
  }
  .m9-teste-drive {
    border-bottom-color: #0d4678 !important;
    background-color: #1e88e5 !important;
  }
  .m9-financiamento {
    border-bottom-color: #0dc15b!important;
    background-color: #0c7037!important;
  }
  .m9-oficina{
    border-bottom-color:#8d8787!important;
    background-color:#212121!important
  }
  @media only screen and (min-device-width :768px) and (max-device-width :1024px){
      .m9-btn{
          min-height:80px!important;
          max-height:80px!important
      }
      .m9-label{
          font-size:19px;
          margin-left:6px;
          display:table;
          line-height:26px
      }
      .m9-fa-size{
          font-size:26px
      }
  }
  @media only screen and (min-device-width :768px) and (max-device-width :1024px) and (orientation :landscape){
      .m9-btn{
          min-height:80px;
          max-height:80px
      }
      .m9-label{
          font-size:19px;
          margin-left:6px;
          display:table;
          line-height:26px
      }
      .m9-fa-size{
          font-size:26px
      }
  }
  @media only screen and (min-device-width :768px) and (max-device-width :1024px) and (orientation :portrait){
      .m9-btn{
          min-height:80px;
          max-height:80px
      }
      .m9-label{
          font-size:19px;
          margin-left:6px;
          display:table;
          line-height:26px
      }
      .m9-fa-size{
          font-size:26px
      }
  }
  @media only screen and (min-device-width :320px) and (max-device-width :568px){
      .m9-fa-size{
          font-size:16px
      }
      .m9-btn{
          min-height:80px;
          max-height:80px
      }
      .m9-label{
          font-size:11px;
          display:table;
          line-height:15px
      }
  }
  @media only screen and (min-device-width :320px) and (max-device-width :568px) and (orientation :landscape){
      .m9-fa-size{
          font-size:20px
      }
      .m9-btn{
          min-height:80px;
          max-height:80px
      }
      .m9-label{
          font-size:12px;
          display:table;
          line-height:15px;
          margin-left:4px
      }
  }
  @media only screen and (min-device-width :320px) and (max-device-width :568px) and (orientation :portrait){
      .m9-fa-size{
          font-size:16px
      }
      .m9-btn{
          min-height:80px;
          max-height:80px
      }
      .m9-label{
          font-size:11px;
          display:table;
          line-height:15px
      }
  }
   .white{
      color: white;
       font-weight: bold;
  }
</style>
<body>
  <nav class="m9-footer">
    <div class="m9-footer-child">
      <a class="m9-btn m9-whatsapp text-white" ng-click="<?=$config['ng_click_1']?>" href="#" ><label class="m9-label"><?=$config['btn_1_text']?> <i class="fa fa-<?=$config['icon_1_text']?> m9-fa-size"></i></label></a>
    </div>
    <div class="m9-footer-child">
      <a class="m9-btn m9-teste-drive text-white" ng-click="<?=$config['ng_click_2']?>" href="#" ><label class="m9-label"><?=$config['btn_2_text']?> <i class="fa fa-<?=$config['icon_2_text']?> m9-fa-size"></i></label></a>
    </div>
    <div class="m9-footer-child">
      <a class="m9-btn m9-financiamento text-white" ng-click="<?=$config['ng_click_3']?>" href="#" ><label class="m9-label"><?=$config['btn_3_text']?> <i class="fa fa-<?=$config['icon_3_text']?> m9-fa-size"></i></label></a>
    </div>
    <div class="m9-footer-child">
      <a class="m9-btn m9-oficina text-white" href="#" ng-click="<?=$config['ng_click_4']?>" ><label class="m9-label"><?=$config['btn_4_text']?> <i class="fa fa-<?=$config['icon_4_text']?> m9-fa-size"></i></label> </a>
    </div>
  </nav>
</body>