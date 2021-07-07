<!--sart header-->
<?php
require('./template/header.php');

 ?>
    <!-- Header End -->
    
    <main>    <!-- start main -->
      <div class="heroT"  >
       <div class="overlayT">
    <div class="container">
<table class="table table-striped table">
  <thead>
    <tr>
    
      <th class="tt"scope="col"> الهيئة التدريسية</th>
     
      <th class="tt" scope="col">البريد الإلكتروني</th>
    </tr>
  </thead>
  <tbody>
  <?php
                $connection = mysqli_connect("localhost", "root", "", "schoolpanel");
                $query = "SELECT * FROM teacher ";
                $query_run = mysqli_query($connection, $query);
               
                if(mysqli_num_rows($query_run)> 0) {
                  while ($row = mysqli_fetch_assoc($query_run)) {
                    $name=htmlspecialchars($row['fname']).' '.htmlspecialchars($row['lname']);
                    $email=htmlspecialchars($row['email']);
                ?>
    <tr>
     
      <td><?php echo $name ;?></td>
      <td><?php echo $row ['email'] ;?></td>
      
      <?php

                  }
                 } else {
                  echo "No Record Found";
                 }

?>
    </tr>

  
  </tbody>
</table>    
        </div>
          </div>
             </div>   
    </main>     <!--End main -->
    
  
    <!-- stary footer -->
    <?php
    require('./template/footer.php');
     ?>
    
    <!-- Footer -->
