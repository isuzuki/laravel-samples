<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>pjax demo</title>

  <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>

  <script>
    $(function() {
      // pjax
      $(document).pjax('a', '#main');

      if ($.support.pjax) {
        $.pjax.defaults.timeout = 2000;
      }
    });
  </script>
</head>

<body>
  <div id="container">
    <nav>
      <a href="{{ route('pjax.index') }}">index</a>
      <a href="{{ route('pjax.about') }}">about</a>
      <a href="{{ route('pjax.hello') }}">hello</a>
    </nav>
    @yield('content')
  </div>
</body>

</html>
