@extends('layouts.app2')

@section('title','Genre.Add')

@section('menubar')
    @parent
    genre登録ページ
@endsection

@section('content')
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
    <form Method="POST" action="/genre/add">
        {{csrf_field()}}
        <tr><th>Genre: </th><td><input type="text" name="genre" value="{{old('genre')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="Send"><td></tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2018 Hiro Suzuki
@endsection