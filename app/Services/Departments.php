use App\Department;

class Departments 
{

$departments = Departments::get();
$departmentsArray[""] = 'Seleccionar un Depto';

foreach ($departments as $department) {

    $departmentsArray[$department->id] = $department->namedepto;
}
    return $departmentsArray;
}