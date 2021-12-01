<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Add Post</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                        @endif
                        <form method="POST" action="{{route('post.addsubmit')}}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" placeholder="Enter Post Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="body">Post Title</label>
                                <textarea type="text" name="body" placeholder="Enter Post Title"
                                rows="3" class="form-control"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="submit">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
