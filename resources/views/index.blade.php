@extends('layouts.template')

@section('css')

@endsection

@section('main')
<section id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active  rounded-circle"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rounded-circle"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rounded-circle"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('image/nekoteacher01.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/nekoteacher02.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/nekoteacher03.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev d-flex justify-content-start pl-3" href="#carouselExampleIndicators"
        role="button" data-slide="prev">
        <span aria-hidden="true"><i class="fal fa-chevron-left fa-3x text-primary"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-flex justify-content-end pr-3" href="#carouselExampleIndicators"
        role="button" data-slide="next">
        <span aria-hidden="true"><i class="fal fa-chevron-right fa-3x text-primary"></i></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section class="mb-5">
    <article>
        <div id="title-box" class="text-center py-5">
            <h2 class="font-weight-normal">Raw Denim Heirloom Man Braid</h2>
            <p class="pt-1 col-md-10 col-lg-5 mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast
                vegan taxidermy. Gastropub
                indxgo
                juice poutine, ramps microdosing banh mi pug.</p>
            <div class="progress mx-auto" style="height: 4px; width: 64px; background-color: #6366F1;"></div>
        </div>
        <aside class="mb-4">
            <div class="row d-flex justify-content-center mx-auto">
                <div class="col-md-4  col-lg-3">
                    <div class=" lightblue mx-auto rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="{{ asset('image/svgexport-4.svg') }}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-normal">Shooting Stars</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>
                        <a href="#" class="card-link" style="color: #6366F1;">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                                class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-md-4  col-lg-3">
                    <div class=" lightblue mx-auto rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="{{ asset('image/svgexport-6.svg') }}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-normal">The Catalyzer</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>
                        <a href="#" class="card-link" style="color: #6366F1;">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                                class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg></a>
                    </div>
                </div>
                <div class="col-md-4  col-lg-3">
                    <div class=" lightblue mx-auto rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 80px; height: 80px;">
                        <img src="{{ asset('image/svgexport-7.svg') }}" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-normal">Neptune</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>
                        <a href="#" class="card-link" style="color: #6366F1;">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                                class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="d-flex justify-content-center pt-2">
            <button type="button" class="btn btn-lg text-white px-4"
                style="background-color:#6366F1 ;">Button</button>
        </div>
    </article>
</section>
<section class="py-5 mb-5">
    <div class="d-md-flex p-md-5 col-10 mx-auto">
        <h2 class="col-md-5">Master Cleanse Reliac Heirloom</h2>
        <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,
            subway tile poke
            farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.
        </p>
    </div>
    <div class="col-lg-10 d-flex pt-5 mx-auto">
        <div class="col-6 px-0">
            <div class="col d-flex px-0">
                <img class="col-6 px-1 px-md-3" src="{{ asset('image/500x300.png') }}" alt="">
                <img class="col-6 px-1 px-md-3" src="{{ asset('image/501x301.png') }}" alt="">
            </div>
            <img class="col pt-2 pt-md-4 px-1 px-md-3" src="{{ asset('image/601x361.png') }}" alt="">
        </div>
        <div class="col-6 px-0">
            <img class="col pb-2 pb-md-4 px-1 px-md-3" src="{{ asset('image/600x360.png') }}" alt="">
            <div class="col d-flex px-0">
                <img class="col-6 px-1 px-md-3" src="{{ asset('image/502x302.png') }}" alt="">
                <img class="col-6 px-1 px-md-3" src="{{ asset('image/503x303.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="text-center pt-5 pb-4">
        <h2>Pricing</h2>
        <p class="col-lg-6 mx-auto pb-5">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde
            lyft biodiesel artisan direct
            trade mumblecore 3 wolf moon twee</p>
    </div>
    <table class="table col-11 col-lg-6 mx-auto">
        <thead class="thead-light">
            <tr>
                <th scope="col">Plan</th>
                <th scope="col">Speed</th>
                <th scope="col">Storage</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Start</th>
                <td>5 Mb/s</td>
                <td>15 GB</td>
                <td>Free</td>
                <td>
                    <input type="radio" name="check" id="">
                </td>
            </tr>
            <tr>
                <th scope="row">Pro</th>
                <td>25 Mb/s</td>
                <td>25 GB</td>
                <td>$24</td>
                <td>
                    <input type="radio" name="check" id="">
                </td>
            </tr>
            <tr>
                <th scope="row">Business</th>
                <td>36 Mb/s</td>
                <td>40 GB</td>
                <td>$50</td>
                <td>
                    <input type="radio" name="check" id="">
                </td>
            </tr>
            <tr>
                <th scope="row">Exclusive</th>
                <td>48 Mb/s</td>
                <td>120 GB</td>
                <td>$72</td>
                <td>
                    <input type="radio" name="check" id="">
                </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="col-11 col-lg-6 d-flex justify-content-between mx-auto">
        <a href="#" class="card-link text-primary">Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
            </svg></a>
        <button class="btn btn-primary px-4" type="submit">Button</button>
    </div>
