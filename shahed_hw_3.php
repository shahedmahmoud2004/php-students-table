
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shahed Website - Assignment 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header, footer {
            background-color: #333;
            color: white;
            padding: 15px;
        }
        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto 20px auto;
        }
        th, td {
            border-bottom: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }
        th {
            font-weight: bold;
            background-color: #fff;
        }
        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) {
            background-color: #fff;
        }
        p {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <h1>Shahed Website</h1>
    </header>

    <nav>
        Assignment 3 - Students Table
    </nav>

    <h2>Students Table</h2>

    <?php
            $students = [
                ['stdNo' => '20003','stdName' => 'Ahmed Ali','stdEmail' => 'ahmed@gmail.com','stdGAP' => 88.7],
                ['stdNo' => '30304','stdName' => 'Mona Khalid','stdEmail' => 'mona@gmail.com','stdGAP' => 78.5],
                ['stdNo' => '10002','stdName' => 'Bilal Hmaza','stdEmail' => 'bilal@gmail.com','stdGAP' => 98.7],
                ['stdNo' => '10005','stdName' => 'Said Ali','stdEmail' => 'said@gmail.com','stdGAP' => 98.7],
                ['stdNo' => '10007','stdName' => 'Mohammed Ahmed','stdEmail' => 'mohamed@gmail.com','stdGAP' => 98.7]
            ];
    ?>
                    

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Student No</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach($students as $std){
                ?>

                <tr>
                <td><?php echo $i?></td>
                <td><?php echo $std['stdNo']?></td>
                <td><?php echo $std['stdName']?></td>
                <td><?php echo $std['stdEmail']?></td>
                <td><?php echo $std['stdGAP']?></td>
                </tr>

            <?php $i++;
        }?>

        <tr>
            <td>
                <?php
                echo "Total Students: ";
                ?> 
            </td> 
            <td>
                <?php
                echo count($students);
                ?> 
            </td> 
        </tr>

        </tbody>
    </table>


    <footer>
        <h3>Thank you for visit Shahed Website 😊</h3>
    </footer>

</body>
</html>
