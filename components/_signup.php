<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Signup - iBlogs</title>
</head>

<body>
    <?php
    include '../assets/utilities.php';
    ?>

    <nav class="navbar has-background-info-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="../Index.php">
                <span class="is-size-3 font-fam1 has-text-weight-bold">i<span class=" is-size-3 has-text-danger has-text-weight-bold ">Blogs</span></span>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start  mx-auto font-fam2" id="navbarStart">
                <a class="navbar-item" href="../index.php">
                    Home
                </a>

                <a class="navbar-item" href="../Blogs.php">
                    Blogs
                </a>

                <a class="navbar-item" href="../featuredBlogs.php">
                    Featured Blogs
                </a>


                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            About
                        </a>
                        <a class="navbar-item">
                            Jobs
                        </a>
                        <a class="navbar-item">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons mx-5">
                        <a class="button is-link font-fam2 has-text-weight-bold" href="./_login.php"> 
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <h1 class="column is-two-fifths mx-auto font-fam2 is-size-3 border-bottom-set-2 has-text-centered my-5">Signup into <span class="is-size-3 font-fam1 has-text-weight-bold">i<span class=" is-size-3 has-text-danger has-text-weight-bold ">Blogs</span></span></h1>

        <div class="column is-two-fifths my-5 mx-auto has-background-light p-6 border-r-2" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $blogger_username = $_POST['blogger_username'];
                $blogger_email = $_POST['blogger_email'];
                $blogger_password = $_POST['blogger_password'];
                $blogger_confirmPassword = $_POST['blogger_confirmPassword'];

                include '../partials/_db_connect_users.php';

                if ($conn) {

                    

                    if ($blogger_password ==  $blogger_confirmPassword) {
                        $sql = "INSERT INTO `iblogs_users` (`blogger_username`, `blogger_email`, `blogger_password`, `blogger_DOC`) VALUES ('$blogger_username', '$blogger_email', '$blogger_confirmPassword', current_timestamp())";

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo '
                            <div class="notification is-success">
                                <button class="delete"></button>
                                <strong>Success!</strong> Your Account is created successfully.
                            </div>
                        ';
                        } else {
                            echo '
                            <div class="notification is-danger">
                                <button class="delete"></button>
                                <strong>Something Went Wrong!</strong> Your Account has not been created.
                            </div>
                        ';
                        }
                    } else {
                        echo '
                            <div class="notification is-danger">
                                <button class="delete"></button>
                                <strong>Password Does not match! </strong> Make sure your password will be same.
                            </div>
                        ';
                    }
                }
            }
            ?>

            <form action="./_signup.php" method="post">
                <div class="field has-text-white">
                    <label class="label font-fam2">Username: </label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Enter your username" name="blogger_username" required>
                    </div>
                </div>


                <div class="field">
                    <label class="label font-fam2">Email ID</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email" required name="blogger_email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <label class="label font-fam2">Password</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Create Strong Password" required name="blogger_password">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>

                <div class="field ">
                    <label class="label font-fam2">Confirm Password</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Confirm your  Password" required name="blogger_confirmPassword">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>


                <div class="field my-3">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox">
                            <a href="#" class="has-text-black">Stay sign in this device.</a>
                        </label>
                    </div>
                </div>


                <div class="field is-grouped my-5">
                    <div class="control">
                        <button class="button is-info">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column">

        </div>
    </div>
</body>

</html>