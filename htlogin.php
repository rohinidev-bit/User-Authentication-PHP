<html>
    <head>
        <title>
            USER AUTHENTICATION| Welcome
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="popup.js"></script>
    </head>
        <div class="container">
            <div class="row ml-3">
             <div class="col-md-6 m-2 rounded login-user-box">
                 <h2  class="text-white mb-4 text-center">Login </h2>
                 <form action="userRegisterValidation.php" method="post">
                     <div class="form-group">
                         <label class="form-labels">Username</label>
                         <input placeholder="Enter Username" type="text" name="user" class="form-control" required>
                     </div>
                        <div class="form-group">
                            <label class="form-labels">Password</label>
                            <input placeholder="Enter Password" type="text" name="Password" class="form-control" required>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn  submit-button mt-2">Submit</button>
  
                        <script>
                        function sNewUser() {
                        window.open("userregister.php");
                        }
                        </script>                       
                        <button type="submit" class="btn  submit-button mt-2" value="Open Window" onclick="sNewUser()">New User?</button>

                    </div>
  
                </form>
             
    </body>
</html>