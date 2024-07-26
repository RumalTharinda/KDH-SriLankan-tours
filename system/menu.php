<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= SYSTEM_PATH ?>index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box icon-large"></i><span>Messages</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= SYSTEM_PATH ?>message.php">
                        <i class="bi bi-circle"></i><span>View Messages</span>
                    </a>
                </li>
                <li>


                </li>
                <li>


                </li>
                <li>


                </li>

            </ul>
        </li><!-- End Components Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Subscribe-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box icon-large"></i><span>Subscribe</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Subscribe-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= SYSTEM_PATH ?>subscribe.php">
                        <i class="bi bi-circle"></i><span>View Subscribe</span>
                    </a>
                </li>
                <li>


                </li>
                <li>


                </li>
                <li>


                </li>

            </ul>
        </li><!-- End Components Nav -->




    </ul>

</aside><!-- End Sidebar-->