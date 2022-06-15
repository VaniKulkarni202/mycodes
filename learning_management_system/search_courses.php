<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for a course</title>
    <?php include './links.php'?>
    <style>
      .checked {
        color: orange;
        }
    </style>
</head>

<body>
<!-- nav bar starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="./media/logo1.png" style="height:50px;width:70px;">
    <a class="navbar-brand" href="#"><b>academy</b></a>
    <i class="fa fa-th" style="font-size:18px"></i>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Courses </a>
        </li>
        <form class="form-inline my-1 my-lg-0">
          <input class="form-control mr-sm-1" type="search" placeholder="wordpress" aria-label="Search" style="width:600px;">
          <button style="border:transparent;"><i class="fa fa-search" style="font-size:25px;color:red"></i></button>
        </form>
        
        <li class="nav-item active">
          <a class="nav-link"href="#">Instructor </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">My courses </a>
        </li>
        <i class='far fa-heart' style="margin-top:10px;margin-left:10px;font-size:25px" ></i><sup style="color:red;margin-top:18px;"><b><big>2</big></b></sup>&nbsp;
        <i class='fas fa-shopping-cart' style="margin-top:10px;margin-left:10px;font-size:24px"></i><sup style="color:red;margin-top:18px;"><b><big>4</big></b></sup>&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="./media/imgp.jpg" style="height:40px;width:50px;border-radius:30px;">
    </div>
</nav>
<!-- bread-crumb  starts -->
<nav>
  <ol class="breadcrumb p-3 mb-2 bg-dark">
    <li class="breadcrumb-item "><a href="#"><i class='fas fa-home' style='font-size:24px;color:white;'></i></a></li>
    <li class="breadcrumb-item"><a href="#"><b style="color:white;">Courses</b></a></li>
    <li class="breadcrumb-item"><a href='#'><b style="color:white;">All category</b></a></li>
  </ol>
</nav>
<div>
  <p style="margin-left:230px;margin-top:14px;"><big>Showing on this page : 1</big>
  <i class="fa fa-refresh" style="font-size:18px;margin-left:500px;color:LightSeaGreen;"></i>&nbsp;
  <i class="fa fa-th-list" style="font-size:18px;color:LightSeaGreen"></i>&nbsp;
  <i class="fa fa-th" style="font-size:18px;color:LightSeaGreen;margin-left:3px;margin-top:20px;"></i></p>
  <hr>

  <div class="row row-cols-1 row-cols-md-2">
    
    <div class="col mb-4">
      <div class="card"style="margin-top:50px;width:300px;margin-left:230px;">
        <div class="card-header">
          <h5>Filter
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders" fill="currentColor" xmlns="http://www.w3.org/2000/svg"style="margin-left:230px;margin-top:-50px;">
            <path fill-rule="evenodd" d="M14 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM7 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM4.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9.5 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
            <path fill-rule="evenodd" d="M9.5 4H0V3h9.5v1zM16 4h-2.5V3H16v1zM9.5 14H0v-1h9.5v1zm6.5 0h-2.5v-1H16v1zM6.5 9H16V8H6.5v1zM0 9h2.5V8H0v1z"/></svg></h5>
        </div>
      <div class="card-body">
        <h6 class="card-title">Categories</h6>
        <div class="card-text">
          <p style="margin-left:30px;"><input type="radio" name="options" id="option1" checked> All category</p>
          <p style="margin-left:35px;"><input type="radio" name="options" id="option2"> Web Design</p>
          <p style="margin-left:35px;"><input type="radio" name="options" id="option3"> responsive Design</p>
          <p style="margin-left:35px;"><input type="radio" name="options" id="option3"> WordPress Theme</p>
          <p style="margin-left:35px;"><input type="radio" name="options" id="option3"> WordPress Theme</p>
          <p style="margin-left:35px;"><input type="radio" name="options" id="option3"> Bootstrap</p>
          <p style="margin-left:35px;"><input type="radio" name="options" id="option3"> HTML & CSS</p>
        </div>
      </div>  
    </div>
  </div>
  
  
  <div class="col mb-4">
    <div class="row row-cols-1 row-cols-md-2">
      
      <div class="col mb-4">
        <div class="card" style="width:770px;margin-left:-130px;margin-top:50px;">
          <img src="./media/img13.jpg" style="width:250px;height:300px;"class="card-img-top" alt="...">
        </div>
      </div>

      <div class="col mb-4">
      
        <div class="card-body" style="width:500px;margin-left:-220px;margin-top:50px;">
          <h6 class="card-title"><b>WordPress Theme Develoment with <br>Bootstrap</b></h6><small>John Doe</small>
          <p class="card-text">Learn how to confidently develop custom &profitable<br> Responsive WordPress Themes and Websites with no <br>prior experience.</p>
          <label style="margin-left:365px;"><strong>$10</strong>&nbsp;&nbsp;<s style="color:grey">$11.99</s></label>
          <p><i class='fas fa-play-circle' style='font-size:12px;color:LightGrey'></i>24 lessons 
          <i class='far fa-clock' style='font-size:12px;color:LightGrey'></i>24:10:22 Hours 
          <i class='fas fa-closed-captioning' style='font-size:12px;color:LightGrey'></i>English
          <label style="margin-left:58px;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star">4</span></label>
          <br>
          Intermediate<label style="margin-left:292px;">2 Ratings</label></p>
        </div>
      </div>
    
    </div>
  </div>

</body>
</html>








