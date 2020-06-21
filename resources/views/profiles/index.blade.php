    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://image.shutterstock.com/image-vector/vector-leaf-golden-shape-monochromatic-260nw-357105539.jpg" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/post/create">Add Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>600</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div> <a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-6">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
