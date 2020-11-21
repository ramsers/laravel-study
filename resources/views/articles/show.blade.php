@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$articles->title}}</h2>
				<span class="byline">{{$articles->excerpt}}</span> </div>
			<p><img src="{{ asset('images/banner.jpg') }}" alt="" class="image image-full" /> </p>
			<p>{{$articles->body}}</p>
			<p>
                @foreach ($articles->tags as $tag)
			<a href="{{route('articles-index', ['tag' => $tag->name])}}">{{$tag->name}}</a>
                @endforeach
            </p> 
		</div>
	</div>
@endsection