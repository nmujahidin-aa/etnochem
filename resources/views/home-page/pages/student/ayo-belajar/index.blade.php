@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100vh; padding-top: 20vh;">

<div class="container pb-5">
        <h3 class="text-center pt-5">Ayo Belajar</h3>
        <br>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12 my-1">
                    <a href="{{route('student.ayo-belajar.soal')}}" class="card bg-warning text-decoration-none">
                        <div class="card-body text-center text-white">Pertanyaan</div>
                    </a>
                </div>
                
                <div class="col-12 my-1">
                    <a href="{{route('student.ayo-belajar.jadwal')}}" class="card bg-success text-decoration-none">
                        <div class="card-body text-center text-white">Penyusunan Jadwal</div>
                    </a>
                </div>

                <div class="col-12 my-1">
                    <a href="{{route('student.ayo-belajar.project')}}" class="card bg-primary text-decoration-none">
                        <div class="card-body text-center text-white">Penyusunan Project</div>
                    </a>
                </div>
                
                <div class="mt-5">
                    <a  href="{{route('student.index')}}" class="btn btn-warning">Kembali</a>
                </div>
            </div>  
        </div>
        <br>

    </div>

</section>

@endsection