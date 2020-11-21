@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Update Article</h1>

    <form action="/articles/{{$articles->id}}" method="POST">
            
            {{-- Cross Site Request Forgery + hidden directives --}}
            
            @method('PUT')
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" id="title" class="input" value="{{$articles->title}}">
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <textarea name="excerpt" id="excerpt" class="textarea">{{$articles->excerpt}}</textarea>
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{$articles->body}}</textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>

</div>
@endsection