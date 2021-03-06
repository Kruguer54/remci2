<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
    	'department_id', 'brand_id', 'model', 'serial_number', 'type', 'physical_state'

    ];
}
