

<!DOCTYPE html>
    
<html lang="en-US">
    <head> 
        <!-- General info -->
        <title>DONFENG Service Qualit</title> 
        <meta charset="utf_8">
        <meta name="description" content="Le service qualité de la société DONGFENG-Comet tunisie, a fondé ce site web dans le but d'informatiser
        le systém de contrôle des véhicules lors du processus de production.
        Ce site Web et absolument privé et accessible seulement pour les techniciens et les ingénieurs de contrôle de la société COMET.">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#4188c9">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="https://seeklogo.com/images/D/dfm-logo-468608D2BF-seeklogo.com.png" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="https://seeklogo.com/images/D/dfm-logo-468608D2BF-seeklogo.com.png">
        <!-- Link to CSS file -->
        <link rel="stylesheet" href="Stylesheets.CSS" type ="text/CSS" > 
    </head>
<nav>
    <div class="box">
        <img src="img/DFMlogo.png" alt="https://upload.wikimedia.org/wikipedia/fr/9/9e/Dongfeng-logo.png"/>
    </div> 
</nav>
<body>
   <form method="post" action="./login.php">
<div class="login-wrap">
    
	<div class="login-html">
         
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
            
			<div class="sign-in-htm">
               
				<div class="group">
                    <img width="200" height="70"  style="margin-bottom : 20px;" src="img/COMET.png"/> <br/>
                            <?php if (isset($_GET['error'])) { ?>
                            <p style="color : red;"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                    <form>
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="loguser" class="input" >
                        </form>
				</div>
				<div class="group">
                    
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="logpass" class="input" data-type="password" >
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
                
				<div class="hr"></div>
				<div class="foot-lnk">
					<a>Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
                <img width="200" height="70"  style="margin-bottom : 20px;" src="img/COMET.png"/>
				
                     <p style="color : #f51000;"> L'inscription et désactivé temporairement !
                         Pour plus d'informations contacter l'équipe du service qualité COMET. 
                        </p>
                        
                    </div>
                    
				</div>
				
			</div>
		</div>
    
	

</form>
</body>
</html> 
    
