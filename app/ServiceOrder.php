<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $fillable = [
    	'department_id', 'equipment_id', 'technical_id', 'date', 'failure', 'type'

    ];
}
