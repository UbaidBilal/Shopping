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
<div class=container>
                            <h1>Update Form</h1>
                            <form action="/update" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type='hidden' class="form-control" name='id' value='{{$data->id}}'>
                                </div>
                                <div class="form-group">
                                    <label><b>Product Name : </b></label>
                                    <input type='text' class="form-control" name='product_name' value='{{$data->product_name}}'>
                                </div>
                                <div class="form-group">
                                    <label><b>Product Details : </b></label>
                                    <input type='text' class="form-control" name='product_details' value='{{$data->product_details}}'>
                                </div>
                                <div class="form-group">
                                    <label><b>Price : </b></label>
                                    <input type='text' class="form-control" name='price' value='{{$data->price}}'>
                                </div>
                                <div class="form-group">
                                    <label>Category : </label>
                                    <input type='text' class="form-control" name='category' value='{{$data->category}}'>
                                </div>
                                <div class="form-group">
                                    <label>Quantity : </label>
                                    <input type='number' class="form-control" name='quantity' value='{{$data->quantity}}'>
                                </div>
                                <div class="form-group">
                                    <label>Upload Image: </label>
                                    <div class="row">
                                    <div class="col-3">
                                    <img id="output" class="img-fluid img-thumbnail h-70 w-70"src="{{asset('/storage/'.$data->image)}}">
                                    </div>
                                    <div class="col-9">
                                    
                                    <input type="File" class="form-control" name='image' accept=".jpg,.png,.jpeg">
                                    
                                    </div>
                                </div>
                                </div>
                                <br />
                                <button type='submit' class="btn btn-primary">Submit</button>
                            </form>
                        </div>
</body>
</html>                        
                        
                        
                       