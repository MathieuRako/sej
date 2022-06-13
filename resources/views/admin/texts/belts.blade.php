@extends('admin.texts.template')
@section('title','Belts/Graden')
@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0], null,  1,true) !!}
    {!! texts_update_paragraph($alltexts['title'][1], $alltexts['paragraph'][1], null,  2,true) !!}
    {!! texts_update_form([[
        'label' => 'Youtube video',
        'row' => 1,
        'col' => 70,
        'text' => $alltexts['youtube-video'][0]  
    ]], 3,true) !!}
@endsection
