<x-admin.layouts.admin_master>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    Show Brand <a class="btn btn-info ms-4" href="{{route('brands.index')}}">Lists</a>
                </div>
                <h2> Title:{{$brand->brand_name}}</h2>
            
                <h2> Image<img src="{{asset("$brand->brand_image")}}" style="width: 70px; height: 40px"></h2>
                
            </div>
        </div>

    </div>
</x-admin.layouts.admin_master>