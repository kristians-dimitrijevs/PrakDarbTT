@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/post/create">{{__('Add Post')}}</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="app()->getLocale(),/profile/{{ $user->id }}/edit">{{__('Edit Profile')}}</a>
            @endcan

            <div class="d-flex">
                <div class="pr-4"><strong>{{ $postCount }}</strong> {{__('posts')}}</div>
                <div class="pr-4"><strong>{{ $followersCount }}</strong> {{__('followers')}}</div>
                <div class="pr-4"><strong>{{ $followingCount }}</strong> {{__('following')}}</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div> <a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-6">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href= "app()->getLocale(), /post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
