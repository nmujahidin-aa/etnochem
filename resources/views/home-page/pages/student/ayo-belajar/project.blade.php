@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

<div class="container pb-5">
        <h1 class="text-center pt-5">Project</h1>
        <br>
            <div>
                <div class="mt-2">
                    <label for="" class="px-2">Judul</label>
                    <input type="text" class="form-control" placeholder="inputkan judul disini">
                </div>
                <div class="mt-2">
                    <label for="" class="px-2">Upload</label>
                    <input type="file" class="form-control">
                </div>
                <div class="mt-2">
                    <label for="" class="px-2">Deskripsi</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <a  href="{{route('student.ayo-belajar.index')}}" class="btn btn-warning mt-4">Kembali</a>
                <a  href="{{route('student.ayo-belajar.send')}}" class="btn btn-success mt-4">Kirim</a>
            </div>  
        </div>

    </div>

</section>

@endsection