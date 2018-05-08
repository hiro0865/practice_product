@extends('layouts.app')

@section('title','Genre.Index')

@section('menubar')
    @parent
    genreインデックスページ
@endsection

@section('content')
@if(Auth::check())
<p>User: {{$user->name.' (' . $user->email . ')'}}</p>
@else
<p>ログインしていません。(<a href="/login">ログイン</a> | <a href="/register">登録</a>)</p>
@endif

<table>
<tr><th>ID</th><th>Genre</th></tr>
@foreach($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->genre}}</td>
</tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2018 Hiro Suzuki
@endsection