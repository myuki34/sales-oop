<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-transparent border-0">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text" name="username" id="username" class="form-control mb-2" placeholder="Username" required autofocus>
                        <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Password" required autofocus>

                        <button type="submit" class="btn btn-primary w-100">LOG IN</button>
                    </form>
                        
                    
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create an Account
                        </button>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-danger">
                                    <h1 class="modal-title text-center fs-1" id="exampleModalLabel"><i class="fa-solid fa-user-plus"></i> Registration</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="container">
                                        <div class="card-body">
                                            <form action="../actions/user-actions.php" method="post">
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <label for="first-name" class="form-label">First Name <span>*</span></label>
                                                        <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="last-name" class="form-label">Last Name <span>*</span></label>
                                                        <input type="text" name="last_name" id="last-name" class="form-control" required>
                                                    </div>
                                                </div>    
                                                <div class="mb-4">
                                                    <label for="username" class="form-label">Username <span>*</span></label>
                                                    <input type="text" name="username" id="username" class="form-control" maxlength="15" required>
                                                </div>
                                                <div class="mb-5">
                                                    <label for="password" class="form-label">Password <span style="color: crimson">*</span></label>
                                                    <input type="password" name="password" id="password" class="form-control" minlength="8" required>
                                                </div>
                                                <button type="submit" class="btn btn-danger w-100" name="register">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>