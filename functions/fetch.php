<?php
    $query = "SELECT * FROM tblsubjects RIGHT JOIN tblsyllabus on tblsubjects.subject_id = tblsyllabus.subject_id";
    $result = mysqli_query($dbc, $query);
?>