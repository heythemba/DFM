<!DOCTYPE html>
<html>
    <head>
        <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<?php
ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

try
{
	$db = new PDO('mysql:host=localhost;dbname=dongfeng;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




if (isset($_POST['loguser']) && isset($_POST['logpass'])) // getting info by post
{
    function validate($data){                               //validating info
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
        }
$given_username = validate($_POST['loguser']);             // registring given info
$given_pass = validate($_POST['logpass']);




$req = $db->prepare('SELECT * FROM comet_users ');          // getting true info from data base
$req->execute(array('username' , 'password'));

        while ($result = $req->fetch())
        {

             $infouseres [$result['username']] = $result['password'];

        }

        $req->closeCursor();

        if( array_key_exists($given_username , $infouseres) == true )  
        {


            $req = $db->prepare('SELECT password FROM comet_users WHERE username =\'' . $given_username . '\'');

            $req->execute(array('password'));

            while ($result = $req->fetch() )

            { 
                $infopass = $result['password'];
                $req->closeCursor();

                if (password_verify($given_pass,$infopass) == true ) 
                {
                   include_once('selection.php');

                }
                    else 
                        {
                          ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
Incorrect password !
</div>


<?php
                         include_once('index.php'); //incorrect pass   
                        }
            
                }
            }
     else 
     
     {  
         ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
Incorrect Username !
</div>


<?php
        include_once('index.php'); //incorrect user 
        
     } 
   
} 
?>
    </body>
</html>