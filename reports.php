<?php 
	$file = basename(__FILE__, '.php');
	$title = 'Activities'; 
?>
<?php include('php/header.php') ?>
<div class="container container-main">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Scientific reports</h3>
	  </div>
	  <div class="panel-body">
	    <a href="data/rs_ben_2015-f.pdf">2015</a>
	  </div>
	</div>
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Meetings and current research</h3>
	  </div>
	  <div class="panel-body">
	  	<table class="table table-hover table-condensed table-striped">
	  		<tr>
	  			<th>Date</th>
	  			<th>Event</th>
	  		</tr>
	  		<tr>
	  			<td style="width: 150px">June 2-4</td>
	  			<td><a href="http://www.dkmt.uns.ac.rs/">DKMT Euroregion Conference 2016</a></td>
	  		</tr>
	  		<tr>
	  			<td>August 14-20</td>
	  			<td><a href="http://www.nuigalway.ie/iseh2016/index.html">ISEH 2016, ISEG 2016 & Geoinformatics 2016</a></td>
	  		</tr>
	  	</table>
	  </div>
	</div>
</div>
<?php include('php/footer.php') ?>