<?php
if ($_SESSION['log'] == true) {
} else {
    echo "<script>alert('Gagal Login'); window.location.href='index.php'</script>";
}
