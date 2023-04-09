

<?php
$sql_query = "SELECT * FROM student_issue_detail";
$sql_result = $conn->query($sql_query);


$result_per_page = 10;                             //set a enteries perpages
$number_of_result = $sql_result->num_rows;      //dertermine how many row in their on databases

$number_of_pages = ceil($number_of_result / $result_per_page);


if (!isset($_GET['pages'])) {
    $pages = 1;
} else {
    $pages = $_GET['pages'];
}
$page_num = ($pages - 1) * $result_per_page;    //set a number limmit output of this query is 0
    



$sql_query = "SELECT * FROM student_issue_detail LIMIT " . $page_num . ',' . $result_per_page;
$sql_result = $conn->query($sql_query);

if (!$sql_result) {
    // handle query error
    echo "Query execution failed: " . $conn->error;
} else {
    echo '<div class="tables mb-5" style="overflow-x:auto;">
        <table class="datatables" id="datatables">
             <thead>
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

    if ($sql_result->num_rows > 0) {
        while ($row = $sql_result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['STUDENT_NAME'] . '</td>';
            echo '<td>' . $row['STUDENT_ID'] . '</td>';
            echo '<td>' . $row['STUDENT_PHONE'] . '</td>';
            echo '<td>' . $row['STUDENT_ADDR'] . '</td>';
            echo '<td>' . $row['BOOK_NAME'] . '</td>';
            echo '<td>' . $row['BOOK_ID'] . '</td>';
            echo '<td>' . $row['ISSUE'] . '</td>';
            echo '<td>' . $row['RETURN_'] . '</td>';
            echo '</tr>';
        }
    } else {
        echo "No rows found";
    }

    echo '</tbody></table></div></div>';

    echo ' 
    <nav aria-label="...">
    <ul class="pagination float-right me-3 mt-auto">';
  
    if ($pages > 1) {
      $prev = $pages - 1; 
     echo '<li class="page-item">
        <a class="page-link" href= "./book-issue.php?pages=' . $prev .'">Previous</a>
      </li>';
    } else {
     echo '<li class="page-item">
        <a class="page-link">Previous</a>
      </li>';
    }
  for ($i = 1; $i <= $number_of_pages; $i++) {
  
              echo ' <li class="page-item active"><a class="page-link" href="./book-issue.php?pages=' . $i .'">'. $i .'</a></li>';
  }
   
  if ($pages < $number_of_pages) {
      $next_pages = $pages + 1;
      echo '<li class="page-item">
              <a class="page-link" href="./book-issue.php?pages=' . $next_pages . '">Next</a>
            </li>';
  } else {
      echo '<li class="page-item disabled">
              <a class="page-link">Next</a>
            </li>';
  }
  echo  '</ul>
          </nav>
          ';


$conn->close();
?>
