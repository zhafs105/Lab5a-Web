<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Zhafran Faiq Bin Shahri";
        $matric_num = "AI220142";
        $course = "BIS";
        $year_of_study = 3;
        $address = "Taman Gombak, 68100 Batu Caves, Selangor";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td> <?php echo "$matric_num"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td> <?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td> <?php echo "$year_of_study"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td> <?php echo "$address"; ?></td>
        </tr>
    </table>
    
</body>
</html>
