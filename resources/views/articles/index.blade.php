@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
            @forelse($articles as $article)
                <div class="title">
                    <h2>
                        <a href="{{ route('articles-show', $article)}}">{{$article->title}}</a>
                        </h2>
                    <span class="byline">{{$article->excerpt}}</span> 
                    <p><img src="{{ asset('images/banner.jpg') }}" alt="" class="image image-full" /> </p>
                    <p>{{$article->body}}</p>
                    
                </div>
                @empty
                    <p>No related articles yet</p>
            @endforelse
              
		</div>
	</div>
@endsection