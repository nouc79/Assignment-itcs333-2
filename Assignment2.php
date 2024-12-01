<?php
// To get our data
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Bring the data from the API
$response = file_get_contents($URL);
$data = json_decode($response, true); // Convert JSON 

$records = isset($data['records']) ? $data['records'] : die("ERROR FETCHING DATA FROM API");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: API Data Retrieval and Visualization Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            margin: 20px;
        }
        h1, h2, h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: beige;
        }
    </style>
</head>
<body>
    <!-- Assignment Details -->
    <h1>PHP: API Data Retrieval and Visualization Assignment</h1>
    <h3><strong>Due Date:</strong> Saturday, 30/11/2024</h3>
    <h3><strong>Institute:</strong> University of Bahrain</h3>
    <h3><strong>Topic:</strong> Assignment</h3>
    <hr>

    <!-- Data Table -->
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Semester</th>
                <th>The programs</th>
                <th>Nationality</th>
                <th>Colleges</th>
                <th>Num of Student</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $student)?>
                <tr>
                    <td><?php echo $student["Year"]; ?></td>
                    <td><?php echo $student["Semester"]; ?></td>
                    <td><?php echo $student["The programs"]; ?></td>
                    <td><?php echo $student["Colleges"]; ?></td>
                    <td><?php echo $student["Num of Student"]; ?></td>
            
                </tr>
        </tbody>
    </table>
</body>
</html>
