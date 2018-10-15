<?php
include_once 'db.php';
if (isset($_POST['submit'])){
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jenis_kelamin=$_POST['jk'];
$program_studi=$_POST['ps'];
$fakultas=$_POST['fk'];
$asal=$_POST['asal'];
$moto=$_POST['moto'];

		$query = "INSERT INTO `datamaba`(
									`nama`,
									`nim`,
									`jenis_kelamin`,
									`program_studi`,
									`fakultas`,
									`asal`,
									`moto`
									)
								VALUES (
								'$nama',
								'nim',
								'$jenis_kelamin',
								'$program_studi',
								'$fakultas',
								'$asal',
								'$moto'
							)";
		$query_succes = mysqli_query($conn, $query);
		if($query_succes){
			header('location:list.php');

		}else{
			echo "Gagal Registrasi: " .mysqli_error($conn);
				}
			}
			?>