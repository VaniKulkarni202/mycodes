<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My messages</title>
    <?php include './links.php'?>
</head>
<body>
<!-- nav bar start -->
<nav class="navbar navbar-light bg-secondary" >
  <div>
   <label class="navbar text-white mt-2"><h2>My messages</h2></label>
  </div>
</nav>
<!-- tab start -->
<div>
  <ul class="nav nav-tabs  bg-secondary"> 
  <li class="nav-item">
    <a class="nav-link text-white " href="#">All courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Wishlists</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-black active" href="#">My messages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Purchase History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">User profile</a>
  </li>
  </ul>
</div>

<div class="row row-cols-1 row-cols-md-2">
  <!-- left card -->
  <div class="col mb-4">
    <div class="card"style="border:;background-color:;height:620px;width:500px;margin-left:5px;" >
      <div class="card-body text-left font-weight-bold">
        <button style="border-color:rgb(0, 179, 179);color:rgb(0, 179, 179);background:transparent">Compose</button>
        <hr style="width:600px;margin-left:-60px;">

        <div>
          <img src="./media/imgp3.jpg" style="height:40px;width:50px;border-radius:60px;margin-left:30px;">&nbsp;&nbsp;John Doe
          <small style="margin-left:160px;color:grey;">Mon, 1 Jul 2019<p style="margin-left:90px;">Hello jane,this is john.</p></small>
        </div>

        <div>
          <img src="./media/imgp2.jpg" style="height:40px;width:50px;border-radius:60px;margin-left:30px;">&nbsp;&nbsp;Signe Thompson
          <small style="margin-left:100px;color:grey;">Mon, 1 Jul 2019<p style="margin-left:90px;">Hey, are you there?</p></small>
        </div>

        <div>
          <img src="./media/imgp.jpg" style="height:40px;width:50px;border-radius:60px;margin-left:30px;">&nbsp;&nbsp;Mildred Pearson
          <small style="margin-left:100px;color:grey;">Mon, 1 Jul 2019<p style="margin-left:90px;">How the hell is going on?</p></small>
        </div>

      </div>
    </div>
  </div>

<!-- right card -->
  
  <div class="col mb-4">
    <div class="card"style="height:620px;margin-left:-190px;width:850px;" >
      <div class="card-body text-left ">
        <div class="card-text font-weight-bold"style="color:rgb(0, 179, 179);">
          <img src="./media/imgp3.jpg" style="height:40px;width:50px;border-radius:60px;margin-left:30px;">&nbsp;&nbsp;John Doe
        </div> 
        <hr style="width:840px;margin-left:-20px;">
   
        <div class="fluid-container" style="background-color:rgb(228,234,237);width:150px;height:60px;">
          <div style="margin-left:15px;" >
            <small style="color:Grey;">Tue, 25-Jun-2019</small>
            <label>Hello jane</label>
          </div>
        </div><br>
        
      <div style="margin-left:500px;">
          <div class="fluid-container" style="background-color:rgb(228,234,237);width:150px;height:60px;">
            <div class="body" style="margin-left:15px;" >
              <small style="color:Grey;">Tue, 25-Jun-2019</small>
              <label>Hello Sir</label>
            </div>
          </div><br>
   
        <div class="fluid-container" style="background-color:rgb(228,234,237);width:280px;height:60px;">
          <div class="body" style="margin-left:15px;" >
            <small style="color:Grey;">Mon, 1-Jul-2019</small>
            <label>Sir, Are you there? I'm waiting.</label>
          </div>
        </div><br>
   
        <div class="fluid-container" style="background-color:rgb(228,234,237);width:280px;height:60px;">
          <div class="body" style="margin-left:15px;" >
            <small style="color:Grey;">Mon, 1-Jul-2019</small>
            <label>Hello jane, This is john.</label>
          </div>
        </div> 
      </div><br><br>
    <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Type your message..."rows="3"></textarea><br><br>
    <button class="button text-center font-weight-bold"style="background-color:rgb(209,25,59);color:white;border:transparent;">Send</button>
    </div>
  </div>
  </div>
  </div>
</body>
</html>