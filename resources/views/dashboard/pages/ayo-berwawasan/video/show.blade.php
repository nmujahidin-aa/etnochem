@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Show Video</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.video.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
                    <div class="pt-5">
                        <h3><b>Detail Video</b></h3>
                            <div class="pt-2">
                                <div class="row">
                                <div class="col-3">Title</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->title}}</div>
                            </div>

                            <div class="pt-2">
                                <div class="row">
                                <div class="col-3">Link</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->video}}</div>
                            </div>

                            <div class="pt-2">
                                <div class="row">
                                <div class="col-3">Deskripsi</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->description}}</div>
                            </div>

                        </div>
                        <div class="mt-3">
                            <a href="{{route('dashboard.video.index')}} " class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                    
				</form>

			</div>

		</div>
	</div>
</div>
@endsection