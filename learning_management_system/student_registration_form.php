<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registration page</title>
    <?php include './links.php';?>
</head>




<body style="background: url(./media/image15.jpg);background-size: cover;">
  <div style="background-color:darkblue;height:620px;width:450px;margin-right:500px;padding:30px;color:white;font-style:unset;
  margin-top:30px;border-radius:6px;margin-left:450px;">
      
      <form action="./.php" method="POST">
          <h3 style="margin-top:5px;text-align:center;">Registration form</h3>
          <h6 style="text-align:center;"> Sign up and start learning</h6><br>
          <i class="fa fa-user" style="font-size:18px;color:white"></i>
          <label>Name :</label><br>
          <div class="row">
            <div class="col-md-6">
              <input type="text"  placeholder="enter your first name" name="FName" class="form-control"required size=3>
            </div>
              <div class="col-md-6">
                <input type="text" placeholder="enter your last name" name="LName" class ="form-control"required size=3>
              </div>
          </div><br>
          <i class='fas fa-mobile-alt' style='font-size:18px;color:white'></i>
          <label>Mobile Number :</label><br>
          <div class="row">
            <div class="col-md-4">
              <select name="prefix" class="form-control">
                <option>+91</option>
                <option>+92</option>
                <option>+93</option>
                <option>+94</option>
              </select>
            </div>
                
            <div class="col-md-8">
              <input type="number" placeholder="enter your mobile number" name="MobileNumber" class="form-control"required size=10>
            </div>
          </div><br>
          <i class='fas fa-envelope' style='font-size:18px;color:white'></i>
          <label>Email :</label><br><input type="email" placeholder="enter your email id" name="Email"class="form-control"required ><br>
          <i class='fas fa-lock' style='font-size:18px;color:white'></i>  
          <label>Password :</label><br>
          <input type="password" placeholder ="create your password" name="Password" class="form-control" required size=8><br>
               
               
                
                
                <!-- <div class="form-check" style="padding-left:1px;">Gender :
                  <input class="form-check-input" type="radio" name="Gender" id="exampleRadios1" value="m" checked style="margin-left:8px;">
                  <label class="form-check-label" for="exampleRadios1" style="margin-left:25px">
                    Male
                  </label>
                
                
                  <input class="form-check-input" type="radio" name="Gender" id="exampleRadios2" value="f"style="margin-left:10px;">
                  <label class="form-check-label" for="exampleRadios2 "style="margin-left:30px">
                    Female
                  </label>
              
                  <input class="form-check-input" type="radio" name="Gender" id="exampleRadios2" value="o"style="margin-left:10px;">
                  <label class="form-check-label" for="exampleRadios2 "style="margin-left:30px;">
                    Others
                  </label>
              
                
          
                </div> -->
                <br>
                 <button type="submit" class="btn btn-danger">Sign up</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Cancel</button><br><br>
                <label>Already have an account?</label><a href='#'>Login</a>

      </div>
</form>

</body>
</html>