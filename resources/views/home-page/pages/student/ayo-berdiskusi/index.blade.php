@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 100px;">

    <div class="container">
        <div class="row">
            <div class="col-3">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">Judul</div>
                            <div class="col-1">:</div>
                            <div class="col">Judul proyek ada disini</div>
                        </div>
                        <div class="row">
                            <div class="col-5">kelompok</div>
                            <div class="col-1">:</div>
                            <div class="col">1</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <p>User list</p>
                        <hr>
                        @foreach($table as $index => $row)
                        <div class="profile py-1">
                            <a href="#"><img src="{{URL::to('/')}}/img/testimonials/testimonials-1.jpg" alt="Profil"></a>
                            <small class="text-dark" style="font-size:12px;">{{$row->name}} </small>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection