@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">
        <div class="card mb-5">
            <div class="card-body shadow">
                <h3 class="text-center pt-5">Ayo Berwawasan</h3>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 m-1">
                            <a href="{{route('student.ayo-berwawasan.video')}}" class="card bg-warning text-decoration-none">
                                <div class="card-body text-center text-white">Video Pembelajaran</div>
                            </a>
                        </div>
                        <div class="col-12 m-1">
                            <a href="{{route('student.ayo-berwawasan.bahan')}}" class="card bg-primary text-decoration-none">
                                <div class="card-body text-center text-white">Bahan Bacaan Siswa</div>
                            </a>
                        </div>
                        <div class="col-12 m-1">
                            <a href="{{route('student.ayo-berwawasan.soal')}}" class="card bg-success text-decoration-none">
                                <div class="card-body text-center text-white">Soal dan Pembahasan</div>
                            </a>
                        </div>

                    </div>  
                </div>
                <br>
                <a  href="{{route('student.index')}}" class="btn btn-warning mx-4">Kembali</a>
            </div>
        </div>
    </div>

</section>

@endsection