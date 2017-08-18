<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
	<title>Radyo Player</title>
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.0.min.js"></script>-->
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>

</head>
<body>
	<video id="radyo_player" style="width: 350px;height: 25px;" controls="" autoplay="0" name="media" volume="0.6">
		<source id="radyo" src="http://185.28.3.4/fenomen/fenomenweb_mpeg_128_home/icecast.audio" type="audio/mp3">
	</video>
</br>
<select id="radyolar">

</select>
</body>
<script type="text/javascript">
$(document).ready(function(){
	var video = document.getElementById('radyo_player'); // Player 'a uğlaşmak için kullandık
	video.volume = 0.15;

	$.getJSON("radyo.json", function(obj) {
    	 $.each(obj.radyo_listesi,function(key,value){
    		var ekle = $('<option></option>').val(value.adres).text(value.adi);
        	$("#radyolar").append(ekle);
    	});
	});

	$( "#radyolar" ).change(function() { // Select Değişim Yakaladık.
	var video = document.getElementById('radyo_player'); // Player 'a uğlaşmak için kullandık
	var source = document.getElementById('radyo');// Player 'a uğlaşmak için kullandık
	var radyolar = document.getElementById("radyolar").value; // Select de seçtiğimiz Radyo adresini bir var 'a atadık.
  		//alert( radyolar ); // Gelen değeri alert() olarak hata aldık.
  		source.src = radyolar; // Seçilen Radyo adresini player da src="{buraya}" yazdırdık.
  		video.load(); // Player 'ı yeniledik
  		video.play(); // Player yenilendikten sonra çalmasını sağladık.
	});
});
	

</script>
</html>