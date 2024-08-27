<?php
include("dbcinplex.php");

// Check if the connection is successful
if (!$cineplex) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM film WHERE fim_name LIKE '{$input}%'";

    $result = mysqli_query($cineplex, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                        <!-- <th>fim_name</th> -->
                        <!-- <th>Description</th>
                        <th>Rate</th> -->
                        <!-- <th>Img</th> -->
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        // $fim_name = $row['fim_name'];
                        // $des = $row['des'];
                        // $rate = $row['rate'];
                        $img = $row['img'];
                    
                    ?>
                        <tr>
                            <!-- <td><?php echo $id; ?></td> -->
                             <!-- <td><?php echo $fim_name; ?></td> -->
                             <!-- <td><?php echo $des; ?></td> -->
                            <!-- <td><?php echo $rate; ?></td>   -->
                            <td><?php echo $img; ?></td>
                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>";
        }
    } else {
        // Handle query execution error
        echo "Error: " . mysqli_error($cineplex);
    }
}

// Close the database connection
mysqli_close($cineplex);
?>
