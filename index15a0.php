
<?php include "include/head.php";?>
<?php include "include/contact_form.php";?>
        <div class="bannerwrap insideheaders">
      <div class="bannerleft">
<h1 class="fadeInLeft wow">Contact <span>Us</span></h1>
      </div>
    </div>
      </div>
</div>

</div>

<div class="inside_wrap support">
  <div class="content">
   
    <div class="supportright">


 



<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


 <?php echo"$success";?>
 <?php echo"$fail";?> 
<table cellspacing=0 cellpadding=2 border=0>
    <?php echo"$first_name_err";?>
<div class="form-block">
 <input type="text" name="first_name" value="" size=30 class=inpts placeholder="Your First Name" required>
</div>
<?php echo"$last_name_err";?>
<div class="form-block">
 <input type="text" name="last_name" value="" size=30 class=inpts placeholder="Your Last Name" required>
</div>
<?php echo"$email_err";?>
<div class="form-block">
<input type="text" name="email" value="" size=30 class=inpts placeholder="Your Email" required>
</div>

<div class="form-block">
 <input type="text" name="phone" value="" size=30 class=inpts placeholder="Your Phone No" required>
</div>
<?php echo"$subject_err";?>
<div class="form-block">
 <input type="text" name="subject" value="" size=30 class=inpts placeholder="Subject" required>
</div>
<?php echo"$message_err";?>
<div class="form-block">
    <textarea name="message" class=inpts cols=45 rows=4 placeholder="Your Message"></textarea>
</div>
<div class="form-block">
    <input type="submit" value="Send" class=sbmt>
</div>
</table>
</form>

</div>
      
      
       <div class="supportleft">
      <p>Do you have any questions? We strongly recommend that you start searching for the necessary information in the FAQ section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.</p>
      <h2>Email us at <a href="mailto:<?php echo"$email_admin1";?>"><?php echo"$email_admin1";?></a></h2>

 </div>
  </div>
</div><?php include "include/foot.php";?>

<!-- Mirrored from <?php echo"$site_name3";?>/?a=support by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:56:28 GMT -->
</html>
 