</section>
<section class="py-5">
    <div class="d-md-flex p-md-5 col-10 mx-auto">
        <h3 class="col-md-5">Pitchfork Kickstarter Taxidermy
            <div class="progress" style="height: 4px; width: 13%; background-color: #6366F1;"></div>
        </h3>
        <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
            farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom
            prism food truck ugh squid celiac humblebrag.
        </p>
    </div>
    <div class="d-lg-flex p-md-5  justify-content-center">
        <div class="d-md-flex col-lg-5 mb-4">
            <div class="col col-md-6 col-lg-6 card pt-4 px-4 mx-auto" style="width: 34rem;">
                <img src="{{ asset('image/720x400.png') }}" class="card-img-top" alt="...">
                <div class="card-body px-0">
                    <h6 class="card-subtitle mb-2" style="color: #6366F1;">SUBTITLE</h6>
                    <h5 class="card-title">Chichen Itza</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                        disrupt edison bulbche.</p>
                </div>
            </div>
            <div class="col col-md-6 col-lg-6 card pt-4 px-4 mx-auto mx-md-3" style="width: 34rem;">
                <img src="{{ asset('image/721x401.png') }}" class="card-img-top" alt="...">
                <div class="card-body px-0">
                    <h6 class="card-subtitle mb-2" style="color: #6366F1;">SUBTITLE</h6>
                    <h5 class="card-title">Colosseum Roma</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                        disrupt edison bulbche.</p>
                </div>
            </div>
        </div>
        <div class="d-md-flex col col-lg-5 mb-4">
            <div class="col col-md-6 col-lg-6 card pt-4 px-4 mx-auto" style="width: 34rem;">
                <img src="{{ asset('image/722x402.png') }}" class="card-img-top" alt="...">
                <div class="card-body px-0">
                    <h6 class="card-subtitle mb-2" style="color: #6366F1;">SUBTITLE</h6>
                    <h5 class="card-title">Great Pyramid of Giza</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                        disrupt edison bulbche.</p>
                </div>
            </div>
            <div class="col col-md-6 col-lg-6 card pt-4 px-4 mx-auto mx-md-3" style="width: 34rem;">
                <img src="{{ asset('image/723x403.png') }}" class="card-img-top" alt="...">
                <div class="card-body px-0">
                    <h6 class="card-subtitle mb-2" style="color: #6366F1;">SUBTITLE</h6>
                    <h5 class="card-title">San Francisco</h5>
                    <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon
                        disrupt edison bulbche.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="col col-lg-6 mx-auto">
    <div class="col d-md-flex py-5 justify-content-between">
        <div class=" lightblue mx-auto rounded-circle d-flex justify-content-center align-items-center"
            style="min-width: 128px; max-width: 128px; height: 128px;">
            <img src="{{ asset('image/svgexport-9.svg') }}" alt="">
        </div>
        <div class="col col-md-10">
            <h5 class="card-title font-weight-normal">Shooting Stars</h5>
            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                try-hard.</p>
            <a href="#" class="card-link" style="color: #6366F1;">Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                    class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg></a>
        </div>
    </div>
    <hr>
    <div class="d-md-flex flex-row-reverse py-5 ">
        <div class=" lightblue mx-auto rounded-circle d-flex justify-content-center align-items-center"
            style="min-width: 128px; max-width: 128px; height: 128px;">
            <img src="{{ asset('image/svgexport-11.svg') }}" alt="">
        </div>
        <div class="col col-md-10">
            <h5 class="card-title font-weight-normal">Shooting Stars</h5>
            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                try-hard.</p>
            <a href="#" class="card-link" style="color: #6366F1;">Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                    class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg></a>
        </div>
    </div>
    <hr>
    <div class="col d-md-flex py-5">
        <div class=" lightblue mx-auto rounded-circle d-flex justify-content-center align-items-center"
            style="min-width: 128px; max-width: 128px; height: 128px;">
            <img src="{{ asset('image/svgexport-12.svg') }}" alt="">
        </div>
        <div class="col-md-10">
            <h5 class="card-title font-weight-normal">Shooting Stars</h5>
            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                try-hard.</p>
            <a href="#" class="card-link" style="color: #6366F1;">Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#6366F1"
                    class="bi bi-arrow-right-short pb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg></a>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2 pb-5">
        <button type="button" class="btn btn-lg text-white px-4"
            style="background-color:#6366F1 ;">Button</button>
    </div>
