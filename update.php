
<?php

include 'db_connection.php';

if(isset($_GET['id']) && ctype_digit($_GET['id']))
{
    $id=$_GET['id'];
} else
{
    header('Location: select.php');
}

$name ='';
$password='';
$gender='';
$color='';

if(isset($_POST['submit'])) {
    $ok = true;

        if (!isset($_POST['name']) || $_POST['name'] === '') {
            $ok = false;
            error_log("There is something wrong!", 7);
        } else {
            error_log("There is something wrong!", 8);
            $name = $_POST['name'];
        };

        if (!isset($_POST['password']) || $_POST['password'] === '') {
            error_log("There is something wrong!", 9);
            $ok = false;
        } else {
            $password = $_POST['password'];
        };
        if (!isset($_POST['gender']) || $_POST['gender'] === '') {
            error_log("There is something wrong!", 10);
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        };
        if (!isset($_POST['color']) || $_POST['color'] === '') {
            error_log("There is something wrong!", 11);
            $ok = false;
        } else {
            $color = $_POST['color'];
        };



    if($ok) {
   $conn = OpenCon();

        $sql = sprintf(
         "UPDATE users SET name='%s', gender='%s', color='%s' WHERE id=%s",
            $conn ->real_escape_string($name),
            $conn ->real_escape_string($gender),
            $conn ->real_escape_string($color),
        $id);
            $conn->query($sql);
        error_log("There is something wrong!", 12);
            echo "User updated.";
        error_log("There is something wrong!", 13);
            CloseCon($conn);
    } else{

        $conn = OpenCon();
        $sql="SELECT * FROM users WHERE id=%s";
        $result = $conn->query($sql);
        foreach ($result as $row){
            error_log("There is something wrong!", 14);
            $name= $row['name'];
            $gender= $row['gender'];
            $color=$row['color'];
        }
            CloseCon($conn);
    }
}


    ?>

<h1>Registration form</h1>
<form
    action=""
    method="post">

    Username: <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES)?>"> <br><br>
    Passwsord: <input type="password" name="password"><br><br>
    Gender:
        <input type="radio" name="gender" value="f"<?php
        if($gender === "f"){
            echo ' checked';
        }
        ?>>Female
        <input type="radio" name="gender" value="m"<?php
        if($gender === "m"){
            echo ' checked';
        }
        ?>>Male
        <input type="radio" name="gender" value="o"<?php
        if($gender === "o"){
            echo ' checked';
        }
        ?>>Other <br><br>
    Favorite Color:
    <select name="color" id="">
        <option value="">Please Select</option>
        <option value="#f00"<?php
        if($color == '#f00'){
            echo ' selected';
        }
        ?>>Red</option>
        <option value="#0f0"<?php
        if($color == '#0f0'){
            echo ' selected';
        }
        ?>>Green</option>
        <option value="#00f"<?php
        if($color == '#00f'){
            echo ' selected';
        }
        ?>>Blue</option>
    </select> <br><br>

    <input type="submit" name="submit" value="REGISTER">

</form>

<!--Notes-->

<!---Created form-->
<!---Printed the results after submission-->
<!---Escaped with htmlspecialchars for security-->
<!---set conditions for the filling out of the form ex: if field is set, do one thing, if not, do another.-->
<!--keep fields prefilled when a field or fields hve been skipped over-->

<!----->