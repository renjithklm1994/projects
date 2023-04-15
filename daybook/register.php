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
            <form method="post" action="router.php?opt=2">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4 card mt-2">
                       <h5 class="text-center">Register Here</h5>
                       <div class="form-group mt-2">
                        <label>Name</label>
                        <input type="text" name="txtName" class="form-control" placeholder="Name" required>
                        
                       </div>
                       <div class="form-group mt-2">
                        <label>Mobile</label>
                        <input type="text" name="txtMobile" class="form-control" placeholder="Mobile" required>
                        
                       </div>
                       <div class="form-group mt-2">
                        <label>Email</label>
                        <input type="email" name="txtEmail" class="form-control" placeholder="Email" required>
                        
                       </div>
                       <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="txtPass" class="form-control" placeholder="Password" required>
                        
                       </div>
                       <div class="form-group">
                        <label>Confirm</label>
                        <input type="password" name="txtConfirm" class="form-control" placeholder="Confirm" required>
                        
                       </div> 
                       <input  type="submit" class="btn btn-primary" value="Register"><br>
                       <a href="index.php" class="btn btn-default">Login Here</a>
                </div>
                <div class="col-4">

                </div>
            </div>
            </form>
        </div>
    </body>
</html>