<?php

  session_start();


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to iBlogs</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> 
</head>

<body>

  <!-- Navbar Component -->
  <?php
  include './components/_navbar.php';
  include './assets/utilities.php';
  include './assets/responsive.php';
  ?>

<!-- Main hero Section -->

  <div class="container  my-6">
    <div class="rows">
      <div class="column">
        <div class="is-flex is-justify-content-space-between flex-set">
          <div class="column is-two-fifths mt-1 ">
            <div class="image is-1by1 ">
              <img src="./assets/images/blogpost.jpg" class="border-r-1" width="200px" alt="">
            </div>
          </div>

          <div class="column is-three-fifths ">
            <section class="hero">
              <div class="hero-body">
                <p class="title font-fam1 is-size-1">
                  Welcome to the i<span class=" is-size-1 has-text-danger has-text-weight-bold ">Blogs</span>.
                </p>
                <p class="subtitle mt-3 font-fam2 is-size-4">
                  iBlog is the latest blog reading and publishing website.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ullam, modi quisquam ducimus fugiat dolorem, accusamus quam quis dolorum eveniet sit!
                </p>
                <div class="buttons">
                  <button class="button is-primary is-large">Get Started</button>
                  <button class="button is-dark is-large">Explore Out</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Pricing Section -->
  <div class="container">
    <h1 class="is-size-1 has-text-centered font-fam3 border-bottom-set color-heads">Pricing Details</h1>
    <div class="row my-6">
      <div class="columns is-three-fifths-mobile is-half-tablet is-three-quarters-desktop is-one-third-widescreen is-one-quarter-fullhd">

        <div class="column">
          <div class="card has-background-link-light">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="./assets/images/blog-card-1.jpeg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content has-text-centered">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-5 font-fam1 has-text-link has-text-weight-bold">Basic Plan</p>
                  <p class="subtitle has-size-5 font-fam1">Month</p>
                  <p class="is-size-3 mt-0 has-text-black font-fam4 has-text-weight-bold">$120/-</p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.
              </div>

              <div class="buttons ">
                <button class="button is-link mx-auto">Check out</button>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card has-background-link-light">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="./assets/images/blog-card-2.jpeg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content has-text-centered">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-5 font-fam1 has-text-primary has-text-weight-bold">Intermediate Plan</p>
                  <p class="subtitle has-size-5 font-fam1">Half Year (6 months)</p>
                  <p class="is-size-3 mt-0 has-text-black font-fam4 has-text-weight-bold">$220/-</p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.
              </div>
              <div class="buttons ">
                <button class="button is-primary mx-auto">Check out</button>
              </div>
            </div>
          </div>
        </div>


        <div class="column">
          <div class="card has-background-link-light">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="./assets/images/blog-card-3.jpeg" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content has-text-centered">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-5 font-fam1 has-text-danger has-text-weight-bold">Premium Plan</p>
                  <p class="subtitle has-size-5 font-fam1">Full Year</p>
                  <p class="is-size-3 mt-0 has-text-black font-fam4 has-text-weight-bold">$450/-</p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.
              </div>
              <div class="buttons ">
                <button class="button is-danger mx-auto">Check out</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Creative Section - 3 -->

  <section class="hero is-halfheight is-light">
    <div class="hero-body">
      <div class="row is-flex is-justify-content-space-around is-align-items-center">
        <div class="column ">

          <p class="title font-fam2 is-size-1 has-text-info">
            Create & Post Attractive Blogs.
          </p>
          <p class="subtitle my-6 lh-2 font-fam5 ">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi deleniti laborum eveniet, inventore labore eaque exercitationem similique suscipit corrupti provident. Illo perspiciatis iste hic, sint incidunt voluptas veritatis sunt ipsa! Aliquid porro provident quos?
          </p>
        </div>
        <div class="column is-two-fifths ml-3 is-text-centered is-flex is-justify-content-end is-align-items-center">
          <div class="tile is-ancestor">
            <div class="tile is-parent ">
              <article class="tile is-child notification is-link border-r-2">
                <p class="title has-background-white p-3 has-text-centered border-r-1 is-size-2 font-fam2">i<span class="has-text-danger">Blogs</span> Blog Creator</p>
                <p class="subtitle mt-4 has-text-white font-fam1">Turn Your Thoughts into Reality.</p>
                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est earum nulla illum reprehenderit deserunt dolores laudantium at quibusdam dignissimos, repellat expedita optio unde, eius esse architecto ea pariatur qui sunt aliquid.
                </div>
                <div class="buttons">
                  <a href="./Blogs.php" class="button is-success font-fam2 border-r-3">Check Out</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  Blog Section -->

  <div class="container my-6">
    <h1 class="is-size-1 has-text-centered font-fam3 border-bottom-set color-heads">Blog Section</h1>
    <div class="row my-6">

      <div class="columns is-one-quarter-mobile is-half-tablet is-three-quarters-desktop is-one-third-widescreen is-one-quarter-fullhd">

        <div class="column">
          <div class="card border-r-2 has-background-info-light">
            <div class="card-content">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-6 font-fam2 has-text-black has-text-weight-bold">Blog Title</p>
                  <p class="subtitle mt-2 font-fam5">
                    Category: Social Culture.
                  </p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.

              </div>
              <div class="is-flex p-0 is-justify-content-space-between">
                <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br>William Caseith</p>
                <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1"> &nbsp;&nbsp;&nbsp;11:09 PM - 1 Jan 2016</time></p>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card border-r-2 has-background-info-light">
            <div class="card-content">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-6 font-fam2 has-text-black has-text-weight-bold">Blog Title</p>
                  <p class="subtitle mt-2 font-fam5">
                    Category: Social Culture.
                  </p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.

              </div>
              <div class="is-flex p-0 is-justify-content-space-between">
                <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br>William Caseith</p>
                <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1"> &nbsp;&nbsp;&nbsp;11:09 PM - 1 Jan 2016</time></p>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card border-r-2 has-background-info-light">
            <div class="card-content">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-6 font-fam2 has-text-black has-text-weight-bold">Blog Title</p>
                  <p class="subtitle mt-2 font-fam5">
                    Category: Social Culture.
                  </p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.

              </div>
              <div class="is-flex p-0 is-justify-content-space-between">
                <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br>William Caseith</p>
                <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1"> &nbsp;&nbsp;&nbsp;11:09 PM - 1 Jan 2016</time></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- row-2  -->

    <div class="row my-6">

      <div class="columns is-one-quarter-mobile is-half-tablet is-three-quarters-desktop is-one-third-widescreen is-one-quarter-fullhd">

        <div class="column">
          <div class="card border-r-2 has-background-info-light">
            <div class="card-content">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-6 font-fam2 has-text-black has-text-weight-bold">Blog Title</p>
                  <p class="subtitle mt-2 font-fam5">
                    Category: Social Culture.
                  </p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.

              </div>
              <div class="is-flex p-0 is-justify-content-space-between">
                <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br>William Caseith</p>
                <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1"> &nbsp;&nbsp;&nbsp;11:09 PM - 1 Jan 2016</time></p>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card border-r-2 has-background-info-light">
            <div class="card-content">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-6 font-fam2 has-text-black has-text-weight-bold">Blog Title</p>
                  <p class="subtitle mt-2 font-fam5">
                    Category: Social Culture.
                  </p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.

              </div>
              <div class="is-flex p-0 is-justify-content-space-between">
                <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br>William Caseith</p>
                <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1"> &nbsp;&nbsp;&nbsp;11:09 PM - 1 Jan 2016</time></p>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card border-r-2 has-background-info-light">
            <div class="card-content">
              <div class="media">
                <div class="media-content ">
                  <p class="title has-size-6 font-fam2 has-text-black has-text-weight-bold">Blog Title</p>
                  <p class="subtitle mt-2 font-fam5">
                    Category: Social Culture.
                  </p>
                </div>
              </div>

              <div class="content font-fam1">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, officiis beatae at illo aliquam culpa voluptatibus impedit id nihil, odio accusamus rerum quo.

              </div>
              <div class="is-flex p-0 is-justify-content-space-between">
                <p class="font-fam1 font-size-sm has-text-weight-bold">Posted By : <br>William Caseith</p>
                <p class="font-size-sm  font-fam1">Uploaded: <br><time datetime="2016-1-1"> &nbsp;&nbsp;&nbsp;11:09 PM - 1 Jan 2016</time></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

