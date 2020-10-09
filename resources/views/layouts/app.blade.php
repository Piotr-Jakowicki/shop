<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Album example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}

.progress {
    height: 10px;
}

.item-section {
    padding-bottom: 20px;
}

.rating-card{
	padding:10px;
	background-color:#F5F5F5;
	width:100%;
	border-radius:10px;
	text-align: center;
	margin: 0 auto;
	margin-top:30px;
	box-shadow: 2px 2px 18px -2px;
}
.fa-star,.fa-star-o{
	color:orange;
}
.rating-card h1{
	color:#337AB7;
	margin-bottom:30px;
}
.rating{
	width: 50%;
	float:left;
}
.rating p{
	margin-top:10px;
	font-size: 20px;
}
.rating h2{
	margin:0px;
	font-size:60px;
	font-weight: normal;
}
.rating-process{
	width: 50%;
	text-align: left;
	float:right;
}
.rating-right-part{
	margin-bottom:3px;
}
.rating-right-part p{
	margin:0px;
}
.progress,.progress-2,.progress-3,.progress-4,.progress-5{
    background:#c2c2c2;
    border-radius: 13px;
    height:18px;
    width:70%;
    padding:3px;
    margin:-20px 0px 0px 50px;
    display: block;
}
.progress:after,.progress-2:after,.progress-3:after,.progress-4:after,.progress-5:after{
    content: '';
    display: block;
    background: #337AB7;
    width:80%;
    height: 100%;
    border-radius: 9px;
}
.progress-2:after{
	width: 60%;
}
.progress-3:after{
	width:40%;
}
.progress-4:after{
	width:20%;
}
.progress-5:after{
	width:10%;
}
@media (min-width:320px) and (max-width:640px){
	.rating{
		width: 100%;
	}
	.rating-process{
		width:100%;
	}	
}


    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column min-vh-100">
    @include('includes.navbar')

<main role="main">

  @include('includes.jumbotron')


    <div class="container-fluid">

      <div class="row">
          
          
            @yield('content')
          
      </div>
    </div>

</main>

<footer class="text-muted mt-auto pt-4">
  @include('includes.footer')
</footer>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>