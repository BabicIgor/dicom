<?php
error_reporting(0);
if(isset($msg)){
    echo '<div class="text-center">'.$msg.'</div>';
}
?>
<div class="container">

<div class="row">
    <div class="form-group col-md-6">
        <label>Page Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php echo (isset($page))? $page->title : ""; ?>" required>
    </div>
</div>

	<?php 

	$countdown_vars = @explode("----", $page->title); 
	$cd = @explode("-", $countdown_vars[1]);

	?>

<div class="row">

    <div class="form-group col-md-3">
  	<input type='checkbox' name='activate_coundown' class="show-countdown-check" id="activate_countdown" <?php if($cd[0] != '0' && $cd[0] != '') echo "checked"; ?>>
        <label for="activate_countdown">Activate countdown</label>
    </div>

    <div class="form-group col-md-9 show-countdown" style="display:none;" id="show-countdown">
        <label>Set countdown end date</label>
        <br/>

		<select class="custom-select mr-sm-2" name="countdown_year" id="countdown_year">
		        <option selected value="0">Year</option>
		        <option value="2018" <?php if($cd[0] == 2018) echo 'selected'; ?>>2018</option>
		        <option value="2019" <?php if($cd[0] == 2019) echo 'selected'; ?>>2019</option>
		        <option value="2020" <?php if($cd[0] == 2020) echo 'selected'; ?>>2020</option>
		      </select>
        		<select class="custom-select mr-sm-2" name="countdown_month" id="countdown_month">
		        <option selected value="0">Month</option>
		        <option value="1" <?php if($cd[1] == 1) echo 'selected'; ?>>January</option>
		        <option value="2" <?php if($cd[1] == 2) echo 'selected'; ?>>February</option>
		        <option value="3" <?php if($cd[1] == 3) echo 'selected'; ?>>March</option>
		        <option value="4" <?php if($cd[1] == 4) echo 'selected'; ?>>April</option>
		        <option value="5" <?php if($cd[1] == 5) echo 'selected'; ?>>May</option>
		        <option value="6" <?php if($cd[1] == 6) echo 'selected'; ?>>June</option>
		        <option value="7" <?php if($cd[1] == 7) echo 'selected'; ?>>July</option>
		        <option value="8" <?php if($cd[1] == 8) echo 'selected'; ?>>August</option>
		        <option value="9" <?php if($cd[1] == 9) echo 'selected'; ?>>September</option>
		        <option value="10" <?php if($cd[1] == 10) echo 'selected'; ?>>October</option>
		        <option value="11" <?php if($cd[1] == 11) echo 'selected'; ?>>November</option>
		        <option value="12" <?php if($cd[1] == 12) echo 'selected'; ?>>December</option>
		      </select>


		<select class="custom-select mr-sm-2" name="countdown_day" id="countdown_day">
		        <option selected value="0">Day</option>
		        <option value="1" <?php if($cd[2] == 1) echo 'selected'; ?>>1</option>
		        <option value="2" <?php if($cd[2] == 2) echo 'selected'; ?>>2</option>
		        <option value="3" <?php if($cd[2] == 3) echo 'selected'; ?>>3</option>
		        <option value="4" <?php if($cd[2] == 4) echo 'selected'; ?>>4</option>
		        <option value="5" <?php if($cd[2] == 5) echo 'selected'; ?>>5</option>
		        <option value="6" <?php if($cd[2] == 6) echo 'selected'; ?>>6</option>
		        <option value="7" <?php if($cd[2] == 7) echo 'selected'; ?>>7</option>
		        <option value="8" <?php if($cd[2] == 8) echo 'selected'; ?>>8</option>
		        <option value="9" <?php if($cd[2] == 9) echo 'selected'; ?>>9</option>
		        <option value="10" <?php if($cd[2] == 10) echo 'selected'; ?>>10</option>
		        <option value="11" <?php if($cd[2] == 11) echo 'selected'; ?>>11</option>
		        <option value="12" <?php if($cd[2] == 12) echo 'selected'; ?>>12</option>
		        <option value="13" <?php if($cd[2] == 13) echo 'selected'; ?>>13</option>
		        <option value="14" <?php if($cd[2] == 14) echo 'selected'; ?>>14</option>
		        <option value="15" <?php if($cd[2] == 15) echo 'selected'; ?>>15</option>
		        <option value="16" <?php if($cd[2] == 16) echo 'selected'; ?>>16</option>
		        <option value="17" <?php if($cd[2] == 17) echo 'selected'; ?>>17</option>
		        <option value="18" <?php if($cd[2] == 18) echo 'selected'; ?>>18</option>
		        <option value="19" <?php if($cd[2] == 19) echo 'selected'; ?>>19</option>
		        <option value="20" <?php if($cd[2] == 20) echo 'selected'; ?>>20</option>
		        <option value="21" <?php if($cd[2] == 21) echo 'selected'; ?>>21</option>
		        <option value="22" <?php if($cd[2] == 22) echo 'selected'; ?>>22</option>
		        <option value="23" <?php if($cd[2] == 23) echo 'selected'; ?>>23</option>
		        <option value="24" <?php if($cd[2] == 24) echo 'selected'; ?>>24</option>
		        <option value="25" <?php if($cd[2] == 25) echo 'selected'; ?>>25</option>
		        <option value="26" <?php if($cd[2] == 26) echo 'selected'; ?>>26</option>
		        <option value="27" <?php if($cd[2] == 27) echo 'selected'; ?>>27</option>
		        <option value="28" <?php if($cd[2] == 28) echo 'selected'; ?>>28</option>
		        <option value="29" <?php if($cd[2] == 29) echo 'selected'; ?>>29</option>
		        <option value="30" <?php if($cd[2] == 30) echo 'selected'; ?>>30</option>
		        <option value="31" <?php if($cd[2] == 31) echo 'selected'; ?>>31</option>
		      </select>



		<select class="custom-select mr-sm-2" name="countdown_hour" id="countdown_hour">
		        <option selected value="0">Hour</option>
		        <option value="1" <?php if($cd[3] == 1) echo 'selected'; ?>>1</option>
		        <option value="2" <?php if($cd[3] == 2) echo 'selected'; ?>>2</option>
		        <option value="3" <?php if($cd[3] == 3) echo 'selected'; ?>>3</option>
		        <option value="4" <?php if($cd[3] == 4) echo 'selected'; ?>>4</option>
		        <option value="5" <?php if($cd[3] == 5) echo 'selected'; ?>>5</option>
		        <option value="6" <?php if($cd[3] == 6) echo 'selected'; ?>>6</option>
		        <option value="7" <?php if($cd[3] == 7) echo 'selected'; ?>>7</option>
		        <option value="8" <?php if($cd[3] == 8) echo 'selected'; ?>>8</option>
		        <option value="9" <?php if($cd[3] == 9) echo 'selected'; ?>>9</option>
		        <option value="10" <?php if($cd[3] == 10) echo 'selected'; ?>>10</option>
		        <option value="11" <?php if($cd[3] == 11) echo 'selected'; ?>>11</option>
		        <option value="12" <?php if($cd[3] == 12) echo 'selected'; ?>>12</option>
		        <option value="13" <?php if($cd[3] == 13) echo 'selected'; ?>>13</option>
		        <option value="14" <?php if($cd[3] == 14) echo 'selected'; ?>>14</option>
		        <option value="15" <?php if($cd[3] == 15) echo 'selected'; ?>>15</option>
		        <option value="16" <?php if($cd[3] == 16) echo 'selected'; ?>>16</option>
		        <option value="17" <?php if($cd[3] == 17) echo 'selected'; ?>>17</option>
		        <option value="18" <?php if($cd[3] == 18) echo 'selected'; ?>>18</option>
		        <option value="19" <?php if($cd[3] == 19) echo 'selected'; ?>>19</option>
		        <option value="20" <?php if($cd[3] == 20) echo 'selected'; ?>>20</option>
		        <option value="21" <?php if($cd[3] == 21) echo 'selected'; ?>>21</option>
		        <option value="22" <?php if($cd[3] == 22) echo 'selected'; ?>>22</option>
		        <option value="23" <?php if($cd[3] == 23) echo 'selected'; ?>>23</option>
		        <option value="24" <?php if($cd[3] == 24) echo 'selected'; ?>>24</option>
		      </select>

		<select class="custom-select mr-sm-2" name="countdown_minute" id="countdown_minute">
		        <option selected value="0">Minute</option>
		        <option value="0" <?php if($cd[4] == '0') echo 'selected'; ?>>0</option>
		        <option value="1" <?php if($cd[4] == 1) echo 'selected'; ?>>1</option>
		        <option value="2" <?php if($cd[4] == 2) echo 'selected'; ?>>2</option>
		        <option value="3" <?php if($cd[4] == 3) echo 'selected'; ?>>3</option>
		        <option value="4" <?php if($cd[4] == 4) echo 'selected'; ?>>4</option>
		        <option value="5" <?php if($cd[4] == 5) echo 'selected'; ?>>5</option>
		        <option value="6" <?php if($cd[4] == 6) echo 'selected'; ?>>6</option>
		        <option value="7" <?php if($cd[4] == 7) echo 'selected'; ?>>7</option>
		        <option value="8" <?php if($cd[4] == 8) echo 'selected'; ?>>8</option>
		        <option value="9" <?php if($cd[4] == 9) echo 'selected'; ?>>9</option>
		        <option value="10" <?php if($cd[4] == 10) echo 'selected'; ?>>10</option>
		        <option value="11" <?php if($cd[4] == 11) echo 'selected'; ?>>11</option>
		        <option value="12" <?php if($cd[4] == 12) echo 'selected'; ?>>12</option>
		        <option value="13" <?php if($cd[4] == 13) echo 'selected'; ?>>13</option>
		        <option value="14" <?php if($cd[4] == 14) echo 'selected'; ?>>14</option>
		        <option value="15" <?php if($cd[4] == 15) echo 'selected'; ?>>15</option>
		        <option value="16" <?php if($cd[4] == 16) echo 'selected'; ?>>16</option>
		        <option value="17" <?php if($cd[4] == 17) echo 'selected'; ?>>17</option>
		        <option value="18" <?php if($cd[4] == 18) echo 'selected'; ?>>18</option>
		        <option value="19" <?php if($cd[4] == 19) echo 'selected'; ?>>19</option>
		        <option value="20" <?php if($cd[4] == 20) echo 'selected'; ?>>20</option>
		        <option value="21" <?php if($cd[4] == 21) echo 'selected'; ?>>21</option>
		        <option value="22" <?php if($cd[4] == 22) echo 'selected'; ?>>22</option>
		        <option value="23" <?php if($cd[4] == 23) echo 'selected'; ?>>23</option>
		        <option value="24" <?php if($cd[4] == 24) echo 'selected'; ?>>24</option>
		        <option value="25" <?php if($cd[4] == 25) echo 'selected'; ?>>25</option>
		        <option value="26" <?php if($cd[4] == 26) echo 'selected'; ?>>26</option>
		        <option value="27" <?php if($cd[4] == 27) echo 'selected'; ?>>27</option>
		        <option value="28" <?php if($cd[4] == 28) echo 'selected'; ?>>28</option>
		        <option value="29" <?php if($cd[4] == 29) echo 'selected'; ?>>29</option>
		        <option value="30" <?php if($cd[4] == 30) echo 'selected'; ?>>30</option>
		        <option value="31" <?php if($cd[4] == 31) echo 'selected'; ?>>31</option>
		        <option value="32" <?php if($cd[4] == 32) echo 'selected'; ?>>32</option>
		        <option value="33" <?php if($cd[4] == 33) echo 'selected'; ?>>33</option>
		        <option value="34" <?php if($cd[4] == 34) echo 'selected'; ?>>34</option>
		        <option value="35" <?php if($cd[4] == 35) echo 'selected'; ?>>35</option>
		        <option value="36" <?php if($cd[4] == 36) echo 'selected'; ?>>36</option>
		        <option value="37" <?php if($cd[4] == 37) echo 'selected'; ?>>37</option>
		        <option value="38" <?php if($cd[4] == 38) echo 'selected'; ?>>38</option>
		        <option value="39" <?php if($cd[4] == 39) echo 'selected'; ?>>39</option>
		        <option value="40" <?php if($cd[4] == 40) echo 'selected'; ?>>40</option>
		        <option value="41" <?php if($cd[4] == 41) echo 'selected'; ?>>41</option>
		        <option value="42" <?php if($cd[4] == 42) echo 'selected'; ?>>42</option>
		        <option value="43" <?php if($cd[4] == 43) echo 'selected'; ?>>43</option>
		        <option value="44" <?php if($cd[4] == 44) echo 'selected'; ?>>44</option>
		        <option value="45" <?php if($cd[4] == 45) echo 'selected'; ?>>45</option>
		        <option value="46" <?php if($cd[4] == 46) echo 'selected'; ?>>46</option>
		        <option value="47" <?php if($cd[4] == 47) echo 'selected'; ?>>47</option>
		        <option value="48" <?php if($cd[4] == 48) echo 'selected'; ?>>48</option>
		        <option value="49" <?php if($cd[4] == 49) echo 'selected'; ?>>49</option>
		        <option value="50" <?php if($cd[4] == 50) echo 'selected'; ?>>50</option>
		        <option value="51" <?php if($cd[4] == 51) echo 'selected'; ?>>51</option>
		        <option value="52" <?php if($cd[4] == 52) echo 'selected'; ?>>52</option>
		        <option value="53" <?php if($cd[4] == 53) echo 'selected'; ?>>53</option>
		        <option value="54" <?php if($cd[4] == 54) echo 'selected'; ?>>54</option>
		        <option value="55" <?php if($cd[4] == 55) echo 'selected'; ?>>55</option>
		        <option value="56" <?php if($cd[4] == 56) echo 'selected'; ?>>56</option>
		        <option value="57" <?php if($cd[4] == 57) echo 'selected'; ?>>57</option>
		        <option value="58" <?php if($cd[4] == 58) echo 'selected'; ?>>58</option>
		        <option value="59" <?php if($cd[4] == 59) echo 'selected'; ?>>59</option>
		      </select>


    </div>

