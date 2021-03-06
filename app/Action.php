<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
    	'serviceorder_id', 'technical_id', 'action_performed', 'date_time'

    ];
}
