<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favIcon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <!-- Start NavBar-->
    <!-- End NavBar-->
    <!-- Start Book Cover Section -->
    <!-- End Book Cover Section -->
    <title>الصفحة الرئيسة</title>
  </head>
  <body>
    <div class="home-page-layout"> 
          <div class="nav-bar-component">
            <div class="container">
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid"><a class="navbar-brand" href="#"><img class="nav-log" src="/assets/images/Logo.png" alt="Logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="nav-line"></span><span class="nav-line"></span><span class="nav-line"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-list">
                      <li class="nav-item"><a class="nav-link" href="/">الرئيسة</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">التصنيفات</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../about.html">من نحن</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../contactUs.html">تواصل معنا</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
              <ul class="navbar-nav mb-2 mb-lg-0 navbar-absolute">
                <li class="nav-item dropdown bootstrap-things profile-icon-box">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if ($profile->image != null)
                    <img class="profile-icon" src="/profile-images/{{$profile->image}}" alt="profile icon">
                    @else
                    <img class="profile-icon" src="../assets/images/profileImg.png" alt="profile icon">
                    @endif
                    </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item log-link" href="{{ route('profile') }}"><span>الملف الشخصي </span>
                        <svg>
                          <use href="{{asset('assets/images/icons/icons.svg#profile')}}"></use>
                        </svg></a></li>
                    <li><a class="dropdown-item log-link" href="{{ route('logout') }}"><span>تسجيل الخروج </span>
                        <svg>
                          <use href="/assets/images/icons/icons.svg#logout"></use>
                        </svg></a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown bootstrap-things"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/assets/images/notifications.png" alt="notifications"></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">
                        <div class="notification-row d-flex align-items-center"><img class="person-img" src="/assets/images/notifiPhonto.jpg" alt="person img">
                          <div class="notification-info"> 
                            <p class="notification d-flex flex-wrap"><span>قام محمد ريان بإضافة منشور جديد إلى كتاب </span><span>العودة إلى الذات</span></p>
                            <p class="notification-time">من 1 ساعة</p>
                          </div>
                        </div></a></li>
                    <li><a class="dropdown-item" href="#">
                        <div class="notification-row d-flex align-items-center"><img class="person-img" src="/assets/images/notifiPhonto.jpg" alt="person img">
                          <div class="notification-info"> 
                            <p class="notification d-flex flex-wrap"><span>قام محمد ريان بإضافة منشور جديد إلى كتاب </span><span>العودة إلى الذات</span></p>
                            <p class="notification-time">من 1 ساعة</p>
                          </div>
                        </div></a></li>
                    <li><a class="dropdown-item" href="#">
                        <div class="notification-row d-flex align-items-center"><img class="person-img" src="/assets/images/notifiPhonto.jpg" alt="person img">
                          <div class="notification-info"> 
                            <p class="notification d-flex flex-wrap"><span>قام محمد ريان بإضافة منشور جديد إلى كتاب </span><span>العودة إلى الذات</span></p>
                            <p class="notification-time">من 1 ساعة</p>
                          </div>
                        </div></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
      <main class="profile top-padding">
        <section class="profile-main-section"> 
          <div class="container-fluid">
            <div class="profile-cover-box">
              <div class="layout"></div><img class="profile-cover-img" src="../assets/images/heroBG.jpg" alt="Profile Cover Img">
              <button class="change-cover" type="button">
                <svg> 
                  <use href="{{asset('assets/images/icons/icons.svg#Camera')}}"></use>
                </svg><span>تعديل صورة الغلاف</span>
              </button>
            </div>
          </div>
          <div class="profile-top-section-content">
            <div class="container">
              <div class="profile-info-box">
                
                <form action="/store/{{$profile->id}}" method = 'POST' enctype="multipart/form-data" >
                  @csrf
                <div class="profile-photo-box">
                  @if ($profile->image != null)
                   <img src="/profile-images/{{$profile->image}}" alt="Profile Photo">
                  @else
                  <img src="../assets/images/profileImg.png" alt="Profile Photo">
                  @endif
                  <label class="change-profile-photo" for="profilePhoto"> 
                    <input id="profilePhoto" name='profilePhoto' type="file" accept="image/*" onchange="this.form.submit();">
                    <svg> 
                      <use href="{{asset('assets/images/icons/icons.svg#Camera')}}"></use>
                    </svg>
                  </label>
                </div>
              </form>
                
                @yield('profile-info-active')
                
              </div>
            </div>
          </div>
        </section>

        @yield('content')

      </main>
    </div>
    <div class="footer-box">
      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top">
          <div class="col mb-3"><a class="d-flex align-items-center mb-3 link-dark text-decoration-none" href="/"><img class="footer-logo" src="/assets/images/Logo.png" alt="Logo"></a></div>
          <div class="col mb-3"></div>
          <div class="col mb-3">
            <h5>الرئيسة</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a class="nav-link p-0" href="../../about.html">من نحن</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0" href="../../contactUs.html">تواصل معنا</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0" href="#">الأسئلة الشائعة</a></li>
            </ul>
          </div>
          <div class="col mb-3">
            <h5>كتابي</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a class="nav-link p-0" href="#">سياسة الخصوصية</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0" href="#">سياسة الاستخدام</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0" href="#">الشروط و الأحكام</a></li>
            </ul>
          </div>
          <div class="col mb-3">
            <h5>الأقسام</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a class="nav-link p-0" href="/categories.html">التصنيفات</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0" href="#">كتبي</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0" href="#">الكتب المنضم لها</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 30,
      
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      keyboard: true,
      breakpoints: {
        640: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      },
      });
    </script>
  </body>
</html> 