</div>

<div id="contentarea" class="row">
<?php 
$folder = 'page';
$url = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].'/'.$folder.'/'.'assets/components/'; 
?>
<?php if($_GET['snippet'] == 301) : ?>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column full center topbar" style="background:#e43b2c;color:white;margin-left:-50%;width:200%;font-size:18px;text-transform: uppercase;font-weight:700;text-align:center;padding:15px 0;">
            <h1 style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">THIS CAN BE A CATCHY HEADLINE</h1>
        </div>
    </div>

</div>    
    

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column full center">
            <h1 style="font-family: 'Oswald', sans-serif;"><span style="color:#e75245">Wait!</span> Special ONE TIME ONLY Offer</h1>
        </div>
    </div>

</div>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column half">
            <img src="<?=$url?>assets/minimalist-basic/61iHlzrJL7L._UY395_.jpg">
        </div>
        <div class="column half">
            <div class="display" style="text-align:center;">
                <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight:700;">SPECIAL OFFER.<br/>Cool earings</h1>
                <p  style="font-family:Arial, sans-serif;font-size:18px;line-height:1.5;">This <strong>Necklace</strong> usually sells for <strong>$59.99</strong> but is currently on a special <strong>50%</strong> discount for a limited time.</p>
                <p  style="font-family:Arial, sans-serif;font-size:18px;line-height:1.5;">Just pay <strong>$19.99</strong> FREE shipping</p>
                <p  style="font-family:Arial, sans-serif;font-size:18px;line-height:1.5;">Offer expires when timer ends.</p>
                <div style="margin:1em 0 2.5em;">
                    <a href="#" class="btn btn-primary edit btn-primary-sale" style="background:#e75245;border:1px solid #b62f23;font-weight:700;border-radius:5px;font-size:18px;text-transform: none;font-family:Arial, sans-serif;">Get yours from $19.99</a>
                </div>

     <div class="column third center" >
            <h1 style="font-weight:800;background:#c41229;color:#FFF;border-radius:5px;font-size:22px;padding:15px 0;border:2px solid #9d0e21;" id="chours">0</h1>
            <h3 style="font-size:11px;text-transform: uppercase;">Hours</h3>
        </div>
        <div class="column third center" >
            <h1 style="font-weight:800;background:#c41229;color:#FFF;border-radius:5px;font-size:22px;padding:15px 0;border:2px solid #9d0e21;" id="cminutes">0</h1>
            <h3 style="font-size:11px;text-transform: uppercase;">Minutes</h3>
        </div>
        <div class="column third center" >
            <h1 style="font-weight:800;background:#c41229;color:#FFF;border-radius:5px;font-size:22px;padding:15px 0;border:2px solid #9d0e21;" id="cseconds">0</h1>
            <h3 style="font-size:11px;text-transform: uppercase;">Seconds</h3>
        </div>

                <p  style="font-family:Arial, sans-serif;font-size:18px;line-height:1.5;"><input id="upgrade_offer" name="upgrade_offer" type="checkbox"> Check this box if you would like to upgrade your order and get TWO Necklace for $34.99.</p>
            </div>
        </div>
    </div>

