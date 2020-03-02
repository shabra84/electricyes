<?php
  require_once(dirname(__FILE__).'../../../../config/config.inc.php');
  require_once(dirname(__FILE__).'../../../../init.php');
  class ElectoController extends ModuleFrontController
  {
      public function initContent()
      {
       $this->ajax = true;
        parent::initContent();
      }
      // displayAjax for FrontEnd Invoke the ajax action
      // ajaxProcess for BackEnd Invoke the ajax action

       public function displayAjaxMyControllerAction()
        {
         $var1 = Tools::getValue('var1');
         $var2 = Tools::getValue('var2');
         $var3 = Tools::getValue('var3');

         header('Content-Type: application/json');
         die(Tools::jsonEncode(['var1'=> $var3]);
        }
   }