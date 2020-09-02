<!doctype html>
<html lang="en">
@php

@endphp

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script>
    var BASE_URL = "{{ url('')}}/";
    
  </script>
  <title>EShop Admin Panel</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand  col-sm-3 col-md-2 mr-0" href="{{ url(' ')}}"><img src="{{ asset('img/tmpimg/logo.png')}}"
          class="bg-light rounded-circle h-25 w-25 creator-image" alt=""> Harokemet</a>
      <ul class="nav px-3">
        <li class="nav-item ">
          <a target="_blank" class="nav-link text-white" href="{{ url('')}}">Front site</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="{{ url('user/logout')}}">Logout</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <br>
        <br>
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="{{ url('cms/dashboard')}}">
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/menu')}}">
                <span data-feather="file"></span>
                Menu
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/content')}}">
                <span data-feather="file"></span>
                Content
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/categories')}}">
                <span data-feather="file"></span>
                Categories Edit
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/products')}}">
                <span data-feather="file"></span>
                Products Edit
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/orders')}}">
                <span data-feather="file"></span>
                Orders Managing
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cms/massage')}}">
                <span data-feather="file"></span>
                Client Massages
              </a>
            </li>
          </ul>

          <!-- 
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Saved reports
            </a>
          </li>
-->
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <main role="main" class=" main-min-h col-md-8 ml-sm-auto col-lg-10 px-4 ">
    @yield('welcome')
  </main>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
  <script src="{{asset('js/script.js')}}"></script>
  <script>
    $('#coarticle').summernote({
      height: 300
    });
    $('#coarticle1').summernote({
      height: 100
    });
    $('#coarticle2').summernote({
      height: 300
    });
    $('#coarticle3').summernote({
      height: 200
    });
  </script>
  @if( Session::has('sm'))
  <script>
    toastr.options.positionClass = 'toast-bottom-full-width';
   toastr.success("{{ Session::get('sm') }}");
  </script>
  @endif
</body>

</html>