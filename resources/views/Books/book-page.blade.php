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
                    <li><a class="dropdown-item log-link" href="/profile/{{Auth::user()->id}}"><span>الملف الشخصي </span>
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
                
                <div class="book-pages-bar"> <a class="book-bar-links active" href="#">حوار</a><a class="book-bar-links" href="/book-member/{{$group->id}}">الأعضاء</a><a class="book-bar-links" href="/book-about/{{$group->id}}">عن الكتاب</a></div>
              
              </div>
            </section>
        <!-- End Book Page Cover Section -->
        <!-- Start Book Posts Section -->
        <section class="posts-section">
          <div class="container"> 
            <div class="small-container">
{{----}}
              @if (Auth::check() && Auth::user()->groups->contains($group))
                <div class="create-post-box post-box">
                  <div class="write-post-layout d-grid">
                    <div class="post-writer-img-box"><a class="d-flex justify-content-between align-items-center" href="/profile/{{Auth::user()->id}}"><img class="post-writer-img" src="../assets/images/mohammed.jpg" alt="post writer img"></a></div>
                    <div class="write-post-text-area start-post" id="openMrModal"><span>أكتب منشور ...</span></div>
                  </div>
                  <div class="post-photo-box d-flex justify-content-center align-items-center start-post"><img src="../assets/images/postPhoto.png" alt="Post Photo"><span>صورة</span><span>/</span><span>فيديو</span></div>
                </div>  
              @else
                <div class="create-post-box post-box">
                  <form action="/group/{{$group->id}}/join" method="POST">
                    @csrf
                  انضمام للمجموعة لكتابة منشور
                  
                  <button type="submit" class="btn btn-primary">انضمام</button>
                </form>
                </div> 
              @endif
{{----}}
              <div class="mr-modal-container" id="modalContainer">
                <form class="mr-modal-box" method="POST" action="/post/{{$group->id}}">
                  @csrf
                  <div id="mrAddProduct">
                    <div class="mr-modal-header"> 
                      <button class="close-btn" type="button" id="closeModal">
                        <svg class="mr-modal-prev-svg"> 
                          <use href="../assets/images/icons/icons.svg#close"></use>
                        </svg>
                      </button>
                      <h2 class="myModal-title">أكتب منشور</h2>
                    </div>
                    <div class="product-details-box">
                      <div class="write-post-modal d-flex">
                         <div class="post-writer-img-box"><a class="d-flex justify-content-between align-items-center" href="/profile/{{Auth::user()->id}}"><img class="post-writer-img" src="../assets/images/mohammed.jpg" alt="post writer img"></a></div><a class="post-writer-name" href="/profile/{{Auth::user()->id}}">{{Auth::user()->name}}</a> {{--////////// --}}
                      </div>
                      <div class="post-content"> 
                        <textarea class="modal-input textarea" name="content" cols="30" rows="10" placeholder="وصف الكتاب"></textarea>
                        <div id="imagesBox"></div>
                      </div>
                      <div class="push-post-box">
                        <div class="post-photo-box d-flex justify-content-center align-items-center start-post">
                          <label class="post-img-label" for="uploadImg">
                            <input class="choose-photograph-input" id="uploadImg" type="file" accept="image/*" onchange="readURL(this)"><img src="../assets/images/postPhoto.png" alt="Post Photo"><span>صورة</span><span>/</span><span>فيديو</span>
                          </label>
                        </div>
                        <button class="mr-modal-btn" type="submit" id="postBtn">أنشر</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              @foreach ($posts->sortByDesc('created_at') as $post)
              <div class="post-box"> 
                @foreach ($users as $user) {{-- ////// --}}
                @if ($post->user_id == $user->id)
                <div class="post-info d-flex justify-content-between align-items-center">
                  <div class="post-writer-info d-flex">
                    <div class="post-writer-img-box"><a class="d-flex justify-content-between align-items-center" href="/profile/{{$user->id}}"><img class="post-writer-img" src="../assets/images/profilePhoto.webp" alt="post writer img"></a></div>
                    
                    <div class="post-writer-name-and-date d-flex flex-column"><a class="post-writer-name" href="/profile/{{$user->id}}">{{$user->name}}</a>
                      <div class="post-date"> <span class="day">13</span><span class="month">أذار</span>-<span class="clock">8:56</span><span class="am-pm">م</span></div>
                    </div>
                  </div>
                  
                  <ul class="post-action-menu">
                    <li class="nav-item dropdown bootstrap-things"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="post-dot"></p>
                        <p class="post-dot"></p>
                        <p class="post-dot"></p></a>
                      @if(Auth::user()->id == $post->user_id)
                        <ul class="dropdown-menu">
                          <li>
                            <button class="dropdown-item" type="button">تعديل</button>        {{--   عدلها لما اضغط عليها تنقلي ل فورم التعديل  --}}
                          </li>
                          <form action="/post/{{$post->id}}" method="POSt">
                            @csrf
                            @method('DELETE')
                          <li>
                            <button class="dropdown-item" type="submit">حذف</button>
                          </li>
                          </form>
                        </ul>
                        @else
                        <ul class="dropdown-menu">
                          <li>
                            <button class="dropdown-item" type="button">إبلاغ</button>
                          </li>
                        </ul>
                      @endif
                    </li>
                  </ul>
                  
                </div>
                @endif
              @endforeach
                <div class="post-body"> 
                  <div class="post-text-box"> 
                    <p class="post-text">{{$post->content}}</p>
                  </div>
                </div>
              <form id="like-form" action="/post/{{$post->id}}/like" method="POST">
                <div class="post-reactions-box"> 
                  <div class="reaction-container d-flex align-items-center">
                    @csrf
                    <button class="reaction-box like-reaction-btn" id="like-btn">
                      <div class="like-reaction"></div>
                      <p class="reaction-type">أعجبني</p>
                      <span class="like-count">
                        {{ $post->likes->count() }}
                      </span>
                    </button>
                    <button class="reaction-box"> 
                      <div class="comment-reaction"></div>
                      <p class="reaction-type">تعليق</p>
                    </button>
                  </div>
                </div>
              </form>
                <div class="comments-box"> 
                  
                  <div class="write-comment d-grid">
                    <div class="comment-writer-img"> <a class="d-flex justify-content-between align-items-center" href="/profile/{{Auth::user()->id}}"><img src="../assets/images/mohammed.jpg" alt="comment writer"></a></div>
                    @if (Auth::user()->groups->contains($group))
                      <form class="write-comment-inputs-box" action="/comments/{{$post->id}}" method="POST" onsubmit="submitForm()"> 
                        @csrf 
                        <input type="text" class="input-comment-text" name="content" placeholder="أكتب تعليق ..." autofocus>
                        <label class="input-file-label" for="commentFile">
                          <svg> 
                            <use href="../assets/images/icons/icons.svg#Camera"></use>
                          </svg>
                          <input class="input-comment-file" id="commentFile" type="file" name="file">
                        </label>
                        <input type="submit" style="display:none;">
                      </form>
                    @else
                    <form class="write-comment-inputs-box" action ="#"> 
                      @csrf 
                      <input type="text" class="input-comment-text" name="content" placeholder="أكتب تعليق ..." autofocus>
                      <label class="input-file-label" for="commentFile">
                        <svg> 
                          <use href="../assets/images/icons/icons.svg#Camera"></use>
                        </svg>
                        <input class="input-comment-file" id="commentFile" type="file" name="file">
                      </label>
                      <input type="button" style="display:none;">
                    </form>
                    @endif
                  </div>
                  @foreach ($post->comments as $comment)
                  <div class="comment-body"> 
                    <div class="posted-comment d-flex">
                      <div class="comment-writer-img"> <a class="d-flex justify-content-between align-items-center" href="/profile/{{$comment->user_id}}"><img src="../assets/images/profilePhoto.webp" alt="comment writer"></a></div>
                      <div class="posted-comment-text-box d-flex flex-column"> <a class="comment-writer-name" href="/profile/{{$comment->user_id}}">{{$comment->user->name}}</a>
                        <p class="comment-text">{{$comment->content}}</p>
                      </div>
                      <ul class="post-action-menu">
                        <li class="nav-item dropdown bootstrap-things"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="post-dot"></p>
                            <p class="post-dot"></p>
                            <p class="post-dot"></p></a>
                            @if(Auth::user()->id == $comment->user_id)
                          <ul class="dropdown-menu">
                            <li>
                              <button class="dropdown-item" type="button">تعديل</button>
                            </li>
                            <form action="/comments/{{$post->id}}/{{$comment->id}}" method='POST'>
                              @csrf
                              @method('DELETE')
                              <li>
                                <button class="dropdown-item" type="submit">حذف</button>
                              </li>
                          </form>
                          </ul>
                          @else
                          <ul class="dropdown-menu">
                            <li>
                              <button class="dropdown-item" type="button">إبلاغ</button>
                            </li>
                          </ul>
                          @endif
                        </li>
                      </ul>
                      
                    </div>
                    <div class="comment-reactions-box"> 
                      <button class="reaction-box like-reaction-btn">
                        <p class="reaction-type">أعجبني</p>
                      </button>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <!-- End Book Posts Section -->
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
  
  </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src= "{{ asset('assets/js/book.js') }}"></script>

  <script>
    function submitForm() {
      // Your form submission logic here
    }
  
    // Trigger submit button click when enter key is pressed in input field
    const inputField = document.querySelector('.input-comment-text');
    inputField.addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {
        event.preventDefault(); // prevent form submission
        document.querySelector('input[type="submit"]').click();
      }
    });
  </script>

</html>