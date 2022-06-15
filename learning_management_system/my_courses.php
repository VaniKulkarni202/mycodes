<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <?php include './links.php'?>
    <style>
        .checked {
                  color: orange;
                 }
    </style>
</head>

<body>
<!-- nav bar start -->
<nav class="navbar navbar-light bg-secondary">
  <div>
    <label class="navbar text-white"><h3>My courses</h3></label>
   </div><br><br>
  
</nav>
<!-- tab start -->
<div>  
  <ul class="nav nav-tabs  bg-secondary"> 
  <li class="nav-item">
    <a class="nav-link text-black active" href="#">All courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Wishlists</a>
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

<label class="mt-4 ml-5">Filter by</label>
  <div class="dropdown">
    <button class="btn btn-outline-success text-success dropdown-toggle ml-5" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Categories</b>
    </button>
    <label class="text-success"><b>Reset</b></label>
    <form class="example" action="action_page.php" style="margin-left:900px;margin-top:-19px;">
      <input type="text" placeholder="Search.." name="search" style="width:300px;">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>





<div class="container" style="margin-top:25px;">

<div class="row row-cols-1 row-cols-md-4">
  
  <div class="col mb-5">
    <div class="card" style="height:385px;width:280px;margin-left:-73px;">
      <img src="./media/img4.jpg" style="height:200px;" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title"><b>User Experience Design Essenti...</b></h6>
            <div class="progress" style="height:5px;margin:-1px;">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              </div><br>
            </div>
              <p><small>100% Completed</small>&nbsp;&nbsp;&nbsp;
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
              <small style="margin-left:170px;">Edit rating</small>
              <p><button class="btn btn-danger" type="submit" style="margin-left:-4px;width:110px;"><small>Course detail</small></button>
              <button class="btn btn-danger" type="submit" style="margin-left:17px;width:110px;"><small>Start lesson</small></button></p>
        </div>
    </div>
  </div> 
  
  
  
<div class="col mb-5" >
    <div class="card" style="height:387px;width:285px;margin-left:-54px;">
      <img src="./media/img1.jpg" style="height:200px;"class="card-img-top" alt="...">
        <div class="card-body" >
          <h6 class="card-title"><b>WordPress Theme Development wi...</b></h6>
            <div class="progress" style="height:5px;margin:-1px;">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 71%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              </div><br>
            </div>
              <p><small>71% Completed</small>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked "></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span></p>
              <small style="margin-left:170px;">Edit rating</small>
              <p><button class="btn btn-danger" type="submit" style="margin-left:-4px;width:110px;"><small>Course detail</small></button>
              <button class="btn btn-danger" type="submit" style="margin-left:17px;width:110px;"><small>Start lesson</small></button></p>
        </div>
    </div>
  </div>
  
  
  
  
  <div class="col mb-5">
    <div class="card" style="height:387px;width:280px;margin-left:-30px;">
      <img src="./media/img2.jpg" style="height:200px;"class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title"><b>Adobe Illustrator CC-Essentials...</b></h6>
        
     
        <div class="progress" style="height:5px;margin:-1px;">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" 
  style="width: 25%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div><br>
  </div><p><small>25% Completed</small>&nbsp;&nbsp;&nbsp;&nbsp;
  <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span></p>
    <small style="margin-left:170px;">Edit rating</small>

    <p>
    <button class="btn btn-danger" type="submit" style="margin-left:-4px;width:110px;"><small>Course detail</small></button>
    <button class="btn btn-danger" type="submit" style="margin-left:17px;width:110px;"><small>Start lesson</small></button>
    </p>

        </div>
    </div>
  </div>
  


  <div class="col mb-5">
    <div class="card" style="height:387px;width:280px;margin-left:-10px;">
      <img src="./media/img9.jpg"style="height:200px;" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title"><b>How To Shoot B-Roll Footage Wi...</b></h6>
            <div class="progress" style="height:5px;margin:-1px;">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              </div><br>
            </div>
              <p><small>15% Completed</small>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span></p>
              <small style="margin-left:170px;">Edit rating</small>
              <p><button class="btn btn-danger" type="submit" style="margin-left:-4px;width:110px;"><small>Course detail</small></button>
              <button class="btn btn-danger" type="submit" style="margin-left:17px;width:110px;"><small>Start lesson</small></button></p>
        </div>
    </div>
  </div>
</body>
</html>