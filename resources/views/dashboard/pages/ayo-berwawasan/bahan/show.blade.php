@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Show Bahan Ajar</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.bahan.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
                    <div class="pt-5">
                        <div class="p-2 text-center">{{$result->title}}</div>
                        <div class="text-center">
                            <img src="{{asset('storage/'.$result->file)}}" style="width:150px;height: 150px;">
                        </div>
                        <div class="p-2 text-center">{{$result->description}}</div>
                    
                        </div>
                        <div class="mt-3">
                            <a href="{{route('dashboard.bahan.index')}} " class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                    
				</form>

			</div>

		</div>
	</div>
</div>
@endsection