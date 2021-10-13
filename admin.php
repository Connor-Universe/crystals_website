<?php include "include/head.php";?>
<?php include "include/admin_process.php";?>
        <div class="bannerwrap insideheaders">
      <div class="bannerleft">
<h1 class="fadeInLeft wow">Admin <span>Login</span></h1>
      </div>
    </div>
      </div>
</div>

</div>

<div class="loginpage">
  <div class="content">

    <div class="loginwrappers">
    <div class="icon"><img src="styles/images/logicon.png" alt="" /></div>
      <div class="loginheads">Admin Login</div>

                  <div class="form-container login">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<table cellspacing=0 cellpadding=2 border=0 width="100%">

                                            <?php echo"$username_err";?>
<tr>

 <td colspan="2"><input type="text" name="username"  class=inpts size=30 autofocus="autofocus" placeholder="username"></td>
</tr>
<?php echo"$password_err";?>
<tr>

 <td colspan="2"><input type="password" name="password"  class=inpts size=30 placeholder="Password"></td>
</tr>
<tr>
  <td height="40" valign="middle">
     <input type="submit" value="Login" class=sbmt /></td>

</tr></table>
</form>
</div>
    </div>
  </div>



  </div>
</div><?php include "include/foot.php";?>

<!-- Mirrored from <?php echo"$site_name3";?>/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:56:30 GMT -->
</html>
 