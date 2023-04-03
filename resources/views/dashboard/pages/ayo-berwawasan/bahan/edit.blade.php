@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Edit Bahan Ajar</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.bahan.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
				<br>
					<div class="pt-2">
						<label>Title</label>
						<input type="text" value="{{$result->title}}" name="title" class="form-control">
					</div>

                    <div class="pt-2">
						<label>File</label>
						<input type="file" value="{{$result->file}}" name="file" class="form-control" accept="image/*">
						<small class="text-danger">Kosongkan jika tidak perlu</small>
					</div>

					<div class="pt-2">
						<label>Deskripsi</label>
						<input type="text" value="{{$result->description}}" name="description" class="form-control">
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.bahan.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection