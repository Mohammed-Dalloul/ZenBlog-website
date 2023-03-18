<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('frontsite.index')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('frontsite.index')}}">Blog</a></li>
                <li><a href="{{route('frontsite.single-post')}}">Single Post</a></li>
                <li class="dropdown"><a href="{{asset('frontsite.category')}}"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{route('frontsite.search-result')}}">Search Result</a></li>
                        <li><a href="#">Business - أعمال</a></li>
                        <li><a href="#">Culture - ثقافة</a></li>
                        <li><a href="#">Sport - رياضة</a></li>
                        <li><a href="#">Food - غذاء</a></li>

                        <li class="dropdown"><a href="#"><span>المزيد من الفئات</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Politics - سياسة</a></li>
                                <li><a href="#">Celebrity - نجاح كبير</a></li>
                                <li><a href="#">Startups - الشركات الناشئة</a></li>
                                <li><a href="#">Travel - سفر</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="{{route('frontsite.about')}}">About</a></li>
                <li><a href="{{route('frontsite.contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative" style="display: flex;!important; margin-right: -350px;">
            <a href="https://www.facebook.com/" class="mx-2" target="_blank"><span class="bi-facebook" style="margin-right: 10px;"></span></a>
            <a href="https://www.twitter.com/" class="mx-2" target="_blank"><span class="bi-twitter" style="margin-right: 10px;"></span></a>
            <a href="https://www.instagram.com/" class="mx-2" target="_blank"><span class="bi-instagram" style="margin-right: 10px;"></span></a>

            <a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="margin-right: 10px;"><i
                    class="bi"></i>logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.blade.php" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header><!-- End Header -->
