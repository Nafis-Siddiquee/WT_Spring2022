<?php

$uname=$pass= "";
if(isset($_POST["submit"]))
{
    $ufname = $_POST["firstname"];
    if(empty($ufname)||strlen($ufname)<5)
    {
        echo "please enter a valid firstname";
    }
    else 
    {
        echo "your first name is ".$ufname;
    }
    echo "<br>";

    $ulname = $_POST["lastname"];
    if(empty($ulname)||strlen($ulname)<5)
    {
        echo "please enter a valid lastname";
    }
    else 
    {
        echo "your last name is ".$ulname;
    }
    echo "<br>";

    $age = $_POST["age"];
    if (empty($age))
    {
        echo "please enter a valid age";
    }
    else 
    {
        echo "your age is ".$age;
    }

    echo "<br>";

    if (isset($_POST["radio"]))
    {
        echo "your designation is ".$_POST["radio"];
    }
    else
    {
        echo " you have not selected any radio button";
    }
    echo "<br>";

    if (isset($_POST["language1"])||isset($_POST["language2"])||isset($_POST["language3"]))
    {
        echo "you have selected ";
        if (isset($_POST["language1"]))
        {
            echo $_POST["language1"];
            echo ", ";
        }
        if (isset($_POST["language2"]))
        {
            echo $_POST["language2"];
            echo ", ";
        }
        if (isset($_POST["language3"]))
        {
            echo $_POST["language3"];
            echo ", ";
        }
        if (isset($_POST["language4"]))
        {
            echo $_POST["language4"];
            echo " ";
        }

    }
    else
    {
        echo "you have not selected any checkbox";
    }
    echo "<br>";

    $uemail = $_POST["email"];
    if(empty($uemail)||strlen($uemail)<5)
    {
        echo "please enter a valid email";

    }
    else 
    {
        echo "your email is ".$uemail;
    }
    echo "<br>";

    $upass = $_POST["password"];
    if(empty($upass)||strlen($upass)<5)
    {
        echo "please enter a valid password";

    }
    else 
    {
        echo "your password is successfully submitted";
    }
    echo "<br>";
}

?>