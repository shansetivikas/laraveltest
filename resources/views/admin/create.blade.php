@extends('layouts.lay')

@section('content')
  <form method="POST" enctype="multipart/form-data" action="{{action('PostsController@store')}}">
 {{ csrf_field() }}
    <input type="text" name="title">
    <input type="submit" name="submit">

  </form>
@endsection
