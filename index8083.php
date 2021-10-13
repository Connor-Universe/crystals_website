<?php include "include/head.php";?>
<?php include "include/reset_process.php";?>
        <div class="bannerwrap insideheaders">
      <div class="bannerleft">

<h1 class="fadeInLeft wow">Forgot <span>your password</span></h1>
      </div>
    </div>
      </div>
</div>

</div>


<div class="inside_wrap news">
  <div class="content">












  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="login-form">
                      <?php echo"$email_err";?>            
                      <?php echo"$success";?> <div class="login-inner-block">
                            <div class="frm-grp">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter your email address">
                            </div>
                        </div>

                     
                        <div class="btn-area text-center">
                            <button type="submit" class="btn btn-primary">Send Reset Email</button>
                        </div>
                        <div class="d-flex mt-5 justify-content-center">
                            <a href="indexc30b.php" class="forget-pass">Login Here</a>
                        </div>
    
                    </form><br><br>
 </div>
  </div>
</div><?php include "include/foot.php";?>

<!-- Mirrored from <?php echo"$site_name3";?>/?a=forgot_password by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:56:33 GMT -->
</html>
 