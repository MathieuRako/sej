@extends('admin.texts.template', ['breadcrumbs' => [ 'texts', 'belts']])

@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0], null,  1, 'belts',true) !!}
    {!! texts_update_paragraph($alltexts['title'][1], $alltexts['paragraph'][1], null,  2, 'belts',true) !!}
    {!! texts_update_form([[
        'label' => 'Youtube video',
        'row' => 1,
        'col' => 70,
        'text' => $alltexts['youtube-video'][0]  
    ]], 3, 'belts',true) !!}
@endsection
