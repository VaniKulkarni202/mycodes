<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become an instructor</title>
<?php include './links.php'?>
</head>

<body>
    
<div class="card" style="width:250px;height:930px;">
<!-- Side bar Starts -->
  <div class="card-body" style="">
    <img src="./media/imgp2.jpg" style="height:70px;width:75px;border-radius:40px;margin-left:30px;">
    <h5 class="card-title font-weight-bold">Signe Thompson</h5><br>
    <p class="card-text">NAVIGATION</p>
      <div style="margin-left:25px;">
        <label style="color:Blue;"><i class="fab fa-asymmetrik" style="font-size:15px;color:Blue">&nbsp;</i>Become an instructor</label>
        <label><i class="far fa-envelope" style="font-size:15px;color:black"></i>&nbsp;Message</label><br>
        <label><i class="far fa-user" style="font-size:15px;color:black"></i>&nbsp;Manage profile</label></div>
      </div>
  </div>

<!-- Header -->
  <div class="card" style="width:1060px;height:80px;margin-left:280px;margin-top:-925px;">
    <div class="card-body">
      <h5 class="card-title"><i class="fab fa-asymmetrik" style="font-size:21px;color:black"></i>&nbsp;&nbsp;<big>Become an instructor</big></h5>
    </div>
  </div>

<!-- Form heading -->
  <div class="card" style="width:1060px;height:820px;margin-left:280px;margin-top:24px;;">
    <div class="card-body">
      <b class="card-title">INSTRUCTOR APPLICATION FORM</b>
        <div class="card bg-color-info" style="width:1020px;height:70px;margin-top:13px;">
          <div class="card-body"style="color:rgb(0,102,0);background-color:rgb(204, 230, 255)">
            <b class="card-title" >Heads Up!</b><br>
          <small>Fill all the fields carefully and share if you want to share any document with us.It will help use to evaluate you as an instructor.</small>
          </div>
        </div>
  
      <br>
  <!-- Form body start -->
  <form>
    <label><b>Name:</b></label>
      <input type="text" class="form-control" placeholder="Signe Thompson" required>
      <small style="color:grey">Your name is required</small><br>
    <label><b>Email address:</b></label>
      <input type="text" class="form-control" placeholder="student@example.com"required>
      <small style="color:grey">Your email is required</small><br>
      <div class="form-group">
        <label for="exampleFormControlTextarea1"><b>Address:</b></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        <small style="color:grey">Your address is required</small>
      </div>
    <label><b>Phone number:</b></label>
      <input type="text" class="form-control" placeholder="Your phone number will go here"required>
      <small style="color:grey">Your phone number is required</small><br>
    <label for="exampleFormControlTextarea1"><b>Any message:</b></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      <small style="color:grey">If any message you want to share</small><br>
    <label><b>Document:</b></label>
      <div class="col-sm-13 my-1">
        <div class="input-group">
          <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Document">
            <div class="input-group-prepend">
              <div class="input-group-text">Browse
              </div>
            </div>
        </div>
      </div>
          <small style="color:grey">If any does document you want to share(.doc, .docs, .pdf, .txt, .png, .jpg, .jpeg)Are accepted</small><br><br>
          <p><button class="w3-button w3-deep-purple" style="margin-left:500px;">Apply</button></p>
  </form>
  </div>
</div>
</body>
</html>
