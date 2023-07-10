<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="login.php">Login</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>