<!DOCTYPE html>
<html>
    <head>
        <title> User Registration</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/reg.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <style>
            body[data-aos-duration='4000'] [data-aos],
                [data-aos][data-aos][data-aos-duration='4000'] {
                    transition-duration: 4000ms;
                }
        </style>
    </head>
    <body>

        <div>
            <?php
            
        ?>
        </div>

        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card" data-aos="flip-right" data-aos-duration="1500">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container" data-aos="zoom-in-down" data-aos-duration="2500">
                            <img src="img/kuya.jpg" class="brand_logo" alt="Programming Knowledge logo">
                        </div>
                    </div>	
                    <div class="d-flex justify-content-center form_container">
                        <form action="registration.php" method="post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <h1> Registration</h1>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            $(function(){
                $('#register').click(function(e){

                    var valid = this.form.checkValidity();
                    if (valid){
                        
                        var firstname    = $('#firstname').val();
                        var lastname     = $('#lastname').val();
                        var email        = $('#email').val();
                        var phonenumber  = $('#phonenumber').val();
                        var password     = $('#password').val();






                        e.preventDefault();

                        $.ajax({
                            type:'POST',
                            url:'process.php',
                            data: {firstname: firstname, lastname:lastname, email: email, phonenumber: phonenumber, password: password},
                            success: function(data){
                                Swal.fire({
                                        icon: 'success',
                                        title: 'success',
                                        text: data,
                                        footer: '<a href=""></a>'
                                })
                            },
                            error: function(data){
                                Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Something went wrong!',
                                        footer: '<a href="">Double check your entries</a>'
                                })
                            }
                        })
                    }
                    
                });
            });
        </script>

        <!-- Animation -->
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
		AOS.init();
		</script>
		<!--  -->

    </body>
</html>