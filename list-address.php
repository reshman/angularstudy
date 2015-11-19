<?php 
    $dbhandle = mysql_connect('localhost', 'root', 'root')
  or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("angulartest",$dbhandle)
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM contacts");
//fetch tha data from the database
$arr[]    = mysql_fetch_assoc($result);
echo json_encode($arr);die;

?>
