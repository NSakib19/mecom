<x-admin.layouts.admin_master>
    <h1 class="h3 mb-3"> Slider</h1>
    <div class="card-header">
        Edit Slider <a class="btn btn-info ms-4" href="{{route('sliders.index')}}">Lists</a>
    </div>
    <div class="card-body">
        <form action = "{{route('sliders.update',['brand'=>$brand->id])}}" method = "post" enctype = "multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Slider</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "slider_title"
                    value="">

                </div>
            </div>

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Slider</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "short_title"
                    value="">

                </div>
            </div>
            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Picture</label>
                <div class="col-sm-9">
                    <input
                    type = "file"
                    class= "form-control"
                    id = "inputTitle"
                    name = "slider_image"
                    value="">

                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-9 offset-3">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
            
        </form>
    </div>
</x-admin.layouts.admin_master>
