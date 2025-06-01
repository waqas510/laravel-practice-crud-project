<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Hafiz Waqas jadon</h3>
        <h6 class="text-white text-center">Crud practice project</h6>
    </div>
    <a href="{{ route('index') }}" class="btn btn-success mt-4 ms-4">Home Page</a>
    <div class="conatiner mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 border-0 shadow-lg">
                <div class="card-header bg-dark p-2 mt-2">
                    <h3 class="text-white">Show Category</h3>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($res as $data)
                        <td>{{$data->id}}</td>
                        <td>{{$data->cat_name}}</td>
                        <td>{{$data->cat_des}}</td>
                        <td>{{$data->cat_img}}</td>
                        <td><a href="{{ route('category.edit',$data->id) }}" class="btn btn-warning">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                        @endforeach
                    </tbody>
                </table>
                </div>
    
            </div>
        </div>
    </div>
    
    
</body>
</html>