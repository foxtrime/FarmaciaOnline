<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<title>FarmaciaOnline</title>
			
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="{{ url('selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/meucss.css') }}">
		
		<script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
		
		<script type="text/javascript" src='{{ url("selectize/js/standalone/selectize.min.js") }}'></script>
	</head>
	<body>
		<nav class="navbar navbar-absolute">
			<div class="container-fluid">
				<img src="/img/logo.png" height="65" style="padding-top: 6px;" />
					<a>
						<img id="img360" class="logo360 retira_padding_verticais" src="http://consultaprevia.mesquita.rj.gov.br/img/loading.gif">
					</a>        
			</div>
		</nav>
		<div class="content">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Medicamento</th>
							<th scope="col">Farmacia</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($dados as $item)
							<tr>
								
								<td>{{$item->produto_farmacia}}</td>	
								<td> <?=str_replace('ALMOXARIFADO', ' ', $item->farmacia)?> </td>		
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-12" style="padding-bottom: 113px;">
         <div id="map" style="position: relative;overflow: hidden;width: 100%;height: 293px;"></div>
      </div>
		<footer class="footer">
			<div class="container-fluid">
				<div class="rodape">
						<p style="color:indigo">Prefeitura Municipal de Mesquita - RJ - Rua Arthur Oliveira Vecchi, 120 Centro - Mesquita - RJ CEP: 26553-080</p>
						<p style="color:indigo">2017 @Subsecretaria da Tecnologia da Informação</p>
				</div>
			</div>
		</footer>
		<script type="text/javascript">
			var map;
			 var markers = [
    {
        "titulo": '<b>Farmacia Central</b>',
        "lat": '-22.789784',
        "lng": '-43.432581',
        "description": 'Aqui e o espaço reservado para digitar o endereco.'
    },
    {
        "titulo": '<b>Farmacia Polo I</b>',
        "lat": '-22.785748',
        "lng": '-43.424513',
        "description": 'Aqui e o espaço reservado para digitar o endereco.'
    },
    {
        "titulo": '<b>Farmacia Polo III</b>',
        "lat": '-22.790715',
        "lng": '-43.436295',
        "description": 'Rua Dom Jaime Câmara 170 Sta. Terezinha Mesquita.'
    },
    {
        "titulo": '<b>Farmacia Polo IV</b>',
        "lat": '-22.783482',
        "lng": '-43.430284',
        "description": 'Rua Mister Watkins 63 Centro Mesquita.'
    }];
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -22.782946, lng: -43.431588},
          zoom: 14
        });

        var infoWindow = new google.maps.InfoWindow();
 		  
 		   for (var i = 0; i < markers.length; i++) {
            var data = markers[i];
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title
            });
 
            //Attach click event to the marker.
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.titulo +'<br><br>'+ data.description + "</div>");
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
      }


		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcdW2PsrS1fbsXKmZ6P9Ii8zub5FDu3WQ
&callback=initMap"
    async defer></script>
	</body>
</html>



