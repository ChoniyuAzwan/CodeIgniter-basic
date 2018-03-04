<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Crud</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Status</td>
			<td>Jurusan</td>
		</tr>
		<?php foreach ($content->result() as $key): ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		<?php endforeach ?>
		
	</table>
</body>
</html>