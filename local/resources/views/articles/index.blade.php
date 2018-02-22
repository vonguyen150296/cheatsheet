@extends('layouts.master')
@section('head.title')
articles
@stop
@section('css')
<link rel="stylesheet"  href="{{asset('css/tags.css')}}">
@stop

@section('body.content')
<div class="container-fluid text-center"> 
<a href="{{route('create')}}" class="btn btn-link" >Poster une nouvelle publication </a> <hr>
<hr> 
    @foreach ($articles as $a)
    <div class="col-sm-8 col-sm-offset-2">
    
        <div class="col-sm-3 text-center">
              <pre class="html">{{$a->code}}</pre>
        </div>    
        <div class="col-sm-5 text-left"> 
             <h1>{{$a->title}}</h1>
             <p>{{$a->content}}</p>
            <p>
                <div class="tags-input" data-name="tags-input">
                    <span class="tag">{{$a->tagsinput}}<span class="close"></span></span>
                </div>
            </p>
             <p><a href="{{route('article.show',$a->id)}}">read more</a></p>
             <hr>
        </div>
      </div>
     @endforeach
</div>
@stop

@section('javascript')
<script src="{{asset('js/tags.js')}}"></script>
@stop