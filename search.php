<?php
		echo("<H3>Hasil Pencarian</H3>");
		mysql_connect("localhost","","");
		mysql_select_db("TEST_DB");

		$perintah="SELECT * FROM datamaba WHERE nim like '%$cari'";
		$hasil=mysql_query($perintah);
		$jumlah=mysql_num_rows($hasil);
		if($jumlah>0){
			echo "Data yang ditemukan : $jumlah<br><hr>");
while($data=mysql_fetch_row($hasil)){
	echo ("Nama : $data[1]<br>");
	echo ("Nama : $data[1]<br>");

}
		}else{
			echo "Maaf, Data yang anda cari tidak ada");
		}
		?>