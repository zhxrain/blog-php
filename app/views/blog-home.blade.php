@extends('layouts.main')

@section('content')
<!-- blog entry -->
@if($posts->getTotal() == 0)
  <p>Nothing found!</p>
@else
@foreach($posts as $post)
  <h1><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
  <hr>
  <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}</p>
  <hr>
  <p class="lead">{{ $post->summary }}</p>
  <a class="btn btn-primary" href="/posts/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
  <hr>
@endforeach
@endif

<!-- pager -->
<ul class="pager">
  @if($posts->getCurrentPage() == 1 )
  @else
    <li class="previous"><a href="{{ $posts->getUrl($posts->getCurrentPage()-1 ) }}">&larr; Older</a></li>
  @endif
  @if($posts->getCurrentPage() >= $posts->getLastPage())
  @else
    <li class="next"><a href="{{ $posts->getUrl($posts->getCurrentPage()+1 ) }}">Newer &rarr;</a></li>
  @endif
</ul>
@stop
