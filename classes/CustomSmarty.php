<?php

require 'vendor/autoload.php';

class CustomSmarty extends Smarty {
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('/some/template/dir');
        $this->setConfigDir('/some/config/dir');
        $this->setCompileDir('/some/compile/dir');
        $this->setCacheDir('/some/cache/dir');

        $this->debugging = false;
        $this->caching = false;
        $this->cache_lifetime = 120;

        $this->assign('app_name', 'Banking System');
    }
}
