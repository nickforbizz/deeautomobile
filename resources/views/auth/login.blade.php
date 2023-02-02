@extends('Web.layout.app')

@section('contents')

<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
                    <div class="row">
                        <div class="heading-content col-md-12">
                            <p><a href="index-2.html">Homepage</a> / <em> Login</em></p>
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="login wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
    
                <form method="POST" action="{{ route('login') }}" class="form" id="login_form">
                    @csrf
    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Your email..." value="{{old('email')}}" required autocomplete />
                    </div>
    
                    <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your password..." value="{{old('password')}}" required/>
                    </div>
    
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
    
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                        <button type="submit" class="btn btn-primary ml-4" id="login_submit">Login</button>
                    </div>
                </form>

            </div>

        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .about-login -->






@endsection

@push('scripts')

<script>

$(document).ready(function() {
    $("#login_submit").click(()=>{
        $("#login_form").submit()
    })

})
</script>



@endpush