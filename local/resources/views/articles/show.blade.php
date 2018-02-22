@extends('layouts.master')
@section('head.title')
{{$article->title}}
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/tags.css')}}">
@stop
@section('body.content')  
<div class="container-fluid text-center"> 

      <a href="{{url('/')}}" class="btn btn-link" ><span class="glyphicon glyphicon-chevron-left"></span>Page d'accueil </a> <hr>
       <div class="col-sm-8 col-sm-offset-2">
          
          <div class="col-sm-3 text-center">
            <pre class="html">{{$article->code}}</pre>
          </div>
          <div class="col-sm-5 text-left"> 
            
            <h1>{{$article->title}}</h1>
            <p>{{$article->content}}</p>
            <p>
                <div class="tags-input" data-name="tags-input">
                    <span class="tag">{{$article->tagsinput}}<span class="close"></span></span>
                </div>
            </p>
            <hr>
          </div>
        </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <a href="{{route('article.edit', $article->id)}}", class="btn btn-info">Modifier</a>
                
                    {!! Form::open([
                          'route' => [ 'article.destroy',$article->id ],
                          'method' => 'DELETE',
                          'class'=> 'form-inline',
                          'style' => 'display:inline'

                        ])
                    !!}
                            <button class="btn btn-danger">Supprimer</button>
                    {!! Form::close()!!}
                </div>  
            </div>
   
</div>
@stop
@section('javascript')
  <script src="{{asset('js/tags.js')}}"></script>
@stop