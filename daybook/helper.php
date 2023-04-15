<?php
//DB Connection
function db_connect()
{
    if($dbo=new PDO("mysql:host=localhost;dbname=daybook","root",""))
    {
        return $dbo;
    }
    else{
        return false;
    }


}
//DB Connection
//Logincheck Function
function login_check($email,$password)
{
    if($dbcon=db_connect())
    {
        $result=$dbcon->query("select *from customers where email='$email' and password='$password'");
        if($result->rowCount()>0)
        {
            $_SESSION['userDetails']=$result->fetch();
            return true;
        }
        else{
            return false;
        }
    }
    else{
       return false;
    }
    
}
//Logincheck Function
//Registration Function
function registration()
{
    echo "This is registration function";
}
//Registraion Function
//Function for expence entry
function expence_entry($title,$amt,$cid)
{
    if($dbcon=db_connect())
    {
       $dt=date('Y-m-d');
       $dbcon->query("insert into expences(expence_title,amount,entry_date,cid) values('$title',$amt,'$dt',$cid)");          
       return true;
    }
    else
    {
        return false;
    }  
}
//Function for expence entry
//Fetch All Expences
function fecth_expences()
{
    if($dbcon=db_connect())
    {
        $cid=$_SESSION['userDetails']['cid'];      
        $result=$dbcon->query("select *from expences where cid=$cid");
        return $result->fetchAll();          
    }
    else{
        return false;
    }
}
//Fetch All Expences
?>