@extends('admin.texts.template')
@section('title','Club')
@section('content')
    {!! texts_update_paragraph($alltexts['title-values'][0], $alltexts['paragraph-values'][0], null, 0, true) !!}
    {!! texts_update_paragraph($alltexts['title-value'][0], $alltexts['paragraph-value'][0], null, 1, true) !!}
    {!! texts_update_paragraph($alltexts['title-value'][1], $alltexts['paragraph-value'][1], null, 2, true) !!}
    {!! texts_update_paragraph($alltexts['title-value'][2], $alltexts['paragraph-value'][2], null, 3, true) !!}
    {!! texts_update_paragraph($alltexts['title-history'][0], [$alltexts['paragraph-history'][0],$alltexts['paragraph-history'][1]], null, 4, true) !!}
    {!! texts_update_form(
        [
            ['label' => 'Title', 'row' => 1, 'col' => 70, 'text' => $alltexts['title-structure'][0]],
            ['label' => 'Paragraph', 'row' => 5, 'col' => 70, 'text' => $alltexts['paragraph-structure'][0]],
            ['label' => 'Location', 'row' => 1, 'col' => 70, 'text' => $alltexts['location-structure'][0]],
    ], 3, true) !!}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="/admin/texts" method="POST" id="form-4">
                        @csrf
                        {!!  texts_field(['label' => 'Title', 'row' => 1, 'col' => 50, 'text' => $alltexts['title-rules'][0]], 4, null) !!} <br>
                        <?php
                        $ids = [$alltexts['title-rules'][0]['id']];
                        ?>
                        @foreach($alltexts['rule'] as $r)
                            {!! texts_field(['label' => 'Rule', 'row' => 1, 'col' => 50, 'text' => $r], 4, null) !!} <a href = "/admin/texts/remove?id={{ $r['id'] }}"><i class="fa-solid fa-circle-minus"></i></a><br>
                            <?php
                            $ids[] = $r['id'];
                            ?>
                        @endforeach
                        {!! texts_update_submit($ids) !!}
                    </form>
       
                    {!! texts_add_form( [
                        ['label' => 'Add rule', 'name'=> 'content', 'row' => 1, 'col' => 50, 'text' => ' ']], 5, [['name' => 'type', 'value' => 'rule']], false)!!}
                </div>
            </div>
        </div>
    </div>
    
@endsection