@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100" alt="">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        
                            <img src="{{ $post->user->profile->profileImage() }}" 
                            class="rounded-circle w-100" style="max-width:40px"
                            alt="">
                       
                    </div>
                    <div>
                        <a href="/profile/{{ $post->user->id }}">
                            <div class="font-weight-bold text-dark">{{ $post->user->username }}</div>
                        </a>
                       
                    </div>
                    <a href="#" class="pl-2 font-weight-bold">Follow</a>
                </div>
            
            <hr>
            <div>
             <p>
                <a href="/profile/{{ $post->user->id }}"> 
                    <span class="font-weight-bold text-dark">
                     {{ $post->user->username }}
                    </span> 
                </a>
                 {{$post->caption}}
            </p>
            </div>
           
            
        </div>       
    </div>
</div>
@endsection
