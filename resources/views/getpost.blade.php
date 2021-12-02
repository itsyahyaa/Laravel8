<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h1>All posts</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    All Post <a href="/add-operation" class="btn btn-success">Add Post</a>
                </div>
                <div class="card-body">
                    @if (Session::has('post_deleted'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('post_deleted')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td><a class="btn btn-success" href="getpost/{{$post->id}}">View</a>
                                <a class="btn btn-info" href="editpost/{{$post->id}}">Edit</a>
                                <a class="btn btn-danger" href="delete/{{$post->id}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
