<?php
    include_once('connection.php');
    if ($mobile = $_GET['mobile']) {
        echo $query_reg = "delete from registration where mobile='" . $mobile . "'";

        $conn->exec($query_reg);
        echo "Record deleted successfully";

        header('location:../pages/userInfo.php');
    } else if ($vid = $_GET['vid']) {
        echo $query_vd = "delete from visitordata where vid='" . $vid . "'";

        $conn->exec($query_vd);
        echo "Record deleted successfully";

        header('location:../pages/admin.php');
    }
?>

