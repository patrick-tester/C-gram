<?php 
    session_start();

    // variable declaration
    $name="";
    $username = "";
    $rollnumber="";
    $phone = "";
    $email = "";

    $errors = array(); 
    $_SESSION['success'] = "";

    // connect to database
    $db = mysqli_connect('localhost', 'betaform', 'prem@123', 'betaform');
    
    // $db = mysqli_connect('localhost','root','','coordiegram2020');
    if($db->connect_errno){array_push($errors, "Not connected to the database");}
    // REGISTER USER
    if (isset($_POST['sign_up'])) {
        // receive all input values from the form
        //$username = mysqli_real_escape_string($db, $_POST['username']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $roll = mysqli_real_escape_string($db, $_POST['rollnumber']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password']);
        $password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);
        // $file=$_FILES['file']['name'];
        
        // form validation: ensure that the form is correctly filled
        if (empty($username)) { array_push($errors, "Name is required"); }
        if (empty($roll)) { array_push($errors, "IITB Roll no is required"); }
        if (empty($phone)) { array_push($errors, "Phone number is required"); }   
        if (empty($email)) { array_push($errors, "Email is required"); }   
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }   
        if (empty($password_1)) { array_push($errors, "Confirm Password is required"); }   
  
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }
        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
            $query_1 = "INSERT INTO coordiegram2020(name, roll, phone, email, username, password) 
                      VALUES('$name','$roll','$phone','$email','$username','$password')";
            mysqli_query($db, $query_1);
            $unsigned = "unsigned";
            $query = "INSERT INTO department(roll,campaigns,compi,creative,events,marketing,operations,media,web) 
                      VALUES('$roll','$unsigned','$unsigned','$unsigned','$unsigned','$unsigned','$unsigned','$unsigned','$unsigned')";
            mysqli_query($db,$query);

            $_SESSION['username'] = $username;
            $_SESSION['rollnumber'] = $roll;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }

    // ... 

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM coordiegram2020 WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);

            $row = $results->fetch_array(MYSQLI_ASSOC);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['rollnumber'] = $row['roll'];
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else {
                array_push($errors, "Wrong Username/password combination");
            }
            mysqli_free_result($results);
        }
    }


    if(isset($_POST['save'])){

        $department = "";
        // echo $department;
        $department = mysqli_real_escape_string($db,$_POST['department']);
        // console.log($department);
        $sign = $_POST['sign'];
        $rollnumber = $_SESSION['rollnumber'];
        if($department == 'campaigns')
            $sql = "UPDATE department SET campaigns = '$sign' WHERE roll = '$rollnumber'";

        if($department == 'compi')
            $sql = "UPDATE department SET compi = '$sign' WHERE roll = $rollnumber";

        if($department == 'creative')
            $sql = "UPDATE department SET creative = '$sign' WHERE roll = $rollnumber";

        if($department == 'events')
            $sql = "UPDATE department SET events = '$sign' WHERE roll = $rollnumber";

        if($department == 'marketing')
            $sql = "UPDATE department SET marketing = '$sign' WHERE roll = $rollnumber";

        if($department == 'media')
            $sql = "UPDATE department SET media = '$sign' WHERE roll = $rollnumber";

        if($department == 'operations')
            $sql = "UPDATE department SET operations = '$sign' WHERE roll = $rollnumber";

        if($department == 'web')
            $sql = "UPDATE department SET web = '$sign' WHERE roll = $rollnumber";

        mysqli_query($db,$sql);
        exit();
    }
?>