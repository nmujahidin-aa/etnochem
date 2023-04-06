@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 15vh;">

    <div class="container pb-5">
        
                <h3 class="text-center pt-5">Ayo Berwawasan</h3>
                <br>

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video width="640" height="360" controls class="d-block w-100">
                                <source src="/video/video_1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video width="640" height="360" controls class="d-block w-100">
                                <source src="/video/video_2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video width="640" height="360" controls class="d-block w-100">
                                <source src="/video/video_3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br>
                <a  href="{{route('student.ayo-berwawasan.index')}}" class="btn btn-warning mx-4">Kembali</a>
    </div>

</section>

@endsection