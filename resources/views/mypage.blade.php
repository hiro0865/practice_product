@extends('layouts.app')

@section('content')

@if(Auth::check())
<h3>マイページ</h3>
<h4>{{$user->name}}さんの登録内容 <a href="mypage/edit">[編集]</a></h4>

<table>
<tr><th></th><th></th></tr>
<tr><td>お名前： </td><td><input type="text" name="name" readonly="readonly" value="{{$user->name}}"></td></tr>
<tr><td>メールアドレス： </td><td><input type="text" name="email" readonly="readonly" value="{{$user->email}}"></td></tr>
<tr><td>楽器： </td><td><input type="text" name="email" readonly="readonly" value="{{$user->instrument_id}}"></td></tr>
<tr><td>ジャンル： </td><td><input type="text" name="email" readonly="readonly" value="{{$user->genre_id}}"></td></tr>
<tr><td>コメント： </td><td><textarea rows="4" cols="40" name="email" readonly="readonly">{{$user->comment}}</textarea></td></tr>



</table>
@else
<p>ログインしてください</p>
<a href="login"></a>
@endif

@endsection