<?php
function new_time($a) { // Time rewriting
    date_default_timezone_set('Europe');
    $ndate = date('d.m.Y', $a);
    $ndate_time = date('H:i', $a);
    $ndate_exp = explode('.', $ndate);
    $nmonth = array(
        1 => 'Jan',
        2 => 'Feb',
        3 => 'Mar',
        4 => 'Apr',
        5 => 'May',
        6 => 'June',
        7 => 'Jule',
        8 => 'Aug',
        9 => 'Sept',
        10 => 'Oct',
        11 => 'Nov',
        12 => 'Dec'
    );

    foreach ($nmonth as $key => $value) {
    if($key == intval($ndate_exp[1])) $nmonth_name = $value;
    }

    if($ndate == date('d.m.Y')) return 'Today at '.$ndate_time;
    elseif($ndate == date('d.m.Y', strtotime('-1 day'))) return 'Yesterday at '.$ndate_time;
    else return $ndate_exp[0].' '.$nmonth_name.' '.$ndate_exp[2].' at '.$ndate_time;
}

