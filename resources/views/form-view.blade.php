<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Read</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
        <div class="d-flex justify-content-end">
      <a href="{{url('/form/create')}}" class="btn btn-success mb-2">Add User</a>
    </div>
        
        <div class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 @php $i=1; 
                 @endphp
                   @foreach($customers as $customer)
                    <tr>
                        <td>@php echo $i++; @endphp</td>
                        <!-- <td>{{$customer->id}}</td> -->
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->password}}</td>
                        <td><img src="../images/{{$customer->file}}" width="100px" height="100px"></td>
                        <td>
                            <a href="{{route('form.edit',['id'=>$customer->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            <!-- <a href="{{url('/form/delete')}}/{{$customer->id}}" class="btn btn-danger btn-sm">Delete</a>  -->
                            <a href="{{route('form.delete',['id'=>$customer->id])}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- <script>
    $(document).ready( function () {
      $('#user-list').DataTable();
  } );
</script> -->
</body>

</html>