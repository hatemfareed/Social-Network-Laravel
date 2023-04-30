<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/assets/images/favIcon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Start NavBar-->
    <!-- End NavBar-->
    <!-- Start Book Cover Section -->
    <!-- End Book Cover Section -->
    <title>التصنيفات</title>
  </head>
  <body>
    <div class="home-page-layout"> 
      <!-- Start main section -->
          <div class="nav-bar-component">
            <div class="container">
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid"><a class="navbar-brand" href="#"><img class="nav-log" src="/assets/images/Logo.png" alt="Logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="nav-line"></span><span class="nav-line"></span><span class="nav-line"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-list">
                      <li class="nav-item"><a class="nav-link" href="/">الرئيسة</a></li>
                      <li class="nav-item"><a class="nav-link active" href="{{route('categories.index')}}">التصنيفات</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../about.html">من نحن</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../contactUs.html">تواصل معنا</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
              <ul class="navbar-nav mb-2 mb-lg-0 navbar-absolute">
                <li class="nav-item dropdown bootstrap-things profile-icon-box"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="profile-icon" src="/assets/images/mohammed.jpg" alt="profile icon"></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item log-link" href="../../profile.html"><span>الملف الشخصي </span>
                        <svg>
                          <use href="/assets/images/icons/icons.svg#profile"></use>
                        </svg></a></li>
                    <li><a class="dropdown-item log-link" href="#"><span>تسجيل الخروج </span>
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
      <main>
        <!-- Start Book Page Cover Section -->
            <section class="book-cover"> 
              <div class="container">
                <div class="cover-img-box"> <img class="book-cover-img" src="/images/{{$group->image}}" alt="book cover"></div>
              </div>
              <div class="container mr-container">
                <div class="book-name-box"> 
                  <h1 class="book-name">{{$group->name}}</h1>
                </div>
                <div class="book-pages-bar"> <a class="book-bar-links" href="/book-page/{{$group->id}}">حوار</a><a class="book-bar-links active" href="">الأعضاء</a><a class="book-bar-links" href="/book-about/{{$group->id}}">عن الكتاب</a></div>
              </div>
            </section>
        <!-- End Book Page Cover Section -->
        <!-- Start Member Section-->
        <section class="members-section"> 
          <div class="small-container"> 
            <div class="members-content">
              <div class="members-subtitle-box d-flex align-items-center justify-content-start"> 
                <h2 class="members-subtitle m-0">الأعضاء</h2>
                <p class="members-title-dot m-0"> </p>
                <p class="members-number m-0">{{$number_of_users}}</p>
              </div>
              <div class="border-member">
                <div class="member-box b-member">
                  <div class="member-img-box"> <a href="/profile/{{Auth::user()->id}}"><img src="../assets/images/mohammed.jpg" alt="member image"></a></div>
                  <div class="member-info"> <a class="member-link" href="/profile/{{Auth::user()->id}}">
                      <p>{{Auth::user()->name}}</p></a></div>
                  <ul class="post-action-menu">
                    <li class="nav-item dropdown bootstrap-things"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="post-dot"></p>
                        <p class="post-dot"></p>
                        <p class="post-dot"></p></a>
                      <ul class="dropdown-menu">
                        <li>
                          @if(Auth::user()->groups->contains($group))
                          <form action="/group/{{$group->id}}/leave" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">غادر المجموعة</button>
                        </form>
                        @else
                        <form action="/group/{{$group->id}}/join" method="POST">
                          @csrf
                          <button class="dropdown-item" type="submit">انضم للمجموعة</button>
                      </form>
                      @endif
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="members-subtitle-box d-flex align-items-center justify-content-start m-0 mt-3">
                  <h2 class="members-subtitle m-0">المشرفون</h2>
                  <p class="members-title-dot m-0"> </p>
                  <p class="members-number m-0">{{count($admins_name)}}</p>
                </div>
                @foreach($admins_name as $admin_name)
                <div class="member-box pb-0">
                  <div class="member-img-box"> <a href="/profile/{{$admin_name->id}}"><img src="../assets/images/profilePhoto.webp" alt="member image"></a></div>
                  <div class="member-info"> <a class="member-link" href="/profile/{{$admin_name->id}}">
                      <p>{{$admin_name->name}}</p></a></div>
                  <div class="visit-member-profile"> <a href="/profile/{{$admin_name->id}}"><img src="../assets/images/seeProfile.png" alt="see profile"></a></div>
                </div>
                @endforeach
              </div>
              @foreach($members_name as $member)
              <div class="member-box">
                <div class="member-img-box"><a href="/profile/{{$member->id}}"><img src="../assets/images/profileImg.png" alt="member image"></a></div>
                <div class="member-info"> <a class="member-link" href="/profile/{{$member->id}}">
                    <p>{{$member->name}}</p></a></div>
                <div class="visit-member-profile"> <a href="/profile/{{$member->id}}"><img src="../assets/images/seeProfile.png" alt="see profile"></a></div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <!-- End Member Section -->
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>