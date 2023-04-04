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
                                    <input type="radio" name="s1">
                                    <label > HCl sebagai basa</label><br>
                                    <input type="radio" name="s1">
                                    <label > HCl dan Cl- sebagai asam</label><br>
                                    <input type="radio" name="s1">
                                    <label > H2O sebagai asam</label><br>
                                    <input type="radio" name="s1">
                                    <label >  H3O+ dan H2O sebagai pasangan asam basa konjugat</label><br>
                                    <input type="radio" name="s1">
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
                                    Larutan asam basa berikut yang bersifat korosif dan digunakan dalam proses pewarnaan kain Batik Semarangan agar dihasilkan warna yang diinginkan adalah . . . .
                                    <div class="mt-3 px-3">
                                        <input type="radio" name="s2">
                                        <label > Al(OH)3, NaOH, dan Ba(OH)</label><br>
                                        <input type="radio" name="s2">
                                        <label > HCl, NaOH dan H2SO4 </label><br>
                                        <input type="radio" name="s2">
                                        <label > H2SO4, HF dan Mg(OH)2</label><br>
                                        <input type="radio" name="s2">
                                        <label > HCl, Ca(OH)2 dan KOH </label><br>
                                        <input type="radio" name="s2">
                                        <label > HCN, HBr, Sr(OH)2</label><br>
                                    </div>
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
                                Larutan HCl dan H2SO4 digunakan oleh pengrajin batik untuk melarutkan zat warna indigosol. Jika diketahui reaksi asam basa sebagai berikut: <br>
                               <strong> 1) HCl + H2O 🡪 H3O+ + Cl-</strong> <br>
                               <strong> 2) H2SO4 + H2O 🡪 H3O+ + HSO4-</strong> <br>      
                               Pernyataan yang benar berdasarkan kedua reaksi tersebut adalah…                                    
                               <div class="mt-3 px-3">
                                    <input type="radio" name="s3">
                                    <label > H2O berlaku sebagai asam pada reaksi 1 dan basa pada reaksi 2</label><br>
                                    <input type="radio" name="s3">
                                    <label > H2O berlaku sebagai basa pada reaksi 1 dan asam pada reaksi 2 </label><br>
                                    <input type="radio" name="s3">
                                    <label > H2O berlaku sebagai asam pada reaksi 1 dan 2 </label><br>
                                    <input type="radio" name="s3">
                                    <label > H2O berlaku sebagai basa pada reaksi 1 dan 2 </label><br>
                                    <input type="radio" name="s3">
                                    <label > H2O berlaku sebagai basa pada reaksi 1 dan H3O+ berlaku sebagai asam pada reaksi 2</label><br>
                                </div>
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