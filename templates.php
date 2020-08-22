
<textarea style="opacity: .01;" id="template1" name="" cols="30" rows="5">
<?php
$sql = "SELECT * FROM template where id=1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $content = $row['content'];
    }
}
echo $content;
?>
</textarea>
<textarea style="opacity: .01;" id="template2" name="" cols="30" rows="5">
<?php
$sql = "SELECT * FROM template where id=2";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $content = $row['content'];
    }
}
echo $content;
?>
</textarea>
<textarea style="opacity: .01;opacity: .01;" id="template3" name="" cols="30" rows="5">
<?php
$sql = "SELECT * FROM template where id=3";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $content = $row['content'];
    }
}
echo $content;
?>
</textarea>
