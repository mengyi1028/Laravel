@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm" style="margin-right:-40px; margin-left:40px">
            <img src="{{ $user->profile->profileImage() }}"
            class="rounded-circle" style="height:150px" alt="" >
        </div>
        <div class="col-lg-9 col-md-8 col-sm">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3 align-items-center">
                    <div class="h4">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{$follows}}"> </follow-button>
                </div>
                
                @can('update',$user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
               
            </div>
            @can('update',$user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }} </strong>posts</div>
                <div class="pr-5"><strong> {{ $followersCount }} </strong>followers</div>
                <div class="pr-5"><strong>{{ $followingCount }} </strong>following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong>
            </div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
         <div class="col-4 pb-4">
             <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="img-thumbnail" alt="">
             </a>
           
         </div>
        
        @endforeach
    </div>
</div>
</div>
@endsection