<!-- Reach out level Section -->

  <div class="container mt-7">
    <h1 class="is-size-1 has-text-centered font-fam3 border-bottom-set color-heads">Reach Out Level</h1>
  </div>
  <div class="container mx-auto mt-6">
    <section class="hero is-success mt-5 border-r-4 ">
      <div class="hero-body">
        <nav class="level">
          <div class="level-item has-text-centered mb-5 ">
            <div>
              <p class="heading is-size-4 font-fam2">Total Blogs</p>
              <p class="title has-text-weight-bold ">3,456+</p>
            </div>
          </div>
          <div class="level-item has-text-centered mb-5">
            <div>
              <p class="heading is-size-4 font-fam2">Total Members</p>
              <p class="title has-text-weight-bold">12k+</p>
            </div>
          </div>
          <div class="level-item has-text-centered mb-5 ">
            <div>
              <p class="heading is-size-4 font-fam2">Since</p>
              <p class="title has-text-weight-bold">2015</p>
            </div>
          </div>
          <div class="level-item has-text-centered mb-5">
            <div>
              <p class="heading is-size-4 font-fam2">Likes</p>
              <p class="title has-text-weight-bold">12k</p>
            </div>
          </div>
        </nav>
      </div>
    </section>
  </div>


 <?php
  include './components/_footer.php';
 ?>


</body>

</html>