@extends('admin/theme')
@section('content')

<div class="edit-product-container">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="name" value="{{ $product->name }}" required>

        <label for="productCategory">Product Category:</label>
        <select id="productCategory" name="category_id" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>

        <label for="productImage">Product Image:</label>
        <input type="file" id="productImage" name="image">
        @if($product->image)
        <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" width="50">
        @endif

        <button type="submit">Update</button>
    </form>
</div>

@endsection
