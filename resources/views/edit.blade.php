@extends('layouts.app')

@section('content')

@if(Auth::check())
<h3>マイページの編集</h3>
<h4>{{$form->name}}さんの登録内容</h4>

@if(count($errors)>0)
<div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<table>
<form action="/mypage/edit" method="post">
    {{csrf_field()}}
<input type="hidden" name="id" value="{{$form->id}}">
<tr><td>お名前： </td><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
<tr><td>メールアドレス： </td><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
<tr><td>楽器： </td><td><input type="number" name="instrument_id" value="{{$form->instrument_id}}"></td></tr>
<tr><td>ジャンル： </td><td><input type="number" name="genre_id" value="{{$form->genre_id}}"></td></tr>
<tr><td>コメント： </td><td><textarea rows="4" cols="40" name="comment">{{$form->comment}}</textarea></td></tr>
<tr><td><input type="submit" value="更新"><td><tr>
</form>


</table>
@else
<p>ログインしてください</p>
<a href="login"></a>
@endif

@endsection