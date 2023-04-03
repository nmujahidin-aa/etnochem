@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Edit Kompetensi</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.soal.update',$result->id)}}" method="post" enctype='multipart/form-data'>
				@csrf
				@method("PUT")
				<br>
					<div>
						<label>Soal</label>
						<input type="text" value="{{$result->question}}" name="question" class="form-control">
					</div>

					<div>
						<label>Jawaban A</label>
						<input type="text" value="{{$result->answer_a}}" name="answer_a" class="form-control">
					</div>

                    <div>
						<label>Jawaban B</label>
						<input type="text" value="{{$result->answer_b}}" name="answer_b" class="form-control">
					</div>

                    <div>
						<label>Jawaban C</label>
						<input type="text" value="{{$result->answer_c}}" name="answer_c" class="form-control">
					</div>

                    <div>
						<label>Jawaban D</label>
						<input type="text" value="{{$result->answer_d}}" name="answer_d" class="form-control">
					</div>

                    <div>
						<label>Jawaban E</label>
						<input type="text" value="{{$result->answer_e}}" name="answer_e" class="form-control">
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.soal.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Edit</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection