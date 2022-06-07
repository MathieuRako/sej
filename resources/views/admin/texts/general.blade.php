@extends('admin.texts.template', ['breadcrumbs' => [ 'texts', 'general']])
@section('title','General')
@section('content')
    @for($i=0;$i<count($alltexts['footer']);$i++)
        {!! texts_update_form([[
            'label' => 'Footer',
            'row' => 3,
            'col' => 70,
            'text' => $alltexts['footer'][$i]  
        ]], $i, 'general',true) !!}
    @endfor
    {!! texts_update_form([[
        'label' => 'Website-name',
        'row' => 1,
        'col' => 40,
        'text' => $alltexts['website-name'][0]  
    ]], $i, 'general',true) !!}
@endsection