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
                <label class="form-label">Product Name</label>
                <!-- Start Select Product -->
                <!-- <select class="form-control form-select select2" data-bs-placeholder="Select" name="product" id="product">
                    <option value="" disabled selected>Select a Product</option>
                    @foreach($products as $product)
                    <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select> -->
                <!-- End of Select Product -->
                <select class="form-control form-select select2" data-bs-placeholder="Select" name="product" id="product">
                    <option value="" disabled selected>Select a product</option>
                    @foreach($products as $product)
                    <option value="{{ $product->name }}" {{ old('product') == $product->name ? 'selected' : '' }}>
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
                <label for="prize">Prize</label>
                <input type="text" class="form-control" name="prize" id="prize" placeholder="Prize..." min="0" value="{{$value_prize}}" readonly>
                <span class="text-danger">
                    @error('prize')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">Product Quantity</label>
                <input type="text" class="form-control" placeholder="Please Enter Quantity of Product..." min="0" name="quantity" id="quantity" value="{{$value_quantity}}" />
                <span class="text-danger">
                    @error('quantity')
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="">Total Prize</label>
                <input type="text" class="form-control" name="totalprize" placeholder="Total Prize..." min="0" id="totalprize" value="{{$value_totalprize}}">
                <span class="text-danger">
                    @error('totalprize')
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
            <a href="{{route('order.view')}}" class="btn btn-primary">Back</a>
        </form>

    </div>
    <!-- totalprize = quantity * prize -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#prize, #quantity').on('input', function() {
                var prize = parseFloat($('#prize').val());
                var quantity = parseFloat($('#quantity').val());

                if (!isNaN(prize) && !isNaN(quantity)) {
                    var totalPrize = (prize * quantity).toFixed(2);
                    $('#totalprize').val(totalPrize);
                } else {
                    $('#totalprize').val('');
                }
            });
        });
    </script>

    <!--corresponding prize according product  -->
    <script>
        $(document).ready(function() {
            $('#product').on('change', function() {
                var productName = $(this).val();

                $.ajax({
                    url: "{{ route('getProductPrice') }}",
                    type: "GET",
                    data: {
                        product: productName
                    },
                    success: function(response) {
                        $('#prize').val(response.prize);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>


</body>

</html>