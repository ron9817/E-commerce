<div class="row my-3">
    <div class="col">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Order id</th>
                    <th>Product id</th>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Ready to dispatch</th>
                </tr>
                </thead>
                <tbody>
                @if(empty($orders))
                    <tr>
                    <td colspan=9 class="text-center">No orders available</td>
                    </tr>
                @endif
                @foreach ($orders as $p_key=>$order)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$order['id']}}</td>
                    <td>{{$order['product_id']}}</td>
                    <td>{{$order['product_name']}}</td>
                    <td>{{$order['Quantity']}}</td>
                    <td>{{$order['cost']}}</td>
                    <td>{{$order['category']}}</td>
                    <td class="w-17p">
                        <span class="badge badge-info mx-2">{{$order['status']}}</span>
                    </td>
                    <td class="w-17p">
                        <span class="badge badge-info mx-2">Ready to dispatch</span>
                        <input type="checkbox" checked data-toggle="toggle">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>