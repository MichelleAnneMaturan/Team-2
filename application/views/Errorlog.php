<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>SELA</title>
   <link rel = "icon" href = 
"https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.15752-9/270191871_980404992573815_776067903002688019_n.png?_nc_cat=100&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeGf5pgypNyzGv3uIxGAF2PBrzbk0H7uQDqvNuTQfu5AOg88LJbuFlyeCKsr2TG_SyHdLs7LPjK_z1bDY9nGuSYr&_nc_ohc=tEXST5trolEAX_eRyS3&tn=eFuJ3yCXcVJpEiDY&_nc_ht=scontent.fmnl17-1.fna&oh=03_AVI5Z_3voaRc2KSvr5FtQInajQq7JcajhVgzTu-tS7sygw&oe=62066D09" 
        type = "image/x-icon">
<style>

header {
    
    height: 100vh;
}

.vid-bg {
    position: absolute;
    right: 0;
    bottom: 0;
    min-height: 100%;
    min-width: 1600%;
}

.nav-area {
    background: rgba(0,0,0,0.7);
    height: 150px;
    position: absolute;
    width: 100%;
}

.logo{
    margin: 0 50px;
    height: 60px;
    float: left;
    color: #fff;
    font-size: 35px;
    text-transform: capitalize;
    font-weight: bold;
    letter-spacing: 2px;
}

.menu-area{
    float: right;
    list-style: none;
    margin: 20px;
}

.menu-area li{
   display: inline-block;
   margin: 0 5px;
}

.menu-area li a{
   text-decoration: none;
   color: #fff;
   padding: 5px 10px;
   letter-spacing: 2px;

}

.menu-area li a:hover{
   color: yellow;
}

* { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
	top: 0;
	color: #fff;
}
.vid-info { position: absolute; top: 0; right: 0; width: 33%; background: rgba(0,0,0,0.3); color: #fff; padding: 1rem; font-family: Avenir, Helvetica, sans-serif; }
.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    

    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    background: #ffffff;
}

input,
button {
    border: none;
    outline: none;
    background: none;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}

.tip {
    font-size: 20px;
    margin: 40px auto 50px;
    text-align: center;
}

.cont {
    border-radius: 20px;
    overflow: hidden;
    position: absolute;
    width: 900px;
    height: 550px;
    left: 250px;
    bottom: -120px;
    margin: 0 auto 100px;
    background: #fff;
    box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.3), 10px 10px 15px rgba(70, 70, 70, 0.15), inset -10px -10px 15px rgba(255, 255, 255, 0.3), inset 10px 10px 15px rgba(70, 70, 70, 0.15);
}

.form {
    position: relative;
    width: 640px;
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    padding: 50px 30px 0;
    
}

.sub-cont {
    overflow: hidden;
    position: absolute;
    left: 640px;
    top: 0;
    width: 900px;
    height: 100%;
    padding-left: 260px;
    background: #fff;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.cont.s--signup .sub-cont {
    -webkit-transform: translate3d(-640px, 0, 0);
    transform: translate3d(-640px, 0, 0);
}

button {
   
    background-color: black; 
    border: none;
    color: white;
    margin: 10px;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}

.img {
    overflow: hidden;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 260px;
    height: 100%;
    padding-top: 360px;
    
}

.img:before {
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    width: 900px;
    height: 100%;
    background-image: url("ext.jpg");
    opacity: .8;
    background-size: cover;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
}

.cont.s--signup .img:before {
    -webkit-transform: translate3d(640px, 0, 0);
    transform: translate3d(640px, 0, 0);
}

.img__text {
    z-index: 2;
    position: absolute;
    left: 0;
    top: 50px;
    width: 100%;
    padding: 0 20px;
    text-align: center;
    color: #fff;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img__text h2 {
    margin-bottom: 10px;
    font-weight: normal;
}

.img__text p {
    font-size: 14px;
    line-height: 1.5;
}

.cont.s--signup .img__text.m--up {
    -webkit-transform: translateX(520px);
    transform: translateX(520px);
}

.img__text.m--in {
    -webkit-transform: translateX(-520px);
    transform: translateX(-520px);
}

