<div class="row">
    <div class="form-group col-lg-6 col-md-6 col-sm-6">
      <label for="fname">First Name</label>
      <input required type="text" name="fname" class="form-control" id="fname" value = "<?php echo getFirstNameWhenLoggedIn() ?>" placeholder="<?php echo getFirstNameWhenLoggedIn() ?>">
    </div>
      <div class="form-group col-lg-6 col-md-6 col-sm-6">
      <label for="lname">Last Name</label>
      <input required type="text" name="lname"  class="form-control" id="lname" value = "<?php echo getLaststNameWhenLoggedIn() ?>" placeholder="<?php echo getLaststNameWhenLoggedIn() ?>">
    </div> 
</div>    

  <div class="form-group has-success">
    <label for="emailInquiry">Email address</label>
    <div class="input-group">
    <span class="input-group-addon">@</span>
    <input type="email" name="email" required class="form-control" id="emailInquiry" value = "<?php echo getEmailWhenLoggedIn() ?>"  placeholder="<?php echo getEmailWhenLoggedIn() ?>">
    </div>
  </div>            

  <div class="form-group">
    <label for="select">Select your approximant event size (Number of peoples)</label>
    <select class="form-control" name="select_event_size">
      <option value="ToBeDecided"> To Be Decided</option>
      <option value="Under10"> Under 10 people</option>
      <option value="11_50"> 11 - 50 people</option>
      <option value="51_100"> 51 - 100 people</option>
      <option value="101_200"> 101 - 200 people</option>
      <option value="More_than_200"> More than 200 people</option>
    </select>	              
  </div>

  <div class="form-group">
      <label for="comment">Comment</label>
    <textarea class="form-control" name="comment" rows="15"></textarea>
  </div>


  <div class="form-group">
    <label for="file_attachment">Attach File</label>
    <input type="file" id="file_attachment">
    <!--<p class="help-block">Example block-level help text here.</p>-->
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" id="special_offer"> Check if you would like to receive special offers.
    </label>
  </div>


  <button type="submit" id="about_submit" class="btn btn-default btn-group-justified"><?php echo submitMessage(); ?></button>

