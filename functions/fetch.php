<?php
    $query = "SELECT * FROM tblsubjects right join tblsyllabus on tblsubjects.subject_id = tblsyllabus.subject_id";
    $result = mysqli_query($dbc, $query);
?>