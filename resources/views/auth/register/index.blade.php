@extends('auth.layouts.master')
@section('content')
<section style="background-image: url('/img/auth/background.png'); height: 100vh;" class="bg-dark">
	<div class="container p-5">
		<div class="card shadow" style="border-style: none;">
			<div class="card-body" style="padding: 0px;">
				
				<div class="row">
					<div class="col-md-5 col-sm-12" style="background: #8d7b68;">
						<div class="p-5">
							<h3 class="text-white">Etnochem.</h3>
							<div class="d-flex justify-content-center pt-5">
								<h2 class="text-white">Selamat Datang!</h2>
							</div>
							<div class="d-flex justify-content-center">
								<p class="text-white text-center"><small>Silahkan masuk atau daftar untuk mengakses diskusi. Berbagi materi, dan dapatkan pengalaman unik lainnya.
									<br>Etnochem adalah ruang belajar kimia dasar, sarana berdiskusi, dan berbagi informasi seputar pembelajaran.</small>
								</p>
							</div>
							<br class="mt-5">
							<a href="{{route('landing-page.home.index')}}" class="form-control text-center">
								<small class="btn btn-light text-dark" style="padding: 2px;">Beranda</small>
							</a>
						</div>
					</div>
					<div class="col-md-7 col-sm-12 p-5">
						<h2>Daftar Sekarang</h2>
						<small class="text-secondary">Daftar sekarang dan mulai belajar bersama kami</small>
						<form method="POST" action="{{route('auth.register.index')}}">
							@csrf
							<div class="pt-2">
								<input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Nama lengkap">
							</div>
							<div class="pt-2">
								<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
							</div>
							<div class="pt-2">
								<select name="role" id="role" class="form-control">
									<option value="STUDENT">Siswa</option>
									<option value="TEACHER">Guru</option>
								</select>
							</div>
							<div class="pt-2">
								<input type="password" name="password" id="password" class="form-control" placeholder="Password">
							</div>
							<div class="pt-2">
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
							</div>
							<div class="pt-3">
								<button class="btn form-control text-center text-white" style="background: #8d7b68;" type="submit">Daftar</button>
							</div>
						</form>
						<div class="row pt-2">
							<div class="col-6"><small>Sudah punya akun?<a href="{{route('auth.login.index')}}" class="text-decoration-none"> Masuk</a></small></div>
						</div>
						<p class="text-center pt-5"><small>&copy Etnochem.</small></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


@endsection