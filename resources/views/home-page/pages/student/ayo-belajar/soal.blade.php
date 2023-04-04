@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">

    <div class="text-center">
        <video width="640" height="360" controls>
            <source src="/video/video_1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

       <div class="card shadow mt-3">
            <div class="card-body">
                <div class="container p-3">
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quisquam sapiente nobis harum nesciunt necessitatibus sequi eos quis expedita ipsum. Impedit accusantium magnam odio, asperiores inventore minima maxime at est!</b>
                    <div class="mt-3 px-3">
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                    </div>
                </div>
            </div>
       </div>

       <div class="card shadow mt-3">
            <div class="card-body">
                <div class="container p-3">
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quisquam sapiente nobis harum nesciunt necessitatibus sequi eos quis expedita ipsum. Impedit accusantium magnam odio, asperiores inventore minima maxime at est!</b>
                    <div class="mt-3 px-3">
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                    </div>
                </div>
            </div>
       </div>

       <div class="card shadow mt-3">
            <div class="card-body">
                <div class="container p-3">
                    <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quisquam sapiente nobis harum nesciunt necessitatibus sequi eos quis expedita ipsum. Impedit accusantium magnam odio, asperiores inventore minima maxime at est!</b>
                    <div class="mt-3 px-3">
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
                        <input type="radio" name="pertanyaan">
                        <label> Lorem ipsum</label> <br>
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