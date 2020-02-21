<?php
$id = $_GET['id'];

$sql = "SELECT * FROM content order by contentId DESC LIMIT 3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row["title"];
        $content = $row["content"];
        $date = $row["date"];
        $author = $row["author"];
        $contentId = $row["contentId"];

        echo '
        <form action="./includes/announcementControl.php?'.$id.'" method="POST">
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <input type="hidden" class="form-control" id="id" name="id" value=' . $id . '>
                        <input type="hidden" class="form-control" id="contentId" name="contentId" value=' . $contentId . '>
                        <input type="hidden" class="form-control" id="author" name="author" value=' . $author . '>
                        <input type="hidden" class="form-control" id="author" name="date" value=' . $date . '>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" value="'.$title.'">
                                </div>
                            </div>
                        </div>
                        <!-- End of Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="content">Content :</label>
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10">'.$content.'</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- End of Row -->
                        <button name="btnAnnouncementUpdate" class="btn btn-success" type="submit">Update</button>
                        <button name="btnAnnouncementDelete" class="btn btn-danger" type="submit">Delete</button>
                    </div>
                    <!-- End of Card Body -->
                </div>
            </div>
            <!-- End of Result Container -->
        </form>
        <!-- End of Form -->
        ';
    }
} else {
    echo 'No Result';
}

