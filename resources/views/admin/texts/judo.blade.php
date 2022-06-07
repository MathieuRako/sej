@extends('admin.texts.template', ['breadcrumbs' => [ 'texts', 'judo']])
@section('title','Judo')
@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0],["text" => $alltexts['button-text'][0], "link" => $alltexts['button-link'][0]], 1,'judo', true) !!}
    {!! texts_update_form([[
        'label' => 'Title',
        'row' => 1,
        'col' => 70,
        'text' => $alltexts['title'][1]  
    ],  [
        'label' => 'Subtitle',
        'row' => 1,
        'col' => 13,
        'text' => $alltexts['subtitle'][0]  
    ],  [
        'label' => 'Paragraph',
        'row' => 5,
        'col' => 70,
        'text' => $alltexts['paragraph'][1]
    ],  [
        'label' => 'Button\'s text',
        'row' => 1,
        'col' => 70,
        'text' => $alltexts['button-text'][1]
    ],  [
        'label' => 'Button\'s link',
        'row' => 1,
        'col' => 70,
        'text' => $alltexts['button-link'][1]
    ]], 2, 'judo',true) !!}
    {!! texts_update_paragraph($alltexts['title'][2], $alltexts['paragraph'][2],[
        ["text" => $alltexts['button-text'][2], "link" => $alltexts['button-link'][2]],
        ["text" => $alltexts['button-text'][3], "link" => $alltexts['button-link'][3]],
        ["text" => $alltexts['button-text'][4], "link" => $alltexts['button-link'][4]]], 1,'judo', true) !!}
@endsection
