@extends('layouts.main')

@section('container')
    <div class="container text-left text-white mt-5 py-5">
        <div class="row">
            <div class="container text-white mt-5 mb-5">
                <div class="row">
                    <div class="col">
                        <img src="https://source.unsplash.com/500x300?chef">
                    </div>
                    <div class="col">
                        <h4 style="color :#ffbe00; font-size:30px;">{{ $judul2 }}</h4>
                        <br>
                        <p>{{ $desk2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container marginbot-50">
        <div class="row">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
                <div class="section-heading text-center">
                    <h2 class="text-center" style="margin-top:30px; color :#ffbe00; font-size:35px;">TEAM EXYPNOS</h2>
                </div>
            </div>

            <div class="divider-short"></div>
        </div>
    </div>

    <div class="container">


        <div id="grid-container" class="cbp-l-grid-team col-md-8">
            <ul>
                <li class="cbp-item psychiatrist">
                    <a href="" class="cbp-caption cbp-singlePage">
                        <div class="cbp-caption-defaultWrap">
                            <img src="/assets/img/pija.jpeg" alt="" width="100%">
                        </div>
                    </a>
                    <a href="" class="cbp-singlePage cbp-l-grid-team-name">Hafizah Saidatul</a>
                    <a class=" cbp-l-grid-team-name">203040050</a>
                    <div class="cbp-l-grid-team-position">Leader</div>
                </li>

                <li class="cbp-item cardiologist">
                    <a href="" class="cbp-caption cbp-singlePage">
                        <div class="cbp-caption-defaultWrap">
                            <img src="/assets/img/egg.jpg" alt="" width="100%">
                        </div>
                    </a>
                    <a href="" class="cbp-singlePage cbp-l-grid-team-name">Mohamad Egi Rahayu</a>
                    <a class=" cbp-l-grid-team-name">203040045</a>
                    <div class="cbp-l-grid-team-position">Back End</div>
                </li>

                <li class="cbp-item cardiologist">
                    <a href="" class="cbp-caption cbp-singlePage">
                        <div class="cbp-caption-defaultWrap">
                            <img src="/assets/img/nikolas.jpg" alt="" width="100%">
                        </div>

                    </a>
                    <a href="" class="cbp-singlePage cbp-l-grid-team-name">Nikolas Ramadhan</a>
                    <a class=" cbp-l-grid-team-name">203040049</a>
                    <div class="cbp-l-grid-team-position">Front End</div>
                </li>

                <li class="cbp-item neurologist">
                    <a href="" class="cbp-caption cbp-singlePage">
                        <div class="cbp-caption-defaultWrap">
                            <img src="/assets/img/alfi.jpg" alt="" width="100%">
                        </div>

                    </a>
                    <a href="" class="cbp-singlePage cbp-l-grid-team-name">Alfi Syahrin Rachmat</a>
                    <a class=" cbp-l-grid-team-name">203040054</a>
                    <div class="cbp-l-grid-team-position">Front End</div>
                </li>
            </ul>
        </div>


    </div>
@endsection
