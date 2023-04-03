@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">
        <div class="card mb-5">
            <div class="card-body shadow">
                <h3 class="text-center pt-5">Tujuan Pembelajaran</h3>
                <br>
                <div class="d-flex justify-content-center">
                    <img class="justify-content-center" src="/img/logo/peta_konsep.png" alt="" >
                </div>
                <br>
                <a  href="{{route('student.index')}}" class="btn btn-warning mx-4">Kembali</a>
            </div>
        </div>
    </div>

</section>

@endsection