@extends('layouts.app')

@section('content')

<body>
	<div class="content">
      <div style="width: 87%;padding-left: 13%;padding-top: 9%;">
				<h2 style="float: left;color: black;">Nome do medicamento</h2>
				
				<div >
					<form action="" method="post">
					<select id="searchbox" name="q" placeholder="Faça sua busca aqui" class="form-control" minlength="2" onchange="optionCheck()">
						@foreach($produto as $key=> $produtos)
						<option  value="">Faça sua busca aqui</option>
						
						<option  value="{{$produtos->produto_farmacia}}" data="{{$produtos->farmacia}}">
							{{$produtos->produto_farmacia}}
						</option>

						@endforeach		
					</select>
					</form>
					{{-- <div id="hiddenDiv" style="visibility:hidden;">
						<b>Clique no nome do medicamento para saber onde encontrá-la</b><br>
						<button 
							type="button"
							class="btn btn-primary btn-lg"
							data-toggle="modal"
							data-id=""
							data-title=""
							data-target="#favoritesModal">
						</button>
					</div> --}}

					<div id="div_link" style="visibility:hidden;">
						<b>Clique no nome do medicamento para saber onde encontrá-la</b><br>
						<a href="https://www.w3schools.com" id="link">Visit W3Schools</a>
					</div>



		{{-- 			<input type="text" id="myInput" autocomplete="on" list="remedios" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="Faça sua busca aqui">
 --}}			
				</div>		
		</div>
	</div>
</body>
<script>
		$(document).ready(function(){
			$('#searchbox').selectize();
		});
</script>
<script>
    function optionCheck(){
        var option = document.getElementById("searchbox").value;

		let selecionado = $("#searchbox option:selected");

		let remedio = $("#searchbox option:selected").attr("selected", "selected").text();
		let farmacia = $("#searchbox option:selected").attr("selected", "selected").val();
		
		console.log (remedio);
	
		let endereco ="procurar/" +remedio.trim();
		
		console.log (endereco);
		$("#link").attr("href", endereco);
		$("#link").text(remedio);

		document.getElementById("div_link").style.visibility ="visible";
    }
</script>
@endsection