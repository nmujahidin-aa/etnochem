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
                        <div class="col text-center py-2">
                            <video width="640" height="360" controls>
                                <source src="/video/video_1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col text-center py-2">
                            <video width="640" height="360" controls>
                                <source src="/video/video_1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col text-center py-2">
                            <video width="640" height="360" controls>
                                <source src="/video/video_1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col text-center py-2">
                            <video width="640" height="360" controls>
                                <source src="/video/video_1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col text-center py-2">
                            <video width="640" height="360" controls>
                                <source src="/video/video_1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <br>
                <a  href="{{route('student.ayo-berwawasan.index')}}" class="btn btn-warning mx-4">Kembali</a>
            </div>
        </div>
    </div>

</section>

@endsection