<?php

  session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Article Grounds - iBlogs</title>
</head>

<body>
    <?php
    include './components/_navbar.php';
    include './assets/utilities.php';
    include './assets/responsive.php';
    ?>

    <!-- Header Section -->

    <div class="container my-6">
        <h1 class="is-size-1 has-text-centered font-fam3 border-bottom-set color-heads mb-5 ">Public Featured Blogs</h1>
    </div>

    <!-- Category Section  -->

    <div class="container mt-4">
        <div class="tabs is-centered ">
            <ul>
                <li class="active">
                    <a>
                        <span class="icon is-small"></span>
                        <span class="is-size-5">All</span>
                    </a>
                </li>
                <li class="">
                    <a href="./filterBlogs/science_category.php">
                        <span class="icon is-small"><i class="fas fa-sharp fa-solid fa-flask"></i></span>
                        <span class="is-size-5">Science</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/social_category.php">
                        <span class="icon is-small"><i class="fas fa-solid fa-people-arrows"></i></span>
                        <span class="is-size-5">Social</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/drama_category.php">
                        <span class="icon is-small"><i class="fas fa-duotone fa-monkey"></i></span>
                        <span class="is-size-5">Drama</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/currentaffairs_category.php">
                        <span class="icon is-small"><i class="fas fa-sharp fa-solid fa-landmark"></i></span>
                        <span class="is-size-5">Political</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/foodsanddrinks_category.php">
                        <span class="icon is-small"><i class="fas fa-sharp fa-solid fa-landmark"></i></span>
                        <span class="is-size-5" >Food and Drinks</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/entertainment_category.php">
                        <span class="icon is-small"><i class="fas fa-sharp fa-solid fa-landmark"></i></span>
                        <span class="is-size-5">Entertainment</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/cultural_category.php">
                        <span class="icon is-small"><i class="fas fa-solid fa-cross"></i></span>
                        <span class="is-size-5">Cultural</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/education_category.php">
                        <span class="icon is-small"><i class="fas fa-regular fa-school"></i></span>
                        <span class="is-size-5">Education</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/education_category.php">
                        <span class="icon is-small"><i class="fas fa-regular fa-school"></i></span>
                        <span class="is-size-5">Space</span>
                    </a>
                </li>
                <li>
                    <a href="./filterBlogs/technology_category.php">
                        <span class="icon is-small"><i class="fas fa-solid fa-microchip"></i></span>
                        <span class="is-size-5">Technology</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>


    <!-- Main Blog Container -->
    <div class="container column is-two-fifths mx-auto mt-6 mb-6 has-background-success border-r-4">
        <h1 class="is-size-3 font-fam2 has-text-weight-bold has-text-centered has-text-white m-auto ">Blogs Ground</h1>
    </div>
    <div class="container mt-3">
        <div class="row my-6">

            <?php

            include './partials/_db_connect.php';

            if ($conn) {
                $sql = "SELECT * FROM `users` ";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($rowData = mysqli_fetch_array($result)) {

                        echo '
                                    <div class="column is-one-third">
                                        <div class="card border-r-2 has-background-info-light" style="height: 100%!important;">
                                            <div class="card-content">
                                            <div class="media is-flex is-justify-content-flex-start is-align-items-center">
                                            <img src="./assets/images/profile-icon.png" class="" width="40px">
                                            <p class=" mx-4 is-size-5 font-fam2 has-text-black has-text-weight-bold">' . $rowData["blogger_name"] . '</p>
                                            </div>
                                                <div class="media">
                                                    <div class="media-content ">
                                                        <p class="title has-size-6 font-fam2  has-text-black" id="bTitle">' . $rowData["blog_title"] . '</p>
                                                        
                                                    </div>
                                                </div>
        
                                                <div class="content font-fam1" id="bPost">
                                                    ' . $rowData["blog_post"] . '
                                                </div>
                                                <p class="subtitle mt-2 font-fam6">
                                                            Category: <span class="font-fam6" id="bCategory">' . $rowData["blog_category"] . '</span>
                                                        </p>
                                                <div class="is-flex p-0 is-justify-content-space-between">
                                                    <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br> ' . $rowData["blogger_name"] . '</p>
                                                    <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1">' . $rowData["date"] . '</time></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                    }
                }
            }

            ?>

        </div>
    </div>

    <?php
        include './components/_footer.php';
    ?>


</body>

</html>