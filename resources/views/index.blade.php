@extends('layouts.base')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
   あいうえお
@endsection

@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
