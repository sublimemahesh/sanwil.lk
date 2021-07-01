<?php
include '.././class/include.php';

if (isset($_POST['create'])) {

    $COMMENT = new Comments(NULL);
    $VALID = new Validator();

    $COMMENT->name = $_POST['name'];
    $COMMENT->title = $_POST['title'];
    $COMMENT->country = $_POST['country'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->is_active = $_POST['active'];

    $dir_dest = '.././upload/comments/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 146;
        $handle->image_y = 146;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COMMENT->image_name = $imgName;
    $COMMENT->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}



if (isset($_POST['update'])) {
    $dir_dest = '.././upload/comments/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 146;
        $handle->image_y = 146;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COMMENT = new Comments($_POST['id']);

    $COMMENT->image_name = $_POST['oldImageName'];
    $COMMENT->name = $_POST['name'];
    $COMMENT->title = $_POST['title'];
    $COMMENT->country = $_POST['country'];
    $COMMENT->comment = $_POST['comment'];
    $COMMENT->is_active = $_POST['active'];

    $COMMENT->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $COMMENT = Comments::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}