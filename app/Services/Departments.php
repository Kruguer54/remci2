<?php

namespace App\Services;

use App\Department;

class Departments 
{
    public function get()
    
    {
        $departments = Department::get();
        $departmentsArray[''] = 'Seleccionar un Depto';
        foreach ($departments as $department) {
        	$departmentsArray[$department->id] = $department->namedepto;
     	}
    	return $departmentsArray;
    }
}