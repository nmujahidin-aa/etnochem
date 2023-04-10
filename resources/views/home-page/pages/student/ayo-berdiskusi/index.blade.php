@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 100px;">

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">

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
                        <div class="row">
                            <div class="col-3">
                                <div style="width:40px; height: 40px; border-radius:100%;" class="bg-primary my-1"></div>
                            </div>
                            <div class="col"><small>{{$row->name}}</small></div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection