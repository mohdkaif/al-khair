@extends('layouts.front')
@section('content')
@includeIf('front/includes.header')
@includeIf($view)
@includeIf('front/includes.footer')
@endsection

