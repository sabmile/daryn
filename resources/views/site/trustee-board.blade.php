@extends('layouts.base')

@section('content')
<div class="pedagogical-support">
	<ul class="pedagogical-support-list">
		<li class="pedagogical-support-list-item">
			<a href="{{ URL('/assets/docs/Қамқоршылық кеңес жоспары 3 бет.pdf') }}" target="_blank">Қамқоршылық кеңес жоспары</a>
		</li>
		<li class="pedagogical-support-list-item">
			<a href="{{ URL('/assets/docs/Қамқоршылық кеңес ережесі 2 бет.pdf') }}" target="_blank">Қамқоршылық кеңес ережесі</a>
		</li>
	</ul>
</div>
@endsection