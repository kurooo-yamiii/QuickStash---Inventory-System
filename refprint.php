<?php

include "db_conn.php";
	
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $check = "SELECT * FROM equipment";
    $checkres = mysqli_query($conn, $check);

if ($checkres) {
  
    echo '<table><thead>
    <tr><th class="table-header" scope="col">EQUIPMENT</th></tr>
</thead></table>';

$sqlt2 = "SELECT * FROM equipment";
$resultt2 = mysqli_query($conn, $sqlt2);

if (mysqli_num_rows($resultt2)) {
    echo '<table class="margin-table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Date Received</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>';
    $i = 0;
    while ($rows = mysqli_fetch_assoc($resultt2)) {
        $i++;
        echo '<tr>
                <td>' . $rows['Name'] . '</td>
                <td>' . $rows['Brand'] . '</td>
                <td>' . $rows['Date'] . '</td>
                <td>' . $rows['Quantity'] . '</td>
                <td>' . $rows['Status'] . '</td>
              </tr>';
    }
    echo '</tbody>
        </table>';
} else {
    echo '<div class="todo-item">
            <h2>No equipment listed currently</h2>
            <br>
            <small>Note: You can list equipment by going to the equipment form</small> 
        </div>';
}

echo '<table><thead>
    <tr><th class="table-header" scope="col">TOOLS</th></tr>
</thead></table>';

$sqlt = "SELECT * FROM tools";
$resultt = mysqli_query($conn, $sqlt);

if (mysqli_num_rows($resultt)) {
    echo '<table class="margin-table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Date Received</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>';
    $i = 0;
    while ($rows = mysqli_fetch_assoc($resultt)) {
        $i++;
        echo '<tr>
                <td>' . $rows['Name'] . '</td>
                <td>' . $rows['Brand'] . '</td>
                <td>' . $rows['Date'] . '</td>
                <td>' . $rows['Quantity'] . '</td>
                <td>' . $rows['Status'] . '</td>
              </tr>';
    }
    echo '</tbody>
        </table>';
} else {
    echo '<div class="todo-item">
            <h2>No tools listed currently</h2>
            <br>
            <small>Note: You can list tools by going to the tools form</small> 
        </div>';
}



} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>