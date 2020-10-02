<?php 
    $host = "localhost";
    $name = "root";
    $pass = "1";
    $db = "test";
    
    $connect = mysqli_connect($host, $name, $pass, $db);
    if(!$connect){
        echo "Database Connected Error !.".$connect;
    }

    if(!empty($_POST)){
        $name = $_POST['name'];
        $study = $_POST['study'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $pass = $_POST['pass'];
        
        $sql = "INSERT INTO student_form (Name, Study, Mobile, Email, Gender, Pass)
        VALUES ('$name', '$study', '$mobile', '$email', '$gender', '$pass')";
        if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }

        mysqli_close($connect);
    }
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel ="stylesheet" href ="reg.css">
        
    </head>
    <body>
        <div class ="mainsection">
            <h2 class ="header">Welcome To Registration Form</h2>

            <div class ="box">
                <center><img src ="reg_icon.png" name ="image" type="url" id ="form1" ></center>

                <form action="" name="myform" method="POST" onsubmit="return validateForm()">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" id="fv" placeholder="Plese enter your name."/></td>
                        </tr>

                        <tr>
                            <td>Study Class</td>
                            <td><input type="text" name="study" id="fv" placeholder="Plese enter your class name."/></td>
                        </tr>

                        <tr>
                            <td>Mobile Number</td>
                            <td><input type="tel" name="mobile" id="fv" placeholder="Plese enter your mobile number."/></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="fv" placeholder="Plese enter email."/></td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td>
                                <input type="radio"  name="gender" id="gen" value="mail">Mail</input>
                                <input type="radio"  name="gender" id="gen" value="femail">Femail</input>
                            </td>
                        </tr>

                        <tr>
                            <td>Pass Word</td>
                            <td><input type="password" name="pass" id="fv" placeholder="Plese enter your pass word."/></td>
                        </tr>

                        <tr>
                            <td>Confirm Pass Word</td>
                            <td><input type="password" name="cpass" id="fv" placeholder="Plese enter your confirm pass word."/></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" id="button" value="Submit"/>
                                <input type="reset" name="reset" id="button" value="Refresh"/>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div id="state"></div>
                            </td>
                        </tr>

                    </table>
                </form>
               
                <script type="text/javaScript">
                    function validateForm(){
                        var name    = document.myform.name;
                        var study   = document.myform.study;
                        var mobile  = document.myform.mobile;
                        var email   = document.myform.email;
                        var gender  = document.myform.gender;
                        var pass    = document.myform.pass;
                        var cpass   = document.myform.cpass;
                    
                        if(name.value.trim() == ""){
                            document.getElementById("state").innerHTML = "Plese enter your name.";
                            return false;
                        }  

                        if(study.value.trim() == ""){
                            document.getElementById("state").innerHTML = "Plese enter your class name.";
                            return false;
                        }  

                        if(mobile.value.trim() == ""){
                            document.getElementById("state").innerHTML = "Plese enter your mobile number.";
                            return false;
                        } 

                        
                        if(email.value == ""){
                            document.getElementById("state").innerHTML = "Plese enter your e-mail.";
                            return false;
                        } 
                        
                        if(email.value.indexOf("@", 0)<0){
                            document.getElementById("state").innerHTML = "Plese enter your vaild e-mail address.";
                            return false;
                        }  

                        if(email.value.indexOf(".", 0)<0){
                            document.getElementById("state").innerHTML = "Plese enter your vaild e-mail address.";
                            return false;
                        } 

                        if(gender.value == ""){
                            document.getElementById("state").innerHTML = "Plese selecked your gender.";
                            return false;
                        }

                        if(pass.value.trim() == ""){
                            document.getElementById("state").innerHTML = "Plese enter your pass word.";
                            return false;
                        }else if(pass.value.trim().length<5){
                            document.getElementById("state").innerHTML = "Your pass word short.";
                            return false;
                        }else{
                            true;
                        }  

                        if(cpass.value.trim() == ""){
                            document.getElementById("state").innerHTML = "Plese enter your confirm same password.";
                            return false;
                        }else if(cpass.value.trim().length<5){
                            document.getElementById("state").innerHTML = "Your confirm password short.Plese enter your confirm same password.";
                            return false;
                        }else{
                            true;
                        }
                    }

                </script>
              
            </div>
        </div>
    </body>
</html>