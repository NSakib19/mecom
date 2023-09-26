<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">
        <form action = "{{route('products.update',['product'=>$product->id])}}" method = "post" enctype = "multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product name</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_name"
                    value="{{old('product_name',$product->product_name)}}">

                </div>
            </div>


            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product Code</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_code"
                    value="{{old('product_code',$product->product_code)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product Quantity</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_qty"
                    value="{{old('product_qty',$product->product_qty)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product tags</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_tags"
                    value="{{old('product_tags',$product->product_tags)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product Size</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_size"
                    value="{{old('product_size',$product->product_size)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product color</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_color"
                    value="{{old('product_color',$product->product_color)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Selling Price</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "selling_price"
                    value="{{old('selling_price',$product->selling_price)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Discount Price</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "discount_price"
                    value="{{old('discount_price',$product->discount_price)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Short Description</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "short_descp"
                    value="{{old('short_descp',$product->short_descp)}}">

                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "mytextarea" class="col-sm-3 col-form-label">Long Description</label>
                <div class="col-sm-9">
                    <textarea
                    class= "form-control"
                    id = "mytextarea"
                    name = "long_descp"
                    placeholder="Leave a detailed description of the product"
                    value="{{old('long_descp',$product->long_descp)}}">
                {!! $product->long_descp!!}</textarea>
                </div>
            </div>

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product Image</label>
                <div class="col-sm-9">
                    <input
                    type = "file"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_image"
                    value="{{old('product_image',$product->product_image)}}">

                </div>
            </div>


            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Vendor Id
                </label>
                <div class="col-sm-9">
                    <select name="vendor_id" class="form-select">
                        <option></option>
                        @foreach($activeVendor as $vendor)
                            <option value="{{$vendor->id}}"{{$vendor->id == $product->vendor_id ? 'selected':'' }}>{{$vendor->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Brand Id
                </label>
                <div class="col-sm-9">
                    <select name="brand_id" class="form-select">
                        <option></option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}"{{$brand->id == $product->brand_id ? 'selected':'' }}>{{$brand->brand_name}}</option>
                        @endforeach                        
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Category Id
                </label>
                <div class="col-sm-9">
                    <select name="category_id" class="form-select">
                        <option></option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"{{$category->id == $product->category_id ? 'selected':'' }}>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input"
                        name="hot_deals"
                        type="checkbox"
                        value="1"
                        id="flexCheckDefault">
                        <label class="form-check-label"
                        for="flexCheckDefault"><span class="fw-bold">Hot Deals</span></label>
                    </div>
                </div>                
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input"
                        name="special_deals"
                        type="checkbox"
                        value="1"
                        id="flexCheckDefault">
                        <label class="form-check-label"
                        for="flexCheckDefault"><span class="fw-bold">Special Deals</span></label>
                    </div>
                </div>                
            </div>



            <div class="mb-3 row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input"
                        name="featured"
                        type="checkbox"
                        value="1"
                        id="flexCheckDefault">
                        <label class="form-check-label"
                        for="flexCheckDefault"><span class="fw-bold">Featured</span></label>
                    </div>
                </div>                
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input"
                        name="special_offers"
                        type="checkbox"
                        value="1"
                        id="flexCheckDefault">
                        <label class="form-check-label"
                        for="flexCheckDefault"><span class="fw-bold">Special Offers</span></label>
                    </div>
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
