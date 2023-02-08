<?php
	$id=$_GET['id'];
	$nama=$_GET['User'];
	$password=$_GET['Pass'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body style="background-color: White;">
	<b>PERUBAHAN BIODATA MAHASISWA</b>
	<form action="aksi_update.php" method="POST">
	<table border="1">
		<tr>
			<td>
				id
			</td>
			<td>
				<INPUT NAME="id" TYPE="TEXT" PLACEHOLDER="nik anda" value="<?=$id;?>" READONLY>
			</td>
		</tr>
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="User" TYPE="TEXT" PLACEHOLDER="<?=$nama;?>">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="Pass" TYPE="text" PLACEHOLDER="<?=$password;?>">
			</td>

		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Rubah Data">
			</td>
		</tr>
	</table>
	</form>

</body>
</html>
<?php

?>