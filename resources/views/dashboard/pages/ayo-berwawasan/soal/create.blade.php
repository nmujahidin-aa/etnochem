@extends('dashboard.layouts.master')
@section('content')
<div class="container">
	<h3>Create Soal</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.soal.store')}}" method="post" enctype='multipart/form-data'>
				@csrf
					<div class="my-3">
						<label>Soal</label>
						<input type="text" name="question" class="form-control">
					</div>
					
					<div class="my-3">
						<label>Jawaban A</label>
						<textarea class="form-control" name="answer_a"></textarea>
					</div>

                    <div class="my-3">
						<label>Jawaban B</label>
						<textarea class="form-control" name="answer_b"></textarea>
					</div>

                    <div class="my-3">
						<label>Jawaban C</label>
						<textarea class="form-control" name="answer_c"></textarea>
					</div>

                    <div class="my-3">
						<label>Jawaban D</label>
						<textarea class="form-control" name="answer_d"></textarea>
					</div>

                    <div class="my-3">
						<label>Jawaban E</label>
						<textarea class="form-control" name="answer_e"></textarea>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.soal.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection