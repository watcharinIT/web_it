<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
<?php include_once('../authen.php') ?>

<?php
if (isset($_POST['submit'])) {
    // $tag = 'all,'. join(',', $_POST['tags']);
    // $status = isset($_POST['status']) ? 'true': 'false';
    $temp =  explode('.', $_FILES['file']['name']);
    $new_name = round(microtime(true) * 9999) . '.' . end($temp);
    $url_upload = '../../../assets/images/profile/' . $new_name;
    if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {

        // INSERT INTO `teacher` (`id`, `img`, `name`, `lastname`, `edu_back1`, `edu_back2`, `tel`, `skills_name1`, `skills_value1`, `skills_name2`, `skills_value2`, `skills_name3`, `skills_value3`, `skills_name4`, `skills_value4`, `Experience`) 
        // VALUES (NULL, '01', 'test', 'insert', '5555', NULL, '1111111', 'เหล่ท่อ', '100', NULL, NULL, NULL, NULL, NULL, NULL, 'ไม่มีอะไร');


        $sql = "INSERT INTO `teacher` (`img`, `name`, `lastname`, `edu_back1`, `edu_back2`, `tel`, `skills_name1`, `skills_value1`, `skills_name2`, `skills_value2`, `skills_name3`, `skills_value3`, `skills_name4`, `skills_value4`, `Experience`) 
                    VALUES ('" . $new_name . "', 
                            '" . $_POST['firstname'] . "', 
                            '" . $_POST['lastname'] . "',  
                            '" . $_POST['education'] . "',
                            '" . $_POST['education2'] . "', 
                            '" . $_POST['tel'] . "', 
                            '" . $_POST['skill_name1'] . "', 
                            '" . $_POST['skill_value1'] . "', 
                            '" . $_POST['skill_name2'] . "', 
                            '" . $_POST['skill_value2'] . "', 
                            '" . $_POST['skill_name3'] . "', 
                            '" . $_POST['skill_value3'] . "', 
                            '" . $_POST['skill_name4'] . "', 
                            '" . $_POST['skill_value4'] . "', 
                            '" . $_POST['Experience'] . "')";
        $result = $conn->query($sql) or die($conn->error);
        if ($result) {
            echo '<script> alert("เพิ่มข้อมูลสำเร็จ") </script>';
            header('Refresh:0; url=index.php');
        }
    } else {
        echo 'No';
    }
} else {
    header('location:index.php');
}
?>