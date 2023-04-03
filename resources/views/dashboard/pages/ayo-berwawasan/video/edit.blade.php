@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Edit Video</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.video.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
				<br>
                    <div>
						<label>Title</label>
						<input type="text" value="{{$result->title}}" name="title" class="form-control">
					</div>

					<div>
						<label>Link</label>
						<input type="text" value="{{$result->video}}" name="video" class="form-control">
					</div>

					<div>
						<label>Deskripsi</label>
						<input type="text" value="{{$result->description}}" name="description" class="form-control">
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.video.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection