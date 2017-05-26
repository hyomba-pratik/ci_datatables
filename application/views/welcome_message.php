<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter Datatable</title>
</head>
<body>

<div style="width:500px;">
	<table id="myDataTable">
		<thead>
		<tr>
			<th>ID</th>
			<th>Code</th>
			<th>Country</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody></tbody>
	</table>
</div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong>
	seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
</p>

<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript"
		src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
<script>
	$(function () {
		$('#myDataTable').dataTable({
			processing: true,
			serverSide: true,
			ajax: {
				"url": "<?=base_url('index.php/welcome/dt')?>",
				"type": "POST"
			},
			columns: [
				{data: "id"},
				{data: "country_code"},
				{data: "country_name"},
				{
					data: null,
					orderable: false,
					searchable: false,
					render: function (row, type, data) {
						return "<button data-id='" + data.id + "'>Edit</button>";
					}
				}
			]
		});
	});
</script>
</body>
</html>
