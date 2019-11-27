@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-5">
            <img src="https://scontent-syd2-1.cdninstagram.com/vp/2be979fe3d7785b3fee8b4b0f5d65d41/5E6776E6/t51.2885-19/s320x320/70939187_389425611736577_6775821082835288064_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com" class="rounded-circle w-100">
        </div>

        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>
                <a href="/p/create" class="">Add New Post</a>
            </div>
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


