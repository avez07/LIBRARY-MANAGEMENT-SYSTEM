<?php
  //pagination logics started
  $sql_query = "SELECT * FROM user_0970";
  $sql_result = $conn->query($sql_query);
 
  
  $result_per_page = 10;
  $number_of_result = $sql_result->num_rows;
  
  $number_of_pages = ceil($number_of_result / $result_per_page);
  
  
  
  
  if (!isset($_GET['pages'])) {
      $pages = 1;
  } else {
      $pages = $_GET['pages'];
  }
  $page_num = ($pages - 1) * $result_per_page; //set a number limmit output of this query is 0
  
  
  //pagination logic end only limit keyword added to the query
  
  $sql_query = "SELECT * FROM user_0970 LIMIT " . $page_num . ',' . $result_per_page;
  $sql_result = $conn->query($sql_query);

  if (!$sql_result) {
    echo "NO DATA IS ADDED" . $sql_query->error;
} else {
    echo '<div class="tables" style="overflow-x:auto;">
            <table class="datatables" id="datatables">
                <thead>
                    <th class="t-head" style="width:3%;">ID</th>
                    <th class="t-head" style="width:19%;">Name</th>
                    <th class="t-head" style="width:19%;">Email ID</th>
                    <th class="t-head" style="width:13%;">Username</th>
                    <th class="t-head" style="width:13%;">Password</th>
                    <th class="t-head" style="width:13%;">Confirm password</th>
                    <th class="t-head" style="width:13%;">DATE & TIME</th>
                </thead>
                <tbody>';
    if ($sql_result->num_rows > 0) {
        while ($row = $sql_result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['STUDENT_NAME'] . '</td>';
            echo '<td>' . $row['EMAIL_ID'] . '</td>';
            echo '<td>' . $row['USER_NAME'] . '</td>';
            echo '<td>' . $row['PASSWORD_1'] . '</td>';
            echo '<td>' . $row['CONFIRM_PASSWORD'] . '</td>';
            echo '<td>' . $row['DATE_TIME'] . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="7">NO ROW ADDED</td></tr>';
    }
    echo '</tbody></table></div>';
}
  echo ' 
  <nav aria-label="...">
  <ul class="pagination float-right me-3 mt-auto">';

if ($pages > 1) {
  $prev = $pages - 1;
  echo '<li class="page-item">
      <a class="page-link" href= "./login.datatable.php?pages=' . $prev . '">Previous</a>
    </li>';
} else {
  echo '<li class="page-item">
      <a class="page-link">Previous</a>
    </li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
  $active = ($i == $pages) ? "active" : "";
  echo ' <li class="page-item ' . $active . '"><a class="page-link" href="./login.datatable.php?pages=' . $i . '">' . $i . '</a></li>';
}

if ($pages < $number_of_pages) {
  $next_pages = $pages + 1;
  echo '<li class="page-item">
            <a class="page-link" href="./login.datatable.php?pages=' . $next_pages . '">Next</a>
          </li>';
} else {
  echo '<li class="page-item disabled">
            <a class="page-link">Next</a>
          </li>';
}
echo '</ul>
        </nav>
        ';
?>