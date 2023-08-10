<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.tailwindcss.com"></script>
     <script>tailwind.config = {theme: {extend: {colors: {clifford: '#da373d',}}}}</script>
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;   
}
.event{
    min-height: 100vh;
    width: 100%;
    font-size: 16px;
    background-image: url(https://i.pinimg.com/564x/4b/0f/2d/4b0f2d33bf0f24428646eb9bb1170b1f.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    color:#777;
    display:flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
 }
 .eventtitle {
  background-color:none;
 }
 .eventtitle h1{
   display: flex;
   justify-content: center;
   font-size:2rem ;
   align-items: center;
   padding-left: 10px;
 }
 .item_event{
    position: relative;
    margin: 24px;
    width: 320px;
    height: 570px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0 0 30px 5px rgb(0, 0, 0, 0.15);
    cursor: pointer;
    
 }
 .img_event,.body_event{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

 }
 .img_event img{
    width: 100%;
 }
 .body_event{
    position: relative;
 }
 .overlay{
    position: relative;
    width: 100%;
    height: 400px;
    background-color: rgb(24, 83, 122, 0.6);
    opacity: 0;
    transition: height linear 0.4s , opacity linear 0.2s;
 }
 .item_event:hover .overlay{
    opacity: 1;
    height: 150px;
 }
 .event_info{
    background-color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 8px;
 }
.title_p{
    color: #18537a;
    font-size: 1.5em;
    font-weight: bold;
    letter-spacing: 1px;
    margin: 12px;
}
.info{
    letter-spacing: 0.5px;
    margin-bottom: 6px;
}
.separatore{
    width: 20%;
    height: 6px;
    background-color: #17537a;
    margin-bottom: 16px;
}
.additional_info{
    border-top: 1px solid #bbb;
    margin-top: 12px;
    padding: 28px;
    padding-bottom:0 ;
}
.additional_info .info{
    font-size: 0.9em;
    margin-bottom: 40px;
    text-align: center;
}
.info i{
   color:#18537a;
   font-size: 1.1em;
   margin-right: 4px;
}
.info span{
   color: #18537a;
   font-weight: bolder;
}
.action {
   color: #fff;
   border: 3px solid #fff;
   background-color: transparent;
   position: absolute;
   top: -100px;
   left: 50%;
   transform: translateX(-50%);
   width: 60%;
   outline: none;
   cursor: pointer;
   padding: 12px;
   text-transform: uppercase;
   font-size: 1.3em;
   font-weight: bold;
   letter-spacing: 2px;
   transition: background-color 0.4s, top 0.4s;
}

.item-container:hover .action {
   top: 50px;
}

.action:hover {
   background-color: rgba(255, 255, 255, 0.2);
}

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
    
    font-family: "poppins", sans-serif;
}
.bgimage{
    position: absolute;
    height: 760px;
    width: 1585px;
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
    border: 1px solid #fff;
    padding: 7px 70px;
    border-radius: 50px;
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
    padding-top: 10px;
    display: flex;
    justify-content: space-between;
    background: #ffffff;
    height: 90px;
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
header ul li a{
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
    margin: 10px;
    

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
    padding-left: 40%;
    padding-top: 4%;
    font-size:xx-large;
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
    height: 100vh;
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
    width: 1500px;
    height: 700px;
    margin-top: 530px;
}


section{
    width: 100%;
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
    width: 0%;
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
    color:rgb(134, 134, 134);
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
}.nav_link:hover{
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
    </style>
   <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.tailwindcss.com"></script>
     <script>tailwind.config = {theme: {extend: {colors: {clifford: '#da373d',}}}}</script>
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Event</title>
    <style>
        body{
           background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
           padding:40px;
        }
    
    </style>
</head>

<body>

<header>
    <ul class="flex border-b justify-between bg-gray-100 h-20 text-center items-center">
  <li class="-mb-px mr-1 ">
    <a class=" inline-block border-l  rounded-t  py-2 px-4 text-blue-700 font-semibold hover:no-underline text-2xl " href="http://127.0.0.1:8000/welcome">Home</a>
  </li>
  <li class="mr-1 ">
    <a class="inline-block py-2 px-4 text-blue-500  hover:text-blue-800 font-semibold hover:no-underline text-2xl" href="http://127.0.0.1:8000/admin/crud">List</a>
  </li>
  <li class="mr-1 ">
    <a class=" inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:no-underline text-2xl" href="http://127.0.0.1:8000/news/create">News</a>
  </li>
  <li class="mr-1 items-center">
    <a class=" inline-block py-2 px-4 text-gray-400 font-semibold hover:no-underline text-2xl" href="http://127.0.0.1:8000/news/Office">Office & Residence</a>
  </li>
    <li class="mr-1 ">
    <a class=" inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold hover:no-underline text-2xl" href="http://127.0.0.1:8000/news/Event">Event</a>
  </li>
</ul>
</header><br><br>


    

<div class="container ">
        <div class="col-md-6">
                <h2 class="text-black-50">click here for adding the event..<br><a href="http://127.0.0.1:8000/news/Eventadd"  class="  btn btn-success pt-2">Add Event</a><h2>
        </div>
         <div class="eventtitle"><h1>Events</h1></div>
        @foreach ($events as $event)



        <div class="event ">
         <div class="item_event w-5/6 rounded-t-lg" >
             <div class="img_event">
                 <img src="{{asset('eventimage/' . $event->image)}}" />
                </div>
                <div class="body_event">
                    <div class="overlay"></div>
                    
                    <div class="event_info">
                        <p class="title_p">{{$event->title}}</p>
                        <div class="separatore"></div>
                        <p class="info">{{$event->id}}</p>
                        

                        <div class="additional_info">
                            <p class="info description">
                               {{$event->description}} </span>
                            </p>
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                  {{$event->location}}
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                 {{$event->startdate}}
                            </p>
                                    <a onclick="return confirm('are you sure to delete it ?')"  href="{{url('delete_event',$event->id)}}" class="btn btn-danger  ml-32">Delet</a>
                                    <a  href="{{url('edit_event_page',$event->id)}}" class="btn btn-success  mb-32 ml-56">Edit</a>
                         <p>{{$event->user?->name}}</p>
                                
                        </div>

                    </div>
            </div>

        </div>



 @endforeach
   
   
     
     <div class="event">
         <div class="item_event" >
             <div class="img_event">
                 <img src="https://images.unsplash.com/photo-1504810935423-dbbe9a698963?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGFya3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Event image">
                </div>
                <div class="body_event">
                    <div class="overlay"></div>
                    
                    <div class="event_info">
                        <p class="title_p">Gullan Pa</p>
                        <div class="separatore"></div>
                        <p class="info">park</p>
                        
                        <div class="additional_info">
                            
                            <p class="info description">
                                Welcome! Everyone has a unique perspective after reading a book, and we would love you
                                to share yours with us! We meet one Sunday evening <span>more...</span>
                            </p>
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                gullan park 
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                mon,july,23, 1:30 PM  EDT
                            </p>
                        </div>
                    </div>
            
            </div>

        </div>
        <div class="item_event" >
            
            <div class="img_event">
                <img src="https://i.pinimg.com/564x/fc/d5/50/fcd550c558f54629f68ba9531ac7b648.jpg" alt="Event image">
            </div>
            <div class="body_event">
                <div class="overlay"></div>
                
                <div class="event_info">
                        <p class="title_p">Gullan Party</p>
                        <div class="separatore"></div>
                        <p class="info">Party</p>
                        
                        <div class="additional_info">
                           
                            <p class="info description">
                                Welcome! Everyone has a unique perspective after reading a book, and we would love you
                                to share yours with us! We meet one Sunday evening <span>more...</span>
                            </p>
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                gullan park 
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                mon,july,23, 1:30 PM  EDT
                            </p>
                        </div>
                    </div>
            <button class="action"> Join</button>
        </div>

        </div>
        <div class="item_event" >
            <div class="img_event">
               <img src="https://www.saradistribution.com/foto16/world-trade-center-office-hewler-1.jpg" alt="Event image">
            </div>
            <div class="body_event">
                    <div class="overlay"></div>
                    
                    <div class="event_info">
                        <p class="title_p">Gullan Event</p>
                        <div class="separatore"></div>
                        <p class="info">Event</p>
                        
                        <div class="additional_info">
                            
                            <p class="info description">
                                Welcome! Everyone has a unique perspective after reading a book, and we would love you
                                to share yours with us! We meet one Sunday evening <span>more...</span>
                            </p>
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                gullan park 
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                mon,july,23, 1:30 PM  EDT
                            </p>
                        </div>
                    </div>
                    <button class="action"> Join</button>
                </div>

        </div>
        
     </div>

     
     

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script>
     </div>
     
    </body>
</html>
</body>
</html>
