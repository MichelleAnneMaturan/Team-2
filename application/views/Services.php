<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>SELA</title>
   <link rel = "icon" href = 
"https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.15752-9/270191871_980404992573815_776067903002688019_n.png?_nc_cat=100&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeGf5pgypNyzGv3uIxGAF2PBrzbk0H7uQDqvNuTQfu5AOg88LJbuFlyeCKsr2TG_SyHdLs7LPjK_z1bDY9nGuSYr&_nc_ohc=tEXST5trolEAX_eRyS3&tn=eFuJ3yCXcVJpEiDY&_nc_ht=scontent.fmnl17-1.fna&oh=03_AVI5Z_3voaRc2KSvr5FtQInajQq7JcajhVgzTu-tS7sygw&oe=62066D09" 
        type = "image/x-icon">

	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

<style>


*{
    margin: 0;
    padding: 0;
}



.navbar{
    width: 1200px;
    height: 70px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}
.logo{
    margin: 0 50px;
    height: 60px;
    float: left;
    color: #FFC300;
    font-size: 35px;
    text-transform: capitalize;
    font-weight: bold;
    letter-spacing: 2px;
}



ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

    
}

ul li a:hover{
    color: #FFC300 ;
}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid  #FFC300  ;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #FFC300  ;
    border: 2px solid  #FFC300  ;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background:   #FFC300  ;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color:  #FFC300  ;
    font-size: 65px
}

.form{
    width: 300px;
    height: 420px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color:   #FFC300  ;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #DAF7A6  ;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #FFC300 ;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color:   #FFC300 ;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #FFC300  ;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color:  #FFC300  ;
}

.loader_bg{
    position: fixed;
    z-index: 999999;
    background : #fff;
    width: 100%;
    height: 100%;
}
.loader {
    border: 0 solid transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(50vw - 75px);
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #ff5733;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
  animation-delay: .5s;
}
@keyframes loader {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
    }
}

.img{
    width: 10px;
    height: 5px;
}

.carousel-item {
	height: 100vh;
	min-height: 300px;
   
   
}
.carousel-caption {
	bottom: 220px;
    background: rgb(0, 0, 0); /* Fallback color */
    background: rgba(0, 0, 0, 0.6); /* Black background with 0.5 opacity */
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
	font-family: merienda;
  
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 1.9;7
	font-family: poppins;
    
   
}
.carousel-caption a {
	text-transform: uppercase;
	background:#C89819;

	padding: 10px 30px;
	display: inline-block;
	color: #fff;
	margin-top: 15px;
   
   
}
.navbar-nav a {
	font-family: poppins;
	font-size: 18px;
	text-transform: uppercase;
	font-weight: bold;
}
.navbar-light .navbar-brand {
	color: #fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
}
.navbar-nav {
	text-align: center;
}
.nav-link {
	padding: .2rem 1rem;
}
.nav-link.active, .nav-link:focus {
	color: #fff;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #fff;
}
.w-100 {
	height: 100vh;
}
@media only screen and (max-width: 767px) {
	.navbar-nav.ml-auto {
		background: rgba(0, 0, 0, 0.5);
	}
	.navbar-nav a {
		font-size: 14px;
		font-weight: normal;
	}
}

/* BUTTON DESIGN */


.content .cn{
    width: 160px;
    height: 40px;
    background:   #FFC300  ;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color:  #FFC300  ;
    font-size: 65px
}



   </style>
</head>
<header>
<body>

<div class="loader_bg">
    <div class="loader"></div>
    </div> 
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SELAPH</h2>
            </div>
            <div class="menu">
                <ul >
                    <li><a  href="<?=base_url('Welcome/Home')?>" style="font-size: 18px; color: #FFC300;">HOME</a></li>
                    <li><a href="#"style="font-size: 18px; color: #FFC300; ">ABOUT</a></li>
                    <li><a href="<?=base_url('Welcome/Services')?>"style="font-size: 18px; color: #FFC300;">SERVICE</a></li>
                    <li><a href="#"style="font-size: 18px; color: #FFC300;">CONTACT</a></li>
                    <li><a href="<?=base_url('Welcome/Front')?>"style="font-size: 18px; color: #FFC300;">Logout</a></li>
                </ul>
            </div>



        </div> 
