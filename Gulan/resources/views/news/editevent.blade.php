<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.tailwindcss.com"></script>
     <script>tailwind.config = {theme: {extend: {colors: {clifford: '#da373d',}}}}</script>
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Event Added</title>
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
</header>
<div class="container">

        <h1 class="text-center pt-4 font-bold">Edite The Events </h1><br>
       
        
         <form action="{{url('edit_event',$events->id)}}" method="POST" enctype="multipart/form-data" class="text-start border m-20 p-3  ">
             @csrf

                <input value="{{asset('eventimage/' . $events->image)}}" type="file" name="image" class="  flex bg-none w-96 m-auto border-b-4 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline  text-black my-3 text-center">
                <input  value="{{$events->title}}" name="title" type="text " placeholder="Event title" class="  flex bg-none w-96 m-auto border-b-4 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline  text-black my-3 text-center">
                <textarea value=" {{$events->description}}" name="description" class=" form-control flex appearance-none w-5/6 m-auto p-2 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-black my-3  text-center" placeholder="discription"></textarea>
                <div class="flex  m-2">
                <label value="   {{$events->location}}" class="text-blue-500">StartDate:</label><input type="date" name="startdate" vale="sartdate"  class="m-auto form-control block appearance-none w-25 bg-blue-100 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-black my-3  text-center"> 
                <input value="{{$events->startdate}}" name="location" type="string" placeholder="location"  class="m-auto form-control block appearance-none w-25 bg-blue-100 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-black my-3  text-center"> 

                </div>
               
                <input style="background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);" class="   text-white w-23 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded float-right ..." type="submit" value="Edit Event">
                    
       </form>
</div>