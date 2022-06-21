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
  
   @component('components.akira')
       @slot('msg_title')
       CAUTION!
       @endslot

       @slot('msg_content')
       これはメッセージの表示です。
       @endslot
   @endcomponent

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
