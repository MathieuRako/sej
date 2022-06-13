@extends('admin.texts.template')
@section('title','Sponsors')
@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0],null, 1,true) !!}
    @endsection