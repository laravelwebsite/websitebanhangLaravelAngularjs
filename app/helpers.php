<?php 
use App\Role;
function getNameRole($id)
{
	$id=(int)$id;
	$role=Role::find($id);
	$name=$role->name;
	return $name;
}	

?>