@extends('admin.texts.template', ['breadcrumbs' => [ 'texts', 'sponsors']])

@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0],null, 1,'sponsors', true) !!}
    @endsection