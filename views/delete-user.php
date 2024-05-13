<?php

    session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link CSS-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Delete User</title>
</head>
<body>


    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">
    <div class="container">
        <a href="dashboard.php" class="navbar-brand">
            <h1 class="h3">THE COMPANY</h1>
        </a>
        <div class="navbar-nav">
            <span class="navbar-text">
                <?= $_SESSION['full_name']?>
            </span>
            <form action="../actions/logout-action.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0">Logout</button>
            </form>
        </div>
    </div>
</nav>


    <main class="row justify-content-center gx-0">
        <div class="col-4 text-center">
            <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
            <h2 class="text-danger mb-5">Delete Account</h2>

            <p class="fw-bold">Are you sure you want to delete your accout?</p>

            <div class="row">
                <div class="col">
                    <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                    
                </div>
                <div class="col">
                    <form action="../actions/delete-user-action.php" method="post">
                        <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>