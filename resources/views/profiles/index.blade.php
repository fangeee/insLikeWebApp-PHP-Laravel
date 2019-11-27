@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-5">
            <img src="https://scontent-syd2-1.cdninstagram.com/vp/2be979fe3d7785b3fee8b4b0f5d65d41/5E6776E6/t51.2885-19/s320x320/70939187_389425611736577_6775821082835288064_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com" class="rounded-circle" alt=""
            heeight="120" width="120">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>
                <a href="#" class="">Add new Link</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23K</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
       <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-15/e35/c180.0.1080.1080a/s240x240/75580614_430358764552434_4020743895012509828_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_cat=106&oh=98dcc970a30c3a5260e933074eea5a33&oe=5E7D5313" class="w-100" alt="">
        
        </div><div class="col-4">
       <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-15/e35/c180.0.1080.1080a/s240x240/75580614_430358764552434_4020743895012509828_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_cat=106&oh=98dcc970a30c3a5260e933074eea5a33&oe=5E7D5313" class="w-100"alt="">
        
        </div><div class="col-4">
       <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-15/e35/c180.0.1080.1080a/s240x240/75580614_430358764552434_4020743895012509828_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_cat=106&oh=98dcc970a30c3a5260e933074eea5a33&oe=5E7D5313" class="w-100"alt="">
        
        </div>
    </div>
</div>
@endsection


