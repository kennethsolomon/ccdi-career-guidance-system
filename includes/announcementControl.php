<?php
session_start();

include_once('./connection.php');

if(isset($_POST['btnAnnouncementUpdate'])){
    $id = $_POST['id'];
    $contentId = $_POST['contentId'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fullContent = str_replace('\'', '\'\'', $content);

    $sql = "UPDATE content SET 
    title='$title', 
    content='$fullContent'
    WHERE 
    contentId='$contentId'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = 'Announcement Update Successfully!';
    $url = "./../announcement.php?id=$id";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
} else {
    echo "Error updating record: " . $conn->error;
}
}

if(isset($_POST['btnAnnouncementDelete'])){
    $id = $_POST['id'];
    $contentId = $_POST['contentId'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "DELETE FROM content WHERE contentId=$contentId";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = 'Announcement Deleted Successfully!';
    $url = "./../announcement.php?id=$id";
    $url = str_replace(PHP_EOL, '', $url);
    header("Location: $url");
} else {
    echo "Error updating record: " . $conn->error;
}

}

if(isset($_POST['btnAnnouncementAdd'])){
    $id = $_POST['id'];
    $author = 'Admin'; // Static for now
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fullContent = str_replace('\'', '\'\'', $content);

    $sql = "INSERT INTO content (author, title, content) VALUES ('$author','$title','$fullContent')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = 'Announcement Added Successfully!';
            $url = "./../announcement.php?id=$id";
            $url = str_replace(PHP_EOL, '', $url);
            header("Location: $url");
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
}






