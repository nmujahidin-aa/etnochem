@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">
        <div class="row">
            <div class="col-9">
                <br>
                <div class="row m-2">
                    <div class="col-8">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <strong class="text-white">Candra - Teacher</strong>
                                <br>
                                <small class="text-white">Mari diskusikan hasil produk kalian dari pembelajaran materi asam basa</small>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-4">       
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <strong>Tsalis - Student</strong>
                                <br>
                                <small>Saya perwakilan dari kelompok 1 membuat batik dengan pewarna alami dari bunga mawar, hasil warnanya cukup bagus, tapi tidak bertahan lama</small>
                            </div>
                        </div>       
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-8">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <strong class="text-white">Vanes - Student</strong>
                                <br>
                                <small class="text-white">Saya perwakilan dari kelompok 2 membuat pewarna alami dari kulit kayu secang dan daun gambir yang menghasilkan warna merah dan dapat bertahan lama</small>
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-8">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <strong class="text-white">Candra - Teacher</strong>
                                <br>
                                <small class="text-white">Nah anak-anak kira-kira apa yang menyebabkan warna alami pada kain batik ada yang bersifat tahan lama dan ada yang mudah luntur?</small>
                            </div>
                        </div>       
                    </div>
                </div>

                <div class="container mt-5">
                    <input type="text" class="form-control" placeholder="Ketik pesan">
                </div>

                <br>
                <a  href="{{route('student.index')}}" class="btn btn-warning mx-4">Kembali</a>
            
                
            </div>
            <div class="col-3">
                <div class="card bg-secondary mt-5 rounded">
                    <div class="card-body">
                        <h5 class="text-white">Dalam diskusi</h5>

                        <div class="text-white px-3">
                            <small>• Candra - Teacher</small>
                        </div>
                        <div class="text-white px-3">
                            <small>• Vanes - Student</small>
                        </div>
                        <div class="text-white px-3">
                            <small>• Laili - Student</small>
                        </div>
                        <div class="text-white px-3">
                            <small>• Akbar - Student</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection