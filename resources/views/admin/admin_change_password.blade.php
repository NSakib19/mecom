<x-admin.layouts.admin_master>
    <main class="content">
        <div class="container-fluid p-0">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Admin User Profile</div>
                <div class="breadcrumb-title pe-3">Admin Profile</div>
                

                <div class="ms-auto">

                </div>
            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <form action="{{route('update.password')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if(session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{session('status')}}
                                            </div>
                                        @elseif(session('error'))
                                            <div class="alert alert-success" role="alert">
                                                {{session('error')}}
                                            </div>
                                        @endif
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Old Password
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input 
                                                type="password"
                                                name = "old_password" class="form-control"
                                                @error('old_password') is-invalid @enderror
                                                id="current_password"
                                                placeholder="Old Password"/>
                                            @error('old_password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">New Password 
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input 
                                                type="password"
                                                name = "new_password" class="form-control"
                                                @error('new_password') is-invalid @enderror
                                                id="new_password"
                                                placeholder="New Password"/>
                                                @error('new_password')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Confirm New Password
                                                
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input 
                                                type="password"
                                                name = "new_password_confirmation" class="form-control"
                                                id="confirm_new_password"
                                                placeholder="Confirm New Password" 
                                                />
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-success px-4" value="Save Changes" />
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin.layouts.admin_master>

