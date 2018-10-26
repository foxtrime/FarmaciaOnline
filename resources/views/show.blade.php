@extends('layouts.app')

@section('content')

<body>
	<div class="content">
      <div style="width: 87%;padding-left: 13%;padding-top: 9%;">

			<table>
				<thead>
					<tr>
						<th>Medicamento</th>
						<th>Farmacia</th>
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