<?php
session_start();
session_destroy();
echo "<script>
$(document).ready(function() {
    Swal.fire({
        title: 'ออกจากระบบเรียบร้อยแล้ว !!',
        text: 'Data inserted successfully!',
        icon: 'success',
        timer: 2000,
        showConfirmButton: false
    });
})
</script>";
header("Location: index.php");	
?>