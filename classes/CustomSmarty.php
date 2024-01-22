<?php

require 'vendor/autoload.php';

class CustomSmarty extends Smarty {
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('../layouts');
        $this->setCompileDir('../templates_c');
        $this->setPluginsDir('../plugins_c');
        $this->setCacheDir('../cache_c');

        $this->debugging = false;
        $this->caching = false;
        $this->cache_lifetime = 120;

        $this->assign('app_name', 'Banking System');
    }
}
