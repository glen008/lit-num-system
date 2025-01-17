<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include_once "../bootstrap/css.php"?>

</head>

<body class="sidebar-mini skin-yellow fixed" data-new-gr-c-s-check-loaded="14.1111.0" data-gr-ext-installed
    style="height: auto; min-height: 100%;">

    <div class="wrapper">

        <header class="main-header">
            <?php include_once("../CommonContent/HeaderContent.php"); ?>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php include_once "../CommonContent/MainSideContent.php"?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1744.3px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <b style="color:#3D3848;">Manage Class</b>

                </h1>
            </section>
            <br>

            <!-- Main content -->
            <section class="content" id="classTable">
                <?php include_once("../PagesContent/ClassContent/TableClass/ClassTableContent.php"); ?>
            </section>

            <section class="content" id="add-class-info">
                <form role="form" action="../PagesContent/ClassContent/ActionFolder/AddClassAction.php" method="post"
                    id="form-add-class" class="container well">

                    <?php include_once("../PagesContent/ClassContent/AddClassFolder/AddClassInfo.php")?>
                </form>

            </section>


        </div>
        <!-- ./wrapper -->

        <?php include_once("../bootstrap/js.php");
            include_once("../PagesContent/ClassContent/ClassEssentials/ClassJquery.php");
        ?>
</body>

</html>