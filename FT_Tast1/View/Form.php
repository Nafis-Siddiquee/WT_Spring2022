
<?php 

    $cookie_name = "user_detect"; 
    $cookie_value = "visited"; 
    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); 

?>



<html>
    
<body>
<h3> Ragistration Form</h3>
    
    <form action = "../Control/Submit.php" method = "Post" enctype = "multipart/form-data">
    <table> 
        <tr>
            <td> First Name : </td>
            <td><input type ="text" name = "firstname" > </td>
        </tr>
        <tr>
            <td>Last Name :</td>
            <td><input type = "text" name = "lastname"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type = "number" name = "age" min ="1" max ="100"></td>
        </tr>
        <tr>
            <td>Designation :</td>
            <td>
             <input type = "radio" name = "designation" value = "Junior Programmer"> Junior Programmer 
             <input type = "radio" name = "designation" value = "Senior Programmer"> Senior Programmer
             <input type = "radio" name = "designation" value = "Project Lead"> Project Leader
             <input type = "radio" name = "designation" value = "Project Co-ordinator"> Project Co-ordinator
            </td> 
        <tr>
            <td>Preffered Language :</td> 
            <td>
             <input type = "checkbox" name = "language[]" value = "Java"> Java
             <input type = "checkbox" name = "language[]" value = "PHP"> PHP
             <input type = "checkbox" name = "language[]" value = "C++"> C++
             <input type = "checkbox" name = "language[]" value = "Python"> Python
            </td> 
        </tr>
        <tr>
            <td>Eamil :</td> 
            <td><input type ="text" name = "email" ></td>  
        </tr>
        <tr>
            <td>Password :</td> 
            <td>
             <input type ="password" name = "password"  >
            </td> 
        </tr>
        <tr>  
            <td>Please choose a file :</td>  
            <td>
             <input type = "file" name = "file"> 
            </td> 
        </tr>
        <tr>
            <td>Database Name:</td>
            <td>
             <input type = "radio" name = "database" value = "person"> person 
             <input type = "radio" name = "database" value = "registration"> registration
            </td>
        </tr>
        <tr>
            <td>
             <input type = "submit" name = "submit"> 
            </td> 
            <td>
             <input type = "reset">
            </td> 
        </tr>
    </table>
 </from>
    </body>
</html>