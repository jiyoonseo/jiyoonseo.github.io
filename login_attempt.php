<!-- Login Attempt -->
<!-- Modal -->


<!-- Modal for LOGIN BUTTON  -->
<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       	<form action="script/login.php" method="post">
          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input required type="email" name="login_email" class="form-control" id="inputEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input required type="password" name="login_password" class="form-control" id="inputPassword" placeholder="Enter Password">
          </div>        
          <div class="checkbox">
            <label>
              <input type="checkbox">Receive newsletters email
            </label>
          </div>
          <button type="submit" class="btn btn-primary" style="width: 45%;">Log In</button>
          <button type="button" class="btn btn-default" style="width: 45%; float:right;" data-dismiss="modal" data-toggle="modal" data-target="#register">Register</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- end of login attempt -->

<!-- Modal for register BUTTON  -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       	<form action="script/register.php" method="post"> <!-- <?php // echo $_SERVER['PHP_SELF']; ?> -->
        
          <div class="form-group">
            <label for="fname">First Name</label>
            <input required type="text" name="fname" class="form-control" id="fname" placeholder="Jane">
          </div>
            <div class="form-group">
            <label for="lname">Last Name</label>
            <input required type="text" name="lname"  class="form-control" id="lname" placeholder="Doe">
          </div>        
          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input required type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="inputPassword1">Password</label>
            <input type="password" name="psword" class="form-control"  id="inputPassword1" placeholder="Password">
          </div>       
          <div class="form-group">
            <label for="inputPassword2">Password Confirmation</label>
            <input type="password" class="form-control" id="inputPassword2" onkeyup="checkPass(); return false;"   placeholder="Password Confirmation">
            <span id="confirmMessage"></span>
          </div>             
          <div class="checkbox">
            <label>
              <input type="checkbox" required>By checking this box I agree to the terms and conditions. 
            </label>
          </div>
          <button type="submit" class="btn btn-primary " style="width: 45%; ">Register</button>
          <button type="button" class="btn btn-default " style="width: 45%; float:right;"data-dismiss="modal">Cancel</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- end of register attempt -->



  <script>
    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('inputPassword1');
        var pass2 = document.getElementById('inputPassword2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if(pass1.value == pass2.value){
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }        
      
  </script>