@extends('product.welcome')

@section('main')
    <div class="gallery-upload">
        <h2>New Product</h2>
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="price" placeholder="Price">
            <input type="file" name="image">
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
@endsection
