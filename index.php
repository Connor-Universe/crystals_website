<?php include "include/head.php";?>
<?php include "include/profit.php";?>
    	<div class="bannerwrap">
        <div class="bannerleft">
          <h1 class="fadeInLeft wow"><span>48% Daily</span> profit & Forever</h1>
          <p class="fadeInRight wow"><?php echo"$site_name3";?> is a brand new online trading platform made so even investors with zero trading experience are successfully making a profit.</p>
           <p class="fadeInRight wow">Our program, unlike any other,guarantees fix hourly interest for investors regardless of market conditions.</p>
       
          <div class="registeredbox hvr-bob flash wow">
                            <a href="indexcca3.php?a=signup" class="hvr-float-shadow fadeInUp wow">Register</a>
                        </div>
          
        </div>
        
        <div class="clear"></div>
        
		<h2 class="bestplan">The best investment plan of  2021.<br/>We pay 2.00% every hour and forever.</h2>
      </div>
</div>

</div>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
  <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
<?php
    $get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments";
    $run_total_invest = mysqli_query($connect,$get_total_invest);
    $total_invest = mysqli_fetch_assoc($run_total_invest);
    $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraws";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_total_users = "SELECT * FROM users";
  $run_total_users = mysqli_query($connect,$get_total_users);
  $total_users = mysqli_num_rows($run_total_users) + 5500;
  $final1 = $total_invest['value_sum'] + 312000;
  $final2 = $total_withdraw['value_sum'] + 520000;
  
    ?>

        <div class="statwrap">
			    <div class="content">  
					<div class="statbox hvr-bob bounceInLeft wow"> <span class="icon"><img src="styles/images/totalaccounticon.png" alt="" /></span>
 <h3>847</h3>
        <p>Running Days</p>
					</div>
					<div class="statbox hvr-bob bounceInLeft wow"> <span class="icon"><img src="styles/images/totaldepositedicon.png" alt="" /></span>
                    <h3 class="odometer"
                                        data-odometer-final="<?php echo"$final1";?>"><?php echo"$final1";?></h3>
        <p>Total Deposited</p>
					</div>
					<div class="statbox hvr-bob bounceIn wow"> <span class="icon"><img src="styles/images/totalwithdrawalicon.png" alt="" /></span>
                    <h3 class="odometer"
                                        data-odometer-final="<?php echo"$final2"?>"><?php echo"$final2";?></h3>
        <p>Total Withdrawals</p>
					</div>
					<div class="statbox hvr-bob bounceInRight wow"> <span class="icon"><img src="styles/images/totalaccounticon.png" alt="" /></span>
                    <h3 class="odometer"
                                        data-odometer-final="<?php echo"$total_users";?>"><?php echo"$total_users";?></h3>
        <p>Total Accounts</p>
					</div>
        </div>
      </div>







  <div class="planwrap">
    <div class="content">
      <h2 class="zoomIn wow" style="text-align:center;">Our <span>Investment</span> plans</h2>
      <div class="planitems">
      <?php
  $get_plan = "select * from plans";
  $run_plan = mysqli_query($connect,$get_plan);
  while($row_plan = mysqli_fetch_array($run_plan)){
      $name = $row_plan['name'];
      $lower = $row_plan['lower_amount'];
      $upper = $row_plan['upper_amount'];
      $percentage = $row_plan['percentage'];
      $day = $row_plan['day'];
      $day = $day * 24;
      echo"
      <div class='planbox one flipInY wow'>
      <div class='plantop'> $percentage daily </div>	
        <div class='planheader'>
          <div class='planname'><span>$day Hours</span> </div>
        </div>
        <div class='planspec'>
          <ul>
            <li class='color'><img src='styles/images/check.png' alt='' /> Minimum: $$lower</li>
            <li><img src='styles/images/check.png' alt='' /> Maximum: $$upper</li>
            <li class='color'><img src='styles/images/check.png' alt='' /> Instant Withdrawals</li>
          </ul>
        </div>
        
                  
      <a href='indexcca3.php?a=signup'>Signup Now</a>
                </div>
      ";
  }
  ?>
      
       
      </div>
    </div>
    
    





 <div class="content">  
    		
	<div class="calculatorwrap">
        <div class="calculatoricon zoomIn wow"><img src="styles/images/calculatoricon.png" alt="" /></div>




<style>
.owl-theme .owl-nav {
    /* margin: 0; */
    display: none;
}
.all-calcu {
    width: 100%;
    padding-bottom: 32px;
}
.latestInner1 {
	width: 1070px;
	margin: 0 auto;
}
.box-1 {
    float: left;
    width: 165px;
    margin-left: 33px;
}

.box-1:first-child{
margin-left:0px;
}


.box-1 label {
    color: #fff;
    letter-spacing: 1px;
    font-size: 15px;
    text-align: center;
    padding-left: 16px;
    text-transform: uppercase;
}

.box-1 input {
    font-family: inherit;
    padding: 9px 10px;
    color: #fdf9f9;
    text-align: center;
    border-radius: 5px;
    font-weight: bold;
    border: none;
    background: #e9a322;
}

.box-1 select {
    width: 105%;
    font-family: inherit;
    padding: 9px 10px;
    border-radius: 5px;
    background: #e9a322;
    border: none;
    color: #fffbfb;
}

</style>

<?php echo"$error";?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="profit"> 
	
	<section class="moto-text">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="all-calcu">
                    <div class="latestInner1">   
    <div class="box-1 bounceInLeft wow">
    
        <label>Select Plan</label>
        <select id="calc_plan " name="plan">
        <?php
                            $get_plan1 = "select * from plans";
                            $run_plan1 = mysqli_query($connect,$get_plan1);
                            while($row_plan1 = mysqli_fetch_array($run_plan1)){
                                $name1 = $row_plan1['name'];
                                $lower1 = $row_plan1['lower_amount'];
                                $upper1 = $row_plan1['upper_amount'];
                                $percentage1 = $row_plan1['percentage'];
                                $day1 = $row_plan1['day'];
                            
                                echo"<option value ='$name1'>$name1($$lower1 - $$upper1)</option>";

                            }
                            $column2 = array();
                            $get_lowest = "select lower_amount from plans";
                            $run_lowest = mysqli_query($connect,$get_lowest);
                            while($column_lowest = mysqli_fetch_array($run_lowest)){
                              $column2[] = $column_lowest[0];
                            }
                            $lowest = min($column2);
                            $column3 = array();
                            $get_higest = "select upper_amount from plans";
                            $run_higest = mysqli_query($connect,$get_higest);
                            while($column_higest = mysqli_fetch_array($run_higest)){
                              $column3[] = $column_higest[0];
                            }
                            $higest = max($column3);


                            ?>
          
        </select>
    </div>
    <div class="box-1 bounceInLeft wow">
        <label>Enter Amount</label>
 <input type="number" placeholder="$0.00" max="<?php echo"$higest";?>" min="<?php echo"$lowest";?>" class="invest-input"
                          name = "invest">
    </div>
  
    <div class="box-1 bounceInRight wow">
        <label>Calulate</label>
        <button type="submit" class="btn btn-primary" name="check"> Calculate </button>
    </div>
    <div class="box-1 bounceInRight wow">
        <label>Your Profit</label>
        <input type="text" placeholder="0.00" value="$<?php echo"$profit";?>" class="profit-input" name = "profit" readonly>
    </div>
    <div class="box-1 bounceInRight wow">
        <label>Total Return</label>
        <input type="text" placeholder="0.00" value="$<?php echo"$return";?>" class="profit-input" name = "profit" readonly>
    </div>
