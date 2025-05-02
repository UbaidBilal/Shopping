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
<div class="container">
    <div class="row">
        <h1 class="text-center">Shopping APP</h1>
        
    @foreach($data as $id => $product)
    
        <div class="card m-4" style="width: 17rem;">
        <a href="{{route('view.single',$product->id)}}" style="text-decoration:none;color:black">
            <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">{{$product->product_name}}</h5>
                        <p class=""><b>Category : </b>{{$product->category}}</p>
                        <p class="card-text">{{$product->product_details}}</p>
                        <h5 class="">Price : {{$product->price}}</h5>
                        <!-- <a href="{{route('view.single',$product->id)}}" class="btn btn-primary">Add to Cart</a> -->
                </div>
                </a>
        </div>
        
    @endforeach
        
    <div>
</div>
                        
</body>
</html>