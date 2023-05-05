<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/assets/images/favIcon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Start NavBar-->
    <!-- End NavBar-->
    <!-- Start Book Cover Section -->
    <!-- End Book Cover Section -->
    <title>الصفحة الرئيسة</title>
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
                      <li class="nav-item"><a class="nav-link active" href="/">الرئيسة</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">التصنيفات</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../about.html">من نحن</a></li>
                      <li class="nav-item"><a class="nav-link" href="../../contactUs.html">تواصل معنا</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
              <ul class="navbar-nav mb-2 mb-lg-0 navbar-absolute">
                <li class="nav-item dropdown bootstrap-things profile-icon-box"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="profile-icon" src="/profile-images/{{$profile->image}}" alt="profile icon"></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item log-link" href="profile/{{Auth::user()->id}}"><span>الملف الشخصي </span>
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
        <section class="hero-section"> 
          <div class="hero-text-container"> 
            <h1 class="hero-title">ابدأ الأن بمناقشة الكتب المهُتم بها</h1>
            <h2 class="hero-subtitle">أسلوب جديد لمناقشة الكتب بالعربية</h2>
            <div class="hero-btn-box"><a href="../Sign-up.html">ابدأ الأن</a></div>
          </div>
              <div class="overlay"></div>
          <video class="hero-bg" loop muted autoplay>
            <source src="../assets/videos/heroVideo.mp4" type="video/mp4">
          </video>
        </section>
        <section class="modern-categories-section"> 
          <div class="container">
                <div class="section-title"> 
                  <h2>التصنيفات و أحدث الكتب</h2>
                </div>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-physics-tab" data-bs-toggle="tab" data-bs-target="#nav-physics" type="button" role="tab" aria-controls="nav-home" aria-selected="true">الفيزياء</button>
                <button class="nav-link" id="references-tab" data-bs-toggle="tab" data-bs-target="#nav-references" type="button" role="tab" aria-controls="nav-psychology" aria-selected="false">المراجع و الأبحاث</button>
                <button class="nav-link" id="psychology-tab" data-bs-toggle="tab" data-bs-target="#nav-psychology" type="button" role="tab" aria-controls="nav-psychology" aria-selected="false">علم النفس وتطوير الذات</button>
                <button class="nav-link" id="nav-politics-tab" data-bs-toggle="tab" data-bs-target="#nav-politics" type="button" role="tab" aria-controls="nav-politics" aria-selected="false">السياسة</button>
                <button class="nav-link" id="literature-tab" data-bs-toggle="tab" data-bs-target="#nav-literature" type="button" role="tab" aria-controls="nav-literature" aria-selected="false">الأدب</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-physics" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="panel-grid">
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/physics1.webp" alt="physics"></div>
                      <div class="card-body">
                        <h5 class="card-title">البحث عن قطة شرودنجر</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/physics2.jpg" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">تاريخ موجز للزمن</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/physics3.jpg" alt="art"></div>
                      <div class="card-body">
                        <h5 class="card-title">أينشتاين أفكار و آراء</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/physics4.jpg" alt="adab"></div>
                      <div class="card-body">
                        <h5 class="card-title">النظرية النسبية</h5>
                      </div></a></div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-politics" role="tabpanel" aria-labelledby="nav-politics-tab" tabindex="0">
                <div class="panel-grid">
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/politics1.jpg" alt="physics"></div>
                      <div class="card-body">
                        <h5 class="card-title">مونتسكيو السياسة و التاريخ</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/politics2.jpg" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">حول العرب و العروبة</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/politics3.png" alt="art"></div>
                      <div class="card-body">
                        <h5 class="card-title">السياسة الخارجية الروسية في أسيا الوسطى و القوقاز</h5>
                      </div></a></div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-literature" role="tabpanel" aria-labelledby="nav-literature-tab" tabindex="0">
                <div class="panel-grid">
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/literature1.webp" alt="adab"></div>
                      <div class="card-body">
                        <h5 class="card-title">الخيميائي</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/literature2.webp" alt="art"></div>
                      <div class="card-body">
                        <h5 class="card-title">عبقرية عمر</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/literature3.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">وحي القلم</h5>
                      </div></a></div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-psychology" role="tabpanel" aria-labelledby="nav-psychology-tab" tabindex="0">
                <div class="panel-grid">
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/psychology1.webp" alt="adab"></div>
                      <div class="card-body">
                        <h5 class="card-title">كيفما فكرت فكر العكس</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/psychology2.webp" alt="art"></div>
                      <div class="card-body">
                        <h5 class="card-title">كن أنتَ</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/psychology3.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">كيف أُنظم حياتي</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/psychology4.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">نظرية الفستق</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/psychology5.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">كيف أتخلص من التوتر</h5>
                      </div></a></div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab" tabindex="0">
                <div class="panel-grid">
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references1.webp" alt="adab"></div>
                      <div class="card-body">
                        <h5 class="card-title">في الشعر الجاهلي</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references2.webp" alt="art"></div>
                      <div class="card-body">
                        <h5 class="card-title">اليهود الموسوعة الحرة</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references3.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">نجد و الحجاز في الوثائق العثمانية</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references4.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">موسوعة مصر القديمة</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references5.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">الأمثال العامية</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references6.webp" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">الكليات في الطب</h5>
                      </div></a></div>
                  <div class="col"><a class="card customized-card" href="../book-page.html">
                      <div class="card-img-box"><img class="card-img-top" src="/assets/images/references7.jpg" alt="sport"></div>
                      <div class="card-body">
                        <h5 class="card-title">أهم الاختراعات و الاكتشافات</h5>
                      </div></a></div>
                </div>
              </div>
              <div class="hero-btn-box"><a href="../categories.html">اكتشف المزيد</a></div>
            </div>
          </div>
        </section>
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
    <script src="../assets/js/home.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>