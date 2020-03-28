<div class="row my-3">
    <div class="col">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th class="p-border">#</th>
                    <th class="p-border">Order id</th>
                    <th class="p-border">Product id</th>
                    <th class="p-border">Product name</th>
                    <th class="p-border">Quantity</th>
                    <th class="p-border">Cost</th>
                    <th class="p-border">Category</th>
                    <th class="p-border">Status</th>
                    <th class="p-border">Ready to dispatch</th>
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