<?php

namespace Yamobile\ThirdPartyCode\Components;

use Cms\Classes\ComponentBase;
use Yamobile\ThirdPartyCode\Models\Target;

class CodesComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Codes',
            'description' => 'Codes',
        ];
    }

    public function defineProperties()
    {
        return [
            'target' => [
                'title'       => 'Target',
                'description' => 'Target',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function get()
    {
        $targetName = $this->property('target');

        $target = Target::where('is_enabled', true)->where('value', $targetName)->first();
        if ($target) {
            $codes = $target->codes()->where('is_enabled', true)->get();

            return $codes;
        }

        return null;
    }
}
