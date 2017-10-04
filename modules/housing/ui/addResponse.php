<!--Search and add members-->
<?php
$Key=$_GET['key'];
$PId=$_GET['pid'];


if (strlen($Key)>0) {
    $servername = "localhost";
    $username = "root";
    $password = "2110";
    $dbname = "wpl_housing";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT tbl_user.Email FROM tbl_user WHERE tbl_user.ID NOT IN(SELECT hms_assign.user_id FROM hms_assign) AND tbl_user.UniversityID = '".$Key."'";


    $hint="";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($res=$result->fetch_assoc()){
            if($hint==""){
                $hint=$res['Email'];

            }else{
                $hint=$hint.'<br />'.$res['Email'];

            }
        }
    }
    $sql2="SELECT hms_assign.user_id FROM hms_assign INNER JOIN tbl_user ON hms_assign.user_id=tbl_user.ID WHERE tbl_user.UniversityID='".$Key."'";

    $hint2="";
    $result2=$conn->query($sql2);
    if($result2->num_rows>0){
        while ($res2=$result2->fetch_assoc()) {
            if($hint2==""){
                $hint2=$res2['user_id'];
            }else{
                $hint2=$hint2.'<br />'.$res2['user_id'];
            }
        }
    }

    if ($hint==""&&$hint2=="") {
        echo "No Student Found";
    }
    elseif($hint==""&&$hint2!=""){
        echo $hint2.'<br />'." (Already Assigned)";
    }
    else{
        echo $hint;
    }

    $conn->close();
}
?>
