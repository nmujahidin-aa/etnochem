@extends('home-page.layouts.master')
@section('content')


<div class="container-fluid" style="background: #D7D7D7; height: 100vh;">
    <div class="container">
        <div style="padding-top: 15vh;">
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary">search</button>
            </div>
            <div class="row p-2 mt-4">
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.tujuan-pembelajaran.index')}}" class="card text-decoration-none">
                        <div class="card-body bg-primary justify-content-center">
                            <img src="img/icon/goal.png" alt="" height="120px;">
                            <div class="pt-4 text-white"><b>Tujuan Pembelajaran</b></div>
                        </div>
                    </a>
                </div>
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.peta-konsep.index')}}" class="card text-decoration-none">
                        <div class="card-body  bg-success">
                            <img src="img/icon/concept.png" alt="" height="120px;">
                            <div class="pt-4 text-white"><b>Peta Konsep</b></div>
                        </div>
                    </a>
                </div>
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.ayo-berwawasan.index')}}" class="card text-decoration-none">
                        <div class="card-body  bg-warning">
                            <img src="img/icon/chemist.png" alt="" height="120px;">
                            <div class="pt-4 text-white"><b>Ayo Berwawasan</b></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.ayo-belajar.index')}}" class="card text-decoration-none">
                        <div class="card-body  bg-warning">
                            <img src="img/icon/book.png" alt="" height="120px;">
                            <div class="pt-4 text-white"><b>Ayo Belajar</b></div>
                        </div>
                    </a>
                </div>
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.ayo-berdiskusi.index')}}" class="card text-decoration-none">
                        <div class="card-body  bg-success">
                            <img src="img/icon/conversation.png" alt="" height="120px;">
                            <div class="pt-4 text-white"><b>Ayo Berdiskusi</b></div>
                        </div>
                    </a>
                </div>
                <div class="col-4 px-2 text-center">
                    <a href="{{route('student.info-pengembang.index')}}" class="card text-decoration-none">
                        <div class="card-body  bg-primary">
                            <img src="img/icon/development.png" alt="" height="120px;">
                            <div class="pt-4 text-white"><b>Info Pengembang</b></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection