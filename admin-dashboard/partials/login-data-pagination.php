<?php
  //pagination logics started
        
  $sql_query = "SELECT * FROM student_issue_detail";
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
  
  $sql_query = "SELECT * FROM student_issue_detail LIMIT " . $page_num . ',' . $result_per_page;
  $sql_result = $conn->query($sql_query);

  echo ' 
  <nav aria-label="...">
  <ul class="pagination float-right me-3 mt-auto">';

if ($pages > 1) {
  $prev = $pages - 1;
  echo '<li class="page-item">
      <a class="page-link" href= "./book-issue.php?pages=' . $prev . '">Previous</a>
    </li>';
} else {
  echo '<li class="page-item">
      <a class="page-link">Previous</a>
    </li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
  $active = ($i == $pages) ? "active" : "";
  echo ' <li class="page-item ' . $active . '"><a class="page-link" href="./book-issue.php?pages=' . $i . '">' . $i . '</a></li>';
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
echo '</ul>
        </nav>
        ';
?>