@extends('dashboard.layouts.master')
@section('content')

<div class="container">
	<h3>Create User</h3>
	<div class="card">
		<div class="card-body">
			
			<div class="container-fluid">
				
				<form action="{{route('dashboard.user.store')}}" method="post" enctype='multipart/form-data'">
				@csrf
					<div>
						<label>Nama</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div>
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>

					<div>
						<label>Password</label>
						<input type="text" name="password" class="form-control">
					</div>
					<div>
						<label>Pilih Role</label>
						<select class="form-control" name="roles">
							<option value="">Pilih Role</option>
							<option value="Administrator">Administrator</option>
							<option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
						</select>
					</div>

					<div class="mt-3">
						<a href="{{route('dashboard.user.index')}} " class="btn btn-warning">Kembali</a>
						<button class="btn btn-primary">Create</button>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>
@endsection