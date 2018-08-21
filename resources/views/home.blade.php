@extends('layouts.app_main')
@section('content')
@includeIf('includes.header')
<div class="clearfix">
</div>
<div class="page-container">
		@includeIf('includes.sidebar')
		@includeIf($view)
</div>
@includeIf('includes.footer')
@endsection

