@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100vh; padding-top: 20vh;">

    <div class="container pb-5">
        <div class="card" style="background: #8D7B68;">
            <div class="card-body shadow">
                <h3 class="text-center text-white pt-5">Tujuan Pembelajaran</h3>
                <br>
                <p class="px-4 text-white">Peserta didik dapat menjelaskan konsep asam dan basa menurut teori pencetus asam basa beserta kekuatannya dan menghitung kesetimbangan ion dan derajat keasaman (pH) dalam larutan asam atau basa, serta menganalisis trayek perubahan pH beberapa indikator yang diekstrak dari bahan alam melalui percobaan dengan model pembelajaran Project Based Learning yang dilakukan dengan menggali informasi dari berbagai sumber belajar, penyelidikan sederhana, hingga penarikan kesimpulan</p>

                <a  href="{{route('student.index')}}" class="btn btn-warning mx-4">Kembali</a>
            </div>
        </div>
    </div>

</section>

@endsection