<?php


class OmekaKintPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('initialize', 'admin_head');

    function hookInitialize()
    {
        require 'kint.phar';
        Kint\Renderer\RichRenderer::$theme = 'solarized.css'; 
        //Kint\Renderer\RichRenderer::$theme = '/mnt/c/MAMP/htdocs/omeka-3.0.1/plugins/OmekaKint/solarized.css';
    }

    public function hookAdminHead(){
        (new Omeka_Controller_Action_Helper_FlashMessenger)->addMessage("test");
    }


}   