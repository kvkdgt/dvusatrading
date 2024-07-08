@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/admin/categories.css'); }}">

<div class="products-container">
    <div class="warning-container warning-container-msg">
        <div class="add-category-btn-container">
            <span class="add-category-btn" id="openProductModal"> Add New Product </span>
        </div>
    </div>
    <div class="warning-container body">
        @if(count($products) > 0)
        <table>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td><img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" width="50"></td>
                <td>
                    <button class="edit-product-btn" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-category="{{ $product->category_id }}" data-image="{{ $product->image }}">Edit</button>
                    <button class="delete-product-btn" data-id="{{ $product->id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <p>No products available.</p>
        @endif
    </div>

    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="productModalTitle">Add New Product</h2>
            <form id="productForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="productId" name="productId">
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
                <img id="productImagePreview" src="" alt="Product Image" style="display:none;" width="50">
                <button type="submit" id="productSubmitBtn">Submit</button>
            </form>
        </div>
    </div>

    <div id="deleteProductModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Confirm Deletion</h2>
            <p>Are you sure you want to delete this product?</p>
            <form id="deleteProductForm" action="{{ route('products.destroy', '') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" id="deleteProductId" name="productId">
                <button type="submit">Confirm</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        var productModal = document.getElementById("productModal");
        var deleteProductModal = document.getElementById("deleteProductModal");
        var btn = document.getElementById("openProductModal");
        var span = document.getElementsByClassName("close");
        var editButtons = document.getElementsByClassName("edit-product-btn");
        var deleteButtons = document.getElementsByClassName("delete-product-btn");
        var form = document.getElementById("productForm");
        var deleteForm = document.getElementById("deleteProductForm");
        var modalTitle = document.getElementById("productModalTitle");
        var submitBtn = document.getElementById("productSubmitBtn");
        var cancelBtn = document.querySelector(".cancel-btn");
        var imagePreview = document.getElementById("productImagePreview");

        btn.onclick = function() {
            modalTitle.textContent = "Add New Product";
            submitBtn.textContent = "Submit";
            form.action = "{{ route('products.store') }}";
            imagePreview.style.display = "none";
            productModal.classList.add('show');
            productModal.style.display = "block";
            setTimeout(() => {
                productModal.classList.add('show');
            }, 10);
        }

        Array.from(span).forEach(element => {
            element.onclick = function() {
                productModal.classList.remove('show');
                deleteProductModal.classList.remove('show');
                setTimeout(() => {
                    productModal.style.display = "none";
                    deleteProductModal.style.display = "none";
                }, 300);
            }
        });

        window.onclick = function(event) {
            if (event.target == productModal) {
                productModal.classList.remove('show');
                setTimeout(() => {
                    productModal.style.display = "none";
                }, 300);
            }
            if (event.target == deleteProductModal) {
                deleteProductModal.classList.remove('show');
                setTimeout(() => {
                    deleteProductModal.style.display = "none";
                }, 300);
            }
        }

        Array.from(editButtons).forEach(button => {
            button.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');
                var productName = this.getAttribute('data-name');
                var productCategory = this.getAttribute('data-category');
                var productImage = this.getAttribute('data-image');

                modalTitle.textContent = "Edit Product";
                submitBtn.textContent = "Update";
                form.action = "/admin/product/update/" + productId;
                form.method = "POST";
                document.getElementById('productId').value = productId;
                document.getElementById('productName').value = productName;
                document.getElementById('productCategory').value = productCategory;
                imagePreview.src = "{{ asset('images') }}/" + productImage;
                imagePreview.style.display = "block";
                productModal.classList.add('show');
                productModal.style.display = "block";
                setTimeout(() => {
                    productModal.classList.add('show');
                }, 10);
            });
        });

        Array.from(deleteButtons).forEach(button => {
            button.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');
                deleteForm.action = "/admin/product/destroy/" + productId;
                deleteProductModal.classList.add('show');
                deleteProductModal.style.display = "block";
                setTimeout(() => {
                    deleteProductModal.classList.add('show');
                }, 10);
            });
        });

        cancelBtn.onclick = function() {
            deleteProductModal.classList.remove('show');
            setTimeout(() => {
                deleteProductModal.style.display = "none";
            }, 300);
        }
    });
</script>

@endsection
