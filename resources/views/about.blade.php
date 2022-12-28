@extends ('layouts.main')
<link href="/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/css/plugins/cubeportfolio/css/cubeportfolio.min.css">
<link href="/css/owl.carousel.css" rel="stylesheet" media="screen" />
<link href="/css/nivo-lightbox.css" rel="stylesheet" />
<link href="/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
<link href="/css/owl.theme.css" rel="stylesheet" media="screen" />
<link href="/css/animate.css" rel="stylesheet" />

@section ('container')
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
          <p>{{ $desk2 }}<p>
         
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
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item psychiatrist">
                        <a href="" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/assets/img/pija.jpeg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
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
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="cbp-singlePage cbp-l-grid-team-name">Mohamad Egi Rahayu</a>
                        <a class=" cbp-l-grid-team-name">203040050</a>
                        <div class="cbp-l-grid-team-position">Back End</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/assets/img/nikolas.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
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
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="cbp-singlePage cbp-l-grid-team-name">Alfi Syahrin Rachmat</a>
                        <a class=" cbp-l-grid-team-name">203040054</a>
                        <div class="cbp-l-grid-team-position">Front End</div>
                    </li>
                    <br>
                </ul>
               
            </div>
            <br>
            <br>
			</div>
			</div>
		</div>
    <!-- Core JavaScript Files -->
 <script src="/js/jquery.min.js"></script>	 
 <script src="/js/jquery.easing.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.scrollTo.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/stellar.js"></script>
<script src="/css/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/nivo-lightbox.min.js"></script>
<script src="/js/custom.js"></script>
@endsection