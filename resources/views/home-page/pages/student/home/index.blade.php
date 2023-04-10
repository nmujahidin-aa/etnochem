@extends('home-page.layouts.master')
@section('content')


<div class="container-fluid" style="background-image:url('/img/landing-page/background.jpg'); height: 100vh;">
    <div class="container">
        <div style="padding-top: 15vh;">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary">search</button>
            </div>
            <div class="row p-2 mt-4">
               <!-- Tujuan Pembelajaran Start -->
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.tujuan-pembelajaran.index')}}" class="text-decoration-none">
                        <div style="background-image: linear-gradient(to bottom, #9f8170, #7f6244); border-radius: 50px;">
                            <div class="gambar-hover">
                                <img src="img/icon/goal.png" alt="" height="120px;" style="padding-top: 30px;">
                                <div class="pt-2 pb-5 text-white"><b>Tujuan Pembelajaran</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Tujuan Pembelajarn End -->

                <!-- Peta Konsep Start-->
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.peta-konsep.index')}}" class="text-decoration-none">
                        <div style="background-image: linear-gradient(to bottom, #9f8170, #7f6244); border-radius: 50px;">
                            <div class="gambar-hover">
                                <img src="img/icon/concept.png" alt="" height="120px;" style="padding-top: 30px;">
                                <div class="pt-2 pb-5 text-white"><b>Peta Konsep</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Peta Konsep End -->

                <!-- Ayo Berwawasan Start-->
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.ayo-berwawasan.index')}}" class="text-decoration-none">
                        <div style="background-image: linear-gradient(to bottom, #9f8170, #7f6244); border-radius: 50px;">
                            <div class="gambar-hover">
                                <img src="img/icon/chemist.png" alt="" height="120px;" style="padding-top: 30px;">
                                <div class="pt-2 pb-5 text-white"><b>Ayo Berwawasan</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Ayo Berwawasan End -->
            </div>

            <div class="row p-2">

                <!-- Ayo Berwawasan Start-->
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.ayo-belajar.index')}}" class="text-decoration-none">
                        <div style="background-image: linear-gradient(to bottom, #9f8170, #7f6244); border-radius: 50px;">
                            <div class="gambar-hover">
                                <img src="img/icon/book.png" alt="" height="120px;" style="padding-top: 30px;">
                                <div class="pt-2 pb-5 text-white"><b>Ayo Belajar</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Ayo Berwawasan End -->

                <!-- Ayo Berdiskusi Start-->
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.ayo-berdiskusi.index')}}" class="text-decoration-none">
                        <div style="background-image: linear-gradient(to bottom, #9f8170, #7f6244); border-radius: 50px;">
                            <div class="gambar-hover">
                                <img src="img/icon/conversation.png" alt="" height="120px;" style="padding-top: 30px;">
                                <div class="pt-2 pb-5 text-white"><b>Ayo Berdiskusi</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Ayo Berdiskusi End -->

                <!-- Ayo Berdiskusi Start-->
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.info-pengembang.index')}}" class="text-decoration-none">
                        <div style="background-image: linear-gradient(to bottom, #9f8170, #7f6244); border-radius: 50px;">
                            <div class="gambar-hover">
                                <img src="img/icon/development.png" alt="" height="120px;" style="padding-top: 30px;">
                                <div class="pt-2 pb-5 text-white"><b>Info Pengembang</b></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Ayo Berdiskusi End -->
            </div>
        </div>
    </div>
</div>

@endsection