</div></div>

                </div>
            </div>
        </div>
    </section>
    </form>
      </div>
		
    </div>
    




 <div class="content">  

      
      <div class="welcomeblock">
        <div class="welcomeleft bounceInLeft wow"> <img src="styles/images/welcomethumb.png" alt="" /> </div>
        <div class="welcomeright flash wow">
          <h2 class="fadeInUpBig wow">welcome to <span><?php echo"$site_name3";?></span></h2>
          <p class="fadeInUpBig wow">Looking for highest returns on your investments? <?php echo"$site_name3";?> is an automatic online investment platform, part of <?php echo"$site_name3";?> ??? team of professional traders focusing mainly on Bitcoin and other crypto currencies trading over multiple Exchanges and markets. Thanks to the extraordinary diversification of our investments, we are able to deliver steady income for our investors.Thanks to our company, you can become an investor in the network without any specialist knowledge. You can become a partial shareholder of <?php echo"$site_name3";?>, which we buy with a minimum investment of $1 and start earning from 0.3% to 15% per hourly. Just choose one of the four investment plans depending on the amount you want to invest.</p>
         </div>
      </div>
    </div>
    
    
 </div>
  <div class="featureswrap">
    <div class="content">
     
      <h2 class="zoomIn wow"><?php echo"$site_name3";?> <span>features</span></h2>
      <div class="featureinside">
        <div class="featurebox one fadeInDown wow hvr-float-shadow">
			<div class="textf">
				<h3>Professional Team</h3>
				<p>We are team of professional traders in Forex & Crypto Exchange and Coins trading and Crypto Mining who know how to grab the profit end of the day.</p>
			</div>
			<span class="icon"><img src="styles/images/featureicon1.png" alt="" /></span>
          
        </div>
        <div class="featurebox featurebox2 two fadeInUp wow hvr-float-shadow">
				<span class="icon"><img src="styles/images/featureicon2.png" alt="" /></span>
			<div class="textf">
				 <h3>DDOS Protection</h3>
				<p>We are using one of most experienced , professional and trusted DDoS Protection and mitigation provider.</p>
			</div>	
			
		

        </div>
        <div class="featurebox three fadeInDown wow hvr-float-shadow">
			<div class="textf">
				<h3>COMODO SSL Security</h3>
				<p>Our website is using Comodo SSL encryption and that confirms that the presented content is the genuine and legitimate.</p>
			</div>	
          
          <span class="icon"><img src="styles/images/featureicon3.png" alt="" /></span>
          
        </div>
        <div class="featurebox featurebox2 four fadeInUp wow hvr-float-shadow">
			<span class="icon"><img src="styles/images/featureicon4.png" alt="" /></span>
			
				<div class="textf">
					<h3>Registered Company</h3>
					<p>We are a legal company registered in the USA and Panama , providing its investment services to the members all around the world.</p>
				</div>
          		
          
        </div>
        <div class="featurebox five fadeInDown wow hvr-float-shadow"> 
			<div class="textf">
				<h3>Instant Withdrawals</h3>
				<p>Get your payment instantly as soon as you request it! Minimum withdrawal is $0.1. There is no fee for withdrawals of hourly interest.</p>
          
          </div>
          <span class="icon"><img src="styles/images/featureicon5.png" alt="" /></span>
        </div>
        <div class="featurebox featurebox2 six fadeInUp wow hvr-float-shadow"> 
			 <span class="icon"><img src="styles/images/featureicon6.png" alt="" /></span>
			<div class="textf">
				<h3>Great Customer Support</h3>
				<p>We understand how important having reliable support service is to you. Please don't hesitate to contact us should you have any questions and we will get back to you in 24 Hours!</p>
          </div>
         
        </div>
      </div>
   
    

    
		<div class="referral-top">
			<p>At <?php echo"$site_name3";?>, we believe there is no better advertisement than satisfied clients. No wonder that majority of our new clients are affiliates from our existing clients. We are proud that our clients like to recommend our financial service to others. Because of this, we are pleased to offer one of the strongest online affiliate programs in the financial service industry, with a high commission rate, customized tools and reports, and timely commission payouts. </p>
			
			<p><?php echo"$site_name3";?> is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to tell your friends, relatives or colleagues about our company. We offer 2 level referral commissions: The first level of direct referrals from you will entitle you to a commission of 4%, and second level gives you commission of 1% . You can surely make a lot of money from the referral commissions you get!</p>
		</div>
    
	
 
      <div class="refbox left bounceInDown wow">


        <h4 class="fadeInUp wow">Promote <?php echo"$site_name3";?></h4>
        <p class="fadeInUp wow">Present our project to your friends, family, or any other community, advertise & promote it everywhere and enjoy the financial benefits. You don't even need an active deposit to receive affiliate commission.</p>
      </div>
      <div class="refbox right bounceInDown wow">


        <h4 class="fadeInUp wow">Get Affiliates & Earn Money</h4>
        <p class="fadeInUp wow">Once someone registers through your referral link, he automatically becomes your referral! You will receive 4% referral commission for every deposit that your direct referral makes from his wallet. We also offer a second level referral commission - 1% .</p>
      </div>
    </div>

  </div>
  

        
        
        <style>
            
            /*latestContainer*/
