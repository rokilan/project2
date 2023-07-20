<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-darkblue text-white">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-orange">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        
        <span class="fs-4">ЮФЛ</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/about">Страница про нас</a>
      </nav>
    </div> 
    <div class="container">
    @yield('main_content')
    
  </div>
</footer>
    </div>
<style>
  body { background: url(https://st.joinsport.io/content/page/image/2022/07/62cc20913c6bb_1920.jpg);}
</style>

</body>
</html>