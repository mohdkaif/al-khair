@extends('layouts.front')
@section('content')
@includeIf('front/includes.header')
<div class="clearfix">
</div>
<div class="page-container">
		
		@includeIf($view)
</div>
@includeIf('front/includes.footer')
@endsection

