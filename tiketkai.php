<?php
Class tiketkai

{
	protected $namalengkap;
	protected $identitas;
	
	function setNamaLengkap($x)
	{
		$this->namalengkap = $x;
	}
	function setIdentias ($x)
	{
		$this->identitas = $x;
	}
	function Biodata()
	{
		echo "Nama Lengkap : $this->namalengkap";
		echo "Identitas :  $this->identitas";
	}
} 
class Pesan extends tiketkai
{
	var $berangkat;
	var $tujuan;
	var $tanggal;
	function Booking()
	{
		echo "Stasiun Pemberangkatan : " . $this->berangkat;
		echo "Stasiun Tujuan : " . $this->tujuan;
		echo "Tanggal Pemberangkatan : " . $this->tanggal;
	}
}
class Boardingpass extends tiketkai
{
	var $nama;
	var $kodebooking;
	var $noid;
	var $tipepnp;
	var $keretaapi;
	var $noduduk;
	var $depart;
	var $tiba;
	function Eticket ()
	{
		echo "Nama / Name : " . $this->nama;
		echo "Kode Booking : " . $this->kodebooking;
		echo "No Identitas : " . $this->noid;
		echo "Tipe Penumpang : " . $this->tipepnp;
		echo "Kereta Api : " . $this->keretaapi;
		echo "No Tempat Duduk : " . $this->noduduk;
		echo "Berangkat : " . $this->depart;
		echo "Perkiraan Tiba : " . $this->tiba;
	}
}
echo"<h1><center><b>RESERVASI TIKET KERETA API</b></center></h1></br>";

echo"<b>		======= DATA PENUMPANG =======		</b><br>";
echo"<br>";
$objpnp = new tiketkai();
$objpnp ->setNamaLengkap("Nadia<br>");
$objpnp ->setIdentias("320120300900006");
$objpnp ->Biodata();
echo"<br><br/>";
echo"<br/>";

echo"<b>		======= BOOKING TIKET =======		</b><br>";
echo"<br>";
$objtik = new Pesan();
$objtik ->berangkat = "PASAR SENEN(PSE)<br>";
$objtik ->tujuan = "TASIKMALAYA(TSM)<br>";
$objtik ->tanggal = "05 SEPTEMBER 2021<br>";
$objtik ->Booking();
echo"<br><br/>";

echo"<b>		======= BOARDING PASS =======		</b><br>";
echo"<br>";
$objborpas = new Boardingpass();
$objborpas ->nama = "Nadia Rachmasari B<br>";
$objborpas ->kodebooking = "7BG55A<br>";
$objborpas ->noid = "320120300900006<br>";
$objborpas ->tipepnp = "UMUM<br>";
$objborpas ->keretaapi = "SERAYU PAGI<br>";
$objborpas ->noduduk = "EKO 3, 11A<br>";
$objborpas ->depart = "PASAR SENEN(PSE), 05 SEPT 2021, 09.15 WIB<br>";
$objborpas ->tiba = "TASIKMALAYA(TSM), 05 SEPT 2021, 16.48 WIB<br>";
$objborpas ->Eticket();
?>
