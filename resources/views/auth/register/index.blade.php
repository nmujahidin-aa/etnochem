@extends('auth.layouts.master')
@section('content')
<section style="background-image: url(images/landing-page/background.jpeg); height: 100%;">
	<div class="container p-5">
		<div class="card shadow" style="border-style: none;">
			<div class="card-body" style="padding: 0px;">
				
				<div class="row">
					<div class="col-md-5 col-sm-12 bg-primary">
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
						<form action="">
							<div class="pt-2">
								<input type="text" name="" id="" class="form-control" placeholder="Nama lengkap">
							</div>
							<div class="pt-2">
								<input type="email" name="" id="" class="form-control" placeholder="Email">
							</div>
							<div class="pt-2">
								<select name="" id="" class="form-control">
									<option value="">=== Pilih Role ===</option>
									<option value="siswa">Siswa</option>
									<option value="guru">Guru</option>
								</select>
							</div>
							<div class="pt-2">
								<input type="password" name="" id="" class="form-control" placeholder="Password">
							</div>
							<div class="pt-2">
								<input type="password" name="" id="" class="form-control" placeholder="Konfirmasi Password">
							</div>
							<div class="pt-3">
								<button class="btn btn-primary form-control text-center">Daftar</button>
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