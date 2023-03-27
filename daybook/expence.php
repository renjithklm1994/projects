<?php
session_start();
include('helper.php');
if(!isset($_SESSION['login_status']) && $_SESSION['login_status']!=1)
{
  header('Location:index.php');
}
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
            <form method="post" action="router.php?opt=3">
            <div class="row">
                <div class="col-12 mt-5">
                    <h5 class="text-center">Expence Entry</h5>
                </div>
                <div class="col-4">
                    <div class="form-group mt-2">
                        <label>Expence Title</label>
                        <input type="text" name="txtTitle" class="form-control" placeholder="Expence Title" required>
                        
                       </div>
                </div>
                <div class="col-4">
                      
                       
                       <div class="form-group mt-2">
                        <label>Amount</label>
                        <input type="text" name="txtAmount" class="form-control" placeholder="Amount" required>
                        
                       </div>
                        
                       
                </div>
                <div class="col-4">
                    <input  type="submit" class="btn btn-primary mt-5" value="Enter">
                    <a  href="router.php?opt=4" class="btn btn-primary mt-5" value="Enter">Logout</a><br>
                </div>
                <!--Table Section-->
                <div class="col-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">ExpenceTitle</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i=1;
                          $data=fecth_expences();
                          foreach($data as $item)
                          {
                          ?>
                          <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <td><?php echo $item['expence_title'];?></td>
                            <td><?php echo $item['amount'];?></td>
                            <td><?php echo $item['entry_date'];?></td>
                            <td class="btn btn-primary " value="Enter">Delete</td>
                          </tr>
                          <?php
                          $i++;
                          }
                          ?>
                        </tbody>
                      </table>
                </div>
                <!--Table Section-->
            </div>
          </form>
        </div>
    </body>
</html>