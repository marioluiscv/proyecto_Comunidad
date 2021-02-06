<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->



<!--
    
    https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
    https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css

 -->
	<title>Document</title>
</head>

<body>

	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tiger Nixon</td>
				<td>System Architect</td>
				<td>Edinburgh</td>
				<td>61</td>
				<td>2011/04/25</td>
				<td>$320,800</td>
			</tr>
			<tr>
				<td>Lael Greer</td>
				<td>Systems Administrator</td>
				<td>London</td>
				<td>21</td>
				<td>2009/02/27</td>
				<td>$103,500</td>
			</tr>
			<tr>
				<td>Jonas Alexander</td>
				<td>Developer</td>
				<td>San Francisco</td>
				<td>30</td>
				<td>2010/07/14</td>
				<td>$86,500</td>
			</tr>
			<tr>
				<td>Shad Decker</td>
				<td>Regional Director</td>
				<td>Edinburgh</td>
				<td>51</td>
				<td>2008/11/13</td>
				<td>$183,000</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</tfoot>
    </table>
    

<!-- 
    https://code.jquery.com/jquery-3.5.1.js
    https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js
    https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js
 -->


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

	<script>
		$(document).ready(function () {
			$('#example').DataTable();
		});
	</script>
</body>

</html>
