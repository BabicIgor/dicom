
</div>

</section>

</div>
<!-- Content / End -->



<script>
	
<?php 
	$countdown_vars = @explode("----", $title); 
	$cd = @explode("-", $countdown_vars[1]);
?>

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



$( document ).ready(function() {

    var original_url =  $("a.btn-primary-sale").attr("href");

    $("input#upgrade_offer").change(function() {
        if(this.checked) {
            console.log('secondary link activated');
            $("a.btn-primary-sale").attr("href", $('a.btn-primary-sale').data("secondary"));
        }else{
            console.log('secondary link deactivated');
            $("a.btn-primary-sale").attr("href", original_url);
        }
    });

    if ($('input#upgrade_offer').is(':checked')) {
     console.log('secondary link activated');
     $("a.btn-primary-sale").attr("href", $('a.btn-primary-sale').data("secondary"));

    }

});




</script>

</body>
</html>