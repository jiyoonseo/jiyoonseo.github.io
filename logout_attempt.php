



<!-- When login is successful, directs to the page it came from and show a modal below-->

<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <p>
          <?php      
            $loggedin = false;          
          if(@$_COOKIE['successfully_loggedin'] == 'true'){
              echo "Thank you, ";
              echo @$_COOKIE['successfully_loggedin_fname']. ", ". @$_COOKIE['successfully_loggedin_lname'];
              echo "<br> We are going to log you out for email: " . @$_COOKIE['successfully_loggedin_email'];                     
          }
          ?>
          </p>
        <form action="logout.php" >
           <button type="submit" class="btn btn-primary" style="width: 45%; ">Log Out</button> 
           <button type="button" class="btn btn-default" style="width: 45%; float:right;" data-dismiss="modal">Cancel</button>        
           
       </form>         
      </div>
        
    </div>
  </div>
</div>


