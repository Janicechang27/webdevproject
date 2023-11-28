<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Syllabus</title>
</head>

<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    </br><br />
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject"> <!-- HTML INPUT for Drop Down Type menu -->
                        <?php
                        include_once("../dbconnection/mysqlconfig_connection.php"); //include code to connect to connect to database
                        $query = "SELECT * FROM tblsubjects";
                        $result = mysqli_query($dbc, $query);
                        while ($res = mysqli_fetch_array($result)) { //loop to display all subject as options in the drop-down menu
                            echo "<option value=\"" . $res['subject_id'] . "\">"; //Note that the value attribute contains the ID of the subject
                            echo $res['subject_name']; //display the actual subject's name in the drop-down option
                            echo "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"  name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

</body>

</html>