</div>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column full center topbar" style="background:#000000;color:white;margin-left:-50%;width:200%;font-size:18px;text-transform: uppercase;font-weight:700;text-align:center;padding:15px 0;">
            <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">HURRY - WHILST STOCK LASTS</h1>
        </div>
    </div>

</div>

<?php endif; ?>

<?php if($_GET['snippet'] == 302) : ?>

<div class="ui-draggable">
    <div class="row clearfix">
        <div class="column full center topbar" style="background:#e43b2c;color:white;margin-left:-50%;width:200%;font-size:18px;text-transform: uppercase;font-weight:700;text-align:center;padding:15px 0;">
            <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">Top bar message</h1>
        </div>
    </div>
</div>

<br/><br/>
<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column half center" style="background:#bddaa2;text-transform: uppercase;border-top-left-radius:5px;border:1px solid #bddaa2; border-bottom-left-radius:5px;padding:10px;color:#58763c;font-family: 'Oswald', sans-serif;font-size:18px;">
           <div style="">Step1: Customize Order</div>
        </div>
        <div class="column half center"  style="background:#f2f8ec;text-transform: uppercase;border-top-right-radius:5px;border:1px solid #bddaa2; border-bottom-right-radius:5px;padding:10px;color:#cedac0;font-family: 'Oswald', sans-serif;font-size:18px;">
           <div style="">Step2: Order Complete</div>
        </div>

    </div>
