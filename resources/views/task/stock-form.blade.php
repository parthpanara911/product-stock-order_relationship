<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.png')}}">
</head>

<body>

    <div class="container col-md-4">
        <h1 class="text-success text-center mb-5">
            {{$title}}
        </h1>

        <form method="post" action="{{$url}}">
            @csrf
            <div class="form-group">
                <label class="form-label">Product</label>
                  <!-- Start Select Product -->
                <!-- <select class="form-control form-select select2" data-bs-placeholder="Select" name="product" id="product">
                    <option value="" disabled selected>Select a Product</option>
                    @foreach($products as $product)
                    <option value="{{ $product->name }}">{{ $product->name }}</option>
                    @endforeach
                </select> -->
                   <!-- End of Select Product -->
                <select class="form-control form-select select2" data-bs-placeholder="Select" name="product" id="product">
                    <option value="" disabled selected>Select a product</option>
                    @foreach($products as $product)
                    <option value="{{ $product->name}}" {{ old('product') == $product->name ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                    @endforeach
                </select>
                <span class="text-danger">
                    @error('product')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" placeholder="Please Enter Stock for the Product..." id="stock" name="stock" min="0" step="1" value="{{$value_stock}}">
                <span class="text-danger">
                    @error('stock')
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
            <a href="{{route('stock.view')}}" class="btn btn-primary">Back</a>
        </form>

    </div>
</body>

</html>