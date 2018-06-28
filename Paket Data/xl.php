<html>

<head>
<title>Latihan Javascript</title>

<style>

ul{
list-style-type:none ;
margin: 0px;
padding: 0px;
overflow: hidden;
background-color: aqua;
}

li{
float: left;
height: 85px;
width: 225px;
}

li a{
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

li a:hover:not(.active){
background-color:navy;
}

.active{
background-color:#4CAF50;
}

body{
background-image: url(bgxl.jpg);
}

table{
background-color: blue;
border-color : white;
}

.menu{
background-color:aqua;
}


</style>

</head>

<script language="Javascript">
	function paketdata (){

	//body...

	
	var paket = (document.fform.ipaket.value);
	var harga = 0.0;
	
	if (paket == "MC2GB"){
	harga = 35000;
	}	else if (paket == "MS3.75GB"){
	harga = 25000;
	}	else if (paket == "MX++2.25GB"){
	harga = 50000;
	}	else if (paket == "HR8GB"){
	harga = 125750;
	}	else if (paket == "XTRAC5GB"){
	harga = 58000;
	}
	
	
	document.fform.opaket.value=eval(harga);	
	}
	
	function validasi (){
		var kartu =(document.fform.ikartu.value);
		if (kartu == ""){
			alert ("Nomor Tidak Boleh Kosong!")
			return false;
		}
		var paket = (document.fform.ipaket.value);
		if (paket == "Pilih") {
			alert("Anda Belum Memilih Paket Data");
			return false;
	}
	}	
	</script>

	<body>
	<ul>
	<li><a href="depan.php"> <img src="home.png"  width="28%" height="68%" > </a></li>
	<li><a href="xl.php">	<img src="xl.png" width="30%" height="68%">	</a></li>
	<li><a href="telkomsel.php">	<img src="telkomsel.png" width="68%" height="68%">		</a></li>
	<li><a href="indosatooredoo.php">	<img src="indosatooredoo.png" width="50%" height="68%">		</a></li>
	<li><a href="tri.php">	<img src="tri.png" width="20%" height="68%">	</a></li>
	<li><a href="axis.php">		<img src="axis.png" width="30%" height="68%">	</a></li>
	</ul>
	
	</br></br>
		<form name="fform" action="bayar.php" onsubmit= "return validasi ()">
		<table border="3" align="center">
		<tr>
		<td width="100%" colspan="2"><h2 align="center"><font color="white">Paket Data XL</font></h2></td>
		</tr>
		
		<tr>
		<td>
		<div class="menu"> </br>
		
		Nomor : <input type="text" name="ikartu" id="ikartu">	</br></br>
		Jenis Paket Data : <select name="ipaket" id="ipaket" onclick="paketdata()">
		<option value="Pilih"></option>
		<option value="MC2GB">Mix Combo 2GB</option>
		<option value="MS3.75GB">Mix Small 3.75GB</option>
		<option value="MX++2.25GB">Mix Kuota++ 2.25</option>
		<option value="HR8GB">HotRod 8 GB</option>
		<option value="XTRAC5GB">XTRA Combo 5 GB"</option>
		</select> </br></br>
		
		Harga Paket Data : <input type="text" name="opaket" id="opaket" size="10">	</br></br>
		
		<input type="submit" name="submit" value="BAYAR" id="submit">
		</div>
		</td>
		
		</table>
	
	</form>
	</body>
	</html>