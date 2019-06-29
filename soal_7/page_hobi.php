<?php
include 'include/lib_fungsi.php';
if(DBMS::$kon){
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include 'head.php';
        ?>
    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
             <?php
             include 'head_2.php';
             include 'head_3.php';
             ?>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <?php
            if(isset($_GET['aksi'])){
                $aksi = $_GET['aksi'];
                if($aksi == 'tambah'){
                    include 'konten_hobi.php';
                }else if($aksi == 'edit'){
                    include 'konten_hobi.php';
                }else if($aksi == 'delete'){
                    include 'konten_hobi_delete.php';
                }
            }else{
                include 'konten_hobi.php';
            }
            ?>
            <!-- end container -->

            <?php
            include 'footer_2.php';
            ?>

        </div>
        <?php
        include 'footer_3.php';
        ?>
    </body>
</html>
<?php
}
?>