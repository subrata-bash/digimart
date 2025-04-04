<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ __('Admin Login') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/admin/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">{{ __('Admin Login') }}</h2>
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label class="form-label">{{ __('Email address') }}</label>
                <input type="email" class="form-control" placeholder="{{ __('your@email.com') }}" autocomplete="off" name="email" value="{{ old('email') }}">
                <x-input-error :message="$errors->first('email')" class="mt-2" />
              </div>
              <div class="mb-2">
                <label class="form-label">
                  {{ __('Password') }}
                  <span class="form-label-description">
                    <a href="{{ route('admin.password.request') }}">{{ __('I forgot password') }}</a>
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control"  placeholder="{{ __('Your password') }}"  autocomplete="off" name="password">
                </div>
                <x-input-error :message="$errors->first('password')" class="mt-2" />
              </div>
              <div class="mb-2">
                <label class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember" />
                  <span class="form-check-label">{{ __('Remember me on this device') }}</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">{{ __('Sign in') }}</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/admin/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/demo.min.js') }}" defer></script>
  </body>
</html>