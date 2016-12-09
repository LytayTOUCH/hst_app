<!DOCTYPE html>
<html lang="{{ trans('translang.lang') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Hong Star Travel & Tours')</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>window.HongStar = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
</head>
<body>
  <div class="ui fluid container">
  @include('webpages.header')
  @include('webpages.brand_name')
  @yield('slide_box')
    <div class="ui one column grid">
      <div class="ui fifteen wide column centered">
        @yield('body')
      </div>
    </div>
  @include('webpages.footer')
  @include('webpages.forms.location_modal')
  </div>
  <!-- Scripts -->
  <script src="/js/all.js"></script>
</body>
</html>
