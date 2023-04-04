@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100vh; padding-top: 20vh;">

    <div class="container pb-5">

        <div class="alert alert-success shadow" role="alert">
            <h4 class="alert-heading">Terimakasih!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            <br>
            <br>
            <div class="text-center">
                <a href="{{route('student.ayo-belajar.index')}}" class="btn btn-outline-success px-3">Ok</a>
            </div>
        </div>

    </div>

</section>

@endsection