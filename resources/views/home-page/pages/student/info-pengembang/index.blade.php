@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">
        <h2>Developer Information</h2>
        <a  href="{{route('student.index')}}" class="btn btn-warning mx-4">Kembali</a>
    </div>

</section>

@endsection