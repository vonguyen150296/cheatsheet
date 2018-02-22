@extends('layouts.master')
@section('head.title')
new article
@stop
@section('css')
<link rel="stylesheet"  href="{{asset('css/tags.css')}}">
@stop

@section('body.content')
<div class = "container">
	<a href="{{url('/')}}" class="btn btn-link" ><span class="glyphicon glyphicon-chevron-left"></span>Page d'accueil </a> <hr>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1> Modifier la publication</h1>
			<hr>
		</div>
		<div class="col-sm-6 col-sm-offset-3">
		
      {!! Form::model($article, [
                    'route' => [ 'articles.update',$article->id],
                    'method' => 'PUT',
                    'class' => 'form-horizontal'
                ]) 
            !!}
                    <div class="form-group">
                    {!! Form::label('title','Le titre de publication', [ 'class' => 'control-label' ]) !!}
                    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control' ,'placeholder'=>'Qu\'est-ce qu\'un titre de publication?', 'required' => 'true' ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content','Le contenu de publication', [ 'class' => 'control-label' ]) !!}
                    {!! Form::text('content', null, ['id' => 'content', 'class' => 'form-control' ,'placeholder'=>'Qu\'est-ce qu\'un titre de publication?', 'required' => 'true']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('code','Le code de publication', [ 'class' => 'control-label' ]) !!}
                    {!! Form::text('code', null, ['id' => 'code', 'class' => 'form-control' ,'placeholder'=>'Qu\'est-ce que les codes de publication?', 'required' => 'true']) !!}
                </div>
                <lable for="tags" class="control-label">Les tags</lable><br>
                        <div class="tags-input" data-name="tags-input">
                       
                        </div>
                </div>
                {!! Form::submit('Modifier', [ 'class' => 'btn btn-primary' ]) !!}
                </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@stop
@section('javascript')
<script src="{{asset('js/tags.js')}}"></script>

@stop
