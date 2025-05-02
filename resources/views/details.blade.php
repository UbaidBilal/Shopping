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
    <div class="container ">
        <div class="row">
            <h1 class="text-center">Product Detail</h1>
            @foreach($data as $id => $product)
            <div class="col-6">
            <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="...">
                
            </div>
            
            <div class="col-6 p-5">
                <div class="row">
                <div class="col-6">
                

                <h4>Product Name</h4>
                <h4>Product Details</h4>
                <h4>Product Category</h4>
                <h4>Product Price</h4>
                <h4>Enter Quantity</h4>
                <h4>Select Size</h4>
                
                <h4>Enter Your Name</h4>
                <h4>Enter Mobile No</h4>
                <h4>Enter Your Address</h4>
                <h4>Confirm Address</h4>
                
                </div>
                <div class="col-6">
                <form action="/order" method="POST" enctype="multipart/form-data">
                @csrf
                <h5><input type="text" name="product_name" value="{{$product->product_name}}" readonly/></h5>
                <h5><input type="text" name="details" value="{{$product->product_details}}" readonly/></h5>
                <h5><input type="text" name="category" value="{{$product->category}}" readonly/></h5>
                <h5><input type="text" name="price" value="{{$product->price}}" readonly/></h5>
                
                <h5><input type="number" name="quantity"/></h5>
                <select class="form-select" aria-label="Default select example" name="size">
                    <option selected>Select Size</option>
                    <option value="small">S</option>
                    <option value="medium">M</option>
                    <option value="large">L</option>
                    </select>
                
                <h5><input type="text" name="customer_name"/></h5>
                <h5><input type="number" name="mobile"/></h5>
                <h5><input type="text" name="address"/></h5>
                <h5><input type="text" name="confirm_address"/></h5>

                <br>
                
                <h4><button type='submit' class="btn btn-primary">Add to Cart</button></h4>
                </form>
                </div>
                </div>
            
            </div>
            @endforeach
        </div>
    </div> 
</body>
</html>