
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.tailwindcss.com"></script>
     <script>tailwind.config = {theme: {extend: {colors: {clifford: '#da373d',}}}}</script>
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
        body{
                background: linear-gradient(to bottom, #D5DEE7 0%, #E8EBF2 50%, #E2E7ED 100%), 
                linear-gradient(to bottom, rgba(0,0,0,0.02) 50%, rgba(255,255,255,0.02) 61%, 
                rgba(0,0,0,0.02) 73%), linear-gradient(33deg, rgba(255,255,255,0.20) 0%, rgba(0,0,0,0.20) 100%);
                background-blend-mode: normal,color-burn; 
                height:100vh;
                padding:30px;           
        }
    </style>
    <title>News</title>
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
</header><br>



    <div class="container mt-5 bg-blue ">

        <h1 class="text-center text-3xl font-bold">Edit your posts</h1><br>
        <hr><br>
       <form action="{{url('edit_post',$post->id)}}" method="POST" enctype="multipart/form-data" class="text-start">
             @csrf<select name="category_id" style="border:1px solid white; " class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline ">
                   @foreach ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->name }} </option>
                   @endforeach
                </select><br>
                    <input value="{{$post->title}}" name="title" type="text " placeholder="news title" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline  text-black my-3 text-center">
                    <textarea name="description" class="form-control block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline text-black my-3  text-center" placeholder="discription">
                        {{$post->description}}
                    </textarea>
                    <br>
                    <input style="background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);" type="submit" value="Edit" class=" text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ">
                    

                
                    
       </form>
    </div>
   
 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>
</body>
</html>