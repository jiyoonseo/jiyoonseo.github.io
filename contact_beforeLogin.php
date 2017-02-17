<div class="row">
    <div class="form-group col-lg-6 col-md-6 col-sm-6">
      <label for="fname">First Name</label>
      <input required type="text" name="fname" class="form-control" id="fname" placeholder="<?php echo getFirstNameWhenLoggedIn() ?>">
    </div>
      <div class="form-group col-lg-6 col-md-6 col-sm-6">
      <label for="lname">Last Name</label>
      <input required type="text" name="lname"  class="form-control" id="lname" placeholder="<?php echo getLaststNameWhenLoggedIn() ?>">
    </div> 
</div>                            

  <div class="form-group has-success">
    <label for="emailInquiry">Email address</label>
    <div class="input-group">
    <span class="input-group-addon">@</span>
    <input type="email" required name="email" class="form-control" id="emailInquiry" placeholder="<?php echo getEmailWhenLoggedIn() ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="psword" class="form-control" id="password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="match_password">Password Confirmation</label>
    <input type="password" name="psword_confirm" onkeyup="checkPass(); return false;"  class="form-control" id="match_password" placeholder="Confirm Password" required>
    <span id="confirmMessage"></span>
  </div>              

  <div class="form-group">
    <label for="select">Select your approximant event size (Number of peoples)</label>
    <select class="form-control" name="select_event_size">
      <option> To Be Decided</option>
      <option> Under 10 people</option>
      <option> 11 - 50 people</option>
      <option> 51 - 100 people</option>
      <option> 101 - 200 people</option>
      <option> More than 200 people</option>
    </select>	              
  </div>

  <div class="form-group">
      <label for="comment">Comment</label>
    <textarea class="form-control" name="comment" id="comment" rows="15"></textarea>
  </div>

  <div class="form-group">
    <label for="file_attachment">Attach File</label>
    <input type="file" id="file_attachment">
    <!--<p class="help-block">Example block-level help text here.</p>-->
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" required > By checking this box I agree to the terms and conditions.
    </label>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" id="special_offer" name="special_offer"> Check if you would like to receive special offers.
    </label>
  </div>


  <button type="submit" id="about_submit" class="btn btn-default btn-group-justified"><?php echo submitMessage(); ?></button>

  <script>
    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('password');
        var pass2 = document.getElementById('match_password');
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