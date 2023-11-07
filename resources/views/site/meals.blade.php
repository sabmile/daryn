@extends('layouts.base')

@section('content')

<div class="meals">
	<ul class="meals-list">
		<li class="meals-list-item">
			<a href="{{ URL('/assets/docs/бракераждық комиссия жоспары.pdf') }}" target="_blank">бракераждық комиссия жоспары</a>
		</li>
		<li class="meals-list-item">
			<a href="{{ URL('/assets/docs/БРАКЕРАЖДЫҚ КОМИССИЯ (фото).docx') }}" target="_blank">БРАКЕРАЖДЫҚ КОМИССИЯ (фото)</a>
		</li>
		<li class="meals-list-item">
			<a href="{{ URL('/assets/docs/бракераждық комиссия туралы ереже.pdf') }}" target="_blank">бракераждық комиссия туралы ереже</a>
		</li>
	</ul>
</div>

@endsection