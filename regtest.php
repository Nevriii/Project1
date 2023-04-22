<?php
require_once('config.php');

?>



<!DOCTYPE html>
<html>
    <head>
        <title> User Registration</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
    <?php
    if(isset($_POST['create'])){
        $firstname      = $_POST['firstname'];
        $lastname       = $_POST['lastname'];
        $email          = $_POST['email'];
        $phonenumber    = $_POST['phonenumber'];
        $pass           = $_POST['pass'];


        $sql = "INSERT INTO users(firstname, lastname, email, phonenumber, pass) VALUES (?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$pass]);
        if ($result) {
            echo " Successfully saved.";
        
        } else {
            echo "there were errors while saving the data";
        }
        
    }
?>
</div>
<div>
    <form action="registration.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
            <h1> Registration</h1>
            <p> Fill up the necessaary information</p>
            <hr class="mb-3">
            <label for="firstname"><b>First Name</b></label>
            <input class ="form-control" id="firstname" type="text"  name="firstname" required>
            <label for="lastname"><b>last Name</b></label>
            <input class ="form-control" id="lastname" type="text"  name="lastname" required>
            <label for="email"><b>email</b></label>
            <input class ="form-control" id="email" type="email"  name="email" required>
            <label for="phonenumber"><b>phone number</b></label>
            <input class ="form-control" id="phonenumber" type="text"  name="phonenumber" required>
            <label for="password"><b>password</b></label>
            <input class ="form-control" id="password" type="password"  name="pass" required>
            <hr class="mb-3">
            <input class="btn btn-primary" type="submit" id="register" name="create" value="sign up">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){

            var valid = this.form.checkValidity();
            if (valid){
                e.preventDefault();

                $.ajax({
                    type:'POST',
                    url:'process.php',
                    data: {firstname: firstname, lastname:lastname, email:email, phonenumber: phonenumber, password: password},
                    success: function(data){
                    Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: '<a href="">Why do I have this issue?</a>'
            })
                    },
                    error: function(data){
                    Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: '<a href="">Why do I have this issue?</a>'
            })
                    }
                })
            }
            
        });
    });
    </script>
</body>
</html>