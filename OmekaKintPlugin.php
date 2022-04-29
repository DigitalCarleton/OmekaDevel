<?php


class OmekaKintPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('initialize', 'admin_head');

    function hookInitialize()
    {
        require 'kint.phar';
        Kint\Renderer\RichRenderer::$theme = 'solarized.css'; 
        //Kint\Renderer\RichRenderer::$theme = '/views/admin/css/solarized.css';
        Kint\Renderer\RichRenderer::$tab_plugins;
    }

    public function hookAdminHead(){
        (new Omeka_Controller_Action_Helper_FlashMessenger)->addMessage("test");
        //queue_css_file('solarized');
    }


}   