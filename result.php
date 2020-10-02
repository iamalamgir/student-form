<?php 

$host = "localhost";
    $name = "root";
    $pass = "1";
    $db = "test";
    
    $connect = mysqli_connect($host, $name, $pass, $db);
    if(!$connect){
        echo "Database Connected Error !.".$connect;
    }

    $sql = "SELECT ID, Name, Study, Mobile, Email, Gender FROM student_form";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Study"]. " ". $row["Mobile"]. " " .
            $row["Email"]. " " . $row["Gender"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($connect);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>
        <link rel ="stylesheet" href ="reg.css">
        
        <script type="text/javaScript">
        
        </script>
    </head>
    <body>
        
        <div class ="mainsection">
            <h2 class ="header">Application Preview</h2>
            <table>
                <br>
                <tr>
                    <td>Name : </td>
                    <td><span id ="showName"></span></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><span id ="showEmail"></span></td>
                </tr>
                <tr>
                    <td>PassWord : </td>
                    <td><span id ="showPass"></span></td>
                </tr>
                <tr>
                    <td>Confirm PassWord : </td>
                    <td><span id ="showCpass"></span></td>
                </tr>
            </table>
        </div>
       
    </body>
</html>