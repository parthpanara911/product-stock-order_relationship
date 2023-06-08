<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}">

</head>

<body>
    <!-- <pre>
                @php
                print_r($errors->all());
                @endphp
            </pre>  -->

    <div class="container col-md-4">
        <h1 class="text-success text-center mb-5">
            {{$title}}
        </h1>

        <form method="post" action="{{$url}}">
            @csrf

            <div class="form-group">
                <label class="form-label">Category</label>
                <select class="form-control form-select select2" data-bs-placeholder="Select" name="category" id="">
                    <option value="" disabled selected>Select Product Category</option>
                    <option value="Groceries" {{ old('category') == 'Groceries' ? 'selected' : '' }}>Groceries</option>
                    <option value="Electronics" {{ old('category') == 'Electronics' ? 'selected' : ''}}>Electronics</option>
                    <option value="Clothing" {{ old('category') == 'Clothing' ? 'selected' : '' }}>Clothing</option>
                    <option value="Toys and Games" {{ old('category') == 'Toys and Games' ? 'selected' : '' }}>Toys and Games</option>
                    <option value="Beauty and Personal Care" {{ old('category') == 'Beauty and Personal Care' ? 'selected' : '' }}>Beauty and Personal Care</option>
                    <option value="Home and Kitchen" {{ old('category') == 'Home and Kitchen' ? 'selected' : '' }}>Home and Kitchen</option>
                </select>

                <span class="text-danger">
                    @error('category')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" placeholder="Please Enter Your Product Name..." name="name" id="name" value="{{$value_name}}" />
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>


            <div class="form-group">
                <label for="">SKU Code</label>
                <input type="text" class="form-control" name="skucode" placeholder="Ex. XYZ12345" id="" value="{{$value_skucode}}">
                <span class="text-danger">
                    @error('skucode')
                    {{$message}}
                    @enderror
                </span>
            </div>



            <div class="form-group">
                <label for="prize">Prize</label>
                <input type="text" class="form-control" name="prize" id="prize" placeholder="Ex.100" min="0" value="{{$value_prize}}">
                <span class="text-danger">
                    @error('prize')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="name">Date</label>
                <input type="date" class="form-control" name="date" value="{{$value_date}}" />
                <span class="text-danger">
                    @error('date')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('product.view')}}" class="btn btn-primary">Back</a>
        </form>

    </div>
</body>

</html>