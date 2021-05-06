<html>
    <head>
        <title>
            Nito | Student Registration
        </title>
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
        <div class="row pt-5">
                    <div class="col-12">
                    <header class=" text-center text-uppercase text-white user-register-header">User Registration</header>
                    </div>
                </div>
            
                <div class="row justify-content-center">
                    <div class="col-12 register-user-box mx-4 mt-3 rounded">
                    <h2  class="text-white mb-4 text-center">User Details </h2>
                        
                            <form action="6_userRegisterForm.php" method="post">
                                <div class="form-group">
                                    <label class="form-labels">Full Name</label>
                                    <input placeholder="Enter Name" type="text" name="FullName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">ID</label>
                                    <input placeholder="Enter ID" type="text" name="ID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Password</label>
                                    <input placeholder="Enter Password" type="text" name="Pass" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Superior's ID</label>
                                    <input placeholder="Enter Superior's ID" type="text" name="superID" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Department Code</label>
                                    <input placeholder="Enter Department Code" type="text" name="deptCode" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-labels">Institute Name</label>
                                    <input placeholder="Enter Institute Name" type="text" name="Institute" class="form-control" required>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn submit-button mt-2">Submit</button>

                                </div>
                                
                            </form>
                </div>
            </div>
        </div>    
    </body>
</html>