<?php 
include("form/navigasi.php") ;
?>
<script>
	$(document).ready(function(){
		$("#placeholder").load("form/chart/0.php");
		$("#chartselect").change(function(){
			var a = $(this).val(),
				place =$("#placeholder");
		
				place.load("form/chart/"+a+".php");
		});
		
	});
</script>



<div id="page-wrapper">
<div class="row" >
	<div class="col-lg-12"><h3 class="page-header">Chart </h3></div>
	<div class="col-lg-12">
		<label>Filter</label>
		<select id="chartselect" class="btn btn-default">
			<option value="0">All</option>
			<option value="1">Sex</option>
			<option value="2">Marital Status</option>
			<option value="3">Personal Age</option>
			<option value="4">Mapping Propinsi</option>
			<option value="5">Mapping DKI Jakarta</option>
			<option value="6">Mapping Jakarta Pusat</option>
			<option value="7">Mapping Jakarta Utara</option>
			<option value="8">Mapping Jakarta Batar</option>
			<option value="9">Mapping Jakarta Timur</option>
			<option value="10">Mapping Jakarta Selatan</option>
			<option value="11">Mapping Jawa Barat</option>
			<option value="12">Maping Banten</option>
		</select><br><br><br>
	</div>
	<div id="placeholder"></div>
</div>
</div>
