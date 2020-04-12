<!DOCTYPE html>
<html lang="en">
<head>
<title>
 {{getsetting()}}
    |
    @yield('title')

</title>
    @yield('header')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::Style('website/css/bootstrap.min.css') !!}
    {!! Html::Style('website/css/flexslider.css') !!}
    {!! Html::Style('website/css/style.css') !!}
    {!! Html::Style('website/css/font-awesome.min.css') !!}
    {!! Html::Script('website/js/jquery.min.js') !!}

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

</head>
<body id="app-layout" style="direction: rtl">



<div class="header">

    <div class="container"> <a class="navbar-brand" style="text-transform: uppercase;" href="{{  url('/')  }}"><i class="fa fa-paper-plane"></i> {{ Auth::user()->name }} </a>
        <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="{{Request::root()}}website/images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li class="current"><a href="{{  url('/')  }}">الرئيسيه</a></li>

                <li><a href="public/website/about.html">من نحن</a></li>
                <li><a href="public/website/services.html">خدماتنا</a></li>
                <li><a href="public/website/contact.html">اتصل بنا </a></li>
                <li class="current"><a href="{{  url('/showallbulding')  }}">كل العقارات</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">تسجيل الدخول </a></li>
                    <li><a href="{{ url('/register') }}">تسجيل عضويه جديده </a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('تسجيل الخروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
                <div class="clear"></div>
            </ul>


        </div>
    </div>
</div>




@yield('content')

<div class="footer">
    <div class="footer_bottom">
        <div class="follow-us"> <a class="fa fa-facebook social-icon" href="{{getsetting('facebook')}}"></a>
            <a class="fa fa-twitter social-icon" href="{{getsetting('twetar')}}"></a>
            <a class="fa fa-linkedin social-icon" href="{{getsetting('linkedIn')}}"></a>
            <a class="fa fa-youtube social-icon" href="{{getsetting('youtube')}}"></a> </div>
        <div class="copy">
            <p>Copyright &copy; 2015 Company Name. Design by <a href="https://www.facebook.com/ibrahim2apdoo" rel="nofollow">Apdoo</a></p>
        </div>
    </div>
</div>
{!! Html::script('website/js/responsive-nav.js') !!}
{!! Html::script('website/js/bootstrap.min.js') !!}
{!! Html::script('website/js/jquery.flexslider.js') !!}
@yield('footer')
</body>
</html>
