<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Blog Grounds - iBlogs</title>
</head>

<body>
    <?php
    include './components/_navbar.php';
    include './assets/utilities.php';
    include './assets/responsive.php';
    ?>

    <div class="container mt-4">
        <div class="tabs is-centered">
            <ul>
                <li class="is-active">
                    <a>
                        <span class="icon is-small"></span>
                        <span class="is-size-5">All</span>
                    </a>
                </li>
                <li class="">
                    <a>
                        <span class="icon is-small"><i class="fas fa-sharp fa-solid fa-flask"></i></span>
                        <span class="is-size-5">Science</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><i class="fas fa-solid fa-people-arrows"></i></span>
                        <span class="is-size-5">Social</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><i class="fas fa-sharp fa-solid fa-landmark"></i></span>
                        <span class="is-size-5">Political</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="container is-widescreen mt-6">
        <section class="hero is-medium is-light border-r-3">
            <div class="hero-body is-flex is-justify-content-space-between is-align-items-center flex-set" style="padding: 3rem!important;">
                <div class="column is-half">
                    <p class="title font-fam2 is-size-1 has-text-link">
                        How I Create My Blog ?
                    </p>
                    <p class="subtitle mt-3 has-text-dark font-fam1 ">
                        Read the given instructions to create your own blog <span class="is-size-3">&rarr;</span>
                    </p>
                </div>
                <div class="column is-two-fifths">

                    <p class="mt-4 font-fam6 is-size-4 is-uppercase has-text-weight-bold">
                        To create Your Own Blog Follow the Steps:
                    </p>

                    <p class="font-fam1 is-size-6 mt-5">
                        step-1: &nbsp;&nbsp; At First Create your own account on iBlog or if you are existed member then get loggedin.
                    </p>
                    <p class="font-fam1 is-size-6 mt-3 mb-3">
                        step-2: &nbsp;&nbsp; Click on create blog below the instruction section.
                    </p>
                    <p class="font-fam1 is-size-6 mt-3 mb-3">
                        step-3: &nbsp;&nbsp; After clicking on create post you'll see an interface consisting of demanding blog required information inputs.
                    </p>
                    <p class="font-fam1 is-size-6 mt-3 mb-3">
                        step-5: &nbsp;&nbsp; Fill the inputs according to you and select out the category of blog and click on submit blog.
                    </p>
                    <p class="font-fam1 is-size-6 mt-3 mb-3">
                        step-6: &nbsp;&nbsp; All set you are done your blog is now public in iBlogs.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- Main create blog section -->

    <div class="container my-6">
        <h1 class="is-size-1 has-text-centered font-fam3 border-bottom-set color-heads mb-5 ">Blog Container</h1>
    </div>

    <div class="container is-widescreen mt-3">
        <div class="row flex-set">
            <div class="column is-half " >
                <img src="./assets/images/content-3.jpg" class="border-r-1" alt="">
            </div>
            <div class="column px-5 py-3 is-half has-background-link-light border-r-2" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                <?php

                include './partials/_db_connect.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $bTitle = $_POST['bTitle'];
                    $bCreatorName = $_POST['bCreatorName'];
                    $bCategory = $_POST['bCategory'];
                    $bPost = $_POST['bPost'];

                    $sql = "INSERT INTO `users` (`blog_title`, `blogger_name`, `blog_category`, `blog_post`, `date`) VALUES ( '$bTitle', '$bCreatorName', '$bCategory', '$bPost', current_timestamp())";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        echo '
                            <div class="notification is-success">
                                <button class="delete"></button>
                                <strong>Success! </strong> Your Blog is created and posted successfully.
                            </div>
                        ';
                    } else {
                        echo '
                            <div class="notification is-danger">
                                <button class="delete"></button>
                                <strong>Something Went Wrong! </strong> Your blog is not posted.
                            </div>
                        ';
                    }
                }

                ?>
                <form class=" has-text-left" action="./Blogs.php" method="POST">
                    <div class="field">
                        <label class="label font-fam2 is-size-5">Blog Title</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Title of Blog" name="bTitle" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label font-fam2 is-size-5">Username</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-success" type="text" placeholder="Enter your username" name="bCreatorName" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>


                    <div class="field">
                        <label class="label font-fam2 is-size-5">Category: </label>
                        <div class="control">
                            <div class="select">
                                <select name="bCategory" required>
                                    <option>Select Category</option>
                                    <option value="Science">Science</option>
                                    <option value="Food & Drinks">Food & Drinks</option>
                                    <option value="Current Affairs">Current Affairs</option>
                                    <option value="Education">Education</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Social">Social</option>
                                    <option value="Cultural">Cultural</option>
                                    <option value="Space">Space</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Drama">Drama</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label font-fam2 is-size-5">Blog: </label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Write your blog here" name="bPost" required="" style="height: 289px;"></textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <input type="submit" class="button is-link">
                        </div>
                        <div class="control">
                            <button class="button is-link is-light">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Footer Section -->
    <?php
    include './components/_footer.php';
    ?>

</body>

</html>