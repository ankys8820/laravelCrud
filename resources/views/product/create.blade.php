<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Creat</title>
</head>
<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Laravel 11 CRUD</h3>
        </div>
        <div class="container">
            <a href="{{route('products')}}" class=" btn btn-dark mt-4">Show All</a>
            <form enctype="multipart/form-data" action="{{route('product.store')}}" method="post">
                @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 shadow-lg my-4">
                        <div class="card-header">
                            <h3 class="">Create Product</h3>
                        </div>
                        <div class="card-body">
                            <div class-mb-3>
                                <!-- <lable for="form-lable">Name</lable> -->
                                <input type="text" class="form-control-lg form-control" name="name" required placeholder="name">
                            </div>
                            <div class-mb-3>
                                <!-- <lable for="form-lable">Name</lable> -->
                                <input type="text" required class="form-control-lg form-control" name="sku" placeholder="sku">
                            </div>
                            <div class-mb-3>
                                <!-- <lable for="form-lable">Name</lable> -->
                                <input type="text" required class="form-control-lg form-control" name="price" placeholder="price">
                            </div>
                            <div class-mb-3>
    <textarea class="form-control" name="description" cols="30" rows="5" placeholder="description"></textarea>
                                
                            </div>
                            <div class-mb-3>
                                <input type="file" name="image" class="form-control form-control-lg">
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-lg btn-dark">Submit</button>
                            </div>
                            <div class="d-grid">
                                <a  href="{{route('products')}}" class="btn btn-lg btn-success">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>