</section>
<section class="py-5 d-lg-flex flex-wrap justify-content-center">
    <div class="col-12 col-md-10 col-lg-5 pt-5 d-md-flex mx-auto mx-lg-0">
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/420x260.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">The Catalyzer</h5>
                <p class="card-text">$16.00</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/421x261.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">Shooting Stars</h5>
                <p class="card-text">$21.15</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-5 pt-5 d-md-flex mx-auto mx-lg-0">
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/422x262.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">Neptune</h5>
                <p class="card-text">$12.00</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/423x263.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">The 400 Blows</h5>
                <p class="card-text">$18.40</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-5 pb-5 d-md-flex mx-auto mx-lg-0">
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/424x264.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">The Catalyzer</h5>
                <p class="card-text">$16.00</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/425x265.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">Shooting Stars</h5>
                <p class="card-text">$21.15</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-5 pb-5 d-md-flex mx-auto mx-lg-0">
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/427x267.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">Neptune</h5>
                <p class="card-text">$12.00</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <img src="{{ asset('image/428x268.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">CATEGORY</small></p>
                <h5 class="card-title">The 400 Blows</h5>
                <p class="card-text">$18.40</p>
            </div>
        </div>
    </div>
</section>
<section class="pb-5">
    <div class="mb-3 col-lg-8 mx-auto d-md-flex">
        <img class="col-lg-6" src="{{ asset('image/400x400.png') }}" alt="...">
        <div class="col-lg-6">
            <p class="card-text pt-3"><small class="text-muted">BRAND NAME</small></p>
            <h2 class="card-title ">The Catcher in the Rye</h2>
            <div class="d-flex">
                <div class="border-right pr-3">
                    <img src="{{ asset('image/svgexport-13.svg') }}" alt="">
                    <img src="{{ asset('image/svgexport-13.svg') }}" alt="">
                    <img src="{{ asset('image/svgexport-13.svg') }}" alt="">
                    <img src="{{ asset('image/svgexport-13.svg') }}" alt="">
                    <img src="{{ asset('image/svgexport-14.svg') }}" class="mr-2" alt="">
                    <span class="h5">4 Reviews</span>
                </div>
                <div class="pl-3">
                    <img src="{{ asset('image/svgexport-15.svg') }}" alt="">
                    <img src="{{ asset('image/svgexport-16.svg') }}" alt="">
                    <img src="{{ asset('image/svgexport-17.svg') }}" alt="">
                </div>
            </div>
            <p class="card-text pt-5">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha
                taximy
                chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
                neutra jean shorts keytar banjo tattooed umami cardigan.</p>
            <div class="d-flex">
                <span class="mr-3">Color</span>
                <div class="rounded-circle bg-light mr-1"
                    style="width: 24px; height: 24px; border:2px solid rgb(209,213,219);cursor:pointer;"></div>
                <div class="rounded-circle bg-dark mr-1"
                    style="width: 24px; height: 24px; border:2px solid rgb(209,213,219); cursor:pointer;"></div>
                <div class="rounded-circle mr-4"
                    style="width: 24px; height: 24px; border:2px solid rgb(209,213,219);cursor:pointer; background-color: #6366F1;">
                </div>
                <span class="mr-2">Size</span>
                <select name="" id="" style="width: 79px;">
                    <option value="SM">SM</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <h4 class="">$58.00</h4>
                <div class="d-flex">
                    <button type="button" class="btn btn-md text-white px-4 mr-3"
                        style="background-color:#6366F1 ;">Button</button>
                    <div class="rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 40px; height: 40px; background-color: #E5E7EB; line-height: 40px;">
                        <img src="{{ asset('image/svgexport-19.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-5 pb-5 position-relative">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14565.76452985473!2d120.6615577!3d24.1211415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcfe6bac3289fc4!2z5pW45L2N5pa55aGK5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1618114546793!5m2!1szh-TW!2stw"
        width="100%" height="696px" style="border:0;" allowfullscreen="" loading="lazy"
        class="position-relative"></iframe>
    <div class="col-10 col-md-3 px-5 bg-light position-absolute py-4 shadow-sm p-3 mb-5 bg-white rounded border"
        id="form-box">
        <span class="h5">聯絡我們 Contact Us</span>
        <form action="/contact" method="POST">
            @csrf
            <div class="form-group pt-2">
                <label for="exampleInputEmail1">姓名</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">電話</label>
                <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">主旨</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">內文</label>
                <textarea class="form-control" name="content" id="exampleInputPassword1" cols="30" rows="10" style="height: 128px;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3" style="width: 100%;">Submit</button>
            <div style="font-size: 12px;">Chicharrones blog helvetica normcore iceland tousled brook viral
                artisan.</div>
        </form>
    </div>
</section>
@endsection

@section('js')

@endsection
