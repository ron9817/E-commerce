@push('css')
<style>
    .border-bottom-1{
        border: 1px solid rgba(0,0,0,.16);
    }
    .text-black{
        color:#252525;
    }
    .text-bold{
        font-weight:600;
    }
    .text-off{
        color:#c3c3c3;
    }
    .fs-15{
        font-size:15px
    }
</style>
@endpush
<div class="d-flex justify-content-around border-bottom-1 text-black text-bold">
@foreach($category as $c_key=>$cat)
    <a href="/category/{{$cat['id']}}">
        <div class="px-3 py-2">
            <span class="fs-15">{{$cat['name']}}</span>
            <i class="fa fa-angle-down text-off" aria-hidden="true"></i>
        </div>
    </a>
@endforeach
</div>