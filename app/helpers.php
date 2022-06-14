<?php


function image_html($i)
{
    return 'img src = "'.get_image_path($i).'" alt = "' . $i['alt'] . '"';
}

function get_image_path($i)
{
    if (isset($i['directory'])) {
        return '/images/' . $i['directory'] . '/' . $i['name'];
    } else {
        return '/images/' . $i['name'];
    }
}



function texts_field($row, $n)
{
    if (!isset($row['name'])) {
        $name = "content[]";
    } else {
        $name = $row['name'];
    }
    $str = '<label for="' . $name . '">>' . $row['label'] . '</label><br>';
    $str = $str . '<textarea class="mb-2" rows="' . $row['row'] . '" cols="' . $row['col'] . '" form="form-' . $n . '"';
    $str = $str . 'name="' . $name . '">';
    if (isset($row['text']['content'])) {
        $str = $str . $row['text']['content'] . '</textarea>';
    } else {
        $str = $str . $row['text'] . '</textarea>';
    }
    return $str;
}

function update_form($tab, $n, $route, ?bool $card)
{

    $str = '<form action="' . $route . '" method="POST" id="form-' . $n . '">' . csrf_field();
    $ids = [];
    foreach ($tab as $row) {
        $str = $str . texts_field($row, $n) . '<br>';
        $ids[] = $row['text']['id'];
    }

    $str = $str . texts_update_submit($ids);

    if (isset($card) & $card) {
        return card_wrap($str);
    }
    return $str;
}


function texts_update_form($tab, $nt, ?bool $card)
{

    return update_form($tab, $nt, '/admin/texts', $card);
}


function texts_update_submit($ids)
{
    $str =  '<input type="hidden" name ="ids" value =  "' . implode('-', $ids) . '">';
    return $str . '<input class = "btn" type="submit" value="Update"> </form>';
}

function card_wrap($str)
{
    return '<div class="row">' .
        '<div class="col-12">' .
        '<div class="card">' .
        '<div class="card-body">' . $str . '</div> </div> </div> </div>';
}
function add_form($tab, $n, $hiddens, $route, ?bool $card)
{

    $str = '<form action="' . $route . '" method="POST" id="form-' . $n . '">' . csrf_field();
    foreach ($tab as $row) {
        $str = $str . texts_field($row, $n, null) . '<br>';
    }
    if (isset($hiddens)) {
        foreach ($hiddens as $hidden) {
            $str = $str . '<input type = "hidden" name = "' . $hidden['name'] . '" value = "' . $hidden['value'] . '">';
        }
    }

    $str = $str . texts_add_submit();
    if (isset($card) & $card) {
        return card_wrap($str);
    }
    return $str;
}

function texts_add_form($tab, $nt, $hiddens, ?bool $card)
{
    return add_form($tab, $nt, $hiddens, '/admin/texts/add', $card);
}

function texts_add_submit()
{
    return  '<input class = "btn" type="submit" value="Add"> </form>';
}

function texts_update_paragraph($title, $paragraphs, $buttons, $it, ?bool $card)
{
    $texts = [[
        'label' => 'Title',
        'row' => 1,
        'col' => 70,
        'text' => $title
    ]];
    if (isset($paragraphs)) {
        if (gettype($paragraphs) == "array") {
            for ($i = 1; $i <= count($paragraphs); $i++) {
                $texts[] = [
                    'label' => 'Paragraph ' . $i,
                    'row' => 5,
                    'col' => 70,
                    'text' => $paragraphs[$i - 1]
                ];
            }
        } else {
            $texts[] = [
                'label' => 'Paragraph',
                'row' => 5,
                'col' => 70,
                'text' => $paragraphs
            ];
        }
    }
    if (isset($buttons)) {
        if (isset($buttons[0])) {
            for ($i = 1; $i <= count($buttons); $i++) {
                $texts[] = [
                    'label' => "Button's text " . $i,
                    'row' => 1,
                    'col' => 70,
                    'text' => $buttons[$i - 1]['text']
                ];
                $texts[] = [
                    'label' => "Button's link " . $i,
                    'row' => 1,
                    'col' => 70,
                    'text' => $buttons[$i - 1]['link']
                ];
            }
        } else {
            $texts[] = [
                'label' => "Button's text",
                'row' => 1,
                'col' => 70,
                'text' => $buttons['text']
            ];
            $texts[] = [
                'label' => "Button's link",
                'row' => 1,
                'col' => 70,
                'text' => $buttons['link']
            ];
        }
    }
    return texts_update_form($texts, $it, $card);
}
