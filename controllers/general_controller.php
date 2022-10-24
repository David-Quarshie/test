<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data




//--INSERT--//
function addContact($cname, $tel_number) {
    $crud = new general_class;
    $request = $crud->addContact($cname, $tel_number);

    if($request) 
        return true;
    else
        return false;
}

//--SELECT--//
//SELECT ONE
function selectOneContact($id) {
    $crud = new general_class;
    $request = $crud->selectOneContact($id);

    if($request){
        $posts = array();
        while($record = $crud->fetch()){
            $posts[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}

//SELECT ALL
function selectContacts() {
    $crud = new general_class;
    $request = $crud->selectContacts();

    if($request){
        $posts = array();
        while($record = $crud->fetch()){
            $posts[] = $record;
        }
        return $posts;
    }else{
        return false;
    }
}

//--UPDATE--//
function updateContact($id, $cname, $tel_number) {
    $crud = new general_class;
    $request = $crud->updateContact($id, $cname, $tel_number);

    if($request) 
        return true;
    else
        return false;
}

//--DELETE--//
function removeContact($id) {
    $crud = new general_class;
    $request = $crud->removeContact($id);

    if($request) 
        return true;
    else
        return false;
}

?>