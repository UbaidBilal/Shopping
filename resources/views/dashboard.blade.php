<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                </div>
                <div>
                <a href="{{route('form')}}" class="btn btn-dark ml-4">Add New</a><br/><br/>
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Details</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Picture</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>

                            @foreach($data as $id => $product)
                            <tr>
                                <td>{{$product->id }}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_details}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->quantity}}</td>
                                <td><img class="img-fluid img-thumbnail w-50 h-50"src="{{Storage::url($product->image)}}"></td>
                                <td><a href="{{route('edit',$product->id)}}" class="btn btn-success btn-sm">Update</a></td>
                                <td><a href="{{route('delete',$product->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                </div>    
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>