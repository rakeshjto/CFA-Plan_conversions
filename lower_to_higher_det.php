<div class="container">
<?php include 'navbar.php';?>
	
	<table id="datatable" class="table table-bordered table-striped  table-hover table-sm table-success table-responsive">
				<thead>
				  <tr>
					<th>SNo</th>
					<th>SDE</th>
					<th>STATION_CODE</th>
					<th>EXCHANGE_CODE</th>
					<th>LOWER_PLAN</th>
					<th>HIGHER_PLAN</th>
					<th>ORDER_NO</th>
					<th>ORDER_TYPE</th>
					<th>ORDER_SUB_TYPE</th>
					
				  </tr>
				</thead>
				<tbody>
				  <?php
					 $sn=1;
					 foreach($lower_to_higher_det as $data)
						{
							echo "<tr>";
							echo "<td>" . $sn. "</td>";
							echo "<td>" . $data['SDE']. "</td>";
							echo "<td>" . $data['STATION_CODE']. "</td>";
							echo "<td>" . $data['EXCHANGE_CODE']. "</td>";
							echo "<td>" . $data['LOWER_PLAN']. "</td>";
							echo "<td>" . $data['HIGHER_PLAN']. "</td>";
							echo "<td>" . $data['ORDER_NO']. "</td>";
							echo "<td>" . $data['ORDER_TYPE']. "</td>";
							echo "<td>" . $data['ORDER_SUB_TYPE']. "</td>";
							
							
							echo "</tr>";
							$sn++;
						}
				  ?>
				</tbody>
			</table>
</div> 



