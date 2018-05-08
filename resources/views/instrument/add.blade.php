@extends('layouts.app2')

@section('title','Instrument.Add')

@section('menubar')
    @parent
    instrument登録ページ
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
    <form Method="POST" action="/instrument/add">
        {{csrf_field()}}
        <tr><th>Instrument: </th><td><input type="text" name="instrument" value="{{old('instrument')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="Send"><td></tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2018 Hiro Suzuki
@endsection