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
                                </tr>
                            </thead>
                            <tbody> 
                                <tr> 
                                    <td>{{ $user['id'] }}</td>  
                                    <td>{{ $user['first_name'] }}</td>  
                                    <td>{{ $user['last_name'] }}</td>  
                                    <td>{{ $user['email'] }}</td>  
                                    <td>
                                        <img src="{{ $user['avatar'] }}" alt="{{ $user['first_name'] }}" style="width:100px;">
                                    </td>  
                                </tr>                               
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
