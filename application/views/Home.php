<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>SELA</title>
   <link rel = "icon" href = 
"https://scontent.fmnl17-1.fna.fbcdn.net/v/t1.15752-9/270191871_980404992573815_776067903002688019_n.png?_nc_cat=100&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeGf5pgypNyzGv3uIxGAF2PBrzbk0H7uQDqvNuTQfu5AOg88LJbuFlyeCKsr2TG_SyHdLs7LPjK_z1bDY9nGuSYr&_nc_ohc=tEXST5trolEAX_eRyS3&tn=eFuJ3yCXcVJpEiDY&_nc_ht=scontent.fmnl17-1.fna&oh=03_AVI5Z_3voaRc2KSvr5FtQInajQq7JcajhVgzTu-tS7sygw&oe=62066D09" 
        type = "image/x-icon">

<style>
body{
    margin: 0;
    padding: 0;
    font-family: poppins;
}

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
    height: 60px;
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

.banner-text{
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
   text-align: center;
}

.banner-text h2{
    color:  #fff;
    font-size: 55px;
    margin: 0;
}
.banner-text p{
    color: #fff ;
    font-size: 18px;
    margin: 0;
    font-weight: bold;
}

.btn{
    display: inline-block;
    margin-top: 5%;
    background: transparent;
    border:0;
    font-size: 20px;
    text-transform: uppercase;
    border: 3px solid  #fff;
    padding: 10px 25px;
    color:  #fff;
   border-radius: 25px;
}

.img{
    width: 10px;
    height: 5px;
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

*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 100%;
    height: 75px;
    margin: auto;
    background-color: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    overflow: hidden;
    z-index: 9999;
 
   
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
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #F78206 ;
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

.btn{
    width: 100px;
    height: 40px;
    background: #F78206  ;
    border: 2px solid  #F78206  ;
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
    position: relative;
     bottom: 0px; right: 600px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
    position: relative;
    bottom: 0px; right: 600px;
}

.content .par1{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
    position: relative;
     bottom: 100px; right: -20px;
}

.content h2{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
    position: relative;
    bottom: 100px; right: 50px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background:   #F78206  ;
    border: none;
    font-size: 18px;
    position: relative;
    top:30px; left: -420px;
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
    color:  #F78206  ;
    font-size: 65px
}

.form{
    width: 300px;
    height: 420px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
     top:150px;
    transform: translate(0%,-5%);
    padding: 30px;
    
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color:   #F78206  ;
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
    background: #F78206 ;
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
    color:   #F78206 ;
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
    color: #F78206  ;
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
    color:  #F78206  ;
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

/* CONTAINER 3 */


.container1{

	position: relative;
	width:1100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	padding: 55px;
	
}

.container1 .card{
	width:308px;
	position: relative;
	height: 400px;
    background:  white ;
    color:  black ;
	margin:30px 10px;
	padding: 20px 15px;
	display:flex;
	flex-direction: column;
	box-shadow: 0.5px 10px #e6e6e6;
	transition:0.3s ease-in-out;
	margin-top: 5%;
}
.container1 .card .imgBx{
	position: relative;
	width:260px;
	height: 260px;
	top: -60px;
	left:20px;
	box-shadow: 0 5px 20px rbga (0,0,0,1.2);

}

.container1 .card .imgBx img
{
	max-width: 100%;
	border-radius: 10px;
}

.imgBx:hover img{
	transform: scale(1.1);
}

/* scroll animation */


.reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 1s all ease;
}

.reveal.active{
  transform: translateY(0);
  opacity: 1;
}

/* CONTAINER BACKGROUND */
.container-time {
background-color: rgba(0, 0, 0, 1.0);
width: 100%;
height: 100vh;
background-size: cover;

}

/*ABOUT US CONTENT */
section {
    position: relative;
    width: 100%;
    padding: 50px;
}
.image {
    position: relative;
    overflow: hidden;
    
}
.image.image1 {
    width: 500px;
    height: 500px;
    float: left;
    border-radius: 50%;
    Margin: 20px;
}

.image.image2 {
    width: 300px;
    height: 300px;
    float: right;
    border-radius: 50%;
    Margin: 20px;
}

.image img {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   object-fit: cover;
}

section h1 {
    color: #F78206;
    font-size: 2em;
    margin-bottom: 20px;
}
section p {
    color: white;
    line-height: 1.5em;
    text-align: justify;
}

/*FOOTER */

footer{
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    width: 100%;
    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100%;
    padding: 20px;
padding-bottom: 50px;
    text-align: center;
}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

/*scroll page*/

html {
  scroll-behavior: smooth;
}

#section2 {
    
   align-items: center;
   justify-content: center;
    height: 100%;
}





</style>

