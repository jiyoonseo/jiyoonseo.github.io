<!-- When login is successful, directs to the page it came from and show a modal below-->

<div class="modal fade" id="loginSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Successfully Logged in!</h4>
      </div>
      <div class="modal-body">
          <p>Login tester body
          <?php
          
          //setcookie('successfully_loggedin', '0', time()+3600); 
          if(@$_COOKIE['successfully_loggedin'] == 'true'){
              echo "SUCCESS great job!<br>";
              echo "Thank you for log in!<br>";
          }
          ?>
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- -->