@php $title = $title ?? __('Login To Continue'); @endphp
<div class="login-form">
    <p>{{$title}}</p>

    <div class="login-form">
        <form action="{{route('user.login')}}" method="post" enctype="multipart/form-data" class="account-form" id="login_form_order_page">
            @csrf
            <div class="error-wrap"></div>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="{{__('Username')}}">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="{{__('Password')}}">
            </div>
            <div class="form-group btn-wrapper">
                <button type="submit" id="login_btn" class="submit-btn">{{__('Login')}}</button>
            </div>
            <div class="row mb-4 rmber-area">
                <div class="col-6">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">{{__('Stay Signed in')}}</label>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <a class="d-block" href="{{route('user.register')}}">{{__('Create New account?')}}</a>
                    <a href="{{route('user.forget.password')}}">{{__('Forgot Password?')}}</a>
                </div>
            </div>
        </form>
    </div>
</div>