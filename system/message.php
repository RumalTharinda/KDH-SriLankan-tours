<?php
include 'header.php';
include 'menu.php';
?>




<main id="main" class="main">

    <div class="pagetitle">
        <h1>Messages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= SYSTEM_PATH ?>index.php">Message</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">



        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>


                <?php
             
            
                extract($_POST);
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$action == 'delete') {
                    $db = dbconn();
                    $sql = "DELETE FROM tbl_message WHERE id = '$id' ";
                    $db->query($sql);
                }
                ?>


                <?php
                $db = dbconn();

                // Handle search query
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];

                    $search = dataclean($search);

                    // Construct the SQL query with the search condition for user account name and customer name
                    $sql = "SELECT * FROM tbl_message
            
            WHERE tbl_message.name LIKE '%$search%' 
           
            OR tbl_message.email LIKE '%$search%'
            OR tbl_message.phone LIKE '%$search%'";    
            
                } else {
                    // Default query to fetch all customers
                    $sql = "SELECT * FROM tbl_message";
                }

                // Handle sorting
                if (isset($_GET['sort']) && $_GET['sort'] === 'alphabetical') {
                    $sql = "SELECT * FROM tbl_message  ORDER BY id ASC";
                }


                $result = $db->query($sql);
                ?>





                <section class="section">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Messages</h5>


                            <!-- Search bar && (A-Z)sort -->
                            <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>" class="datatable-search-form">
                                <div class="datatable-search">
                                    <input class="datatable-input" name="search" placeholder="Search..." type="search" title="Search within table" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <button type="submit" class="btn btn-primary" name="sort" value="alphabetical">Sort by (A-Z)</button>
                                </div>
                            </form>


                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 5%">#</th>
                                            <th data-sortable="true" style="width: 20%">Name</th>
                                            <th data-sortable="true" style="width: 20%">Email</th>
                                            <th data-sortable="true" style="width: 10%">Phone</th>
                                            <th data-sortable="true" style="width: 40%">Message</th>
                                            
                                                                                
                                            <th data-sortable="true" style="width: 5%;"></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            $i = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                ?>
                                                <tr data-index="0">
                                                    <td><?= $i ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td><?= $row['email'] ?></td>
                                                    <td><?= $row['phone'] ?></td>
                                                    <td><?= $row['message'] ?></td>                                            



                                                    <td>
                                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row g-3" novalidate>
                                                            <input type="hidden" name="id" value="<?= $row['id'] ?>"> 
                                                            <button class="btn btn-danger" type="submit" name="action" value="delete" >DELETE</button>
                                                        </form>    
                                                    </td>

                                                    


                                                </tr>

                                                <?php
                                                $i++;
                                            }
                                        } else {
                                            // No records found
                                            echo '<tr><td colspan="4">No records found.</td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </section>





                <section class="section">

                    <div class="card">
                       
                    </div>
            </div>
        </div>

    </section>


</section>

</main>







<?php
include 'footer.php';
?>