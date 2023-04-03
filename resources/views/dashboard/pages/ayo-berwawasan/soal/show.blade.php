@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Show Soal</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.kompetensi.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
                    <div class="pt-5">
                        <h3><b>Detail Soal</b></h3>
                            <div class="p-2">
                                <div class="row">
                                <div class="col-3">Soal</div>
                                <div class="col-1">:</div>
                                <div class="col-8">{{$result->question}}</div>
                            </div>
                            <div class="row">
                                <div class="col-3">Jawaban</div>
                                <div class="col-1">:</div>
                                <div class="col-8">
                                    A. {{$result->answer_a}} <br>
                                    B. {{$result->answer_b}} <br>
                                    C. {{$result->answer_c}} <br>
                                    D. {{$result->answer_d}} <br>
                                    E. {{$result->answer_e}} 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{route('dashboard.soal.index')}} " class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                    
				</form>

			</div>

		</div>
	</div>
</div>
@endsection