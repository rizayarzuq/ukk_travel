<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Data Booking Tiket</title>
	<style type="text/css">
		td {
			padding: 10px 20px;
		}
		th {
			padding: 5px 10px;
		}
	</style>
</head>
<body>
	<center><h1>Data Booking Tiket</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Dari</th>
			<th>Ke</th>
			<th>Tanggal</th>
			<th>Dewasa</th>
			<th>Anak-Anak</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->rute_from ?></td>
			<td><?php echo $u->rute_to ?></td>
			<td><?php echo $u->date ?></td>
			<td><?php echo $u->adult ?></td>
			<td><?php echo $u->child ?></td>
			<td>
					<a style="cursor: pointer;" onclick="href='<?php echo base_url(('index.php/crud/edit_data?id='. $u->id)); ?>'">Edit</a>
					<a style="cursor: pointer;" onclick="href='<?php echo base_url(('index.php/crud/hapus_data?id='. $u->id)); ?>'">Hapus</a>
				</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>