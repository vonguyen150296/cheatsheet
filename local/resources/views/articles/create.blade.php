@extends('layouts.master')
@section('head.title')
new article
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/tags.css')}}">
@stop

@section('body.content')
<div class = "container">
	<a href="{{url('/')}}" class="btn btn-link" ><span class="glyphicon glyphicon-chevron-left"></span>Page d'accueil </a> <hr>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1> Poster une novelle publication</h1>
			<hr>
		</div>
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{route('article.store')}}" method="POST" class="form-horizontal">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<lable for="titre" class="control-label">Le titre de publication</lable>
					<input class="form-control" type="text" name="title" id="title" required placeholder="Qu'est-ce qu'un titre de publication?">
				</div>
				<div class="form-group">
					<lable for="content" class="control-label">Le contenu de publication</lable>
					<textarea class="form-control" type="text" name="content" id="content" cols="30" rows="10" required placeholder="Qu'est-ce qu'un contenu de publication?"></textarea>
				</div>
				<div class="form-group">
					<lable for="code" class="control-label">Les codes de publication</lable>
					<textarea class="form-control" type="text" name="code" id="code" cols="30" rows="10" required placeholder="Qu'est-ce que les codes de publication? (en HTML)"></textarea>
				</div>
				<div class="form-group">
                    <lable for="tags" class="control-label">Les tags</lable><br>
					<div class="tags-input" data-name="tags-input">
               
            		</div>
				</div>
				<div class="form-group">
					<button type="btn btn-primary">Poster</button>
				</div>
			</form>	
		</div>
	</div>
</div>
@stop
@section('javascript')
<script src="{{asset('js/tags.js')}}"></script>
@stop
