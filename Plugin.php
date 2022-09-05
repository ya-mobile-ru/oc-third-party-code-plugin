<?php

namespace Yamobile\ThirdPartyCode;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Yamobile\ThirdPartyCode\Components\Codes' => 'Codes',
        ];
    }

    public function registerSettings()
    {
    }
}
