@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="w-100 rounded-circle">
        </div>

        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>

            <!--如何对不合法用户隐藏相应的内容 -->
            @can('update',$user->profile)
            <a href="/p/create" class="">Add New Post</a>
            @endcan
            
            
                
            </div>

            @can('update',$user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan



            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23K</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
            <div class="col-4 pb-3">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
</div>
</div>
@endsection


