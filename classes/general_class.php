<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	/**
	*Query the Database
	*@param takes a contact name and number
	*@return boolean
	**/
	function addContact($cname, $tel_number) {
		$sql = "INSERT INTO phonebook(pname, pphoned)
		VALUES ('$cname', '$tel_number')";
		return $this->run_query($sql);
	}

	//--SELECT--//
	//SELECT ONE
	function selectOneContact($id) {
		$sql = "SELECT * FROM phonebook
		WHERE pid = '$id";
		return $this->run_query($sql);
	}

	//SELECT ALL
	function selectContacts() {
		$sql = "SELECT * from phonebook";
		return $this->run_query($sql);
	}

	//--UPDATE--//
	function updateContact($id, $cname, $tel_number) {
		$sql = "UPDATE phonebook SET pname = '$cname', pphoned = '$tel_number'
		WHERE pid = '$id'";
		return $this->run_query($sql);
	}

	//--DELETE--//
	function removeContact($id) {
		$sql = "DELETE FROM phonebook WHERE pid = '$id'";
		return $this->run_query($sql);
	}
}

?>