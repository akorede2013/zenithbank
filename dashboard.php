<?php

include("connect.php");

/* =========================================
   DASHBOARD STATISTICS
========================================= */

/* PRINCIPAL COUNT */
$principal_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM principal"
);

$principal_data = mysqli_fetch_assoc($principal_result);
$total_principal = $principal_data['total'];


/* TEACHER COUNT */
$teacher_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM teacher"
);

$teacher_data = mysqli_fetch_assoc($teacher_result);
$total_teacher = $teacher_data['total'];


/* STUDENT COUNT */
$student_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM students"
);

$student_data = mysqli_fetch_assoc($student_result);
$total_student = $student_data['total'];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AL-AMIN ACADEMY | Dashboard</title>

    <link
        rel="stylesheet"
        href="css/style.css"
    >

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

 <?php include("includes/header.php")?>


<!-- =========================================
     MAIN DASHBOARD
========================================= -->

<main class="dashboard">


    <!-- =====================================
         DASHBOARD HEADER
    ====================================== -->

    <section class="dashboard-header">

        <div>

            <h1>
                school Management System
            </h1>

            <p>
                Welcome to the al-amin dashboard.
            </p>

        </div>

    </section>



    <!-- =====================================
         STATISTICS CARDS
    ====================================== -->

    <section class="stats">


        <!-- principal -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128100;
            </div>


            <div>

                <h3>
                    principal
                </h3>

                <p>
                    <?php echo $total_principal; ?>
                </p>

            </div>

        </div>



        <!-- teacher -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128188;
            </div>


            <div>

                <h3>
                    teacher
                </h3>

                <p>
                    <?php echo $total_teacher; ?>
                </p>

            </div>

        </div>



        <!-- student -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128272;
            </div>


            <div>

                <h3>
                    student
                </h3>

                <p>
                    <?php echo $total_student; ?>
                </p>

            </div>

        </div>


    </section>



    <!-- =====================================
         QUICK ACTIONS
    ====================================== -->

    <section class="quick-section">

        <h2>
            Quick Actions
        </h2>


        <div class="quick-actions">


            <!-- principal -->

            <a
                href="viewprincipal.php"
                class="action-card"
            >

                <span>
                    &#128100;
                </span>

                <h3>
                    principal
                </h3>

                <p>
                    Add, edit, view and delete principal.
                </p>

            </a>



            <!-- teacher -->

            <a
                href="viewteacher.php"
                class="action-card"
            >

                <span>
                    &#128188;
                </span>

                <h3>
                    teacher
                </h3>

                <p>
                    AL-AMIN teacher records.
                </p>

            </a>



            <!-- student -->

            <a
                href="viewstudent.php"
                class="action-card"
            >

                <span>
                    &#128272;
                </span>

                <h3>
                    student
                </h3>

                <p>
                    student records.
                </p>

            </a>


        </div>

    </section>


</main>



<!-- =========================================
     FOOTER
========================================= -->

 <?php include("includes/footer.php")?>


</body>

</html>