.latestContainer {
	width: 100%;
	overflow: hidden;
	padding: 33px 0;
	background: #0e0e6194;
}
.latestInner {
	width: 1170px;
	margin: 0 auto;
}
.latest-row {
	width: 49%;
	float: left;
}
.latest-row ul {
	width: 100%;
	list-style-type: none;
	margin: 0;
	padding: 0;
	border: 2px solid #fff;
	border-bottom: 0;
}
.latest-row ul li {
    line-height: 35px;
    border-bottom: 1px solid #fff;
    font-size: 14px;
    color: #414345;
    padding: 0 15px 0 25px;
    font-weight: 600;
}
.latest-row ul li h3 {
	display: inline-block;
	width: 100%;
	margin: 0;
	line-height: 35px;
	color: #fff;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: 600;
}
.latest-row ul li i {
	display: inline-block;
	float: right;
}
.latest-row ul li span {
	display: inline-block;
	margin:0px 5%;
}

.latest-row ul li span.span1 {width:25%;}

.latest-row ul li:nth-child(odd) {
	background: #e7eaee;
}
.latest-row ul li:nth-child(even) {
	color:#fff;
}
.latest-row1 ul li.title {
	background: url(images/icon-dol.html) #0a3465 no-repeat 13px;
	padding-left: 55px;
	line-height: 37px;
}
.latest-row3 ul li.title {
	background: url(images/icon-dol2.html) #4ba62b no-repeat 13px;
	padding-left: 55px;
	line-height: 37px;
}
.latest-row3 {
	float: right;
}
.latest-row2 {
	width: 35%;
	float: left;
	margin: 0 29px;
}
.latest-row2 h3 {
	width: 100%;
	display: inline-block;
	font-size: 30px;
	font-weight: 300;
	color: #13416d;
	margin: 10px 0 20px;
	text-transform: uppercase;
	text-align: center;
}
.latest-row2 h3 span {
	font-weight: 600;
}
            
        </style>
        
        <div class="latestContainer">
	<div class="latestInner">
		<div class="latest-row latest-row1">

			<ul>
				<li class="title"><h3>Latest deposit</h3></li>
             
                <?php
                                $get_deposit = "select * from investment_request where verified = 1 order by rand() DESC limit 0,5  ";
                                $run_deposit = mysqli_query($connect,$get_deposit);
                                while($row_deposit = mysqli_fetch_array($run_deposit)){
                                  $username = $row_deposit['username'];
                            
                                    

                                    $amount2 = $row_deposit['amount_invest'];

                              
                             
                                    echo"
                                    <li>
                                    <span class='span1'>$username</span>
                                    <span>$$amount2</span>
                        <i><img src='images/1000.gif' style='margin-top: 10px;'></i>
                                </li>
                                    ";
                                }
                                ?>
 
			
					
 
	
				



                				
                                			</ul>
            
		</div>

		<div class="latest-row latest-row3">
        
			<ul>
				<li class="title"><h3>Latest withdrawals</h3></li>
                
				
                <?php
                                $get_deposit1 = "select * from withdraw_request where verified = 1 order by rand() DESC limit 0,5  ";
                                $run_deposit1 = mysqli_query($connect,$get_deposit1);
                                while($row_deposit1 = mysqli_fetch_array($run_deposit1)){
                                  $username1 = $row_deposit1['username'];
                            
                                    

                                    $amount21 = $row_deposit1['amount_invest'];

                              
                             
                                    echo"
                                    <li>
                                    <span class='span1'>$username1</span>
                                    <span>$$amount21</span>
                        <i><img src='images/1000.gif' style='margin-top: 10px;'></i>
                                </li>
                                    ";
                                }
                                ?>
	
                                
                                			</ul>
            
		</div>
	</div>
	
</div>
<center><!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/forex-screener/" rel="noopener" target="_blank"><span class="blue-text">Forex Screener</span></a> by TradingView</div>
  <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": 1100,
  "height": 512,
  "defaultColumn": "overview",
  "defaultScreen": "general",
  "market": "forex",
  "showToolbar": true,
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END --><center>
<?php include "include/foot.php";?>

<!-- Mirrored from <?php echo"$site_name3";?>/?a=refs10 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 09:56:31 GMT -->
</html>
 

