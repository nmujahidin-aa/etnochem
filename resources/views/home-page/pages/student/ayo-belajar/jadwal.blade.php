@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100vh; padding-top: 20vh;">

<div class="container pb-5">
        <h1 class="text-center pt-5">Penyusunan Jadwal</h1>
        <br>
            <div>
                <div class="row mt-3">
                    <div class="col-2">
                        <select name="" id="" class="form-control">
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                        </select>
                    </div>
                    <div class="col-10">
                        <input type="date" class="form-control">
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-2">
                        <select name="" id="" class="form-control">
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                        </select>
                    </div>
                    <div class="col-10">
                        <input type="date" class="form-control">
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-2">
                        <select name="" id="" class="form-control">
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                        </select>
                    </div>
                    <div class="col-10">
                        <input type="date" class="form-control">
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-2">
                        <select name="" id="" class="form-control">
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                            <option value="">Kegaiatn 1</option>
                        </select>
                    </div>
                    <div class="col-10">
                        <input type="date" class="form-control">
                    </div>
                </div>

                <a  href="{{route('student.ayo-belajar.index')}}" class="btn btn-warning mt-4">Kembali</a>
                <a  href="{{route('student.ayo-belajar.send')}}" class="btn btn-success mt-4">Kirim</a>
            </div>  
        </div>

    </div>

</section>

@endsection