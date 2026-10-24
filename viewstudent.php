
<?php

include 'connect.php';

/* =========================================
   SEARCH CUSTOMER
========================================= */

$search = "";

if (isset($_GET['search'])) {

    $search = mysqli_real_escape_string(
        $db_con,
        $_GET['search']
    );

}


/* =========================================
   CUSTOMER QUERY
========================================= */

if ($search != "") {

    $sql = mysqli_query(
        $db_con,
        "SELECT * FROM students
         WHERE name LIKE '%$search%'
		  OR age LIKE '%$search%'
		  OR  address LIKE '%$search%'
         OR dob LIKE '%$search%'"
    );

	
	
	
} else {

    $sql = mysqli_query(
        $db_con,
        "SELECT * FROM students"
    );

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>AL-AMIN ACADEMY | student</title>

    <link rel="stylesheet"
          href="css/style.css">

</head>


<body>


<!-- =========================================
     HEADER
========================================= -->

 <?php include("includes/header.php")?>



<!-- =========================================
     CUSTOMER SECTION
========================================= -->

<main class="customer-page">


    <div class="customer-header">

        <div>

            <h1>student Management</h1>

            <p>
                View and manage teacher  records.
            </p>

        </div>


        <a href="createstudent.php"
           class="add-student-btn">

            + Add student

        </a>

    </div>



    <!-- =====================================
         SEARCH
    ====================================== -->

    <div class="customer-search">

        <form method="GET"
              action="viewstudent.php">

            <input
                type="text"
                name="search"
                placeholder="Search teacher by name, age, address or dob..."
                value="<?php echo htmlentities($search); ?>"
            >


            <button type="submit">
                Search
            </button>


            <?php if ($search != "") { ?>

                <a href="viewstudent.php"
                   class="clear-search">

                    Clear

                </a>

            <?php } ?>

        </form>

    </div>



    <!-- =====================================
         CUSTOMER TABLE
    ====================================== -->

    <div class="customer-table-card">


        <!-- CUSTOMER LIST HEADER -->

        <div class="table-title">

            <h2>
                teacher List
            </h2>


            <a href="exportcustomer.php<?php
                echo ($search != "")
                    ? '?search=' . urlencode($search)
                    : '';
            ?>"
               class="export-excel-btn">

                ðŸ“Š Export Excel

            </a>

        </div>


        <?php if ($search != "") { ?>

            <p class="search-result-text">

                Search results for:

                <strong>
                    <?php echo htmlentities($search); ?>
                </strong>

            </p>

        <?php } ?>


        <div class="table-responsive">

            <table class="customer-table">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Name</th>

                        <th>Age</th>
						
						 <th>address</th>

                        <th>dob</th>


                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


                <?php

                $cnt = 1;

                if (mysqli_num_rows($sql) > 0) {

                    while ($row = mysqli_fetch_array($sql)) {

                ?>


                    <tr>

                        <td>

                            <?php echo $cnt; ?>

                        </td>


                        <td class="student-name">

                            <?php

                            echo htmlentities(
                                $row['name']
                            );

                            ?>

                        </td>


                        <td>

                            <?php

                            echo htmlentities(
                                $row['age']
                            );

                            ?>

                        </td>


                        <td>

                            <?php

                            echo htmlentities(
                                $row['address']
                            );

                            ?>

                        </td>


                        <td class="dob">

                            â‚¦<?php

                            echo htmlentities(
                                $row['dob']
                            );

                            ?>

                   

                        </td>


                        <td>

                            <div class="action-buttons">


                                <a
                                    href="editstudent.php?id=<?php echo $row['id']; ?>"
                                    class="edit-btn"
                                >

                                    Edit

                                </a>


                                <a
                                    href="deletestudent.php?id=<?php echo $row['id']; ?>"
                                    class="delete-btn"
                                    onclick="return confirm('Are you sure you want to delete this customer?');"
                                >

                                    Delete

                                </a>


                            </div>

                        </td>

                    </tr>


                <?php

                        $cnt++;

                    }

                } else {

                ?>


                    <tr>

                        <td
                            colspan="6"
                            class="no-customer"
                        >

                            No teacher records found.

                        </td>

                    </tr>


                <?php } ?>


                </tbody>

            </table>

        </div>

    </div>


</main>



<!-- =========================================
     FOOTER
========================================= -->

 <?php include("includes/footer.php")?>
</body>

</html>
