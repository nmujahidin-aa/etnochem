@extends('home-page.layouts.master')
@section('content')

<section class="container-fluid" style="background: #D7D7D7; height: 100%; padding-top: 20vh;">

    <div class="container pb-5">
        <div class="card mb-5">
            <div class="card-body shadow">
                <h3 class="text-center pt-5">Ayo Berwawasan</h3>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                                <strong class="text-white">Soal 1</strong>
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                 Andi melarutkan HCl menggunakan air untuk proses pewarnaan batik agar dihasilkan warna yang diinginkan. Jika diketahui reaksi HCl dan air sebagai berikut, pernyataan yang benar menurut teori Bronsted-Lowry adalah. <br><strong>HCl + H2O ⇌ Cl- + H3O+</strong>

                                <div class="mt-3 px-3">
                                    <input type="radio">
                                    <label > HCl sebagai basa</label><br>
                                    <input type="radio">
                                    <label > HCl dan Cl- sebagai asam</label><br>
                                    <input type="radio">
                                    <label > H2O sebagai asam</label><br>
                                    <input type="radio">
                                    <label >  H3O+ dan H2O sebagai pasangan asam basa konjugat</label><br>
                                    <input type="radio">
                                    <label > Cl- dan H3O+ sebagai pasangan asam basa konjugat</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button bg-success collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                                <strong class="text-white">Soal 2</strong>
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button bg-success collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
                                <strong class="text-white">Soal 3</strong>
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</section>

@endsection