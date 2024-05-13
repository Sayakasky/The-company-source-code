<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Register</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;"> <!--viewpoint per height-->
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">REGISTER</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register-action.php" method="post" autocomplete="off">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">Firstname</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="last-name" class="form-label">Lastname</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>

                        <!--username field --bold to male emphasis -->

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
                        </div>

                        <!--password field -->
                        <div class="mb-5">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control fw-bold" minlength="8" aria-describedBy="password-info" required>
                            <div class="form-text" id="password-info">
                                Password must be atleast 8 characters long.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Register</button>

                    </form>

                    <p class="text-center small">
                     Already registered?    
                        <a href="../views">Login here</a>
                    </p>
                    
                </div>
            </div>
        </div>


    </div>


    
</body>
</html>