</div>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column full center">
            <h1 style="font-family: 'Oswald', sans-serif;padding:10px;font-size:32px;"><span style="color:#e75245;">WAIT!</span> Special ONE TIME ONLY Offer</h1>
        </div>
    </div>

</div>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column half">
            <img src="<?=$url?>assets/minimalist-basic/61iHlzrJL7L._UY395_.jpg">
        </div>
        <div class="column half">
            <div class="display" style="text-align:center;">
                <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">SPECIAL OFFER.<br/>Cool Earrings</h1>
                <p  style="font-family:Arial, sans-serif;font-size:23px;line-height:1.5;">These will look AMAZING with your new necklace.</p>
                <div style="margin:1em 0 2.5em;">
                    <a href="#" class="btn btn-primary edit btn-primary-sale" style="background:#e75245;border:1px solid #b62f23;font-weight:700;border-radius:5px;font-size:18px;text-transform: none;font-family:Arial, sans-serif;">Please Upgrade My Order NOW</a>
                </div>


                <p  style="font-family:Arial, sans-serif;font-size:16px;line-height:1.5;color:blue;"><a href="http://www.google.com/">No thanks, I will pass on the upgrade knowing that this is a one time offer.  Please let me complete my order, by clicking here.</a></p>


            </div>
        </div>
    </div>

