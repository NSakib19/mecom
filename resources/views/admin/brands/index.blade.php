<x-admin.layouts.admin_master>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Create Brand</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info ms-4" href="{{route('brands.create')}}">Back</a>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-xl-table-cell">Picture</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $key =>$brand)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="d-none d-xl-table-cell">{{$brand->brand_name}}</td>
                            <td><img src="{{asset("$brand->brand_image")}}" style="width: 70px; height: 40px"></td>
                            <td><a class="btn btn-info btn-sm" href="{{route('brands.show',['brand'=>$brand->id])}}">Show</a>
                            <a class="btn btn-info btn-sm" href="{{route('brands.edit',['brand'=>$brand->id])}}">Edit</a><form style="display: inline" action="{{route('brands.destroy',['brand'=>$brand->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure want to delete?')">Delete</button>
                            </form>
                        </td>
                            
                            
                                    {{-- <td class="d-none d-md-table-cell">Vanessa Tucker</td> --}}
                        </tr>
                            
                        @endforeach
                    
                    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin.layouts.admin_master>
