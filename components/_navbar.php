<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}

include './assets/utilities.php';
include './assets/style.php';

echo '
<nav class="navbar has-shadow-lg has-background-info-light" role="navigation" aria-label="main navigation">
<div class="navbar-brand">
  <a class="navbar-item mx-2" href="../project-1/Index.php">
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
      <a class="navbar-item" href="/projects/project-1/index.php">
        Home
      </a>';

if ($loggedin && $loggedin == true) {
  echo '
       <a class="navbar-item" href="../project-1/Blogs.php">
          Blogs
        </a>
        ';
}

echo '<a class="navbar-item" href="../project-1/featuredBlogs.php">
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
      <div class="buttons">';

if ($loggedin != true) {
  echo '<a class="button is-danger mr-4  has-text-weight-bold" href="./components/_signup.php">
              <strong>Signup</strong>
            </a>
            <a class="button is-link  has-text-weight-bold" href="./components/_login.php">
              <strong>Login</strong>
            </a>
        ';
}

if ($loggedin == true) {
  echo '
  <div class="dropdown my-0 has-background-none" style="margin-top: -8px!important;  float: left;">
    <button class="dropbtn border-r-4"><i class="fas is-size-4 fa-solid fa-user"></i></button>
    <div class="dropdown-content p-4 " style="float: right;">
    <a class=" dropdown-content-link font-fam2 is-size-4 has-text-weight-bold has-text-white border-r-2 has-background-link my-3">'. $_SESSION["blogger_username"].'</a>
      <a href="#" class="dropdown-content-link font-fam2">Your Profile</a>
      <a href="#" class="dropdown-content-link font-fam2">Your Account</a>
      <a href="#" class="dropdown-content-link font-fam2">All Blogs</a>
      <hr>
      <a href="./components/_logout.php" class="hover-btn font-fam2 border-r-1">Logout</a>
      </div>
  </div>
  ';
}
echo '

      
      </div>
    </div>
  </div>
</div>
</nav>
';

?>
<style>
.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-link  {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-link:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.hover-btn{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  cursor: pointer;
  display: block;
}
.hover-btn:hover {
  background-color: #f14668;
  color: white;
}

</style>
