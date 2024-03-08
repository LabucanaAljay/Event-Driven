<?php
    include('../config/database.php');

    $value = $_POST ['search']; 

    $sql = "SELECT * FROM product Where (Product_Name LIKE '%$value%' OR Product_Code  LIKE '%$value%')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
           ?>
           <tr>
            <td style="text-align : center;"><?= $row['Product_Code'] ?></td>
            <td><?= $row['Product_Name'] ?></td>
           </tr>
           <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
