<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="theme-color" content="#6777ef"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? "Dashboard" }}</title>
  <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.4.3.1.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">

  <link rel="stylesheet" href="{{ asset('css') }}/style.css">

  @stack('css')
</head>
<body>
  <div id="app">
    <div class="main-wrapper container">
      @include('layouts.navbar')
      @yield('content')
      @include('layouts.footer')
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{ asset('js') }}/stisla.js"></script>

 <script type="text/javascript">
  async function transAjax(data) {
          html = null;
          data.headers = {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
          await $.ajax(data).done(function(res) {
              html = res;
          })
              .fail(function() {
                  return false;
              })
          return html
      }

    function logOut()
    {
      window.location.href = "{{ url('/destroy') }}"
    }
    </script>
  @stack('js')
</body>
</html>
