

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.tailwindcss.com"></script>
     <script>tailwind.config = {theme: {extend: {colors: {clifford: '#da373d',}}}}</script>
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>News</title>
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

        <h1 class="text-center pt-4 font-bold"> NEWS  </h1><br>
        <hr><br>
        <div class="row py-2">
            <div class="col-md-6">
            <h2><a href="http://127.0.0.1:8000/news/process"  class="btn btn-success">Add Posts</a><h2>
            </div>    
                <div class="form-group">
                    <form method="get" action="/search">
                    <div class="input-group w-64 float-right">
                        <input class="form-control " name="search" placehoder="search here...." value="{{isset($search)? $search : ''}}">
                        <button type="submit" class="btn btn-primary bg-blue-500">search</button>
                        </div>
                    </form>

                </div>
                </div>
   </div>


    @if (session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alret" aria-hidden="true">x</button>

            {{session()->get('message')}}
        </div>
        
    @endif


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tittle</th>
                <th scope="col">Category Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <th scop="row">{{$post->id}}</th>
                    <th >{{$post->title}}</th>
                    <th >{{$post->category?->name}}</th>
                    <th >{{$post->user?->name}}</th>
                    <th >{{$post->description}}</th>

                    <td>
                    <a onclick="return confirm('are you sure to delete it ?')"  href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delet</a>
                    <a  href="{{url('edit_post_page',$post->id)}}" class="btn btn-Primary">Edit</a>
                    </td>

                </tr>
                
            @endforeach

        </tbody>
    </table>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>
</body>
</html>