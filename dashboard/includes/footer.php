<!--footer-->
<div class="footer">
	<p>&copy; 2019 TradeShacker Money Trading. All Rights Reserved | Design by
		<a href="#" target="_blank">Anonymous</a>
	</p>
</div>
<!--//footer-->
</div>

<!-- new added graphs chart js-->
<script src="js/utils.js"></script>

<!-- new added graphs chart js-->

<!-- Classie -->
<!-- for toggle left push menu script -->
<script src="js/classie.js"></script>
<script>
	var menuLeft = document.getElementById('cbp-spmenu-s1'),
		showLeftPush = document.getElementById('showLeftPush'),
		body = document.body;

	showLeftPush.onclick = function () {
		classie.toggle(this, 'active');
		classie.toggle(body, 'cbp-spmenu-push-toright');
		classie.toggle(menuLeft, 'cbp-spmenu-open');
		disableOther('showLeftPush');
	};


	function disableOther(button) {
		if (button !== 'showLeftPush') {
			classie.toggle(showLeftPush, 'disabled');
		}
	}

	$(document).ready(function(){
		setInterval(function (){
			search();
		}, 10000);
	});
	
	function update(){
        $.ajax({
            url: "update.php",
            type: "POST",                   
            success: function(){
                                                 
            }
        });
    }
	function search(){
			$.ajax({
				type: "POST", // The method of sending data can be with GET or POST
				url: "check_balance.php", // Fill in url / php file path to destination
				dataType: "json",
				success: function(response){ // When the submission process is successful
						
						if(response.status == "success"){ // If the content of the status array is success
							$("#amount_deposited").text("$"+response.amount_deposited);
							$("#total_revenue").text("$"+response.total_revenue); 
							$("#generated_revenue").text("$"+response.generated_revenue);
						}else{ // If the contents of the status array are failed
							
						}
				},
				error: function (xhr, ajaxOptions, thrownError) { // When there is an error
				
				}
			});	
	}
</script>
<script>
var my_data=[{ X: "6:00", Y: <?php echo rand(100,700)/100; ?>},
			{ X: "7:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "8:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "9:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "10:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "11:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "12:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "13:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "14:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "15:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "16:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "17:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "18:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "19:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "20:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "21:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "22:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "23:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "0:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "1:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "2:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "3:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "4:00", Y: <?php echo rand(100,700)/100; ?> },
			{ X: "5:00", Y: <?php echo rand(550,700)/100; ?> },
			{ X:"" }
	];

	var graphdata1 = {
		linecolor: "#CCA300",
		title: "Monday",
		values: [
			{ X: "6:00", Y: 10.00 },
			{ X: "7:00", Y: 20.00 },
			{ X: "8:00", Y: 40.00 },
			{ X: "9:00", Y: 34.00 },
			{ X: "10:00", Y: 40.25 },
			{ X: "11:00", Y: 28.56 },
			{ X: "12:00", Y: 18.57 },
			{ X: "13:00", Y: 34.00 },
			{ X: "14:00", Y: 40.89 },
			{ X: "15:00", Y: 12.57 },
			{ X: "16:00", Y: 28.24 },
			{ X: "17:00", Y: 18.00 },
			{ X: "18:00", Y: 34.24 },
			{ X: "19:00", Y: 40.58 },
			{ X: "20:00", Y: 12.54 },
			{ X: "21:00", Y: 28.00 },
			{ X: "22:00", Y: 18.00 },
			{ X: "23:00", Y: 34.89 },
			{ X: "0:00", Y: 40.26 },
			{ X: "1:00", Y: 28.89 },
			{ X: "2:00", Y: 18.87 },
			{ X: "3:00", Y: 34.00 },
			{ X: "4:00", Y: 40.00 }
		]
	};
	var graphdata2 = {
		linecolor: "#00CC66",
		title: "Tuesday",
		values: [
			{ X: "6:00", Y: 100.00 },
			{ X: "7:00", Y: 120.00 },
			{ X: "8:00", Y: 140.00 },
			{ X: "9:00", Y: 134.00 },
			{ X: "10:00", Y: 140.25 },
			{ X: "11:00", Y: 128.56 },
			{ X: "12:00", Y: 118.57 },
			{ X: "13:00", Y: 134.00 },
			{ X: "14:00", Y: 140.89 },
			{ X: "15:00", Y: 112.57 },
			{ X: "16:00", Y: 128.24 },
			{ X: "17:00", Y: 118.00 },
			{ X: "18:00", Y: 134.24 },
			{ X: "19:00", Y: 140.58 },
			{ X: "20:00", Y: 112.54 },
			{ X: "21:00", Y: 128.00 },
			{ X: "22:00", Y: 118.00 },
			{ X: "23:00", Y: 134.89 },
			{ X: "0:00", Y: 140.26 },
			{ X: "1:00", Y: 128.89 },
			{ X: "2:00", Y: 118.87 },
			{ X: "3:00", Y: 134.00 },
			{ X: "4:00", Y: 180.00 }
		]
	};
	var graphdata3 = {
		linecolor: "#FF99CC",
		title: "Wednesday",
		values: [
			{ X: "6:00", Y: 230.00 },
			{ X: "7:00", Y: 210.00 },
			{ X: "8:00", Y: 214.00 },
			{ X: "9:00", Y: 234.00 },
			{ X: "10:00", Y: 247.25 },
			{ X: "11:00", Y: 218.56 },
			{ X: "12:00", Y: 268.57 },
			{ X: "13:00", Y: 274.00 },
			{ X: "14:00", Y: 280.89 },
			{ X: "15:00", Y: 242.57 },
			{ X: "16:00", Y: 298.24 },
			{ X: "17:00", Y: 208.00 },
			{ X: "18:00", Y: 214.24 },
			{ X: "19:00", Y: 214.58 },
			{ X: "20:00", Y: 211.54 },
			{ X: "21:00", Y: 248.00 },
			{ X: "22:00", Y: 258.00 },
			{ X: "23:00", Y: 234.89 },
			{ X: "0:00", Y: 210.26 },
			{ X: "1:00", Y: 248.89 },
			{ X: "2:00", Y: 238.87 },
			{ X: "3:00", Y: 264.00 },
			{ X: "4:00", Y: 270.00 }
		]
	};
	var graphdata4 = {
		linecolor: "Random",
		values: my_data
	};
	$(function () {
		$("#Linegraph").SimpleChart({
			ChartType: "Line",
			toolwidth: "50",
			toolheight: "25",
			axiscolor: "#E6E6E6",
			textcolor: "#6E6E6E",
			showlegends: false,
			data: [graphdata4],
			legendsize: "140",
			legendposition: 'bottom',
			xaxislabel: 'Hours',
			title: '',
			yaxislabel: 'Rate in %'
		});
	});
	
	
</script>
<!-- //Classie -->
<!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src='js/SidebarNav.min.js' type='text/javascript'></script>


<script>
	$('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- for index page weekly sales java script -->
<script src="js/SimpleChart.js"></script>
<!-- //for index page weekly sales java script -->


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
<!-- //Bootstrap Core JavaScript -->

</body>

</html>