<div class="container">
<?php include 'navbar.php';?>
	<div class="row">
      <div class="col-sm">
			<h5>Lower-> Higher Plan Conversions</h5>
			<table id="datatable1" class="table table-bordered table-striped  table-hover table-sm table-success">
				<thead>
				  <tr>
					<th>SNo</th>
					<th>SDE</th>
					<th>Total</th>
				  </tr>
				</thead>
				<tbody>
				  <?php
					 $sn=1;
					 foreach($planconversions as $data)
						{
							echo "<tr>";
							echo "<td>" . $sn. "</td>";
							echo "<td><a href='" .base_url(). "Plan_conversions/lower_to_higher_sum/" .$data['SDE']. "/" .$fdate. "/" .$tdate. "' target='_blank'>" . $data['SDE']. "</td>";
							echo "<td><a href='" .base_url(). "Plan_conversions/lower_to_higher/" .$data['SDE']. "/" .$fdate. "/" .$tdate. "' target='_blank'>" . $data['CNT']. "</td>";
							echo "</tr>";
							$sn++;
						}
				  ?>
				</tbody>
			</table>
	  </div>
      <div class="col-sm">
			<h5>Higher-> Lower Plan Conversions</h5>
			<table id="datatable2" class="table table-bordered table-striped  table-hover table-sm table-success">
				<thead>
				  <tr>
					<th>SNo</th>
					<th>SDE</th>
					<th>Total</th>
				  </tr>
				</thead>
				<tbody>
				  <?php
					 $sn=1;
					 foreach($planconversions as $data)
						{
							echo "<tr>";
							echo "<td>" . $sn. "</td>";
							echo "<td><a href='" .base_url(). "Plan_conversions/lower_to_higher_sum/" .$data['SDE']. "/" .$fdate. "/" .$tdate. "' target='_blank'>" . $data['SDE']. "</td>";
							echo "<td><a href='" .base_url(). "Plan_conversions/lower_to_higher/" .$data['SDE']. "/" .$fdate. "/" .$tdate. "' target='_blank'>" . $data['CNT']. "</td>";
							echo "</tr>";
							$sn++;
						}
				  ?>
				</tbody>
			</table>
	  </div>
    </div>
</div> 

<!-- Implement Totals in Table-->




