<!DOCTYPE html>
<html>
<head>
	<title>Jurnal</title>
</head>
<body>
       <form action="prosesregis.php" method="POST" enctype="multipart/form-data">
      <h2>Input Data Mahasiswa Baru</h2></center> 	
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" title=""><br></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" title=""><br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk"option value="Laki-Laki">Laki-Laki</option></td>
				<td><input type="radio" name="jk"option value="Perempuan">Perempuan</option></td>
				
			</tr>
	<tr>
 <td>Program Studi</td>
    <td>:</td>
     <td> <select class="" name="ps" required>
        <option value="">-- Jurusan --</option>
        <option value="If">Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="mbti">Manajemen Bisnis Telekomunikasi Informatika</option>
        <option value="TT">Teknik Telekomunikasi</option>
        <option value="DI">Desain Interior</option>
        <option value="Fisika">Fisika</option>
        <option value="SM">Sistem Multimedia</option>
       
       </select> 
       </td>
	</tr>


			<tr>

    <td>Fakultas</td>
    <td>:</td>
     <td> <select class="" name="fk" required>
        <option value="">-- Fakultas --</option>
        <option value="FIF">FIF</option>
        <option value="FIT">FIT</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FEB">FEB</option>
       
      </select>
  </td>
</tr>
<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" title=""><br></td>
			</tr>

				<tr>

	<td>Moto Hidup</td>
			<td>:</td>
			<td><input type="textarea" name="moto" title=""><br></td>
			</tr>
<tr>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>

  	
		</table>
	</form>