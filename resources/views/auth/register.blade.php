<x-frontend.layouts.master_dashboard>
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                    <input type="text" id="frm-reg-lname" name="name" placeholder="Last name*">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                </fieldset>                                
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input type="password" id="frm-reg-pass" name="password" placeholder="Password">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">Confirm Password *</label>
                                    <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="confirm password">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Register" name="register">
                            </form>
                        </div>											
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->
</x-frontend.layouts.master_dashboard>