<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase History</title>
   <?php include './links.php'?>
</head>

<body>
<!-- nav bar starts -->
  <nav class="navbar navbar-light bg-secondary">
    <div>
      <label class="navbar text-white"><h3>Purchase history</h3></label>
      </div><br><br>
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
        <a class="nav-link text-black active" href="#">Purchase History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">User profile</a>
      </li>
    </ul>
  </div>


  <p style="margin-top:35px;margin-left:60px;"><b><big>Purchase history</big></b> 
  <label style="margin-left:460px;">Date</label> 
  <label style="margin-left:77px;">Total price</label>
  <label style="margin-left:60px;">Payment type</label> 
  <label style="margin-left:55px;">Actions</label></p>


  <div class="card mb-2" style="width:1130px;height:170px;margin-left:50px;margin-top:5px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="./media/img4.jpg" style="height:170px;width:200px;"class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
         <b class="card-title" style="margin-left:-180px;">User Experience Design Essentials - Adobe XD</b>
         <small style="margin-left:30px;">Wed,17-jun-2020</small>
          <b style="margin-left:40px;">$12</b>&nbsp;
          <small style="margin-left:85px;">Paypal</small>
          <button type="button" class="btn btn-outline-success" style="margin-left:60px;"><b>Invoice</b></button>
          <label><b style="margin-left:-180px;"> UI UX Design</b></label>
        </div>
      </div>
    </div>
  </div>



  <div class="card mb-2" style="width:1130px;height:170px;margin-left:50px;margin-top:30px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="./media/img9.jpg" style="height:170px;width:200px;"class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <b class="card-title" style="margin-left:-180px;color:MediumSeaGreen;">How to shoot B-Roll Footage with Peter</b>
          <small style="margin-left:90px;">Wed,17-jun-2020</small>
          <b style="margin-left:30px;">$1800</b>&nbsp;
          <small style="margin-left:70px;">Paypal</small>
          <button type="button" class="btn btn-outline-success" style="margin-left:58px;"><b>Invoice</b></button>
          <label><b style="margin-left:-180px;color:MediumSeaGreen"> McKinnon</b></label>
        </div>
      </div>
    </div>
  </div>
</body>
</html>