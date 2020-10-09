<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./CSS/login.css">
<title> Login Page </title>  
  
</head>    
<body>    
    <form action = "loginaction.php" method="POST">    
        <div class="container">   
            <i class="fa fa-user icon"></i><h1>Login</h1> 
			
            <input type="text" placeholder="Username" name="username" required>  
			
            <input type="password" placeholder="Password" name="password" required>  
            <button type="submit">Login</button>                
        </div>   
    </form>     
</body>     
</html>  