@extends('admin.texts.template')
@section('title','General')
@section('content')
    @for($i=0;$i<count($alltexts['footer']);$i++)
        {!! texts_update_form([[
            'label' => 'Footer',
            'row' => 3,
            'col' => 70,
            'text' => $alltexts['footer'][$i]  
        ]], $i, true) !!}
    @endfor
    {!! texts_update_form([[
        'label' => 'Website-name',
        'row' => 1,
        'col' => 40,
        'text' => $alltexts['website-name'][0]  
    ]], $i, true) !!}
@endsection