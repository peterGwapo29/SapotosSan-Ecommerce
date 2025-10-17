<x-app-layout>
    <x-slot name="header">
        <h2 class="page-title">
            {{ __('Product Management') }}
        </h2>
    </x-slot>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main Container -->
    <div class="page-container">
        <!-- Add Product Button -->
        <div class="card-header">
            <button id="openModalBtn" class="btn primary-btn">+ Add Product</button>
        </div>
        
        <div class="card">
            
            <!-- Product Table -->
            <div class="table-container">
                <table id="productTable">
                </table>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div id="addProductModal" class="modal-overlay hidden">
        <div class="modal-box">
            <div class="modal-header">
                <h3 class="modal-title">Add New Product</h3>
                <button type="button" id="closeModalBtn" class="close-btn">&times;</button>
            </div>

            <form id="addProductForm" class="modal-form">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" required>
            </div>

            <div class="form-group">
                <label for="productImage">Product Image</label>
                <input type="file" id="productImage" accept="image/*" required>
                <div id="imagePreviewContainer" class="preview-container hidden">
                <img id="imagePreview" src="" alt="Preview">
                </div>
            </div>

            <div class="form-group">
                <label for="productPrice">Price</label>
                <input type="number" step="0.01" id="productPrice" required>
            </div>

            <div class="form-group">
                <label for="productCategory">Category</label>
                <select id="productCategory" name="category_id" required>
                <option hidden>Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="productStock">Stock</label>
                <input type="number" step="0.01" id="productStock" required>
            </div>

            <div class="modal-actions">
                <button type="submit" class="btn primary-btn">Add Product</button>
            </div>
            </form>
        </div>
    </div>


    <!-- Edit Product Modal -->
    <div id="editProductModal" class="modal-overlay hidden">
        <div class="modal-box edit-modal">
            <div class="modal-header">
                <h3 class="modal-title edit-title">Edit Product</h3>
                <button type="button" id="closeModalBtn" class="close-btn">&times;</button>
            </div>
            
            
            <form id="editProductForm">
                <input type="hidden" id="editProductId">

                <div class="form-group">
                    <label for="editProductName">Product Name</label>
                    <input type="text" id="editProductName" required>
                </div>

                <div class="form-group">
                    <label for="editProductImage">Product Image</label>
                    <input type="file" id="editProductImage" accept="image/*">
                    <div id="editImagePreviewContainer" class="preview-container hidden">
                        <img id="editImagePreview" src="" alt="Preview">
                    </div>
                </div>

                <div class="form-group">
                    <label for="editProductPrice">Price</label>
                    <input type="number" step="0.01" id="editProductPrice" required>
                </div>

                <div class="form-group">
                    <label for="editProductCategory">Category</label>
                    <select id="editProductCategory" name="category_id" required>
                        <option hidden>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="editProductStock">Stock</label>
                    <input type="number" step="0.01" id="editProductStock" required>
                </div>

                <div class="form-group">
                    <label for="editProductStatus">Status</label>
                    <select id="editProductStatus" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="modal-actions">
                    <button type="submit" class="btn primary-btn">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
