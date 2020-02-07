<!-- Career Guidance Sidebar -->
<?php
if ($_SESSION['userLevel'] == 0) {
?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./home.php?id=<?php echo $_GET['id'] ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">CG Panel<sup>CCDI</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="./home.php?id=<?php echo $_GET['id'] ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <div class="sidebar-heading">
            Student Info
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#studentAction" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Student Actions</span>
            </a>
            <div id="studentAction" class="collapse" aria-labelledby="headingTwo" data-parent="#studentAction">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Student Options:</h6>
                    <a class="collapse-item" data-toggle="modal" data-target="#registerStudentModal" href="#">Register Student</a>
                    <a class="collapse-item" data-toggle="modal" data-target="#viewStudentModal" href="#">View Info Student</a>
                    <a class="collapse-item" href="./phoneNumbers.php?id=<?php echo $_GET['id'] ?>">Text Student</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
<?php
}
?>
<!-- End of Career Guidance Sidebar -->

<!-- Admin Sidebar -->
<?php
if ($_SESSION['userLevel'] == 1) {
?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./admin.php?id=<?php echo $_GET['id'] ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">ADMIN<sup>CCDI</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="./admin.php?id=<?php echo $_GET['id'] ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>


        <div class="sidebar-heading">
            Admin Control
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminAction" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Admin Actions</span>
            </a>
            <div id="adminAction" class="collapse" aria-labelledby="headingTwo" data-parent="#adminAction">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin Options:</h6>
                    <a class="collapse-item" data-toggle="modal" data-target="#resetDataModal" href="#">Reset Data</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


        <div class="sidebar-heading">
            Question Info
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#questionAction" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Question Actions</span>
            </a>
            <div id="questionAction" class="collapse" aria-labelledby="headingTwo" data-parent="#questionAction">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Student Options:</h6>
                    <a class="collapse-item" data-toggle="modal" data-target="#addQuestionModal" href="#">Add Question</a>
                    <a class="collapse-item" data-toggle="modal" data-target="#viewQuestionModal" href="#">View Question</a>
                    <a class="collapse-item" data-toggle="modal" data-target="#deleteAllQuestionModal" href="#">Delete all Question</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
<?php
}
?>
<!-- End of Admin Sidebar -->

<?php include_once('./modals/registerStudentModal.php') ?>
<?php include_once('./modals/viewStudentModal.php') ?>

<?php include_once('./modals/addQuestionModal.php') ?>
<?php include_once('./modals/viewQuestionModal.php') ?>
<?php include_once('./modals/deleteAllQuestionModal.php') ?>

<?php include_once('./modals/resetDataModal.php') ?>