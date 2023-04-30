<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="/assets/images/favIcon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

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
          <div class="container-fluid"><a class="navbar-brand" href="#"><img class="nav-log"
                src="/assets/images/Logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation"><span class="nav-line"></span><span class="nav-line"></span><span
                class="nav-line"></span></button>
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
          <li class="nav-item dropdown bootstrap-things profile-icon-box"><a class="nav-link dropdown-toggle" href="#"
              role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="profile-icon"
                src="/assets/images/mohammed.jpg" alt="profile icon"></a>
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
          <li class="nav-item dropdown bootstrap-things"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"><img src="/assets/images/notifications.png"
                alt="notifications"></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">
                  <div class="notification-row d-flex align-items-center"><img class="person-img"
                      src="/assets/images/notifiPhonto.jpg" alt="person img">
                    <div class="notification-info">
                      <p class="notification d-flex flex-wrap"><span>قام محمد ريان بإضافة منشور جديد إلى كتاب
                        </span><span>العودة إلى الذات</span></p>
                      <p class="notification-time">من 1 ساعة</p>
                    </div>
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="#">
                  <div class="notification-row d-flex align-items-center"><img class="person-img"
                      src="/assets/images/notifiPhonto.jpg" alt="person img">
                    <div class="notification-info">
                      <p class="notification d-flex flex-wrap"><span>قام محمد ريان بإضافة منشور جديد إلى كتاب
                        </span><span>العودة إلى الذات</span></p>
                      <p class="notification-time">من 1 ساعة</p>
                    </div>
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="#">
                  <div class="notification-row d-flex align-items-center"><img class="person-img"
                      src="/assets/images/notifiPhonto.jpg" alt="person img">
                    <div class="notification-info">
                      <p class="notification d-flex flex-wrap"><span>قام محمد ريان بإضافة منشور جديد إلى كتاب
                        </span><span>العودة إلى الذات</span></p>
                      <p class="notification-time">من 1 ساعة</p>
                    </div>
                  </div>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="page-background-section"> <img src="../../assets/images/technology.webp" alt="pagesBg">
      <h1 class="bg-section-title">اسم التصنيف</h1>
    </div>
    <main>
      <section class="global-section">
        <div class="container">
          <div class="global-section-layout">
            <button class="add-new-product-btn global-btn-box create-group-btn" type="button"
              id="openMrModal"><span>إنشاء كتاب</span>
              <svg>
                <use href="../assets/images/icons/icons.svg#plus"></use>
              </svg>
            </button>
            <div class="mr-modal-container" id="modalContainer">
              <div class="mr-modal-box">
                <div id="mrAddProduct">
                  <div class="mr-modal-header">
                    <button class="close-btn" type="button" id="closeModal">
                      <svg class="mr-modal-prev-svg">
                        <use href="../assets/images/icons/icons.svg#mrModalPrev"></use>
                      </svg>
                    </button>
                    <h2 class="myModal-title">إنشاء كتاب</h2>
                  </div>
                  <div class="mr-modal-lines-box">
                    <div class="modal-line"></div>
                    <div class="modal-line"></div>
                  </div>
                  <h3 class="modal-subtitle">بيانات الكتاب</h3>
                  <form class="product-details-box" id="form1" action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="inputs-box">
                      <input class="modal-input" type="text" id="name" name="name" placeholder="اسم الكتاب">
                    </div>
                    <textarea class="modal-input textarea" id="description" name="description" cols="30" rows="10"
                      placeholder="وصف الكتاب"></textarea>
                    <button class="mr-modal-btn" type="button" id="mrModalNext">التالي</button>
                  </form>
                </div>
                <div class="hide" id="mrProductImages">
                  <div class="mr-modal-header">
                    <button class="close-btn" type="button" id="prevModal">
                      <svg class="mr-modal-prev-svg">
                        <use href="../assets/images/icons/icons.svg#mrModalPrev"></use>
                      </svg>
                    </button>
                    <h2 class="myModal-title">إنشاء كتاب</h2>
                  </div>
                  <div class="mr-modal-lines-box">
                    <div class="modal-line"></div>
                    <div class="modal-line"></div>
                  </div>
                  <h3 class="modal-subtitle">صورة الكتاب</h3>
                  <form class="product-details-box" id="form2" action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="product-images-box" id="imagesBox">
                      <div class="upload-img-controls" id="uploadImgControls">
                        <label class="upload-label" for="uploadImg">
                          <svg>
                            <use href="../assets/images/icons/icons.svg#uploadCloud"></use>
                          </svg>
                          <p class="d-and-d">أسحب وأفلت صور المنتج هنا</p>
                          <p class="chose">تصفح الملفات</p>
                        </label>
                        <input class="choose-photograph-input" id="uploadImg" name="image" type="file" accept="image/*"
                          onchange="readURL(this)">
                      </div>
                      <img class="cover-view" src="" alt="No Img" id="img">
                    </div>
                    <button class="mr-modal-btn" type="submit" id="pushBook">إنشاء</button>
                  </form>
                </div>
              </div>
            </div>
            @foreach ($groups->sortByDesc('created_at') as $group)
            <div class="card mb-3 category-page-card">
              <div class="row g-0">
                <div class="col-md-4"><img class="img-fluid rounded-start" src="/images/{{$group->image}}"
                    alt="Book Image"></div>
                <div class="col-md-8">
                  <div class="card-body">
                    
                    <h5 class="card-title">{{$group->name}}</h5>
                    <p class="card-text">{{$group->description}}</p>
                    <p class="card-text"><small class="text-muted">{{$group->updated_at}}</small></p>
                  </div>
                  <div class="card-buttons-box d-flex"><a class="global-btn-box" href="/book-page/{{$group->id}}">تصفح
                      الكتاب</a>
                @if (!(Auth::check() && Auth::user()->groups->contains($group)))         
                  <form action="/group/{{$group->id}}/join" method="POST">
                    @csrf
                    <button class="global-btn-box swal-button" type="submit">انضمام</button>
                  </form>
                  @else
                  <form action="/group/{{$group->id}}/leave" method="POST">
                    @csrf
                    <button class="global-btn-box swal-button" type="submit">الغاء الانضمام</button>
                  </form>
                  @endif
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>
  </div>
  <div class="footer-box">
    <div class="container">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top">
        <div class="col mb-3"><a class="d-flex align-items-center mb-3 link-dark text-decoration-none" href="/"><img
              class="footer-logo" src="/assets/images/Logo.png" alt="Logo"></a></div>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../assets/js/categoryPage.js"> </script>
</body>
<script>
  document.getElementById("pushBook").addEventListener("click", function (event) {
    event.preventDefault();
    var form1Data = new FormData(document.getElementById("form1"));
    var form2Data = new FormData(document.getElementById("form2"));
    for (var pair of form2Data.entries()) {
      form1Data.append(pair[0], pair[1]);
    }
    fetch("/store", {
      method: "POST",
      body: form1Data,
    }).then(function (response) {
      // Handle response here
      location.reload();
    });
  });
</script>

</html>

