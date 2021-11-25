<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
<?php include_once('../authen.php') ?>
<?php
if (isset($_POST['submit'])) {
    $image_name = $_POST['data_file'];
    if ($_FILES['file']['name'] != '') {
        $temp =  explode('.', $_FILES['file']['name']);
        $image_name = round(microtime(true) * 9999) . '.' . end($temp);
        $url_upload = '../../../assets/images/profile/' . $image_name;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
            // D:/xampp/htdocs\it\assets/images/profile/01.jpg
            $image_delete = ROOT_PATH . $base_path_profile . pathinfo($_POST['data_file'], PATHINFO_BASENAME);
            unlink($image_delete);
        } else {
            echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>';
            header('Refresh:0; url=index.php');
        }
    }

    //UPDATE `teacher` SET `img` = '16366879721928.jpg', `skills_value1` = '90', `Experience` = 'test' WHERE `teacher`.`id` = 4;
    $sql = "UPDATE `teacher` 
                SET name = '" . $_POST['firstname'] . "', 
                    lastname = '" . $_POST['lastname'] . "', 
                    edu_back1 = '" . $_POST['education'] . "',  
                    edu_back2 = '" . $_POST['education2'] . "', 
                    tel = '" . $_POST['tel'] . "', 
                    skills_name1 = '" . $_POST['skill_name1'] . "',  
                    skills_value1 =  '" . $_POST['skill_value1'] . "',  
                    skills_name2 = '" . $_POST['skill_name2'] . "',   
                    skills_value2 =  '" . $_POST['skill_value2'] . "', 
                    skills_name3 = '" . $_POST['skill_name3'] . "',  
                    skills_value3 =  '" . $_POST['skill_value3'] . "',  
                    skills_name4 = '" . $_POST['skill_name4'] . "', 
                    skills_value4 =  '" . $_POST['skill_value4'] . "',  
                    Experience = '" . $_POST['Experience'] . "', 
                    img = '" . $image_name . "'
                    WHERE `id` = '" . $_POST['id'] . "'; ";

    $result = $conn->query($sql) or die($conn->error);
    if ($result) {
        echo '<script> alert("แก้ไขข้อมูลสำเร็จ") </script>';
        header('Refresh:0; url=index.php');
    }
} else {
    header('Refresh:0; url=index.php');
}
?>