</div>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column full center topbar" style="background:#000000;color:white;margin-left:-50%;width:200%;font-size:18px;text-transform: uppercase;font-weight:700;text-align:center;padding:15px 0;">
            <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">While stock lasts</h1>
        </div>
    </div>

</div>

<?php endif; ?>

<?php if($_GET['snippet'] == 303) : ?>

<div class="ui-draggable">
    <div class="row clearfix">
        <div class="column full center topbar" style="background:#e43b2c;color:white;margin-left:-50%;width:200%;font-size:18px;text-transform: uppercase;font-weight:700;text-align:center;padding:15px 0;">
            <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">THIS CAN BE A CATCHY HEADLINE</h1>
        </div>
    </div>
</div>


<div class="ui-draggable">
    <div class="row clearfix">
        <div class="column half">
            <img src="<?=$url?>assets/minimalist-basic/61iHlzrJL7L._UY395_.jpg">
        </div>
        <div class="column half">
            <div class="display" style="text-align:center;">
                <h1  style="font-family:Arial, sans-serif;font-size:50px;font-weight: 700;">THANK YOU</h1>
                <p  style="font-family:Arial, sans-serif;font-size:26px;line-height:1.5;">Your order was completed successfully</p>
                <p  style="font-family:Arial, sans-serif;font-size:26px;line-height:1.5;"><img width="120" src="<?=$url?>assets/minimalist-basic/express-mail-email-envelope-pictogram-vector-12188876.jpg" /></p>
                <p  style="font-family:Arial, sans-serif;font-size:26px;line-height:1.5;">Confirmation of the order has been sent to your email address.</p>
            </div>
        </div>
    </div>

