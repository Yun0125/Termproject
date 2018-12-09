<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
	
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/stylepet.css" rel="stylesheet">
</head>
<body>
    
<div class="navbar navbar-expand-lg fixed-top justify-content-center navbar-light bg-light">
    <div class="container">
        <a href="{{url("pitpet")}}" class="navbar-brand text-warning">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url("hotel")}}">HOTEL SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("petsitter")}}">PETSITTER SERVICE</a>
            </li>
          </ul>
      </div>
    </div>
</div>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">펫시터 서비스</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">펫시터란?</h4>
            <div style="text-align:left">
            <b class="text-muted">
                반려동물을 돌봐주는 사람입니다. 집에 사람이 없거나 부득이한 사정으로 인해 집을 비울 경우 이용하실 수 있습니다.<br>
                -펫호텔이 불편한 보호자님들에게 추천!<br>
                -다른 공간에서 적응이 힘든 반려견에게 추천!<br>
                -외출이 잦은 보호자님들에게 추천!<br>
                  </b>
              </div>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">펫시터의 하는일</h4>
            <div style="text-align:left">
            <b class="text-muted">
                맞춤 식사 제공<br>
                -보호자님이 지시한 금여량 및 식시시간에 맞춰 식사를 제공합니다.<br>
                놀이<br>
                -장난감을 이용해 놀이를 합니다.<br>
                배변 및 환경 정리<br>
                -배변패드 교체나 고양이 화장실 정리 등 환경을 깨끗히 유지합니다.<br>
                시간에 맞춰 산책<br>
                -보호자님이 알려주신 시간대와 코스로 산책합니다.<br>
                  </b>
              </div>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">방문 돌봄</h4>
            <div style="text-align:left">
            <b class="text-muted">
               데이케어<br>
               -12시간 이내, 장시간 외출시 추천드려요!<br>
               -요금: 30.000부터 (반려동물 마릿수나 날짜에 따라 비용이 달라질 수 있습니다.)<br><br>
               1박케어<br>
               -하룻밤 이상, 집을 비울 때 추천드려요!<br>
               -요금: 20.000부터 (반려동물 마릿수나 날짜에 따라 비용이 달라질 수 있습니다.)
            </b>
              </div>
          </div>
        </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">그 외 사항</h4>
            <div style="text-align:left">
            <b class="text-muted">-맞춤 펫시터를 찾아보세요<br>
            -환경사진, 경력까지 꼼꼼히 펫시터의 프로필을 확인하세요.<br>
            -반려동물 사진이나 배변사항 등을 24시간 확인하실 수 있어요.
            </b>
              </div>
          </div>
        </div>
    </section>
      
       <!-- About -->
       <hr>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">펫시터 이용방법</h2><br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading"><br><br>
                    <h4>맞춤 펫시터에게 연락하기</h4>
                    <h5 class="subheading">상담후 예약잡기</h5>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading"><br><br>
                    <h4>세부사항 전달</h4>
                    <h5 class="subheading">방문 위치, 산책 코스, 시간, 간식 종류 등 세부사항 전달.</h5>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
              <div class="timeline-heading"><br><br>
                    <h4>예약날 방문 펫시터 맞이하기</h4>
                    <h5 class="subheading">반려동물 믿고 맡기기</h5>
                    </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>펫시터
                   <br>이용
                    <br>완료!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">petsitter</h2>
            <h3 class="section-subheading text-muted">맞춤 펫시터</h3>
            <div class="portfolioFilter">
				<ul class="Portfolio-nav fadeIn">
					<li><a href="#" data-filter="*" class="current">모든 펫시터</a></li>
					<li><a href="#" data-filter=".visit">방문 펫시터</a></li>
					<li><a href="#" data-filter=".pet">위탁 펫시터</a></li>
					<li><a href="#" data-filter=".one">1박 케어</a></li>
					<li><a href="#" data-filter=".day">데이 케어</a></li>
				</ul>
			</div>
          </div>
        </div>
        <div class="row fadeInUp">
          <div class="col-sm-4">
            <div class="team-member visit">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Kay Garland</h4>
              <p class="text-muted">Lead Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member visit">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member one">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
            <div class="col-sm-4">
            <div class="team-member day">
              <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member one">
              <img class="mx-auto rounded-circle" src="img/team/5.jpg" alt="">
              <h4>Larry Parker</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="team-member pet">
              <img class="mx-auto rounded-circle" src="img/team/6.jpg" alt="">
              <h4>Diana Pertersen</h4>
              <p class="text-muted">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; pitpet 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
