<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlisting Courses</title>
    <?php include './links.php'?>
  </head>

<body>
<!-- nav bar -->
<nav class="navbar navbar-light bg-secondary">
<div><label class="navbar text-white"><h3>My wishlist</h3></label></div>
</nav>
<!-- tab -->
<div>
  <ul class="nav nav-tabs  bg-secondary"> 
  <li class="nav-item">
    <a class="nav-link text-white" href="#">All courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-black active" href="#">Wishlists</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">My messages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Purchase History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">User profile</a>
  </li>
</ul>
</div>

<form class="example" action="action_page.php" style="margin-left:900px;margin-top:30px;">
  <input type="text" placeholder="Search.." name="search" style="width:300px;">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<div class="row row-cols-1 row-cols-md-2">
  
  <div class="col mb-4">
    <div class="card" style="width:320px;margin-left:50px;margin-top:80px;">
      <i class='fa fa-heart' style="margin-top:5px;margin-left:270px;font-size:25px;color:red;" ></i>
      <img src="./media/img1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">WordPress Theme Development with Bootstrap</h5>
          <p class="card-text">John Doe</p>
          <div style="margin-left:160px;"><strike>$11.99</strike><b>$10</b>
          </div>
        </div>
    </div>
  </div>
  
  
  <div class="col mb-4">
    <div class="card" style="width:320px;margin-top:80px;margin-left:-300px;">
      <i class='fa fa-heart' style="margin-top:5px;margin-left:270px;font-size:25px;color:red;" ></i>
      <img src="./media/img2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Adobe Illustrator CC-Essentials Training</h5>
        <p class="card-text">John Doe</p>
        <div style="margin-left:160px;"><strike>$18.99</strike><b>$12</b>
        </div>
      </div>
  </div>
  </div>
  </div>
</body>
</html>