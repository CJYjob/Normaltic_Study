<?php
// 사용자 정보를 입력받아,
    // Table Name
    // Fields Array(전체 Fields 일 경우 NULL 입력)
    // Values Array
// INSERT 문을 실행하고,
// 결과값을 반환한다. 

function mysqli_insert($table_name, $fields, $values) {

    // DB 연결
    require_once 'db_conn.php';

    // 입력받은 정보로 부터 SQL Query 작성
    $fields_string = "(";
    $values_string = "(";

    for($i=0;$i<count($values);$i++){
        if($i===0) {
            $fields_string .= '`'.$fields[$i].'`';
            $values_string .= "'".$values[$i]."'";
        } else if($i!==0){
            $fields_string .= ', `'.$fields[$i].'`';
            $values_string .= ", '".$values[$i]."'";
        }
    }

    $fields_string .= $fields[$i].')';
    $values_string .= $values[$i].')';

    if (isset($fields)){
        $sql = 'INSERT INTO ';
        $sql .= '`'.$table_name.'` ';
        $sql .= $fields_string.' ';
        $sql .= 'VALUES '.$values_string.';';
    } else {
        $sql = 'INSERT INTO ';
        $sql .= '`'.$table_name.'` ';
        $sql .= 'VALUES '.$values_string.';';
    }

    // Query 실행
    $result = mysqli_query($db_conn, $sql);

    // DB 연결 해제
    mysqli_close($db_conn);

    // 결과값 반환
    return $result;
}
?>