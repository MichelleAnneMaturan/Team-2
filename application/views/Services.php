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

/*SCHEDULE FORM */



.container-time {
background-color: rgba(0, 0, 0, .95);
padding: 70px;
outline: 3px dashed #998100;
outline-offset: -30px;
text-align: center;
}

#ft-form {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15
}
#ft-form *,
#ft-form ::after,
#ft-form ::before {
  box-sizing: border-box
}
#ft-form input,
#ft-form select,
#ft-form textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0
}
#ft-form select {
  text-transform: none
}
#ft-form [type=submit] {
  -webkit-appearance: button
}
#ft-form legend {
  padding: 0
}
#ft-form h2,
#ft-form p {
  margin: 0
}
#ft-form fieldset {
  margin: 0;
  padding: 0
}
#ft-form html {
  font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  line-height: 1.5
}
#ft-form body {
  font-family: inherit;
  line-height: inherit
}
#ft-form *,
#ft-form ::after,
#ft-form ::before {
  box-sizing: border-box;
  border-width: 0;
  border-style: solid;
  border-color: #e5e7eb
}
#ft-form textarea {
  resize: vertical
}
#ft-form input::-moz-placeholder,
#ft-form textarea::-moz-placeholder {
  color: #9ca3af
}
#ft-form input:-ms-input-placeholder,
#ft-form textarea:-ms-input-placeholder {
  color: #9ca3af
}
#ft-form input::placeholder,
#ft-form textarea::placeholder {
  color: #9ca3af
}
#ft-form h2 {
  font-size: inherit;
  font-weight: inherit
}
#ft-form input,
#ft-form select,
#ft-form textarea {
  padding: 0;
  line-height: inherit;
  color: black;
}
#ft-form [type=date],
#ft-form [type=email],
#ft-form [type=tel],
#ft-form [type=text],
#ft-form select,
#ft-form textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0;
  padding-top: .5rem;
  padding-right: .75rem;
  padding-bottom: .5rem;
  padding-left: .75rem;
  font-size: 1rem;
  line-height: 1.5rem
}
#ft-form [type=date]:focus,
#ft-form [type=email]:focus,
#ft-form [type=tel]:focus,
#ft-form [type=text]:focus,
#ft-form select:focus,
#ft-form textarea:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
  border-color: #2563eb
}
#ft-form input::-moz-placeholder,
#ft-form textarea::-moz-placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form input:-ms-input-placeholder,
#ft-form textarea:-ms-input-placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form input::placeholder,
#ft-form textarea::placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right .5rem center;
  background-repeat: no-repeat;
  background-size: 1.5em 1.5em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
  color-adjust: exact
}
#ft-form [type=checkbox],
#ft-form [type=radio] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: #2563eb;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px
}
#ft-form [type=checkbox] {
  border-radius: 0
}
#ft-form [type=radio] {
  border-radius: 100%
}
#ft-form [type=checkbox]:focus,
#ft-form [type=radio]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
}
#ft-form [type=checkbox]:checked,
#ft-form [type=radio]:checked {
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat
}
#ft-form [type=checkbox]:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}
#ft-form [type=radio]:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
}
#ft-form [type=checkbox]:checked:focus,
#ft-form [type=checkbox]:checked:hover,
#ft-form [type=radio]:checked:focus,
#ft-form [type=radio]:checked:hover {
  border-color: transparent;
  background-color: currentColor
}
#ft-form [type=checkbox]:indeterminate {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat
}
#ft-form [type=checkbox]:indeterminate:focus,
#ft-form [type=checkbox]:indeterminate:hover {
  border-color: transparent;
  background-color: currentColor
}
#ft-form [type=file] {
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit
}
#ft-form [type=file]:focus {
  outline: 1px auto -webkit-focus-ring-color
}
#ft-form fieldset {
  font-size: 100%;
  margin-top: 3rem;
  margin-bottom: 1.5rem
}
#ft-form fieldset:first-child {
  margin-top: 0
}
#ft-form fieldset > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > :last-child {
  margin-bottom: 0
}
#ft-form fieldset > .two-cols > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > .two-cols > :last-child {
  margin-bottom: 0
}
@media only screen and (min-width:640px) {
  #ft-form fieldset > .two-cols {
    display: flex;
    align-items: flex-end
  }
  #ft-form fieldset > .two-cols > * {
    display: block;
    margin-right: 1.5rem;
    margin-top: 0;
    margin-bottom: 0;
    flex: 1
  }
  #ft-form fieldset > .two-cols > :last-child {
    margin-right: 0
  }
}
#ft-form fieldset div > label {
  display: inline-flex;
  align-items: flex-start;
  margin-top: .5rem;
  width: 100%
}
#ft-form fieldset div > label:last-child {
  margin: .5rem 0 0 0
}
#ft-form fieldset div.inline {
  padding: .55rem 0 0;
  width: 100%
}
#ft-form fieldset div.inline > label {
  width: auto;
  margin-right: .5rem
}
#ft-form fieldset div.inline > label:last-child {
  margin-right: 0
}
#ft-form fieldset > .two-cols div.inline {
  padding: .55rem 0
}
#ft-form fieldset > legend {
  font-weight: 700;
  font-size: 120%;
  margin-bottom: 1rem
}
#ft-form fieldset > p {
  margin: 0
}
#ft-form [type=file] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0;
  padding-top: .5rem;
  padding-right: .75rem;
  padding-bottom: .5rem;
  padding-left: .75rem;
  font-size: 1rem;
  line-height: 1.5rem
}
#ft-form [type=file]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
  border-color: #2563eb
}
#ft-form [multiple],
#ft-form [type=date],
#ft-form [type=datetime-local],
#ft-form [type=email],
#ft-form [type=file],
#ft-form [type=month],
#ft-form [type=number],
#ft-form [type=password],
#ft-form [type=search],
#ft-form [type=tel],
#ft-form [type=text],
#ft-form [type=time],
#ft-form [type=url],
#ft-form [type=week],
#ft-form select,
#ft-form textarea {
  border-radius: .375rem;
  margin-top: .25rem;
  box-shadow: 0 0 #0000,0 0 #0000,0 1px 2px 0 rgba(0,0,0,.05);
  border-color: #bbb;
  width: 100%
}
#ft-form [multiple] select,
#ft-form [type=date] select,
#ft-form [type=datetime-local] select,
#ft-form [type=email] select,
#ft-form [type=file] select,
#ft-form [type=month] select,
#ft-form [type=number] select,
#ft-form [type=password] select,
#ft-form [type=search] select,
#ft-form [type=tel] select,
#ft-form [type=text] select,
#ft-form [type=time] select,
#ft-form [type=url] select,
#ft-form [type=week] select,
#ft-form select select,
#ft-form textarea select {
  padding-right: 2.5rem
}
#ft-form [multiple]:focus,
#ft-form [type=date]:focus,
#ft-form [type=datetime-local]:focus,
#ft-form [type=email]:focus,
#ft-form [type=file]:focus,
#ft-form [type=month]:focus,
#ft-form [type=number]:focus,
#ft-form [type=password]:focus,
#ft-form [type=search]:focus,
#ft-form [type=tel]:focus,
#ft-form [type=text]:focus,
#ft-form [type=time]:focus,
#ft-form [type=url]:focus,
#ft-form [type=week]:focus,
#ft-form select:focus,
#ft-form textarea:focus {
  border-color: #bbb;
  box-shadow: 0 0 0 0 #fff,0 0 0 3px rgba(199,210,254,.5),0 0 #0000
}
#ft-form [type=checkbox],
#ft-form [type=radio] {
  color: #4f46e5;
  box-shadow: none;
  border-radius: .25rem;
  border-color: #bbb;
  margin-right: .5rem
}
#ft-form [type=checkbox]:focus,
#ft-form [type=radio]:focus {
  border-color: #bbb;
  box-shadow: 0 0 0 0 #fff,0 0 0 3px rgba(199,210,254,.5),0 0 #0000
}
#ft-form [type=radio] {
  border-radius: 100%
}
#ft-form .btns {
  text-align: right;
  margin-top: 3rem
}
#ft-form .btns > input[type=button],
#ft-form .btns > input[type=reset],
#ft-form .btns > input[type=submit] {
  display: inline-block;
  box-shadow: 0 0 #0000,0 0 #0000,0 1px 2px 0 rgba(0,0,0,.05);
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  padding-top: .6rem;
  padding-bottom: .6rem;
  line-height: 1.25rem;
  border-width: 1px;
  border-radius: .375rem;
  border-color: #bbb;
  background-color: #fff;
  cursor: pointer;
  margin-left: .5rem;
  font-weight: 700
}
#ft-form .btns > input[type=button]:focus,
#ft-form .btns > input[type=reset]:focus,
#ft-form .btns > input[type=submit]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  border-color: #bbb;
  box-shadow: 0 0 0 2px #fff,0 0 0 4px rgba(199,210,254,.5),0 0 #0000
}
#ft-form .btns > input[type=submit] {
  background-color: #f3f4f5;
  transition: background-color .1s
}
#ft-form .btns > input[type=submit]:hover {
  background-color: #f8f9fa
}
/* SCROLL PAGE */

