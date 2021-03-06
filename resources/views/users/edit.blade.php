@extends('layouts.app')
@section('content')

<div class="panel panel-default col-md-10 col-md-offset-1">
    <div class="panel-heading">
        <h4><i class="glyphicon glyphicon-edit"></i> 编辑个人资料 </h4>
    </div>

    @include('common.error')
    
    <div class="panel-body">
        <form action="{{ route('users.update', $user->id) }}" method="post" accept-charset="UTF-8">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="name-field">用户名</label>
                <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}">
            </div>
            <div class="form-group">
                <label for="emaill-field">邮箱</label>
                <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}">
            </div>
            <div class="form-group">
                <label for="introduction-field"></label>
                <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
            </div>
            <div class="well well-sm">
                <button class="btn btn-primany" type="submit">保存</button>
            </div>
        </form>
    </div>
</div>
@endsection