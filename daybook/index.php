<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bst/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 border-bottom">
                    <h4>DayBook</h4>
                </div>
            </div>
            <form method="post" action="router.php?opt=1">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4 card mt-2">
                       <h5 class="text-center">Login Here</h5>
                       <div class="alert alert-primary" role="alert">
                            <?php
                            if(isset($_SESSION['message']))
                            {
                                echo $_SESSION['message'];
                                $_SESSION['message']='';
                            }
                            ?>
                        </div>
                       <div class="form-group mt-2">
                        <label>Email</label>
                        <input type="email" name="txtEmail" class="form-control" placeholder="Email" required>
                        
                       </div>
                       <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="txtPass" class="form-control" placeholder="Password" required>
                        
                       </div> 
                       <input  type="submit" class="btn btn-primary" value="Login"><br>
                       <a href="register.php" class="btn btn-default">Register Here</a>
                </div>
                <div class="col-4">

                </div>
            </div>
            </form>
        </div>
    </body>
</html>