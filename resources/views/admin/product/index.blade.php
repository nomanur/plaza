<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <span>{{$errors->first('name')}}</span>
        <br>
        <label for="">Price</label>
        <input type="number" name="price">
        <span>{{$errors->first('price')}}</span>
        <br>
        <label for="">Main Image</label>
        <input type="file" name="image">
        <span>{{$errors->first('image')}}</span>
        <br>


        @for ($i=1; $i<=5; $i++) <label for="">Product Image {{$i}}</label>
            <input type="file" name="productimage{{$i}}">
            <br>
            @endfor






            <button type="submit">Submit</button>

    </form>


</body>

</html>