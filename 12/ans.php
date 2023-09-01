1.
$regist_day = date("Y-m-d (H:i)");

$upfile_name = $_FILES["upfile"]["name"]

if (!move_uploaded_file($upfile_tmp_name, $uploaded_file))

$con = mysqli_connect();
$sql = "insert into memberboard(id, name, subject, content, regist_day, file_name, file_type, file_copied)";

mysqli_query($con, $sql);

2.
$sql = "select * from memberboard order by num desc";

if($total_record % $scale == 0)

$start = (intval($page) - 1) * $scale;
mysqli_data_seek($result, $i);
$row = mysqli_fetch_assoc($result);

$name = $row["name"];
$subject = $row["subject"];
$regist_day = $row["regist_day"];
mysqli_close($con);

3.
$con = mysqli_connect();
$sql = "delete from memberboard where num=$num;"
mysqli_query($con, $sql);
