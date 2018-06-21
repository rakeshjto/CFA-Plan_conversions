<div class="container">
<?php include 'navbar.php';?>

	<table id="datatable" class="table table-bordered table-striped  table-hover table-sm table-success">
				<thead>
				  <tr>
					<th>SNo</th>
					<th>LOWER_PLAN</th>
					<th>HIGHER_PLAN</th>
					<th>TOTAL</th>					
				  </tr>
				</thead>
				<tbody>
				  <?php
					 $sn=1;
					 foreach($lower_to_higher_sum as $data)
						{
							echo "<tr>";
							echo "<td>" . $sn. "</td>";
							echo "<td>" . $data['LOWER_PLAN']. "</td>";
							echo "<td>" . $data['HIGHER_PLAN']. "</td>";
							echo "<td>" . $data['CNT']. "</td>";
							echo "</tr>";
							$sn++;
						}
				  ?>
				</tbody>
	</table>
</div> 



