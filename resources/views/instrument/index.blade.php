@extends('layouts.app')

@section('title','Instrument.Index')

@section('menubar')
    @parent
    instrumentインデックスページ
@endsection

@section('content')

<table>
<tr><th>ID</th><th>Instrument</th></tr>
@foreach($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->instrument}}</td>
</tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2018 Hiro Suzuki
@endsection