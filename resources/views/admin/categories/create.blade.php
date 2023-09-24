<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">
        <form action = "{{route('categories.store')}}" method = "post" enctype = "multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "category_name"
                    value="">

                </div>
            </div>

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "category_slug"
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
                    name = "category_image"
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
