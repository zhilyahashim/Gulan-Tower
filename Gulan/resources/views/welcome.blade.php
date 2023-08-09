<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website Icon" type="png" href="images/img-logo.png">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Montserrat:wght@500&family=Poppins:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <title>GULLANTOWER</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Leckerli+One&family=Poppins:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap');
    @media (max-width: 480px){
    
}
*,
*::after,
*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    overflow-x: hidden;
    background-color: white;
    font-family: "poppins", sans-serif;
}
.bgimage{
    position: absolute;
    margin-top:70px;
    height: 100vh;
    width: 1350px;
    background-color: #000;
    opacity: 50%;
}

.title{
    text-align: center;
}
.title h2{
    padding-top: 100px;
    font-size: 130px;
    color: #ffffff;
    font-weight: 600;
}
.para{
    flex-direction: column;
}
.para a{
    text-decoration: none;
    display:inline-block;
    color: #fff;
    font-size: 24px;
    padding: 7px 70px;
    margin-top: 10px;
}

img {
    max-width: 100%;
    position: relative;
}
@media screen and (max-width: 480px) {
    .text {
      font-size: 16px;
    }
  }

.header{
    width:1000PX;
    padding-top: 10px;
    display: flex;
    justify-content: space-around;
    background: #ffffff;
    height: 50px;
    position: relative;
}
.header a{
    text-decoration: none;
    color: #ffffff ;
  padding-bottom: 20px;

}
.header h1{
    color: #fff;
}
.header ul{
    display: flex;
    padding: 10px;
}

.header li{
    display: flex;
    margin: 30px;
}

.header li a{
    text-decoration: none;
    color: #000000;
    list-style: none;
    font-size:larger;
    margin-bottom: 100px;
    
}
.header ul :hover{
    color:rgba(0, 0, 0, 0.637) ;
}
.header ul li a{
    font-family: "poppins", sans-serif;
}

.image{
    padding-left: -2px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 800px;
    
}
.image img{
    width: 100px; 
}
.image h1{
    font-size: small;
}
.title{   
    
    padding-top: 4%;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size:3rem;
    margin: auto;
   

}

.span{
    color: blue;
    font-size: xx-large;

}

#title-pa{
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    color: rgb(255, 255, 255);
    margin-left: 37%;
    padding-top: 4%;
    margin-bottom:8%;
    font-size:xx-large;
    border-radius:30%;
    background:none;
}
#title-pa a{
    margin-bottom:17%;
}
#title-pa:hover{
   background-image: linear-gradient(to left, #BDBBBE 0%, #9D9EA3 100%), radial-gradient(88% 271%, rgba(255, 255, 255, 0.25) 0%, rgba(254, 254, 254, 0.25) 1%, rgba(0, 0, 0, 0.25) 100%), radial-gradient(50% 100%, rgba(255, 255, 255, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%);
 background-blend-mode: normal, lighten, soft-light;
}


.btn_cont{
    width: 100px;
    height: 35px;
    border: none;
    border-radius: 48px 0;
    background: #2c86ecb9;
}
.btn_cont a{
    color: #fff;
    text-decoration: none;

}
.btn{
    position: absolute;
    padding-left: 45%;
    padding-top: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    
   
}

.contaier{
    position: absolute;
    width: 100%;
    height: 150%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size:cover;
    background-position: center;
    opacity: 0.9;
    padding: 1px;
    margin: auto;
}
.swiper{
    background-size:cover;
    background-position: center;
    width: 100%;
    height: 100vh;
    margin-bottom:80px;
    
}
.swiper-wrapper img {
   width: 100%;
   box-shadow:black ; 
   
}
.swiper .swiper-button-prev , .swiper .swiper-button-next{
    color: #fff;

}
.swiper .swiper-pagination-bullet-active{
    background: #fff;
}
.second_bachground{
    width: 1350px;
    height: 700px;
    margin-top: 530px;
}


section{
    background-color: rgb(255, 255, 255);
    align-items: center;
    
}

