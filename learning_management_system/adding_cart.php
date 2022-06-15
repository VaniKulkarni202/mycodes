<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding to cart</title>
    <?php include './links.php'?>

</head>



<body>
<!-- start of nav bar -->

<nav class="navbar navbar-light bg-dark">
  <div>
    <ol class="breadcrumb p-3 mb-2 bg-dark">
      <li class="breadcrumb-item "><a href="#"><i class='fas fa-home' style='font-size:24px;color:white;'></i></a></li>
      <li class="breadcrumb-item"><a href="#"><b style="color:white;">Shopping cart</b></a></li>
    </ol>
    <h2 style="color:white;">Shopping cart</h2>
  </div>
</nav>

<!-- start of courses list -->
<p style="margin-left:50px;margin-top:50px;"><strong><big>4 courses in cart</big></strong>
<big style="margin-left:860px;">Total:</big>
<big style="color:red;margin-left:1010px;"><b><big><big>$139</big></big></b></big>
<s style="color:grey;">427.97</s></p>
<button type="button" class="btn btn-danger text-white"style="margin-left:1060px;width:200px;"><b>Checkout</b></button>

<!-- I course block -->
<div class="card mb-2" style="width:1000px;height:200px;margin-left:50px;margin-top:-80px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <!-- image in card -->
      <img src="./media/img5.jpg" style="height:200px;width:250px;"class="card-img" alt="...">
    </div>
    <!-- text in card -->
    <div class="col-md-8">
      <div class="card-body">
        <b class="card-title" style="margin-left:-90px;">How to Use Color Like a Pro</b>
        <b style="margin-left:310px;color:MediumSeaGreen">Remove</b>
        <b style="margin-left:33px;color:red">$12</b>&nbsp;
        <i class="material-icons" style="font-size:16px;color:red">local_offer</i>
        <label style="margin-left:-90px;">By john Doe.<s style="margin-left:560px;margin-top:-100px;">149.99</s></label>
      </div>
    </div>
  </div>
</div>

<!-- II course block -->

<div class="card mb-2" style="width:1000px;height:200px;margin-left:50px;margin-top:20px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./media/img14.jpg" style="height:200px;width:250px;"class="card-img" alt="...">
    </div>
    
    <div class="col-md-8">
      <div class="card-body">
        <b class="card-title" style="margin-left:-90px;">Sewing 101</b>
        <b style="margin-left:445px;color:MediumSeaGreen">Remove</b>
        <b style="margin-left:30px;color:red">$13</b>&nbsp;
        <i class="material-icons" style="font-size:16px;color:red">local_offer</i>
        <label style="margin-left:-90px;">By john Doe.<s style="margin-left:565px;margin-top:-100px;">$29.99</s></label>
      </div>
      
    </div>
  </div>
</div>



<!-- III course block -->

<div class="card mb-2" style="width:1000px;height:200px;margin-left:50px;margin-top:20px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./media/img11.jpg" style="height:200px;width:250px;"class="card-img" alt="...">
    </div>
    
    <div class="col-md-8">
      <div class="card-body">
        <b class="card-title" style="margin-left:-90px;">After Effects CC 2019: Complete Course from Novice to Expert</b>
        <b style="margin-left:20px;color:MediumSeaGreen">Remove</b>
        <b style="margin-left:30px;color:red">$58</b>&nbsp;
        <i class="material-icons" style="font-size:16px;color:red">local_offer</i>
        <label style="margin-left:-90px;">By john Doe.<s style="margin-left:560px;margin-top:-100px;">$158</s></label>
      </div>
    </div>
  </div>
</div>


<!-- IV course block -->

<div class="card mb-2" style="width:1000px;height:200px;margin-left:50px;margin-top:20px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="./media/img10.jpg" style="height:200px;width:250px;"class="card-img" alt="...">
    </div>

    <div class="col-md-8">
      <div class="card-body">
        <div>
        <b class="card-title" style="margin-left:-90px;">How to Use Lightning Design to Transform your Home</b>
        <b style="margin-left:90px;color:MediumSeaGreen">Remove</b>
        <b style="margin-left:30px;color:red">$56</b>&nbsp;
        <i class="material-icons" style="font-size:16px;color:red">local_offer</i><br>
        <label style="margin-left:-90px;">By john Doe.<s style="margin-left:560px;margin-top:-100px;">$158</s></label>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>