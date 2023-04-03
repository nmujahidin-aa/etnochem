@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Create Kompetensi</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.kompetensi.store')}}" method="post" enctype='multipart/form-data'>
				@csrf
					<div class="my-3">
						<label>Kompetensi</label>
						<input type="text" name="kompetensi" class="form-control">
					</div>
					
					<div class="my-3">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.kompetensi.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection