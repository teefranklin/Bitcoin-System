<?php 

include "includes/header.php"; 

	try{
		$sql = "SELECT * FROM account WHERE id=?";
		$stmt = $db->prepare($sql);
		$stmt->execute(array($_SESSION['id']));
		$rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$count = $stmt->rowCount();
		if($count>0){
			$result["status"]="ok";
			$amount_deposited=$rslt[0]["amount_deposited"];
			$total_revenue=$rslt[0]["total_revenue"];
			$generated_revenue = $rslt[0]["generated_revenue"];
				//last_logged date to be added later
		}else{
			$result["status"]="fail";
		}
    } catch (Exception $ex) {
        $result["status"]=$ex->getMessage();
    }

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="col_3">
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-dollar icon-rounded"></i>
							<div class="stats">
								<h5 id="amount_deposited">
									<strong>$<?php echo $amount_deposited; ?> </strong>
								</h5>
								<span>Intial Amount Deposited</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-money user2 icon-rounded"></i>
							<div class="stats">
								<h5 id="generated_revenue">
									<strong>$<?php echo $generated_revenue; ?></strong>
								</h5>
								<span>Generated From Wallet</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 widget widget1">
						<div class="r3_counter_box">
							<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
							<div class="stats">
								<h5 id="total_revenue">
									<strong>$<?php echo $total_revenue; ?> </strong>
								</h5>
								<span>Total Amount In Wallet</span>
							</div>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>

				<div class="row-one widgettable">
					<div class="col-md-12 content-top-2 card">
						<div class="agileinfo-cdr">
							<div class="card-header">
								<h3>Rate Updates</h3>
							</div>

							<div id="Linegraph" style="width: 98%; height: 350px">


							</div>

						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php"; ?>