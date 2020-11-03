<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FreeCodeIns</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white navbar-laravel">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                   <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATYAAACjCAMAAAA3vsLfAAAAclBMVEX///8AAAC5ubna2tp+fn5TU1P19fV7e3svLy/7+/vT09O0tLTx8fHi4uKFhYW+vr6kpKTFxcWrq6vq6uqVlZXNzc1ZWVlsbGybm5sZGRmOjo5GRkYgICBdXV09PT1ycnIODg5LS0s4ODgxMTELCwsoKCgZmbmiAAAHL0lEQVR4nO2daZvaIBDH65Vo1nin6qqr7vH9v2Ift7WbGY7AJAyBh9/b2AL/TWCYA379SiQiJhtV6+WwI5brapT5HpFryk1+Og4653jKN6XvsTlitryeu1fsh/N1OfM9xs4pcpeSPckL3+PslOGUQ7QH06HvsXbGi9OPE3N+8T3eTijY3rQn0/A/1ezKLdqDa+A2ydqHaA/Wvkfehldfqg0Gr77HTiY7+VNtMDgF+qHOWRdQkfPctwIUSr+iPQhwwzXyrdmDkW8VbNlqBnO7X/b5uBPy/eV+0zS19a2DHXOVn+O+qzqfqrNqd1c0dwxrfpPvDN5WzkYxX71Jm5y6atAF0q3BpHLbaDWRtXp122iXDCXd/2DYKBYfkoaDcYnIloMVT9MrSdOhLAvi5uDIZkGV4lp04mq7HS9Cx39zNv9baD4IB1wmdHvP24G90IEQdqcL3OmcuwdC2GLB3QN75rjPF/4+XHAf+m/04pftzUcnsOnbe+ebMLOxLP84QCqYQH2f3Q6ov0vnLVbjh1/vdAB/nyXqxsF5N9qB7HTnE9vo53tc1N85NL19uO5HO7CXzfUnCmzEr1pr+DPtt+cNLQiup2JkWX/WpjAU/em3DYL+xo5nYsHvfv95htcmtz1pBxrH2HFz4j6qtgKN4ZM+xxU2rBOKJFzxrny6cduXVsDtoGvP6k6Urf5SQQ8z88bYCjgE18bSXSJbzduBTEjHnWkBWvVd+3NlYZ7dz+MCPumvtxJNJ66bk6gGTB74pL+WGzSjWjknZ/NtWW7n2mzcd4ls9ZkfLrT9dVbCOZpofsyK1WLyP33kPFmsCoV4svhYPToGTZCd/D/pAdA/SFnyy4Noiz1e3IPM7JIFyOoKQ3OI3VtqDLQ/rDPzVCHibySh6Zn4K/CGw5zE/log0O1gGU3eNqbg53gx3Ag/AdJW4JEHL7MhMCxuZX+UYuBEwh59qzgOD6d9aIFMWg/PFXAUFiv+zDhb9RUsDzP4VaNZH9pD8cm2tqjDOsIps76a4rSFyGWzrCuCS2Lxr9HPheClilq2rcxq1fIOl4ZsvVm9yCbSmGVDO0czzFabiGXDISZDjAJi8comWl6GmGxBopVNTE4yxmBnHqts2oqs23SqywE32LtFKpuqdOG23xT/dknzYrNXiWf5/8cim2Qn/uAq7GUreXHlZ1NpfJyyCelUDw5SLWY4teSbps15lLLJspMXyhdoJmQbDhrzqGOUTZJOPtWGgEtJiYg+rBKjbOIn2uh+Ffeu+s80QtlE28OgckH8rrVWSISyfWEBjAJLgnn8pft1fLIJ0RPDeI2wGdOVBsUnGy6OMk6Ew25gXZpkdLLhmc1iSDh8oJndopMNL6MW6YM43U+zmMYmGy75sKpdxNOiulQjNtnQxG5ZgocKCNWLSWyyoeC7ZUIXjBprRI9MNjQ9Wdd7otdNOTFGJhuKH1gXypj++8hkQ84M6xMlkaNOWXIQmWxwaiMkUME9vbKGMDLZDL8xNegrVf0sLtmQp41QIovsPpXXLS7ZoAGh9WGogP4TVSJdXLJ1kBhtlswcl2zQ2UgqAoR+EJWDMy7ZYD45qVQGBrJUOeBxyQbNNtIpPvCFVRlucckGywVIVRZwelQVQMQlW3rbEGluI5FWUhLJbiORdgkk0p6URPKAkEj+NhLJu0sixRJIpMgViRQnJZGi8iRSDgiJlHFEIuW3kUjZlCRS7i6JlClOItUlkEhVMCRSzRWJVOFHItWTkkjVyyRSrTyJdDIDiXQOCIl06gyJdMYRiXSiFgk/57cpiVq2lqcFaohctjZnU+qIXTbySah6wpSN4dxdPaGcu8t9ynMDoZzyzHymeBOhnCnOfIJ9E6GcYM98X0ITodyXwHw7RxOh3M7BfBdME7A3/b0LhvnmoQaCuXmI+Z6rBoK554r5VrUGwrlVjfcOPz0B3eHHfGOkloBujGS+n1RHSPeTct+GqyGo23C5715WEtbdy+w3fasI66ZvD/fKSwntXnk8E/v5TIUsMI9rkxk4oUpZf+cS7LfzuDQZgks1fExvQgoYodSXGyF/j90/KHjX+219/EWY3bi3g2Iwp/cz2wMxjaiVw9IW0aveXwcl4CR0/Mi2IyzFSLV1vaonJEngtDN57JHlUffYPwmRXYo8ZfD1FpIcfLuqS79Ic5QnlvFmWypc/PfN1W2j3SL7s5NCxKaoQtOePcyWzFU5RPdd1bk5kFW7u6K5YwCGbh3ZsvDkdr/s83En5PvLXZdPHsxy8ERVdMBKz71sMsrmUbmm1/EDFfNz88Bccg5sXnuSidsFRk5B7ESlGOeWdk//XWwatFVVLrHOSewXmbyo0THXcD/QJ9KNolM4tr8MvLAuqedA3GsGDNneuGlADg8DCssKIRp5HJ9nndny6vRjPV+XrTJ9e0y5yU8W9VWmHE/5JsiNlA3ZqFovhx2xXFej8K2NRELDH+nZZYW+1SkwAAAAAElFTkSuQmCC"
                  style="height:20px; border-right:1px solid #333" class='pr-3' alt=""></div>
                   <div class='pl-3'> FreeCodeIns</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
