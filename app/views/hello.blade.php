@extends('layouts.base')
@section('header')
<title>Laravel初心者講座</title>
@stop
@section('nav')
@parent
<li><a href='#'>Link</a></li>
@stop
@section('content')
<h1>Hello World!</h1>
<h2>ようこそ{{ $name }}さん</h2>
<p>あなたのメールアドレスは{{ $email }}です。</p>
<p>これはapp/views/hello.blade.phpファイルです</p>
@stop
@section('footer')
<h2>WinRoad</h2>
@stop