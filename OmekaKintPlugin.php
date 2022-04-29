<?php


class OmekaKintPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('initialize');

    function hookInitialize()
    {
        require 'kint.phar';
        Kint\Renderer\RichRenderer::$theme = 'solarized.css'; 
        Kint\Renderer\RichRenderer::$folder = true;
    }

}   