<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fashionably Late</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
  @yield('css')
</head>

<body>
  
  @yield('header')

  <main>
  @yield('content')
  </main>
</body>

</html>
