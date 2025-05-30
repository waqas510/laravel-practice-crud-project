<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Hafiz Waqas jadon</h3>
        <h6 class="text-white text-center">Crud practice project</h6>
    </div>
    <div class="conatiner mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 border-0 shadow-lg">
                <div class="card-header bg-dark p-2 mt-2 mb-2">
                    <h2 class="text-white text-center">Control Penal</h2>
                </div>

                {{-- Penal Category Links --}}
                <div class="row">
                    <div class="col-md-2"><span class="form-control form-control-lg text-decoration-none mb-2 bg-dark text-white text-center">Categories</span></div>
                    <div class="col-md-5">
                        <a href="{{ route('category.create') }}" class="form-control form-control-lg text-decoration-none mb-2 btn btn-primary btn-lg">Create Category</a>
                    </div>
                    <div class="col-md-5">
                        <a href="{{ route('category.show') }}" class="form-control form-control-lg text-decoration-none mb-2 btn btn-primary btn-lg">Show Category</a>
                    </div>
                </div>

                 {{-- Penal Products Links --}}
                <div class="row">
                    <div class="col-md-2"><span class="form-control form-control-lg text-decoration-none mb-2 bg-dark text-white text-center">Products</span></div>
                    <div class="col-md-5">
                        <a href="{{ route('product.create') }}" class="form-control form-control-lg text-decoration-none mb-2 btn btn-primary btn-lg">Create Product</a>
                    </div>
                    <div class="col-md-5">
                        <a href="{{ route('product.show') }}" class="form-control form-control-lg text-decoration-none mb-2 btn btn-primary btn-lg">Show Product</a>
                    </div>
                </div>
                
    
            </div>
        </div>
    </div>
    
    
</body>
</html>