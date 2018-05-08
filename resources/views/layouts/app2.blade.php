<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
    body{font-size:16pt; color:#999; margin:5px;}
    h1{font-size:50pt; text-align:right; color:#f6f6f6;}
    ul{font-size:12pt; }
    .content{font-size:20pt; color:#e00;}
    .footer{font-size:8pt;}
    th{background-color: #999; color: #fff; padding:5px 10px;}
    td{border:solid 1px #aaa; color: #999; padding:5px 10px;}
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
        <p class="menutitle">※メニュー</p>
        <li>@show</li>
    </ul>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
    
</body>
</html>