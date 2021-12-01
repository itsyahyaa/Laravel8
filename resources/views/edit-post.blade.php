<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    @if(Session::has('post_update'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_update')}}
                            </div>
                        @endif
                    <form method="POST" action="{{route('post.updatepost')}}">
                        @csrf
                        <input type="text" class="form-control" id="text" aria-describedby="emailHelp" name="id" value="{{$posts->id}}">
                        <div class="mb-3">
                          <label for="text" class="form-label">Post Title</label>
                          <input type="text" class="form-control" id="text" aria-describedby="emailHelp" name="title" value="{{$posts->title}}">

                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Post body</label>
                            <input type="text" class="form-control" id="body" aria-describedby="emailHelp" name="body" value="{{$posts->body}}">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
