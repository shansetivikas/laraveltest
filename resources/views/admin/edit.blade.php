@extends('layouts.lay')

@section('content')
  <form  enctype="multipart/form-data" method="POST" action="{{action('PostsController@update',['id'=>$post->id])}}">
    {{ method_field('PATCH') }}
     {{ csrf_field() }}
    <input type="text" name="title" value="<?php echo $post->title;?>">
    <input type="submit" name="submit">

  </form>
@endsection