.cont.s--signup .img__text.m--in {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.img__btn {
    overflow: hidden;
    z-index: 2;
    position: relative;
    width: 100px;
    height: 36px;
    margin: 0 auto;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
}

.img__btn:after {
    content: '';
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 2px solid #fff;
    border-radius: 30px;
}

.img__btn span {
    position: absolute;
    left: 0;
    top: 0;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s;
    transition: -webkit-transform 1.2s;
    transition: transform 1.2s;
    transition: transform 1.2s, -webkit-transform 1.2s;
}

.img__btn span.m--in {
    
    -webkit-transform: translateY(-72px);
    transform: translateY(-72px);
}

.cont.s--signup .img__btn span.m--in {
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.cont.s--signup .img__btn span.m--up {
    -webkit-transform: translateY(72px);
    transform: translateY(72px);
}

h2 {
    width: 100%;
    font-size: 26px;
    text-align: center;
    color: white;
}

label {
    display: block;
    width: 260px;
    margin: 25px auto 0;
    text-align: center;
}

label span {
    font-size: 12px;
    color: white;
    text-transform: uppercase;
}

input {
    display: block;
    width: 100%;
    margin-top: 5px;
    padding-bottom: 5px;
    font-size: 16px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    text-align: center;
    color: white;
}

.forgot-pass {
    margin-top: 15px;
    text-align: center;
    font-size: 12px;
    color: #cfcfcf;
}

.submit {
    margin-top: 40px;
    margin-bottom: 20px;
    background: #d4af7a;
    text-transform: uppercase;
}

.fb-btn {
    border: 2px solid #d3dae9;
    color: #8fa1c7;
}

.fb-btn span {
    font-weight: bold;
    color: #455a81;
}

.sign-in {
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.cont.s--signup .sign-in {
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    -webkit-transition-duration: 1.2s;
    transition-duration: 1.2s;
    -webkit-transform: translate3d(640px, 0, 0);
    transform: translate3d(640px, 0, 0);
}

.sign-up {
    -webkit-transform: translate3d(-900px, 0, 0);
    transform: translate3d(-900px, 0, 0);
}

.cont.s--signup .sign-up {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: 105vh;
}

.navbar{
    width: 100%;
    height: 75px;
    margin: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #F78206  ;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}
.menu{
    width: 400px;
    float: left;
    height: 70px;
    
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
    color:  white ;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #F78206 ;
}

.search{
    width: 300px;
    float: left;
    margin-left: 270px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid  #F78206  ;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn2{
    width: 80px;
    height: 40px;
    background: #F78206  ;
    border: 2px solid  #F78206  ;
    margin-top: 13px;
    color:  white;
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
    background:   #F78206   ;
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
    color:  #F78206   ;
    font-size: 65px
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






   </style>
</head>
<body>
   <header>
   <div class="video-background">
        <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/y6D4BuHRdvQ?v=y6D4BuHRdvQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=y6D4BuHRdvQ" 
        frameborder="0" allowfullscreen allowed="autoplay"></iframe>
        </div>
        <div class="twp-video-layer"></div>
    </div>

    <div class="loader_bg">
    <div class="loader"></div>
    </div> 
  
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SELAPH</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="<?=base_url('Welcome/Front')?>">HOME</a></li>
                    <li><a href="<?=base_url('Welcome/About')?>">ABOUT</a></li>
                    <li><a href="<?=base_url('Welcome/Login')?>">SERVICE</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn2">Search</button></a>
            </div>

        </div> 


    <div class="cont">

    <form method="post" autocomplete="off" action="<?=base_url('Welcome/Registernow')?>"  action="/action_page.php" style="background-image:url('https://images.squarespace-cdn.com/content/v1/54e617b1e4b0453ef23dc90d/1436902427507-C1HWDWK1BNEM59356REO/pawleys+island+photographer+family+beach+silhouette?format=1000w');padding:5px;width:1349px;height:600px; solid black;">
            <div class="form sign-in" >
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span> 
                    <input type="text" name="username" placeholder="enter your name" required />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" placeholder="enter your email" required/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" placeholder="enter your password" required/>
                </label>
                <center>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <p style="margin-top: 0px; font-size: 15px; color:#F8F9F9;  background-color: rgba(0, 0, 0, 0.6); align: center;">EMAIL OR PASSWORD IS WRONG. PLEASE SIGNUP IF YOU DON'T HAVE AN ACCOUNT</p>
              
            <?php
             if($this->session->flashdata('success')) { ?>
             <p class="text-success text-center" style="margin-top: 0px; font-size: 30px; color: white; align: center;"><?=$this->session->flashdata('success')?></p>
             <?php }?>
             </center>
                
            </div>
            </form>
        <div class="sub-cont" >
            <div class="img" >
                <div class="img__text m--up" >
                
                <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__text m--in">
                   
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__btn" >
                    <span class="m--in">Sign Up</span>
                    <span class="m--up">Sign In</span>
                </div>
            </div>
            <form method="post" autocomplete="off" action="<?=base_url('Welcome/loginnow')?>" action="/action_page.php" style="background-image:url('https://live.staticflickr.com/8448/8009034240_5c197a3e62_b.jpg');padding:5px;width:1349px;height:600px; solid black;">
        <div class="form sign-up">
            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email"  name="email"  placeholder="enter your email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" required/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" placeholder="enter your password" class="form-control" id="exampleInputPassword1" required/>
            </label>
            <div>
            <center>
            <button type="submit" class="btn btn-default">Sign In</button>
           </center>
           </div>
            <?php
            if($this->session->flashdata('error')) { ?> 
            <center>
            <p class="text-danger text-center" style="margin-top: 5px; color: white; "><?=$this->session->flashdata('error')?></p>
            </center
            <?php } ?>
            </div>
           
        </form>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
 

       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
            setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
   </header>
   
</body>
</html>


    