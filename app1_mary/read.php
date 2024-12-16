  <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Studen Name</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM results";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $Name = $row['name'];
                                $Grade = $row['class'];
                                $Marks = $row['marks'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $Grade; ?></td>
                        <td><?php echo $Marks; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>