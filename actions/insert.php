<?php
session_start();
require("../controllers/general_controller.php");

if (isset($_POST["btn_submit"])) {
    $contact = $_POST["cntct_name"];
    $telephone = $_POST["tel_num"];
    
    $response = addContact($contact, $telephone);
    if ($response) {
        $_SESSION["ins_response"] = "Contact saved successfully";
        header("location: ../view/form.php");
    }
    else {
        $_SESSION["ins_response"] = "Failed to save contact!";
        header("location: ../view/form.php");
    }
}

?>