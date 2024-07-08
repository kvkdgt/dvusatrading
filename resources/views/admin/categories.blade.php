@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/admin/categories.css'); }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="categories-container">
    <div class="warning-container warning-container-msg">
        <div class="add-category-btn-container">
            <span class="add-category-btn" id="openModal"> Add New Category </span>
        </div>
    </div>
    <div class="warning-container body">
        @if(count($categories) > 0)
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <!-- <th>Status</th> -->
                <th>Actions</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td class="description-column">{{ $category->description }}</td>
                <!-- <td>{{ $category->status }}</td> -->
                <td>
                    <button class="edit-btn" data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-description="{{ $category->description }}">Edit</button>
                    <button class="delete-btn" data-id="{{ $category->id }}">Delete</button>
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <p>No categories available.</p>
        @endif
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle">Add New Category</h2>
            <form id="categoryForm" action="{{ route('category.store') }}" method="POST">
                @csrf
                <input type="hidden" id="categoryId" name="categoryId">
                <label for="categoryName">Category Name:</label>
                <input type="text" id="categoryName" name="categoryName" required>
                <label for="categoryDescription">Category Description:</label>
                <input type="text" id="categoryDescription" name="categoryDescription" required>
                <button type="submit" id="submitBtn">Submit</button>
            </form>
        </div>
    </div>

    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Confirm Deletion</h2>
            <p>Are you sure you want to delete this category?</p>
            <form id="deleteForm" action="{{ route('category.destroy', '') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" id="deleteCategoryId" name="categoryId">
                <button type="submit">Confirm</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        var modal = document.getElementById("myModal");
        var deleteModal = document.getElementById("deleteModal");
        var btn = document.getElementById("openModal");
        var span = document.getElementsByClassName("close");
        var editButtons = document.getElementsByClassName("edit-btn");
        var deleteButtons = document.getElementsByClassName("delete-btn");
        var form = document.getElementById("categoryForm");
        var deleteForm = document.getElementById("deleteForm");
        var modalTitle = document.getElementById("modalTitle");
        var submitBtn = document.getElementById("submitBtn");
        var cancelBtn = document.querySelector(".cancel-btn");

        btn.onclick = function() {
            modal.classList.add('show');
            modal.style.display = "block";
            setTimeout(() => {
                modal.classList.add('show');
            }, 10); // This timeout ensures the transition works
        }

        Array.from(span).forEach(element => {
            element.onclick = function() {
                modal.classList.remove('show');
                deleteModal.classList.remove('show');
                setTimeout(() => {
                    modal.style.display = "none";
                    deleteModal.style.display = "none";
                }, 300); // Matches the transition duration
            }
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove('show');
                setTimeout(() => {
                    modal.style.display = "none";
                }, 300); // Matches the transition duration
            }
            if (event.target == deleteModal) {
                deleteModal.classList.remove('show');
                setTimeout(() => {
                    deleteModal.style.display = "none";
                }, 300); // Matches the transition duration
            }
        }

        Array.from(editButtons).forEach(button => {
            button.addEventListener('click', function() {
                var categoryId = this.getAttribute('data-id');
                var categoryName = this.getAttribute('data-name');
                var categoryDescription = this.getAttribute('data-description');

                document.getElementById('categoryId').value = categoryId;
                document.getElementById('categoryName').value = categoryName;
                document.getElementById('categoryDescription').value = categoryDescription;

                modalTitle.textContent = "Edit Category";
                submitBtn.textContent = "Update";
                form.action = "{{ route('category.update', '') }}/" + categoryId; // Assuming you have a route named 'category.update'

                modal.classList.add('show');
                modal.style.display = "block";
                setTimeout(() => {
                    modal.classList.add('show');
                }, 10); // This timeout ensures the transition works
            });
        });

        Array.from(deleteButtons).forEach(button => {
            button.addEventListener('click', function() {
                var categoryId = this.getAttribute('data-id');
                document.getElementById('deleteCategoryId').value = categoryId;

                deleteForm.action = "{{ route('category.destroy', '') }}/" + categoryId; // Assuming you have a route named 'category.destroy'

                deleteModal.classList.add('show');
                deleteModal.style.display = "block";
                setTimeout(() => {
                    deleteModal.classList.add('show');
                }, 10); // This timeout ensures the transition works
            });
        });

        cancelBtn.onclick = function() {
            deleteModal.classList.remove('show');
            setTimeout(() => {
                deleteModal.style.display = "none";
            }, 300); // Matches the transition duration
        }
    });
</script>
@endsection
