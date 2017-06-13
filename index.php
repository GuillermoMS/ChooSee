<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_src_model . 'model.php');
require_once(PATH_other.'function.php');
require_once(PATH_other.'classs.php');
if(!session_id()) @ session_start();
error_reporting(0);
?>

<!doctype html>
<html>

<head>
    <?php
        require_once(PATH_other . 'head.php');
    ?>
</head>
<body>

<?php
if(isset($_SESSION['login']) && $_SESSION['login']==1){
    // Header body
    $errorLogin=0;
    require_once(PATH_src_view . 'v_header_log.php');
    // Cont body
    require_once(PATH_src_view . 'v_index_log.php');

}else {
    session_destroy();
    // Header body
    $errorLogin=0;
    require_once(PATH_src_view . 'v_header.php');
    // Cont body
    require_once(PATH_src_view . 'v_index.php');
}
// Footer
require_once(PATH_src_view . 'v_footer.php');
?>

</body>
</html>