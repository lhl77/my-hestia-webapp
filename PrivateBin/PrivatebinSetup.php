<?php

namespace Hestia\WebApp\Installers\Privatebin;

use Hestia\System\Util;
use Hestia\WebApp\Installers\BaseSetup as BaseSetup;

class PrivatebinSetup extends BaseSetup {
    protected $appInfo = [
        "name" => "Privatebin",
        "group" => "util",
        "enabled" => true,
        "version" => "2.0.0",
        "thumbnail" => "privatebin-thumb.png",
    ];

    protected $appname = "privatebin";
    protected $config = [
        "form" => [
            "install_directory" => ["type" => "text", "value" => "", "placeholder" => "/"],
        ],
        "database" => false,
        "resources" => [
            "typecho" => ["src" => "https://github.com/PrivateBin/PrivateBin/archive/refs/tags/2.0.0.zip"],
        ],
        "server" => [
            "apache" => [
                "template" => "privatebin",
            ],
            "php" => [
                "supported" => ["7.4", "8.0", "8.1", "8.2", "8.3"],
            ],
        ],
    ];

    public function install(array $options = null) {
        parent::setAppDirInstall($options["install_directory"]);
        parent::install($options);
        parent::setup($options);
        return true;
        

    }


    
}
