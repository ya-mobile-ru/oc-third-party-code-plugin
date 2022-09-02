<?php

namespace Yamobile\ThirdPartyCode\Models;

use Model;

/**
 * Model
 */
class Targets extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_thirdpartycode_targets';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'is_enabled' => 'required',
        'value' => 'required',
    ];
}
