`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <?php include './links.php'?>
</head>
<body>
    
<!-- nav bar -->
<nav class="navbar navbar-light bg-secondary" >
  <div><label class="navbar text-white mt-2"><h2>User Profile</h2></label></div>
</nav>
<div>
  <ul class="nav nav-tabs  bg-secondary"> 
    <li class="nav-item">
      <a class="nav-link text-white " href="#">All courses</a>
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
      <a class="nav-link text-black active" href="#">User profile</a>
    </li>
  </ul>
</div>


<div class="card" style="width:240px;height:770px;margin-top:30px;margin-left:30px;">
  <div class="card-body font-weight-bold" style="">
    <img src="./media/imgp3.jpg" style="height:70px;width:75px;border-radius:40px;margin-left:70px;margin-top:-10px;">
    <h5 class="card-title font-weight-bold text-center">Jane Doe</h5><br>
    <button type="button" class="btn btn-secondary text-left"style= "width:16rem;margin-left:-20px;"><b>Profile</b></button><br>
    <button type="button" class="btn btn-light text-left"style= "width:13rem;margin-left:-18px;color:rgb(0, 179, 179);"><b>Account</b></button><br>
    <button type="button" class="btn btn-light text-left"style= "width:13rem;margin-left:-18px;color:rgb(0, 179, 179);"><b>Photo</b></button><br>
  </div>
</div>


<div class="card" style="height:770px;width:1050px;margin-left:270px;margin-top:-770px;">
  <div class="card-body" style="width:700px;margin-left:200px;">
    <h3 style="margin-top:5px;text-align:center;"><b>Profile</b></h3>
    <h6 style="text-align:center;">Add information about youirself to share on your profile.</h6>
    <hr style="width:1050px;margin-left:-220px;">

    <!-- form body -->
  <form>
    <label>Basic:</label>
    <input type="text" class="form-control" placeholder="Jane" required><br>
    <input type="text" class="form-control" placeholder="Doe" required><br>
    <label>Biography:</label>
    <div class="card">
      <div class="card-body">
        <i class="fa fa-bold" style="font-size:18px"></i>&nbsp;&nbsp;&nbsp;
        <i class="fa fa-italic" style="font-size:18px"></i>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <b>Iam nothing but a piece of shit.What about you?</b><br>
      </div>
    </div><br>
    <input type="text" class="form-control" placeholder="https://www.twitter.com/jane-doe" required><small >Add your twitter link</small><br><br>
    <input type="text" class="form-control" placeholder="https://www.facebook.com/jane-doe" required><small >Add your facebook link</small><br><br>
    <input type="text" class="form-control" placeholder="https://www.linkedin.com/jane-doe" required><small >Add your Linkedin link</small><br><br>
    <hr style="width:1050px;margin-left:-220px;">
    <p><button class="w3-button w3-red" style="margin-left:270px;">Save</button></p><br><br>
  </div>
</div>
</body>
</html>