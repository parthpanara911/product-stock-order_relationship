<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <!-- <pre>
                @php
                print_r($errors->all());
                @endphp
            </pre>  -->
            
            <div class="container col-md-4" >
                <h1 class="text-success text-center mb-5">
                    {{$title}}
                </h1>


        <form method="post" action="{{$url}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$value_name}}" />
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" value="{{$value_email}}">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" value="{{$value_password}}">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            
            <div class="form-group">
                <label for="">File</label>
                <input type="file" class="form-control" name="file">
                <span class="text-danger">
                    @error('file')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('form.view')}}" class="btn btn-primary">Back</a>
        </form>

    </div>
</body>

</html>