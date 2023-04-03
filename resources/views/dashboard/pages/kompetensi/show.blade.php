@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Show User</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.kompetensi.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
                    <div class="pt-5">
                        <h3><b>Detail Kompetensi</b></h3>
                            <div class="p-2">
                                <div class="row">
                                <div class="col-3">Kompetensi</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->kompetensi}}</div>
                            </div>
                            <div class="row">
                                <div class="col-3">Deskripsi</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->deskripsi}}</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{route('dashboard.kompetensi.index')}} " class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                    
				</form>

			</div>

		</div>
	</div>
</div>
@endsection