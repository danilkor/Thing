<?php

function getRandRowsSQL($table_name, $key_name, $real_count, $count)
{
    // Check the number to the maximum
    if( $count > $real_count ) $count = $real_count;
    $sql = '';
    if( $count > 0 ){
        // Create an array of unique positions
        $pos = array();
        $pos[0] = rand(1, $real_count);
        $i = 1;
        while( $i < $count ){
            $pos[$i] = rand(1, $real_count);
            for( $j = 0; $j < $i; $j++ ){
                $is_unique = ($pos[$j] != $pos[$i]);
                if( !$is_unique ) break;
            }
            if( $is_unique ) $i++;
        }
        // Build SQL
        for( $i = 0; $i < $count; $i++ ){
            $sql .=
                'SELECT ' . $key_name . ' FROM ' . $table_name .
                ' LIMIT 1 OFFSET ' . $pos[$i] . ' INTO @id' . $i . ";\n";
        }
        $sql .= 'SELECT imgName, content, creator, creationDate FROM ' . $table_name . ' WHERE ' . $key_name . ' IN (@id0';
        for( $i = 1; $i < $count; $i++ ){
            $sql .= ', @id' . $i;
        }
        $sql .= ');';
    }
    return $sql;
}

function sqlFromStart($ids, $count){
    $sql = "SELECT imgName, content, creator, creationDate FROM facts WHERE ";
    // var_dump($ids);
    // $sql .= "id = ".$ids["row"]["id"];
    foreach($ids as $row){
        // print_r($row);
        $sql .= "id = " . $row["id"]." OR ";
    }
    $sql = substr($sql,0,-3);

    return $sql;
}


// $realCount = $connect->query("COUNT(*) FROM facts");
// $sql = getRandRowsSQL('facts', 'id', 2, $factsOnOnePage);
// $sql = "SELECT imgName, content, creator, creationDate FROM facts";
// $sql = "SELECT * FROM facts";

$sql = "SELECT id FROM facts LIMIT 100";
$ids = $connect->query($sql);

$sql = sqlFromStart($ids, $factsOnOnePage);
// $ids = $connect->query($sql);



// echo ($sql);

$result = $connect->query($sql);

$colCounter = 0;
foreach ($result as $row) {
    $imgName = $row["imgName"];
    $content = $row["content"];
    $creator = $row["creator"];
    $creationDate = $row["creationDate"];

    $colCounter++;

    $result2 = $connect->query("SELECT avatar FROM users WHERE username = '" . $creator."'");
    foreach ($result2 as $row) {
        $avId = $row["avatar"];
    }
    echo ('
        <div class="col">
            <div class="card shadow-sm">
                <img src="../../img/facts/'.$imgName.'" class=" card-img-top">
                <div class="card-body">
                    <p class="card-text">'.$content.'</p>
                    <div class="justify-content-between align-items-center">
                        <span class="row">
                            <span class="col-9">
                                <small class="text-muted">Posted by <strong>'.$creator.'</strong></small><br>
                                <small class="text-muted">'.new_time(strtotime($creationDate)).'</small>
                            </span>
                            <span class="col-3">
                                <img src="../../img/avatars.'.$avId.'.png">
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    ');
    if($colCounter%10 == 0){
        echo('</>');
        if($colCounter + 1 != count($result && $colCounter + 1 < $factsOnOnePage)){
            echo('<div class="col">');
        }
    }
    if($colCounter + 1 >= $factsOnOnePage){
        break;
    }
}
