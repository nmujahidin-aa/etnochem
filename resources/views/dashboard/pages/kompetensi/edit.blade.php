@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Edit Kompetensi</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.kompetensi.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
				<br>
					<div>
						<label>Kompetensi</label>
						<input type="text" value="{{$result->kompetensi}}" name="kompetensi" class="form-control">
					</div>

					<div>
						<label>Deskripsi</label>
						<input type="text" value="{{$result->deskripsi}}" name="deskripsi" class="form-control">
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.kompetensi.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection