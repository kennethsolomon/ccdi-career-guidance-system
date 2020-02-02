<div class="row">
    <?php
    if ($geteNum == 0) {
        echo '
        The styling for this basic card example is created by using default Bootstrap utility classes.
        By using utility classes, the style of the card component can be easily modified with no need
        for any custom CSS!
        ';
    }
    ?>
</div>
<hr>
<?php
if ($geteNum == 0) {
    echo '
        <a href="exam.php?id=' . $id . '&eNum=' . $eNum . '" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-check"></i>
            </span>
            <span class="text">Start Exam</span>
        </a>
        ';
}

?>