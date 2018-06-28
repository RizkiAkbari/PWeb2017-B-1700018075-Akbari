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
background-image: url(bgindosat.jpg);
}

table{
background-color: #fed61f;
border-color : white;
}

.menu{
background-color:#d92224;
}


</style>

</head>

<script language="Javascript">
	function paketdata (){

	//body...

	
	var paket = (document.fform.ipaket.value);
	var harga = 0.0;
	
	if (paket == "EXTRAK4GB"){
	harga = 37000;
	}	else if (paket == "FREEDOMCM"){
	harga = 51900;
	}	else if (paket == "FREEDOMCL"){
	harga = 90000;
	}	else if (paket == "FREEDOMIP"){
	harga = 36000;
	}	else if (paket == "IU+1GB"){
	harga = 90000;
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
		<td width="100%" colspan="2"><h2 align="center"><font color="white">Paket Data INDOSAT OOREDOO</font></h2></td>
		</tr>
		
		<tr>
		<td>
		<div class="menu"> </br>
		
		Nomor : <input type="text" name="ikartu" id="ikartu">	</br></br>
		Jenis Paket Data : <select name="ipaket" id="ipaket" onclick="paketdata()">
		<option value="Pilih"></option>
		<option value="EXTRAK4GB">Extra Kuota 4GB</option>
		<option value="FREEDOMCM">Freedom Combo M (12GB)</option>
		<option value="FREEDOMCL">Freedom Combo L (26GB)</option>
		<option value="FREEDOMIP">Freedom Interet Plus 1GB</option>
		<option value="IU+1GB">Internet Unlimited + 1GB"</option>
		</select> </br></br>
		
		Harga Paket Data : <input type="text" name="opaket" id="opaket" size="10">	</br></br>
		
		<input type="submit" name="submit" value="BAYAR" id="submit">
		</div>
		</td>
		
		</table>
	
	</form>
	</body>
	</html>