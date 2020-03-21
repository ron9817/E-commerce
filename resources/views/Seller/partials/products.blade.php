<div class="row">
    <div class="col">
        <button class="btn btn-primary" data-toggle="modal" data-target="#add_product">  <i class="fa fa-plus" aria-hidden="true"></i> Add new product</button>
    </div>
</div>
<div class="modal" id="add_product">
    <div class="d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-4 p-5 left_hand_side">
                <div class="header">Add Product</div>
                <div class="text my-3">Make your  product reach pan India</div>
                <div class="image m-auto"></div>
            </div>
            <div class="col-7 p-5 right_hand_side bg-white">
                <form id="add_product-form">
                    <div class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="description">Enter Description</label>
                        <textarea name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group custom-file">
                        <label for="image" class="custom-file-label">Upload Image Products</label>
                        <input type="file" name="image" class="form-control custom-file-input" id="image">
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
                        <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter Stock">
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