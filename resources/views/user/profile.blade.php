@extends('layouts.app')


<style type="text/css">
    .profile-img {
        max-width: 150px;
        border:5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
</style>

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img class="profile-img" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-plaid-shirt-guy.png" alt="">
                <h1>{{ $user->name }}</h1>
                <h3>{{ $user->email }}</h3>
                <h3>{{ $user->dob }} ({{ Carbon\Carbon::createFromFormat('Y-m-d', $user->dob)->age }} years old)</h3>
                <button class="btn btn-success">Follow</button>
            </div>
        </div>
    </div>
</div>
@endsection