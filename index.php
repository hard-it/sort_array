<? /* Simple sorting(PHP7+) */
    $arr = array(
        array(
            'key' => 1,
            'value' => 'Apple'
        ),
        array(
            'key' => 5,
            'value' => 'Orange'
        ),
        array(
            'key' => 0,
            'value' => 'Mandarin'
        ),
    );
    usort($arr, function($a, $b) { return $a['value'] <=> $b['value']; });
    echo '<ul>';
    foreach($arr as $item){
        echo '<li>'.$item['value'].'</li>';
    }
    echo '</ul>';

