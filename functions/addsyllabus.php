<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Syllabus Data</title>
</head>

<body>
    <?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    if (isset($_POST['submit'])) {
        $code = $_POST['code'];
        $author = $_POST['author'];
        $subject = $_POST['subject'];

        if (empty($code) || empty($author)) {
            if (empty($code)) {
                echo "<font color = 'red'> object code field is empty.</font<br>";
            }

            if (empty($author)) {
                echo "<font color = 'red'> object name field is empty.</font<br>";
            }
            echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author,subject_id) VALUES ('$code', '$author', $subject);");

            echo "<font color='green'> Data added successfully.";
            echo "<br><a href='../index.php'>View Result</a>";
        }
    }

    ?>

</body>

</html>