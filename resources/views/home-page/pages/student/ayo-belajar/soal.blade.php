@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">

    <div class="text-center">
        <div>
            <video width="640" height="360" controls>
                <source src="/video/video_2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="d-flex justify-content-center">
                <a href="https://bit.ly/ETNOCHEM" class="text-decoration-none p-2 bg-success rounded-pill text-white">Mulai Baca</a>
            </div>
        </div>
            

    </div>

       <div class="card shadow mt-3">
            <div class="card-body">
                <div class="container p-3">
                    <b>Ketika berbicara mengenai hubungan antara proses pewarnaan dengan salah satu konsep teori asam basa adalah, bagaimana reaksi yang terjadi antara salah satu jenis pewarna batik (Naphtol AS) dengan NaOH dalam pembuatan warna batik?</b>
                    <div class="mt-3 px-3">
                        <textarea class="form-control" placeholder="Masukkan jawaban anda disini" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
       </div>

       <div class="card shadow mt-3">
            <div class="card-body">
                <div class="container p-3">
                    <b>Jelaskan hubungan naphtol AS dengan NaOH berdasarkan salah satu teori asam basa yang berkembang?</b>
                    <div class="mt-3 px-3">
                        <textarea class="form-control" placeholder="Masukkan jawaban anda disini" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
       </div>

       <div class="card shadow mt-3">
            <div class="card-body">
                <div class="container p-3">
                    <b>Dalam pembuatan larutan warna indigosol pada batik sidomukti malang digunakan HCl agar proses fikssi dapat terlaksana, bagaimana bisa penambahan senyawa asam/basa dapat mempengaruhi hal tersebut?</b>
                    <div class="mt-3 px-3">
                       <textarea class="form-control" placeholder="Masukkan jawaban anda disini" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
       </div>

       
       <div class="mt-4">
            <a href="{{route('student.ayo-belajar.send')}}" class="btn btn-success" >Kirim</a>
       </div>
    </div>

</section>

@endsection