html {
  scroll-behavior: smooth;
}

#section1 {
  height: 600px;
  background-color: pink;
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
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#section1" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://cms.org.ph/"  target="_blank">Visit Our Page for more info</a></p>
				</div>
			</div>
			<div class="carousel-item ">
				<img alt="Third slide" class="d-block w-100" src="http://bulilit.onesimo.ch/wp-content/gallery/intro/bulilit-520.jpg">
				<div class="carousel-caption d-none d-md-block" style="margin: -100px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Onesimu Bulilit</h5>
					<p class="animated bounceInLeft" style="animation-delay: 2s ">Onesimo Bulilit Foundation is a faith-based, non-profit, non-government organization working among street children and their families in Manila, Philippines. We promote and practice education that takes into consideration the child’s nature, preferences, and capacity and aims at developing the child’s full potential.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#section1">Schedule a Visit</a></p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="http://bulilit.onesimo.ch/" target="_blank">Visit our page for more info</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.6435-9/84357713_2988895107801001_5072160289844101120_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeFKdHU1SE80yW94fLvGT2vaIBMxXEBgvasgEzFcQGC9q-NDvqWsFIJVLr7dkeC-430TlnRhyKb502kT-jDHobQL&_nc_ohc=w7dx79KHmAsAX9Nvj1o&_nc_oc=AQmse80QCGz0tyAkG4jPj-5cdF4n98R_g3TL_HjbAMwH8oWfHUgbGhk1_xnbwbQ7Wyc&_nc_ht=scontent.fmnl17-1.fna&oh=00_AT_DwwDocNTlIxF3pk9VBDGDSnM98FJGDkvPjX6zAL7FFA&oe=620CBAAD">
				<div class="carousel-caption d-none d-md-block" style="margin: -120px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Alay Pagasa Christian Foundation, Inc.</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Philippine Childrens Ministries Network, Inc. is established in November 1998 as a network of Christian non-government organizations and churches with ministry to children-at-risk. PCMN has become a unifying voice for the 51 member organizations and churches in advocating for the protection and participation of children and youth.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#section1" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://www.thepcmn.org/mem1" target="_blank" >Visit Our Page for more info</a></p>
				</div>
			</div>
            
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t31.18172-8/17620138_1287141501364687_3586334783967771972_o.jpg?_nc_cat=110&ccb=1-5&_nc_sid=9267fe&_nc_eui2=AeEZeZX0jfM64mEXtsfdWNjrGatmh2jQXkcZq2aHaNBeR5kP_6eNmFNjZkTkDXCNvn2CZ-r5j1qo5gn1PY2G71Ye&_nc_ohc=CtTtNWI9oxMAX_jn8Qk&_nc_ht=scontent.fcrk1-4.fna&oh=00_AT9LWkEVMaWtTLgHKYuIvwPkEX0md6gZ7LgLpT9adc7klg&oe=620ECDA5">
				<div class="carousel-caption d-none d-md-block"  style="margin: -100px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Christian Compassion Ministries</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">CCM is a Baptist Ministry that provides aid to more than 300 families in slum areas in Manila and to children who have been abused or neglected. To provide the poor and neglected with educational assistance, shelter, livelihood programs and primarily nourish their souls with the Word of God. </p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#section1" >Schedule a Visit</a></p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="https://www.ccmmanila.org/"  target="_blank">Visit Our Page for more info</a></p>
				</div>
			</div>
            <div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="https://lh5.googleusercontent.com/p/AF1QipP3UKTmbc8XQQ6NORXZcBXGppRDm1C6sOESK8B7=w600-h321-p-k-no">
				<div class="carousel-caption d-none d-md-block"  style="margin: -140px">
					<h5 class="animated zoomIn" style="animation-delay: 1s; color:  #FFC300; font-family: rockwell;">Christian Mission Service Philippines</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Christian Mission Service Philippines is a child-caring organization providing holistic development services for children. We have served over 6,000 Filipino children to date. We operate a children’s village in Naic, Cavite, daycare centers in Pinagbuhatan, Pasig City, and Calaca, Batangas, and a school for pre-school and elementary pupils in Sipocot, Camarines, Sur.

