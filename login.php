<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="CSS/styles.css">

</head>

<body>


    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="main_field">
                <form action="authentification.php" method="POST">
                    <div class="form-group">
                      <label for="InputLogin">Login</label>
                      <input name="login" type="text" class="form-control" id="InputLogin" placeholder="Enter Login">
                    </div>
                    <div class="form-group">
                      <label for="InputPassword">Password</label>
                      <input name="pwd" type="password" class="form-control" id="InputPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>


       
   
  
</body>
</html>