</nav>

        
	<div class="carousel slide"  data-ride="carousel" id="carouselExampleIndicators">
		<ol class="carousel-indicators" >
			<li class="active"  data-slide-to="0" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="3" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="4" data-target="#carouselExampleIndicators"></li>
		</ol>
		<div class="carousel-inner" >
        <div class="carousel-item active" >
				<img alt="First slide" class="d-block w-100" src="https://www.kbf.ph/wp-content/uploads/photo-gallery/imported_from_media_libray//adoption12chosen-to-be-loved.png">
				<div class="carousel-caption d-none d-md-block" style="margin: -100px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Kaisahang Buhay Foundation Inc.</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">KBFs Day Care Service establishes and operates day care centers in disadvantaged communities as a venue for children to develop their psycho-social, intellectual, physical and emotional functioning based on accepted child development concepts.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://cms.org.ph/"  target="_blank">Visit Our Page for more info</a></p>
				</div>
			</div>
			<div class="carousel-item ">
				<img alt="Third slide" class="d-block w-100" src="http://bulilit.onesimo.ch/wp-content/gallery/intro/bulilit-520.jpg">
				<div class="carousel-caption d-none d-md-block" style="margin: -100px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Onesimu Bulilit</h5>
					<p class="animated bounceInLeft" style="animation-delay: 2s ">Onesimo Bulilit Foundation is a faith-based, non-profit, non-government organization working among street children and their families in Manila, Philippines. We promote and practice education that takes into consideration the child’s nature, preferences, and capacity and aims at developing the child’s full potential.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Schedule a Visit</a></p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="http://bulilit.onesimo.ch/" target="_blank">Visit our page for more info</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.6435-9/84357713_2988895107801001_5072160289844101120_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeFKdHU1SE80yW94fLvGT2vaIBMxXEBgvasgEzFcQGC9q-NDvqWsFIJVLr7dkeC-430TlnRhyKb502kT-jDHobQL&_nc_ohc=w7dx79KHmAsAX9Nvj1o&_nc_oc=AQmse80QCGz0tyAkG4jPj-5cdF4n98R_g3TL_HjbAMwH8oWfHUgbGhk1_xnbwbQ7Wyc&_nc_ht=scontent.fmnl17-1.fna&oh=00_AT_DwwDocNTlIxF3pk9VBDGDSnM98FJGDkvPjX6zAL7FFA&oe=620CBAAD">
				<div class="carousel-caption d-none d-md-block" style="margin: -120px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Alay Pagasa Christian Foundation, Inc.</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Philippine Childrens Ministries Network, Inc. is established in November 1998 as a network of Christian non-government organizations and churches with ministry to children-at-risk. PCMN has become a unifying voice for the 51 member organizations and churches in advocating for the protection and participation of children and youth.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://www.thepcmn.org/mem1" target="_blank" >Visit Our Page for more info</a></p>
				</div>
			</div>
            
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t31.18172-8/17620138_1287141501364687_3586334783967771972_o.jpg?_nc_cat=110&ccb=1-5&_nc_sid=9267fe&_nc_eui2=AeEZeZX0jfM64mEXtsfdWNjrGatmh2jQXkcZq2aHaNBeR5kP_6eNmFNjZkTkDXCNvn2CZ-r5j1qo5gn1PY2G71Ye&_nc_ohc=CtTtNWI9oxMAX_jn8Qk&_nc_ht=scontent.fcrk1-4.fna&oh=00_AT9LWkEVMaWtTLgHKYuIvwPkEX0md6gZ7LgLpT9adc7klg&oe=620ECDA5">
				<div class="carousel-caption d-none d-md-block"  style="margin: -100px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Christian Compassion Ministries</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">CCM is a Baptist Ministry that provides aid to more than 300 families in slum areas in Manila and to children who have been abused or neglected. To provide the poor and neglected with educational assistance, shelter, livelihood programs and primarily nourish their souls with the Word of God. </p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://www.ccmmanila.org/"  target="_blank">Visit Our Page for more info</a></p>
				</div>
			</div>
            <div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="https://lh5.googleusercontent.com/p/AF1QipP3UKTmbc8XQQ6NORXZcBXGppRDm1C6sOESK8B7=w600-h321-p-k-no">
				<div class="carousel-caption d-none d-md-block"  style="margin: -140px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Christian Mission Service Philippines</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Christian Mission Service Philippines is a child-caring organization providing holistic development services for children. We have served over 6,000 Filipino children to date. We operate a children’s village in Naic, Cavite, daycare centers in Pinagbuhatan, Pasig City, and Calaca, Batangas, and a school for pre-school and elementary pupils in Sipocot, Camarines, Sur.

</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://cms.org.ph/"  target="_blank">Visit Our Page for more info</a></p>
				</div>
			</div>
             
			
		</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span  aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>

        
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
            setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>

</header>
</body>

</html>