@extends('admin.texts.template', ['breadcrumbs' => [ 'texts', 'home']])

@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], $alltexts['paragraph'][0], ['text' => $alltexts['button-text'][0], 'link' => $alltexts['button-link'][0]], 0, 'contact',true) !!}
    {!! texts_update_form(
        [
            ['label' => 'Title', 'row' => 1, 'col' => 70, 'text' => $alltexts['title-form'][0]],
            ['label' => 'Paragraph', 'row' => 5, 'col' => 70, 'text' => $alltexts['paragraph-form'][0]],
            ['label' => 'Name', 'row' => 1, 'col' => 70, 'text' => $alltexts['form'][0]],
            ['label' => 'Email', 'row' => 1, 'col' => 70, 'text' => $alltexts['form'][1]],
            ['label' => 'Subject', 'row' => 1, 'col' => 70, 'text' => $alltexts['form'][2]],
            ['label' => 'Message', 'row' => 1, 'col' => 70, 'text' => $alltexts['form'][3]],
            ['label' => 'Form\'s button', 'row' => 1, 'col' => 70, 'text' => $alltexts['button-form'][0]],]
    , 1, 'contact', true) !!}
    {!! texts_update_form(
        [
            ['label' => 'Location', 'row' => 1, 'col' => 70, 'text' => $alltexts['location'][0]],
    ],2,'contact',true) !!}
@endsection