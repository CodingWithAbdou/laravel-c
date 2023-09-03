
<!doctype html>
<html {{ App::currentLocale() == 'ar' ? 'lang=ar dir=rtl':  'lang=en dir=en '}}>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>{{ __('Page Signup') }}</title>


    @vite('./resources/sass/app.scss')
    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">{{__('Welcome Bloge Page')}}</h1>
      <label for="inputEmail" class="sr-only">{{__('Email address')}}</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="{{__('Email address')}}" required autofocus>
      <label for="inputPassword" class="sr-only">{{__('password')}}</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="{{__('password')}}" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me">{{__('Remember me')}}
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">{{__('Sign in')}}</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
