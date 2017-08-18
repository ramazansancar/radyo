<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
	<title>Radyo Player</title>
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.0.min.js"></script>-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$.getJSON("radyo.json", function(obj) {
    	$.each(obj.radyolar, function(key, value) {
    		var ekle = $('<option />').val(value.adres).text(value.adi);
        	$("#radyolar").append(ekle);
    	});
	});
});
</script>
</head>
<body>
	<video id="radyo_player" style="width: 350px;height: 25px;" controls="" autoplay="0" name="media" volume="0.6">
		<source id="radyo" src="http://185.28.3.4/fenomen/fenomenweb_mpeg_128_home/icecast.audio" type="audio/mp3">
	</video>
</br>
<select id="radyolar">
  <option value="http://185.28.3.4/fenomen/fenomenweb_mpeg_128_home/icecast.audio">Radyo Fenomen</option>
  <option value="http://195.142.106.23/fenomen/fenomenturk_mpeg_128_home/icecast.audio">Fenomen Türk</option>
  <option value="http://37.75.11.179/fenomen/fenomenpop_mpeg_128_home/icecast.audio">Fenomen Pop</option>
  <option value="http://195.142.3.83/fenomen/fenomenclubbin_mpeg_128_home/icecast.audio">Fenomen Clubbin</option>
  <option value="http://195.142.3.82/fenomen/FenomenDans_mpeg_128_home/icecast.audio">Fenomen Dans</option>
  <option value="http://195.142.3.82/fenomen/fenomenyaz_mpeg_128_home/icecast.audio">Fenomen Yaz</option>
  <option value="http://195.142.106.23/fenomen/fenomenrap_mpeg_128_home/icecast.audio">Fenomen Rap</option>
  <option value="http://185.28.3.4/fenomen/FenomenAkustik_mpeg_128_home/icecast.audio">Fenomen Akustik</option>
  <option value="http://195.142.3.83/fenomen/FenomenOriental_mpeg_128_home/icecast.audio">Fenomen Oriental</option>
  <option value="http://195.142.3.82/power/PowerFM_mpeg_128_home/icecast.audio">PowerFM</option>
  <option value="http://195.142.3.82/power/PowerTurk_mpeg_128_home/icecast.audio">PowerTürk</option>
  <option value="audi">Audi</option>
  <option value="audi">Audi</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
  <option value="audi">Audi</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$( "#radyolar" ).change(function() { // Select Değişim Yakaladık.
	var video = document.getElementById('radyo_player'); // Player 'a uğlaşmak için kullandık
	var source = document.getElementById('radyo');// Player 'a uğlaşmak için kullandık
	var radyolar = document.getElementById("radyolar").value; // Select de seçtiğimiz Radyo adresini bir var 'a atadık.

  		//alert( x );
  		source.src = radyolar; // Seçilen Radyo adresini player da src="{buraya}" yazdırdık.
  		video.load(); // Player 'ı yeniledik
  		video.play(); // Player yenilendikten sonra çalmasını sağladık.
	});
});
	

</script>
</html>