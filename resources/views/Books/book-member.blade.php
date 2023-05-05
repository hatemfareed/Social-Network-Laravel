@extends('Books.layouts')

@section('book-bar')
<div class="book-pages-bar"> <a class="book-bar-links" href="/book-page/{{$group->id}}">حوار</a>
  <a class="book-bar-links active" href="">الأعضاء</a>
  <a class="book-bar-links" href="/book-about/{{$group->id}}">عن الكتاب</a>
</div>

@endsection

@section('content')
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
          <div class="member-img-box"> <a href="/profile/{{Auth::user()->id}}"><img src="/profile-images/{{$profile->image}}" alt="member image"></a></div>
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
          <div class="member-img-box"> <a href="/profile/{{$admin_name->id}}">
            @foreach($profiles as $profile)
            @if($profile->user_id == $admin_name->id)
            <img src="/profile-images/{{$profile->image}}" alt="member image">
            
            @endif
            @endforeach
          </a></div>
          
          <div class="member-info"> <a class="member-link" href="/profile/{{$admin_name->id}}">
              <p>{{$admin_name->name}}</p></a></div>
          <div class="visit-member-profile"> <a href="/profile/{{$admin_name->id}}"><img src="../assets/images/seeProfile.png" alt="see profile"></a></div>
        </div>
        @endforeach
        
      </div>
      @foreach($members_name as $member)
      <div class="member-box">
        <div class="member-img-box"><a href="/profile/{{$member->id}}">
          @foreach($profiles as $profile)
          @if($profile->user_id == $member->id)
          <img src="/profile-images/{{$profile->image}}" alt="member image">
          @endif
          @endforeach
        </a></div>
        <div class="member-info"> <a class="member-link" href="/profile/{{$member->id}}">
            <p>{{$member->name}}</p></a></div>
        <div class="visit-member-profile"> <a href="/profile/{{$member->id}}">
          <img src="../assets/images/seeProfile.png" alt="see profile">
        </a></div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection