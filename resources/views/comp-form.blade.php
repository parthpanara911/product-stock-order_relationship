<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <form method="post" action="{{url('/')}}/register">
        @csrf
        <div class="container col-md-4 mt-5">
            <x-input type="text" name="name" label="Name"/>
            <x-input type="email" name="email" label="Email"/>
            <x-input type="password" name="password" label="Password"/>
            <x-input type="password" name="confirm_password" label="Confirm Password"/>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
</body>

</html>