@extends('layouts.app')

@section('title','User.Index')

@section('menubar')
    @parent
    userインデックスページ
@endsection

@section('content')

<table>
<tr><th>Name</th><th>Instrument</th><th>Genre</th></tr>
@foreach($items as $item)
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->instrument_id}}</td>
    <td>{{$item->genre_id}}</td>
</tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2018 Hiro Suzuki
@endsection