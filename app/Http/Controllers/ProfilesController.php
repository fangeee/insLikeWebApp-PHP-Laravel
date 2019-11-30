<?php

namespace App\Http\Controllers;

use App\User;  //代表用了user用户这个class
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache; //怎么用cache
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
    public function index(User $user)  
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false; //显示用户在数据库中的信息

        //30s刷新一次关注等数目 怎么用cache
        $postCount = Cache::remember('count.posts.' . $user->id,now()->addSeconds(30),function() use ($user) {
            return $user->posts->count();
        });  

        
        $followerdCount = Cache::remember('count.follower.' . $user->id,now()->addSeconds(30),function() use ($user) {
            return $user->profile->followers->count();
        });

        $followingCount = Cache::remember('count.following.' . $user->id,now()->addSeconds(30),function() use ($user) {
            return $user->following->count();
        });


        

        
        return view('profiles.index',compact('user','follows','postCount','followerdCount','followingCount'));
    }

    public function edit(User $user)   //更改用户信息用户输入界面
    {
        $this->authorize('update',$user->profile);  //鉴定用户 和profilepolicy有关
        return view('profiles.edit',compact('user')); //把用户信息传到这个页面
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'',
            'url'=>'url',
            'image'=>'',

       ]);
 
        
        if(request('image')){
            $imagePath = request('image')->store('profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(300,300); //改变图像为正方形
            $image->save();

            $imageArray = ['image'=> $imagePath];


        }

        auth()->user()->profile->update(array_merge(  //鉴定用户
            $data,
            $imageArray??[] //把处理后的image覆盖到原数组 如果没有就不覆盖
             
        ));


        return redirect("/profile/{$user->id}");


       
    }


}
