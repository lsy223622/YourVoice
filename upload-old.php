<?php
var_dump($_FILES);
$files = [];
foreach ($_FILES as $fileInfo) {
    $files[] = upload_file($fileInfo);
}
var_dump($files);
function upload_file($fileInfo)
{
    $mp3Ext = ['mp3'];
    if ($fileInfo['error'] === 0) {
        $ext = strtolower(pathinfo($fileInfo['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $mp3Ext)) {
            return "文件非法类型";
        }
        $destName = "./voice.mp3";
        if (!move_uploaded_file($fileInfo['tmp_name'], $destName)) {
            return "文件上传失败！";
        }
        return "文件上传成功！";
    } else {
        switch ($fileInfo['error']) {
            case 1:
                echo '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值！';
                break;
            case 2:
                echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值！';
                break;
            case 3:
                echo '文件只有部分被上传！';
                break;
            case 4:
                echo '没有文件被上传！';
                break;
        }
    }
}
