@extends('Books.layouts')

@section('book-bar')
<div class="book-pages-bar"> <a class="book-bar-links active" href="#">حوار</a>
  <a class="book-bar-links" href="/book-member/{{$group->id}}">الأعضاء</a>
  <a class="book-bar-links" href="/book-about/{{$group->id}}">عن الكتاب</a>
</div>
@endsection

@section('content')
<section class="posts-section">
  <div class="container"> 
    <div class="small-container">
{{----}}
      @if (Auth::check() && Auth::user()->groups->contains($group))
        <div class="create-post-box post-box">
          <div class="write-post-layout d-grid">
            <div class="post-writer-img-box">
              <a class="d-flex justify-content-between align-items-center" href="/profile/{{Auth::user()->id}}">
              @if ($profile->image != null)
              <img class="post-writer-img" src="/profile-images/{{$profile->image}}" alt="post writer img">
              @else
              <img class="post-writer-img" src="../assets/images/profilePhoto.webp" alt="post writer img">
              @endif
            </a>
          </div>
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
                 <div class="post-writer-img-box"><a class="d-flex justify-content-between align-items-center" href="/profile/{{Auth::user()->id}}">
                  @if ($profile->image != null)
                  <img class="post-writer-img" src="/profile-images/{{$profile->image}}" alt="post writer img">
                  @else
                  <img class="post-writer-img" src="../assets/images/profileImg.png" alt="post writer img">
                  @endif
                </a></div><a class="post-writer-name" href="/profile/{{Auth::user()->id}}">{{Auth::user()->name}}</a> {{--////////// --}}
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
            <div class="comment-writer-img"> 
              <a class="d-flex justify-content-between align-items-center" href="/profile/{{Auth::user()->id}}">
                @if ($profile->image != null)
              <img src="/profile-images/{{$profile->image}}" alt="comment writer">
              @else
              <img src="../assets/images/profileImg.png" alt="comment writer">
              @endif
            </a>
          </div>
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
@endsection