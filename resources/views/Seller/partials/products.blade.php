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
@include('Seller.partials.addProductForm')