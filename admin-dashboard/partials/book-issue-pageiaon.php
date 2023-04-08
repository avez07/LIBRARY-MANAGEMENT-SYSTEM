<?php
  
             
                   
    $sql_query = "SELECT * FROM table_2";
    $sql_result = $conn -> query($sql_query);
    
    $result_per_page = 10;
    $number_of_result = $sql_result -> num_rows;
    echo $number_of_result ."<br>";

    $number_of_pages = ceil($number_of_result / $result_per_page);
    echo $number_of_pages;

    if (!$sql_result) {
        // handle query error
        echo "NO STUDENT DATA IS ADDED";
    } else {

    
   echo '<div class="tables" style="overflow-x:auto;">
        <table class="datatables" id="datatables">
             <thead>;
                <th class="t-head" style="width:3% ;">ID</th>
                <th class="t-head" style="width:19% ;">Name</th>
                <th class="t-head" style="width:10% ;">Student ID</th>
                <th class="t-head" style="width: 10%;">Phone Number</th>
                <th class="t-head" style="width: 19%;">Address</th>
                <th class="t-head" style="width: 12%;">Book</th>
                <th class="t-head" style="width: 8%;">Book ID</th>
                <th class="t-head" style="width:9% ;">Issued Date</th>
                <th class="t-head" style="width: 9%;">Return Date</th>
            </thead>
            <tbody>';
    }
    
    
           if ($sql_result -> num_rows > 0) {
            while ($row = $sql_result -> fetch_assoc()) {
                echo '<tr>';
                echo '<td>'.$row['id']. '</td>';
                echo '<td>'.$row['STUDENT_NAME']. '</td>';
                echo '<td>'.$row['STUDENT_ID']. '</td>';
                echo '<td>'.$row['STUDENT_PHONE']. '</td>';
                echo '<td>'.$row['STUDENT_ADDR']. '</td>';
                echo '<td>'.$row['BOOK_NAME']. '</td>';
                echo '<td>'.$row['BOOK_ID']. '</td>';
                echo '<td>'.$row['ISSUE']. '</td>';
                echo '<td>'.$row['RETURN_']. '</td>';
                echo '</tr>';
               
              
            }
             
           } else{
            echo "NO ROW ADDED";
        };
          echo '</table>';

           echo'</div>';
          

            




$conn -> close();

?>
