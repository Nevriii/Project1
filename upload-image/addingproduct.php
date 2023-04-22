<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="nicepage.css" media="screen">
        <link rel="stylesheet" href="editproduct.css" media="screen">
        <title> Admin | Adding Product</title>

        <style>

            body{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                min-height: 100vh;

            }

            body[data-aos-duration='4000'] [data-aos],
                [data-aos][data-aos][data-aos-duration='4000'] {
                        transition-duration: 4000ms;
                }
            </style>
            
    </head>
    <body class="u-body u-xl-mode" data-lang="en">
        <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error'];?></p>
            <?php endif ?>
        <div>
            <?php
            
        ?>
        </div>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card" data-aos="flip-right" data-aos-duration="1500">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container" data-aos="zoom-out-down" data-aos-duration="2000">
                            <img src="img/kuya.jpg" class="brand_logo" alt="Programming Knowledge logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form action="edit.php" method="post" enctype="multipart/form-data">
                            <div class="container">
                                <div class="row-sm-2">
                                    <div class="col-sm-20">
                                        <button class="btnStyle btn btn-primary" type="button">
                                            <a href="Menu.php" style="color: white;">Preview <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-aspect-ratio-fill" viewBox="0 0 16 16">
                                                <path d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1h-3zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1h3z"/>
                                                </svg>
                                            </a>
                                        </button>
                                        <button class="btnStyle btn btn-primary" type="button">
                                            <a href="editproduct.php" style="color: white;">Update Product <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                                </svg>
                                            </a>
                                        </button>
                                        <h1> Adding Product</h1>
                                        <p> Fill up the necessaary information</p>
                                        <hr class="mb-3">
                                        <label for="item"><b>Item Name</b></label>
                                        <input class ="form-control" id="item" type="text"  name="item" required>
                                        
                                        <label for = "avail"><b>Availability:</b></label>
                                        <select name="avail" id="avail" name="avail">
                                            <option value = " "></option>
                                            <option value= "available"> Available</option>
                                            <option value = "navailable"> Unavailable</option>
                                        </select>                    
                                        <hr class="mb-3">
                                        <input type="file" name="my_image">                   
                                        <hr class="mb-3">
                                        <input class="btnStyle btn btn-primary" type="submit" name="submit" value="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Animation -->
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
		AOS.init();
		</script>
		<!--  -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>
</html>