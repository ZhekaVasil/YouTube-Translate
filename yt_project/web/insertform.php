<?php

if(isset($_POST['idvid'])) {
    $mas = explode('v=', $_POST['idvid']);
    $part = $mas[1];
    $id = substr($part, 0, 11);
    $mysqli = new mysqli('localhost', 'root', '', 'project');
    $mysqli->set_charset("utf8");
    $res = $mysqli->query("SELECT `#` FROM `vid` WHERE `idvid` LIKE '" . $id . "'");
    $res->data_seek(0);
    $row = $res->fetch_assoc();

    if ($row['#']) {
        $res2 = $mysqli->query("SELECT `audurl` FROM `vid` WHERE `idvid` LIKE '" . $id . "'");
        $row2 = $res2->fetch_assoc();
        if ($row2['audurl'] == 'null') {
            echo "<div class='popup'>К видео уже добавлены субтитры<br><a href='http://hack/watch.php?idvid=" . $id . '&audurl=null' . "'><span class='playBtn'></span></a></div>";
        } else {
            echo "<div class='popup'>К видео уже добавлены субтитры<br><a href='http://hack/watch.php?idvid=" . $id . '&audurl=true' . "'><span class='playBtn'></span></a></div>";
        }

        exit();
    }

    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
        if (!is_dir('preview/' . $id)) {
            mkdir('preview/' . $id);
        }
        move_uploaded_file($_FILES["file"]["tmp_name"], "preview/" . $id . "/audio.mp3");


    }
}


