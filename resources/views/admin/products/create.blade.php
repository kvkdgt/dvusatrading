@extends('admin/theme')
@section('content')

<div class="create-product-container">
    <h2>Add New Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="name" required>

        <label for="productCategory">Product Category:</label>
        <select id="productCategory" name="category_id" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="productImage">Product Image:</label>
        <input type="file" id="productImage" name="image">

        <button type="submit">Submit</button>
    </form>
</div>

@endsection