</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#section1" >Schedule a Visit</a></p>
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

<body>

<div class="main" id="section1">
<div class="container-time">
<form  id="ft-form" method="post" autocomplete="off" action="<?=base_url('Welcome/visit')?>"  action="/action_page.php" accept-charset="UTF-8">
  <fieldset>
    <legend style="color:  #FFC300; font-size: 50px;">SCHEDULE A VISIT</legend>
    <label style="color:  #FFC300">
      Full Name
      <input type="text" name="username" placeholder="ENTER FULL NAME" required >
    </label>
    <div class="two-cols">
      <label style="color:  #FFC300">
        Email address
        <input type="email" name="email" placeholder="ENTER EMAIL ADDRESS" required >
      </label>
      <label style="color:  #FFC300">
        Phone number
        <input type="tel" name="phone" placeholder="ENTER PHONE NUMBER" required >
      </label>
    </div>
  </fieldset>
  <fieldset>
    <legend style="color:  #FFC300">Appointment request</legend>

    <div class="two-cols">
      <label style="color:  #FFC300">
        Date
        <input type="date" name="date" required>
      </label>
      <label style="color:  #FFC300">
        Time
        <input type="time" name="time" required>
      </label>
      
      <label for="pet-select" style="color:  #FFC300">Choose orphanage you want to visit:</label>

        <select name="orphan" id="pet-select" required>
            <option value="">--Click here to choose--</option>
            <option value="orphange1">KAISAHANG BUHAY FOUNDATION INC.</option>
            <option value="orphange2">ONESIMU BULILIT</option>
            <option value="orphange3">ALAY PAGASA CHRISTIAN FOUNDATION, INC.</option>
            <option value="orphange4">CHRISTIAN COMPASSION MINISTRIES</option>
            <option value="orphange5">CHRISTIAN MISSION SERVICE PHILIPPINES</option>
            
        </select>

      
     
    </div>
  </fieldset>
  <div class="btns">
    <input type="submit" name="_gotcha" value="" style="display:none;">
    <input type="submit" value="Submit request">
  </div>
  <?php
 if($this->session->flashdata('success')) { ?>
 <p class="text-success text-center" style="margin-top: 0px; font-size: 30px; color: white; align: center;"><?=$this->session->flashdata('success')?></p>
  <?php }?>
             
</form>
</body>
    </div>

</html>