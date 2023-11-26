<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <header>
        <?php
        include('./includes/global-nav.php');
        ?>
    </header>
    <main class="index">
        <section class="masthead">
            <div>
                <h1>Authentication & Working With Images</h1>
            </div>
        </section>
        <section class="form-row row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h3>Don't have an account, then sign up below!</h3>
                <form method="post" action="save-admin.php">

                    <p><input class="form-control" name="first_name" type="text" placeholder="First Name" required /></p>
                    <p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
                    <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                    <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                    <p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>
                    <input class="btn btn-light" type="submit" name="submit" value="Register" />
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h3>Already have an account, then sign in below!</h3>
                <form method="post" action="./inc/validate.php">
                    <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                    <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                    <input class="btn btn-light" type="submit" value="Login" />
                </form>
            </div>
        </section>
    </main>

    <footer>
        <?php
        include('./includes/footer-nav.php');
        ?>
    </footer>



</body>

</html>