@extends('layout.main')

@section('content')

@if(file_exists($doc) && filesize($doc) > 0)
	<?php

	$handle = fopen($doc, 'r');
	$content = fread($handle, filesize($doc));
	fclose($handle);

	?>
	{!! Markdown::parse($content) !!}
@else
<p>There is no documentation for the requested file!</p>
@endif

@stop
