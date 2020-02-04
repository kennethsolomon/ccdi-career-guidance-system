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
        Register Student
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

<?php include_once('./modals/registerStudentModal.php') ?>
<?php include_once('./modals/viewStudentModal.php') ?>