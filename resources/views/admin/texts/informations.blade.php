@extends('admin.texts.template', ['breadcrumbs' => ['texts', 'informations']])
@section('title','Informations')
@section('content')
    {!! texts_update_paragraph($alltexts['title'][0], null, null, 0, 'informations', true) !!}
    {!! texts_update_paragraph($alltexts['title'][1], $alltexts['paragraph'][0], ['text' => $alltexts['button-text'][0], 'link' => $alltexts['button-link'][0]], 1, 'informations', true) !!}


    @for ($i = 0; $i < count($schedule); $i++)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $s = $schedule[$i];
                        $tab = [];
                        
                        ?>
                        
                        {!! update_form([['label' => 'Name', 'name' => 'name', 'row' => 1, 'col' => 50, 'text' => $s]], $i * 3 + 3, 'informations', '/admin/category', true) !!}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Trainings</h3>
                                    </div>
                                    <div class="card-body">
                                        @if (count($s['trainings']) != 0)
                                            <form action="/admin/training" method="POST" id="form-{!! $i * 3 + 4 !!}">
                                                @csrf
                                                <?php
                                                $ids = [];
                                                ?>

                                                @foreach ($s['trainings'] as $training)
                                                    <div class="mb-5">
                                                        {!! texts_field(['label' => 'Day', 'name' => 'days[]', 'row' => 1, 'col' => 50, 'text' => $training['day']], $i * 3 + 4, null) !!}<br>
                                                        {!! texts_field(['label' => 'Hours', 'name' => 'hours[]', 'row' => 1, 'col' => 50, 'text' => $training['hours']], $i * 3 + 4, null) !!} <a
                                                            href="/admin/training/remove?id={{ $training['id'] }}&page=informations"><i
                                                                class="fa-solid fa-circle-minus"></i></a><br>
                                                        <?php
                                                        $ids[] = $training['id'];
                                                        ?>
                                                    </div>
                                                @endforeach
                                                {!! texts_update_submit($ids, 'informations') !!}



                                            </form>
                                        @else
                                            <p>No trainings this day</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! add_form([['label' => 'Day', 'name' => 'day', 'row' => 1, 'col' => 50, 'text' => ' '], ['label' => 'Hours', 'name' => 'hours', 'row' => 1, 'col' => 50, 'text' => ' ']], $i * 3 + 5, 'informations', [['name' => 'category', 'value' => $s['id']]], '/admin/training/add', true) !!}
                        <a class="btn " href="/admin/category/remove?id={{ $s['id'] }}&link=informations">
                            Delete category</a><br>



                    </div>
                </div>
            </div>
        </div>
    @endfor
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/category/add" method="POST" id="form-2">
                        @csrf
                        {!! texts_field(['label' => 'New Category Name', 'name' => 'name', 'row' => 1, 'col' => 50, 'text' => ' '], 2, null) !!}<br>
                        
                        <input  type ="checkbox" name = "2-columns" checked><label  for = "2-columns"> 2 columns</label><br>
                        
                        {!! texts_add_submit('informations') !!}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
