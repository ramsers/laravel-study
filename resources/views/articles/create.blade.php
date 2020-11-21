@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Article</h1>

        <form action="{{ route('articles-index')}}" method="POST">
            
            {{-- Cross Site Request Forgery --}}
            @csrf

            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" id="title" class="input" value="{{old('title')}}">

                    @if ($errors->has('title'))
                    <p class="help">{{$errors->first('title')}}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <textarea name="excerpt" id="excerpt" class="textarea">{{old('excerpt')}}</textarea>

                    @if ($errors->has('excerpt'))
                    <p class="help">{{$errors->first('excerpt')}}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea name="body" id="body" class="textarea">{{old('body')}}</textarea>
                    @if ($errors->has('body'))
                    <p class="help">{{$errors->first('body')}}</p>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="tags" class="label">Tags</label>
                <div class="control">
                    <select name="tags[]" multiple>
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('tags'))
                    <p class="help">{{ $message }}</p>
                    @endif

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