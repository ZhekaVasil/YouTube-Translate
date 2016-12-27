<?php
if (isset($_POST['pageIndex'])){
    $pageIndex = $_POST['pageIndex'];
    $mysqli = new mysqli('localhost','root','','project');
    $mysqli->set_charset("utf8");
    $res = $mysqli->query("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT $pageIndex, 12");
    $res->data_seek(0);
    $arr = '';
    $str = '';
    while($row =$res->fetch_assoc() ){

        if ($arr != '') {$arr .= ',';}
        $str =
            "<div class='demo-card-wide mdl-card mdl-shadow--2dp'>".
            "<div class='mdl-card__title'>".
            "<a href='watch?idvid=".$row['idvid']."&audurl=".$row['audurl']."'>".
            "<img src='".$row['thumbnail']."'/>".
            "</a>".
            "</div>".
            "<div class='mdl-card__supporting-text' title='".$row['title']."'>".
            "<h2 class='mdl-card__title-text'>".$row['title']."</h2>".
            "</div>".
            "</div>";
        $str_clear = str_replace('"',"'", $str);
        $arr .= '"'.$str_clear.'"';
    };

    $json = '['.$arr.']';
    echo $json;
    $res->close();
    $mysqli->close();
    exit();
}

if (isset($_POST['pageIndexTop'])){
    $pageIndex = $_POST['pageIndexTop'];
    $mysqli = new mysqli('localhost','root','','project');
    $mysqli->set_charset("utf8");
    $res = $mysqli->query("SELECT * FROM `vid` ORDER BY `vid`.`#` DESC LIMIT $pageIndex, 12");
    $res->data_seek(0);
    $arr = '';
    $str = '';
    while($row =$res->fetch_assoc() ){

        if ($arr != '') {$arr .= ',';}
        $str =
            "<div class='wrap' data-id='".$row['#']."'>".
            "<a href='../watch?idvid=".$row['idvid']."&audurl=".$row['audurl']."' target='_blank'>".
            "<img src='".$row['thumbnail']."' style='width:100%'/>".
            "</a>".
            "<h2 class='mdl-card__title-text'>".
            $row['title'].
            "</h2>".
            "</div>";
        $str_clear = str_replace('"',"'", $str);
        $arr .= '"'.$str_clear.'"';
    };
    $json = '['.$arr.']';
    echo $json;
    $res->close();
    $mysqli->close();
    exit();
}
if (file_get_contents('php://input')){
    $json = file_get_contents('php://input');
    $arr = json_decode($json);
    $mysqli = new mysqli('localhost','root','','project');
    $mysqli->set_charset("utf8");
    $del = $mysqli->query('TRUNCATE `top`');
    $res = $mysqli->query("INSERT INTO `top` (`#`, `idvid`, `thumbnail`, `audurl`, `title`, `descript`) SELECT * FROM `vid` WHERE `#` IN (".implode(",", $arr).");");
    $mysqli->close();
}