</div>

<div class="ui-draggable">

    <div class="row clearfix">
        <div class="column full center topbar" style="background:#000000;color:white;margin-left:-50%;width:200%;font-size:18px;text-transform: uppercase;font-weight:700;text-align:center;padding:15px 0;">
            <h1  style="font-family:Arial, sans-serif;font-size:32px;font-weight: 700;">SOME ADDITIONAL TEXT HERE</h1>
        </div>
    </div>

</div>



<?php endif; ?>




<?=isset($page)?$page->content: ""?>

    

</div>
<div style="padding: 30px;" class="text-center"><button class="btn btn-primary" id="save_page">Save Page</button> </div>

</div>


<?php if($cd[0] != '0' && $cd[0] != '') : ?>
<script type='text/javascript'>
var x = document.getElementById("show-countdown");
x.style.display = "block";


function makeTimer() {

			var endTime = new Date("<?php echo $cd[0] . ' ' . $cd[1] . ' ' . $cd[2] . ' ' . $cd[3]. ':' . $cd[4] . ':00'; ?> GMT");			
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			$("#cdays").html(days);
			$("#chours").html(hours);
			$("#cminutes").html(minutes);
			$("#cseconds").html(seconds);		

	}

	setInterval(function() { makeTimer(); }, 1000);


</script>
<?php endif; ?>