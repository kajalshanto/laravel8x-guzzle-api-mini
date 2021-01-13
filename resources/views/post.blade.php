<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>All Posts</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-5">
                    <div class="card-header">
                        <p class="text-center">All Posts Data</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th> 
                                    <th>Last Name</th> 
                                    <th>Email</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as$key=>$post)
                                <tr> 
                                    <td>{{ $key+1 }}</td>  
                                    <td>{{ $post['first_name'] }}</td>  
                                    <td>{{ $post['last_name'] }}</td>  
                                    <td>{{ $post['email'] }}</td>  
                                    <td>
                                        <img src="{{ $post['avatar'] }}" alt="{{ $post['first_name'] }}" style="width:100px;">
                                    </td>  
                                    <td>
                                        <a href="{{ route('post.edit', $post['id'] ) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('post.delete', $post['id'] ) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
