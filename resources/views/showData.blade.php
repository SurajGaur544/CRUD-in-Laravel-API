<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center justify-center">
    <h1>Product List</h1>
    <a href="api/addProduct">Add Product</a>
    <form action="" method="get">
        <input 
        type="text" 
        name="search" id="" 
        placeholder="search by name" 
        class="w-full bg-transparent rounded-pill border border-3 border-warning border-indigo-500/100  rounded px-3 placeholder:text-sm text-black cursor-text">
    </form>
    <section class="flex items-center justify-center p-4 box-content h-auto w-75  ">
        <table class="table table-dark table-striped   " >
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Category</th>
                  <th scope="col">Opration</th>
                </tr>
            </thead>
            <tbody>
                @foreach($collection as $item)
                <tr>
                    <th scope="row">{{$item['id']}}</th>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>{{$item['category']}}</td>
                    <td>
                        <a href="{{ url('update', $item['id']) }}">Edit</a> 
                        <a href="{{ url('delete', $item['id']) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>