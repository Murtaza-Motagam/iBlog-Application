<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Drama - iBlogs</title>
</head>

<body>

    <div class="container my-6">
        <h1 class="is-size-1 has-text-centered font-fam3 border-bottom-set color-heads mb-5 ">Drama Related Blogs</h1>
    </div>

    <div class="container my-6">
        <div class="row my-6">
            <?php

            include '../partials/_db_connect.php';
            include '../assets/style.php';
            include '../assets/utilities.php';
            include '../assets/responsive.php';

            if ($conn) {

                $sql = "SELECT `blog_title`, `blogger_name`, `blog_post`, `blog_category`, `date` FROM `users` WHERE `blog_category` = 'Drama'";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0)
                    while ($rowData = mysqli_fetch_array($result)) {
                        echo '
                    <div class="column is-one-third">
                    <div class="card border-r-2 has-background-info-light" style="height: 100%!important;">
                        <div class="card-content">
                        <div class="media is-flex is-justify-content-flex-start is-align-items-center">
                        <img src="../assets/images/profile-icon.png" class="" width="40px">
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

            ?>
        </div>
    </div>
</body>

</html>