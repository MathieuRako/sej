@extends('admin.texts.template', ['breadcrumbs' => [ 'texts', 'home']])

@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0], ['text' => $alltexts['button-text'][0], 'link' => $alltexts['button-link'][0]], 0, 'home',true) !!}
    {!! texts_update_paragraph($alltexts['title'][1], $alltexts['paragraph'][1], ['text' => $alltexts['button-text'][1], 'link' => $alltexts['button-link'][1]], 1, 'home',true) !!}
    {!! texts_update_paragraph($alltexts['title'][2], null, null, 2, 'home',true) !!}
    {!! texts_update_form(
    [
        ['label' => 'Parent testimony left', 'row' => 4, 'col' => 70, 'text' => $alltexts['parent-testimony'][0]],
        [
            'label' => 'Parent left',
            'row' => 1,
            'col' => 70,
            'text' => $alltexts['parent'][0],
        ],
        [
            'label' => 'Parent testimony center',
            'row' => 4,
            'col' => 70,
            'text' => $alltexts['parent-testimony'][1],
        ],
        [
            'label' => 'Parent center',
            'row' => 1,
            'col' => 70,
            'text' => $alltexts['parent'][1],
        ],
        [
            'label' => 'Parent testimony right',
            'row' => 4,
            'col' => 70,
            'text' => $alltexts['parent-testimony'][2],
        ],
        [
            'label' => 'Parent right',
            'row' => 1,
            'col' => 70,
            'text' => $alltexts['parent'][2],
        ],
    ],
    2,
    'home',true
) !!}
    {!! texts_update_paragraph($alltexts['title'][3], $alltexts['paragraph'][2], ['text' => $alltexts['button-text'][2], 'link' => $alltexts['button-link'][2]], 3, 'home',true) !!}
    {!! texts_update_paragraph($alltexts['title'][4], [$alltexts['paragraph'][3], $alltexts['paragraph'][4]], null, 4, 'home',true) !!}
@endsection
