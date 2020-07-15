<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Project</title>
  </head>
  <body>

    <div id="container" class="container">

        <!-- Toggle Div -->
        <div id="toggleDiv">
        <button type="button" class="btn btn btn-link" data-toggle="button" id="toggleSignIn">SIGN IN</button>
        |
        <button type="button" class="btn btn btn-link" data-toggle="button" id="toggleSignUp">SIGN UP</button>
        </div>

        <!-- Sign In Div -->
        <div id="signInDiv">
        
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">PASSWORD</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="cache">
                    <label class="form-check-label" for="keepMeSignedIn" id="cacheText">KEEP ME SIGNED IN</label>
                </div>
                <button type="submit" class="btn btn-outline-light btn-block" id="signIn">LOG IN</button>
            </form>

        </div>

        <!-- Sign Up Div -->
        <div id="signUpDiv">
        
            <form method="post">
            <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" class="form-control" id="signUpName">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <input type="email" class="form-control" id="signUpEmail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">PASSWORD</label>
                    <input type="password" class="form-control" id="signUpPassword">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">CONFIRM PASSWORD</label>
                    <input type="password" class="form-control" id="confirmPassword">
                </div>
                
            <button type="submit" class="btn btn-outline-light btn-block" id="signUp">SIGN UP</button>
            </form>
        
        </div>
    
    </div>
    
    

    <!-- Optional JavaScript -->
    <script src="app.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>