<!DOCTYPE html>
<html lang="en">

<form>
<fieldset style="margin: 0;">	
<legend style="text-align: center;">
<h2><u>Data Hasil</u></h2></legend> <br> <br>
<?php
	if ($_POST)
	{
		echo '<b>Nama :</b>' . $_POST['nama'];
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<b>Tanggal Lahir :</b>' . $_POST['tanggal_lahir'];
		echo '<br>';
		echo '<br>';
		echo '<br>';
			$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
			$sekarang = new DateTime("today");
		if ($tanggal_lahir > $sekarang) { 
			$tgl = "0";	
			$bln = "0";
			$thn = "0";
	}
		$tgl = $sekarang->diff($tanggal_lahir)->d;
		$bln = $sekarang->diff($tanggal_lahir)->m;
		$thn = $sekarang->diff($tanggal_lahir)->y;
	echo "<b>Umur : </b>";
	echo $thn." tahun ".$bln." bulan ".$tgl." hari";
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<b>Pekerjaan :</b>' . $_POST['pekerjaan'];
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<b>Gaji :</b>';
		$pekerjaan = $_POST["pekerjaan"];
		if ($pekerjaan=="pilot") {
			$kerjaan="Pilot"; }
		else if ($pekerjaan=="guru") {
			$kerjaan="Guru"; }
		else if ($pekerjaan=="polisi") {
			$kerjaan="Polisi"; }
		else if ($pekerjaan=="karyawan swasta") {
			$kerjaan="Karyawan Swasta"; }
		else
		echo "";
		if ($kerjaan=="Pilot") {
			$gajiakhir="5Jt - 10 Jt"; }
		else if ($kerjaan=="Guru") {
			$gajiakhir="1Jt - 3 Jt"; }
		else if ($kerjaan=="Polisi") {
			$gajiakhir="3Jt - 5 Jt"; }
		else if ($kerjaan=="Karyawan Swasta") {
			$gajiakhir="4Jt - 6 Jt"; }
		else
			{$gajiakhir=" ";}
		echo " Rp. $gajiakhir";
    }
?>
</div>
</fieldset>
</form>