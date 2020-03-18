<!--  
     -->

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
    <!--Bootsrap 4 CDN-->
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!--Custom styles-->
 
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="title cardh">
        <img src="/images/iti.png" height="70" width="110"/>
         Examination Managment System
        <img src="/images/bhsk.png" height="60" width="100"/>
    </div>
    <div class="cardhm">
     </div>
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                
            </div>
            <div class="card-body">
                <form>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key design"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="glyphicon glyphicon-user"><i class="fas fa-key designp"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                
                <div class="d-flex justify-content-center">
                    <a href="#">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>