@extends('layouts.app')

@section('content')

<body>
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
							<td>{{$item->farmacia}}</td>
							
						</tr>
					@endforeach
				</tbody>
			</table>
		
		</div>
	</div>
</body>

@endsection