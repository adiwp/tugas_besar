<?php
session_start();
if(session_destroy()) {
    header("Location: http://tugas_besar.test");
}
?>