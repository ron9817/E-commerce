<div class="row">
    <div class="col">
        <button class="btn btn-primary" data-toggle="modal" data-target="#add_product">  <i class="fa fa-plus" aria-hidden="true"></i> Add new product</button>
    </div>
</div>
<div class="row my-3">
    <div class="col">
        <table class="table table-striped">
            <thead class="thead-light text-center">
                <tr>
                    <th class="p-border">#</th>
                    <th class="p-border">Title</th>
                    <th class="p-border">Description</th>
                    <th class="p-border">Images</th>
                    <th class="p-border">Category</th>
                    <th class="p-border">Stock</th>
                    <th class="p-border">Price</th>
                    <th class="p-border">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(empty($products))
                    <tr>
                    <td colspan=8 class="text-center">No products available</td>
                    </tr>
                @endif
                @foreach ($products as $p_key=>$product)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$product['title']}}</td>
                    <td class="text-justify">{{$product['description']}}</td>
                    <td>{{$product['images']}}</td>
                    <td>{{$product['category']}}</td>
                    <td>{{$product['stock']}}</td>
                    <td>{{$product['price']}}</td>
                    <td class="w-17p">
                        <span class="badge badge-info mx-2 product_edit_button" data-id="{{$loop->iteration}}"><i class="fa fa-edit mx-1"></i>Edit</span>
                        <span class="badge badge-info mx-2 product_delete_button"><i class="fa fa-trash mx-1"></i>Delete</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal" id="add_product">
    <div class="d-flex justify-content-center mt-5">
        <div class="row m-0" style="width: 65rem;">
            <div class="col-4 p-5 left_hand_side">
                <div class="header">Add Product</div>
                <div class="text my-3">Make your  product reach pan India</div>
                <div class="image m-auto"></div>
            </div>
            <div class="col-7 p-5 right_hand_side bg-white">
                <form id="add_product-form">
                    <div class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Enter Description</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="form-group custom-file">
                        <label for="image" id="image_label" class="custom-file-label">Upload Image Products</label>
                        <input type="file" name="image" class="form-control custom-file-input pointer" id="image">
                    </div>
                    <div class="form-group mt-2">
                        <label for="category">Select Category</label>
                        <select class="custom-select" id="category" name="category">
                        @foreach($category as $c_key=>$cat)
                            <option value="{{$cat['id']}}">{{$cat['name']}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stock">Enter Stock</label>
                        <input type="number" name="stock" class="form-control" id="stock">
                    </div>
                    <div class="form-group">
                        <label for="price">Enter Price</label>
                        <input type="number" name="price" class="form-control" id="price">
                    </div>
                    <div class="form-group">
                        <button class="btn text-center p-2 login-button" type="button" id="add_product-form-button">Add Product</button>
                    </div>
                </form>
            </div>
            <div class="col-1"  data-dismiss="modal">
                <div class="modal-close">X</div>
            </div>
        </div>
    </div>
</div>