</head>
<header>
<body>

   <div class="video-background">
        <div class="video-foreground">
        <iframe src="https://www.youtube.com/embed/y6D4BuHRdvQ?v=y6D4BuHRdvQ?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=y6D4BuHRdvQ" 
        frameborder="0" ></iframe>
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
                    <li><a href="<?=base_url('Welcome/Home')?>">HOME</a></li>
                    <li><a href="<?=base_url('Welcome/Home#section2')?>">ABOUT</a></li>
                    <li><a href="<?=base_url('Welcome/Services')?>">SERVICE</a></li>
                    <li><a href="<?=base_url('Welcome/Contactlog')?>">CONTACT</a></li>
                    <li><a href="<?=base_url('Welcome/Front')?>">Logout</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

            

        </div> 

        
        <div class="content">
            
            <h1 style="float: right;"><br><span>SPONSOR A CHILD</span> <br></h1>
            <p class="par" style="float: right;">Take a child off the street or provide for children at risk. Or Give Any Amount</p>

                <button class="cn" style="float: right;"><a href="<?=base_url('Welcome/Donatelog')?>">DONATE</a></button>

                <h2 class="h2" style="float: right;"><br><span>VISIT US TODAY</span> <br></h2>
            <p class="par1" style="float: right;">Take a child off the street or provide for children at risk. Or Give Any Amount</p>

                <button class="cn" style="float: right;  top:-70px; left: 200px;"><a href="<?=base_url('Welcome/Services')?>">VISIT</a></button>
              
               
               
</div>
</div>
</div>
</div>
</div>


<div class="container reveal" id="section2">
    <div class="container-time" >
<section>
        <div class="image image1" >
                <img src=" https://i0.wp.com/adobomagazine.com/wp-content/uploads/2021/09/World-Vision-launches-this-years-GirlsCan-movement-to-empower-and-support-Filipino-girls-HERO.jpg?fit=1440%2C757&ssl=1" alt="">
            </div>
            <div class="image image2">
                <img src="https://thepinoyofw.com/wp-content/uploads/2020/07/child-support-1.jpg" alt="">
            </div>
            <h1>About Us</h1>
            <p >SELAPH is a child-caring organization providing holistic development services for children. 
                We want to help people better understand why children end up in well-run orphanages, how they get there,
                 and what happens after they arrive. Many view orphanages as a home for children with no living parents. 
                 Orphanages have and do care for parentless children but they also care for children with living parents, just like the foster care program in the United States.
                 So are the children in the homes we support orphans or not? Good question. Some have one or both parents, some have neither. 
                 Unfortunately, some parents don’t provide their children with the care they need to become healthy functioning adults.
                 If a child is placed with a family, both the orphanage and the government perform separate follow-up evaluations of the child’s living conditions. 
                 Each entity submits separate reports to a judge. The judge reviews the reports to ensure the child is in a good living environment.
                 Unfortunately, not all children get adopted. Unadopted children continue in the care of the group home they are assigned.
                  The orphanage’s professional team continues to seek a home for them, but as children grow up it becomes less and less likely they will be placed with a family.
                  As they age, children who haven’t been placed with a family are moved to a home for older children.
                   If a suitable family is never found through any of the previously listed efforts, a child eventually ages out of the system and leaves to live on his/her own.
                   In every country, there are too many children in need of better homes.

            </p>
            </div>
</section>
  </div> 
</div>

 
<div class="container-time">
<center>
    <div class="container1" >
    <div class="card">
        <div class="imgBx">
            <a href="#">
            <img src="https://philippineslifestyle.com/wp-content/uploads/white-baby-1.jpg">
            </a>
        
            <h1 style=" color: #F78206;">What we do  </h1>
            <p><br>We reach out to children at risk. - We create an environment that nurtures hope and restoration. - We provide opportunities for development, participation, and empowerment.
            </p>
            
        </div>
    </div>

    <div class="card">
        <div class="imgBx">
            <a href="#">
            <img src="https://www.unicef.org/philippines/sites/unicef.org.philippines/files/styles/hero_mobile/public/UNIPH2019018.JPG?itok=Vnqb35-C">
            </a>
            <h1 style=" color: #F78206;">Who we are </h1>
            <p><br> Our teams are here to ensure the children in our care will grow and develop in their confidence over time and have a chance for a better and brighter future.
            </p>					

        </div>	
    </div>	
    
    <div class="card">
        <div class="imgBx">
            <a href="#">
            <img src="https://www.unicef.org/philippines/sites/unicef.org.philippines/files/styles/hero_mobile/public/2019-01/UNIPH2019003_0.jpg?itok=9Ul5_vbq">
            </a>
            <h1 style=" color: #F78206;">Our core values </h1>
            <p><br>Christ-Centred Ministry - Respect for Dignity - Nurturing Relationships - Participation & Empowerment - Child-friendly Environment - Child-focused Education - Learning Organization
            </p>
        </div>	

        </center>


        
    <footer>
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p>Selaph@gmail.com</p>
            <p>(02) 8722-0650 / (02) 8527-8385</p>
            <ul class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">SELAPH </a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="<?=base_url('Welcome/Front')?>">Home</a></li>
                        <li><a href="<?=base_url('Welcome/Front#section2')?>">About</a></li>
                        <li><a href="<?=base_url('Welcome/Login')?>">Service</a></li>
                        <li><a href="<?=base_url('#')?>">Contact</a></li>
                      </ul>
                    </div>
        </div>

    </footer>

    
    </div>
   
     </div>




    <script>
            function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
    }
    window.addEventListener("scroll", reveal);
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


</html>