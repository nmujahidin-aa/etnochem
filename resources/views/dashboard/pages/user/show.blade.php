@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Show User</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.user.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
                    <div class="pt-5">
                        <h3><b>Detail User</b></h3>
                            <div class="p-2">
                                <div class="row">
                                <div class="col-3">Nama</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->name}}</div>
                            </div>
                            <div class="row">
                                <div class="col-3">Email</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->email}}</div>
                            </div>
                            <div class="row">
                                <div class="col-3">Roles</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->getRoleNames()->implode(', ')}}</div>
                            </div>
                            <div class="row">
                                <div class="col-3">Tanggal Regristasi</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->created_at}}</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{route('dashboard.user.index')}} " class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                    
				</form>

			</div>

		</div>
	</div>
</div>
@endsection