section .container{
    padding: 4rem;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    justify-content: center;
    min-height: 95%;
    margin-left: 100px;
    padding-top: 10rem;
}
section img{
    margin-left: 30px;
    width:1000px;
    height: 300px;
    margin-bottom: 10px;
    border-radius: 1.5rem;
    
}

section .container >*{
    margin: 2rem;
}
.content{
    color: #000000;
    transform: translateY(-10px);
}
.imgContainer{
    
    transform: translateY(10px);
    


}
.title2{
    margin-right: 600px;
    color: #000000;
    font-weight: 600;
    font-size: 2rem ;
    margin-bottom: 1rem;
    padding-bottom: .5rem;
    position: relative;
    display: flex;
}
.border{
    position: absolute;
    height: 2px;
    background-color: #fff;
    bottom: 0;
    left: 0;
}

@media(max-width:850px){
    section .container{
        grid-template-columns: 1fr;
    }
}
@media(max-width:600px){
    .animate__animated{
        font-size: 3rem;
    }

.text{
    font-size: .8rem;

}
.title{
    font-size: 1.2rem;
}
.title2{
    font-size: 1.2rem;
}
}



.container {
    position: relative;
    padding-top: 10rem;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.news-list {
    display: flex;
    gap: 16px; 
    flex-direction: column;
    
}

@media screen and (min-width: 760px) {
    .news-list {
        flex-direction: row;
    }
    
}

.py-4 {
    padding: 4rem 0 !important;
    text-align: center;
}

.new1:hover  {
    opacity: 0.8;
}
.new2 :hover {
    opacity: 0.8;
}
.new3:hover  {
    opacity: 0.8;
}
footer{
    width:1400px;
    background-color:rgb(134, 134, 134);
    color: #000000;
}
.footer_info{
    width: 90%;
    margin:  0 auto;
    display: flex;
    padding: 50px 0;
}
.footer_info .footer_width{
    padding:  0 15px;
}
.footer_info h2{
    margin-bottom: 20px;
}
.about , .cotact{
    width: 40%;
}
.link{
    width: 20%;
}
.social_media{
    margin-top: 30px;
}
.social_media ul  {
    display: flex;
}
.social_media ul li a{
    display: inline-block;
    margin-right: 50px;
    width: 50px;
    height: 50px;
    padding-top: 12px;
    background-color: transparent;
    border: 1px solid #0d0c0c;
    text-align: center;
    
}
.images{
    border: none;
    border-radius: 8%;
}
.social_media ul li a:hover{
    background-color: #000;
    color:#fff;
}
.social_media ul li {
    list-style: none;
}
.link ul  li{
    display: block;
    margin-bottom: 15px;
    font-size: 15px;
}
.link ul li a:hover{
    color:#fff;
}
.contact ul li{
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
.contact ul li span{
    margin-right:25px ;
}
.copy_right{
    padding:15px 0;
    text-align: center;
    background-color:rgba(104, 102, 102, 0.331);
}
@media screen and(max-width:992px) {
    .about , .contact{
        width: 35%  ;
    }
    .link{
        width:30% ;
    }
}
@media screen and(max-width:767px) {
    .about , .contact , .link{
        width: 100%;
        margin-bottom: 30px;
    }
    .footer_info{
        flex-direction: column;
    }
    
}
footer{
    margin-top: 150px;
}
footer p{
    font-size: 12px;
}
.foter{
    padding-top: 20px;
    
}
ul .foter{
    flex-direction: row;
}
ul li a{
    text-decoration: none;

}
.footer_width ul a{
    text-decoration: none;

}
.footer_width ul a{
    color: #000;
}
.navbar {
    padding: 30px;
    
}
.navbar_brand {
    text-decoration: none;
    font-weight: bold;
    font-style: italic;
    padding-left: 150px;
    font-size: 50px;
    color: #fff !important;
    text-transform: capitalize;
}
.navbar_nav{
    display: flex;
}
.navbar_nav li {
    padding-left: 30px;
    display: flex;
}
.nav_link{
    font-weight: bold;
    font-style: italic;
    color: #fff !important;
    margin-left: 5px;
    transition: 0.6s;
    border-radius: 20px;
    text-transform: capitalize;
}
.nav_link:hover{
    transform: translateY(-20px);
    background: rgb(84, 149, 220);
}
.img_parent{
    
    position: relative;
}
.img_parent img{
    height: 100vh;
    width: 100%;
}

#login{
    border-top-width: 4px;
    border-bottom-width: 4px;
    padding-bottom:23px;
    border-color: rgb(15 118 110);
}

    
    </style>
</head>
<body>
   <!-- starting the header-->
    <header>
        <!--starting image slider...-->
        <div class="contaier">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1218614876/photo/looking-up-a-reflections-on-glass-covered-corporate-building.jpg?b=1&s=612x612&w=0&k=20&c=QkVxuZjDi8T2sGmY0afiMT_Ok62czvnhjQgXq1AelGk=" class="img1 translate" data-speed="0.25"></div>
                <div class="swiper-slide"><img src="https://media.istockphoto.com/id/1411304340/photo/two-modern-buildings-with-glass-windows-architecture-design-of-buildings-office-space-houses.webp?b=1&s=170667a&w=0&k=20&c=FBPTGMisCAalZcO-dUEMfcFTRClZlwc7FurxnUFijCE=" class="img2 translate" data-speed="0.2"></div>
                
    
            </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                
                    <!--  navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="black"><img src="c:\Users\ARAS STORE\Documents\GULLANTOWER\images\Screenshot.png" alt=""></div>
    
            </div>
         </div>
          <!--end the image slider.-->
            <div class="header">

                <div class="image"><a  href="/"><img src="{{ asset('images/logo.png') }}" width="300" alt="siteName"></a>
                </div>
                <ul>
                    <li><a href="http://127.0.0.1:8000/welcome">Home</a></li>
                    <li ><a href="http://127.0.0.1:8000/about">About</a></li>
                    <li ><a href="http://127.0.0.1:8000/newss" >News</a></li>
                    <li><a href="http://127.0.0.1:8000/events">Event</a></li>
                    <li id="login"><a href="http://127.0.0.1:8000/login"  class=" text-sm text-gray-300 ">Login</a></li>
                    <li><a href="http://127.0.0.1:8000/register" class=" text-sm text-gray-700  ">Register</a></li> 

                                                                                
                </ul>
        </div>
        <div class="bgimage"></div>
        <div class="title">
            <h2 class="animate__animated translate  animate__bounce" data-speed="0.1" >GULLAN TOWER</h2><br>
        </div>
            <div class="para translate border" data-speed="0.1" id="title-pa">
                <a href="http://127.0.0.1:8000/news/Office" class="">Residence & Office</a>
            </div> 
            
        </header>    
   <!-- ABOUT -->
 
   <div class="second_bachground">
         
     <section>
       
        <div class="container">
            <div class="content opacity" data-speed="0.1">
                <h3 class="title2">About
                    <div class="border"></div>
                </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing 
                    elit. Error tenetur, voluptate repellat autem minima 
                    et similique assumenda. In, assumenda totam accusantium 
                    doloribus dolores quis autem ex delectus repellat 
                Autem incidunt iure vitae dignissimos quibusdam at,
                 voluptate cum, ducimus a delectus quas atque, molestias
                  numquam totam culpa ut perspiciatis facilis saepe non 
                  explicabo laborum? Soluta nihil eius a error.
                Molestias hic reiciendis, id, ea aliquam dicta ab est, 
                tempore eum consectetur dignissimos nam necessitatibus 
                officia laudantium deleniti quibusdam aliquid. Perspiciatis
                 perferendis officiis ducimus animi rerum totam at quas debitis?
                Eaque, ullam officia dolorum placeat voluptatem non error </p>
            </div>
            <div class="imgContainer opacity">
                <img src="https://images.unsplash.com/photo-1431576901776-e539bd916ba2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODF8fHdlYnNpdGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="">
                
            </div>
           <hr>
        </div>
         
    </div>
   
     </section>
     
     <div class="container py-4">
        <h2>News</h2> 
        <div class="news-list">
            <article ><div class="new1">
                <img class="images" src="https://images.unsplash.com/photo-1534237710431-e2fc698436d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YnVpbGRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <h3>News 1</h3>
                <p>Simple news descriptions</p>
            </article>
            <article><div class="new2">
                <img class="images" src="https://images.unsplash.com/photo-1494145904049-0dca59b4bbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YnVpbGRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <h3>News 2</h3>
                <p>Simple news descriptions</p>
            </article>
            <article><div class="new3">
                <img class="images" src="https://images.unsplash.com/photo-1554469384-e58fac16e23a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YnVpbGRpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
                <h3>News 3</h3>
                <p>Simple news descriptions</p>
            </article>
        </div>
     </div>
     
<footer>
    <div class="footer_info">
        <div class="footer_width about">
            <h4>About</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint saepe cumque porro tempore. Molestias, harum reiciendis praesentium a tempore, itaque eos culpa maiores ducimus, tempora aliquam quisquam vitae autem. Excepturi.</p>
            <div class="social_media">
                <ul>
                    <li><a href="https://www.facebook.com/gulanpark?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a> </li>
                    <li><a href="https://instagram.com/gulan_park_sales?igshid=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram"></i></a> </li>
                    <li><a href="gulantowerO@gmail.com"><i class="fa-regular fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer_width link">
            <h4>Quick Link</h4>
            <ul class="foter">
                <li><a href="http://127.0.0.1:8000/welcome">Home</a></li>
                <li><a href="http://127.0.0.1:8000/about">About</a></li>
                <li><a href="http://127.0.0.1:8000/newss">News</a></li>
                <li><a href="http://127.0.0.1:8000/events">Event</a></li>
                
            </ul>
        </div>
        <div class="footer_width contact">
            <h4>Contact</h4>
            <ul>
                
                  <li>
                      <span><i class="fa-solid fa-location-dot"></i></span>
                      <p>Gulan Tower World Trade Center, Gulan street,Erbil,Iraq</p>
                  </li>
                   <li> 
                      <span><i class="fas fa-phone-volume"></i></span>
                      <a href="#"> 0700 000 00 00</a>
                   </li>
            </ul>
        </div>
    </div>
    <div class="copy_right">
    <div>
        
         <i class="fa-regular fa-copyright">
            hello dear
         </i>
        
        
    </div>
</div>
</footer>
   



<!-- javascript iles-->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="news.js"></script>
    
    <!-- javascript iles-->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="news.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay:{
                delay:4000,
                disableOnInteraction:false,
            },
            loop: true,

            //  pagination
            pagination: {
                el: '.swiper-pagination',
                Clickable:true,
            },

            // Navigation arrow
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

 
});


let_=location.host;


const translate = document.querySelectorAll(".translate");
const animate__animated = document.querySelector(".animate__animated");
const para = document.querySelector(".para");
const shadow = document.querySelector(".shadow");
const section = document.querySelector("section");
const imgContainer  = document.querySelector(".imgContainer");
const opacity = document.querySelectorAll(".opacity");
const border = document.querySelector(".border");

let para_height = para.offsetHeight;
let section_height = section.offsetHeight;


window.addEventListener('scroll', () =>{
    let scroll =window.pageYOffset;
    let sectionY = section.getBoundingClientRect();
    


    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;l
    })
    opacity.forEach(element => {
        element.style.opacity= scroll / (sectionY.top + section_height);
    })
    animate__animated.style.opacity = - scroll / (para_height / 2) + 5;
    para.style.opacity = - scroll / (para_height / 2) + 5;
    shadow.style.height = `${scroll* 0.5+300}px `;

        imgContainer.style.transform = `translateY(${scroll / (section_height + sectionY.top) * -10 + 10}px)`;
        border.style.width = `${scroll / (sectionY.top + section_height) * 160}%`;

})

    </script>
</body>
</html>