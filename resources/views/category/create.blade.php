<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Hafiz Waqas jadon</h3>
        <h6 class="text-white text-center">Crud practice project</h6>
    </div>
    <div class="conatiner mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 border-0 shadow">
                <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4 mt-3">Category Name</label>
            <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter Name">
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4">Category Description</label>
            <textarea name="description" class="form-control form-control-lg" cols="30" rows="5" placeholder="Enter Description"></textarea>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label h4">Category Image</label>
            <input type="file" class="form-control form-control-lg" name="image">
        </div>
    </div>
    <button class="btn btn-primary w-100 mb-3 btn-lg">Submit</button>
            </div>
        </div>
    </div>
    
    
</body>
</html>