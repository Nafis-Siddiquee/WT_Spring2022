<?php
include ("../Model/model.php");

$ufnameErr = $ulnameErr = $ageErr = $designationErr = $preffered_LanguageErr = $uemailErr = $upassErr = $fileErr = $allempErr = "";
if(isset($_POST["submit"]))
{
    $ufname = $_POST["firstname"];
    $ulname = $_POST["lastname"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];

    $pl = " ";

    foreach ($_POST["language"] as $i)
    {
        $pl .= $i.", ";
    }

    
    $uemail = $_POST["email"];
    $upass = $_POST["password"];
    $file = "";
    $database = $_POST["database"];


    if(empty($ufname)||empty($ulname)||empty($age)||isset($_POST["radio"])||empty($uemail)||empty($upass))
    {
        echo "No fields can be empty...";
    }
    else
    {
        if($_FILES["file"]["type"] == "text/plain" && $_FILES["file"]["size"] < 1024*1024*5) // 5 MB size
        {
            if(move_uploaded_file($_FILES["file"]["tmp_name"], "../Files/".$ufname.date("y-m-d").".txt"))
            {
                $file = $_FILES["file"]["name"];
            }
        }

        $mydb = new DB();
        $connObj = $mydb->openConn();
        $mydb->insertData($ufname, $ulname, $age, $designation, $pl, $uemail, $upass, $file, $database, $connObj);
        $mydb->closeConn($connObj);
    }
}
        
 
 ?>