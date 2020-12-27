@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img alt="" src="https://instagram.ffez1-2.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.ffez1-2.fna.fbcdn.net&amp;_nc_ohc=18136cTRcQ4AX-UhNlH&amp;tp=1&amp;oh=3955abb5c1cb4203181eeecc72ffffc2&amp;oe=600C8F67" class="rounded-circle"/>
        </div>
            <div class="col-9 pt-5" >
            <div class="d-flex justify-content-between align-item-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
                <div>
                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id}}/edit">Edit profile</a>
                    @endcan
                </div>
            </div>
        <div>
            <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-3"><strong>62,4K</strong> followers</div>
                <div class="pr-3"><strong>292</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div>
                <a href="#">{{$user->profile->url}}.</a>
            </div>
        </div>
        </div>
    </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)

        <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img decoding="auto" src="/storage/{{ $post->image }}" class="w-100"/>
        </a>
        </div>

    @endforeach
    </div>


</div>

@endsection
