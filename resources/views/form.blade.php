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
                             <h1>Add Product</h1>  
                            <form action="/add" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Product Name : </label>
                                    <input type='text' class="form-control" name='product_name'>
                                </div>
                                <div class="form-group">
                                    <label>Product Details : </label>
                                    <input type='text' class="form-control" name='product_details'>
                                </div>
                                <div class="form-group">
                                    <label>Price : </label>
                                    <input type='text' class="form-control" name='price'>
                                </div>
                                <div class="form-group">
                                    <label>Category : </label>
                                    <input type='text' class="form-control" name='category'>
                                </div>
                                <div class="form-group">
                                    <label>Quantity : </label>
                                    <input type='number' class="form-control" name='quantity'>
                                </div>
                                <div class="form-group">
                                    <label>Picture : </label>
                                    <input type='file' class="form-control" name='image' accept='.jpg,.png,.jpeg'>
                                    
                                </div>
                                
                                <br />
                                <button type='submit' class="btn btn-primary">Submit</button><br />
                            </form>
                        </div>


                    
</body>

</html>