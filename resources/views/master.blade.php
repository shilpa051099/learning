
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>xclusive_cars</title>

  <!-- Font Awesome -->
  <link href="{{asset('assets/css/all.css')}}" rel="stylesheet" />
  <!-- bootstrap css -->
  <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
  <!-- Slick slider -->
  <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet" />
  <!-- Style CSS -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
</head>

<body>
{{ View::make('header') }}
    <div id="content">
        @yield('content')
    </div>

  </div>
 {{ View::make('footer') }}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/slick.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>