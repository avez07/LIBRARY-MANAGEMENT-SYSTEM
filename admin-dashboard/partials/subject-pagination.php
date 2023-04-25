<style>
  img.imge-size {
  height: 164px !important;
}
.page{
  position: absolute;
    bottom: 0px !important;
    right: 22px;
}
@media only screen and (min-width: 600px) and (max-width:993px){
  img.imge-size {
  height: 233px !important;
}
}
</style>
<?php
 include "config.php";
  //pagination logics started
  $sql_query = "SELECT * FROM OperatingSystems";
  $sql_result = $conn->query($sql_query);
 
  
  $result_per_page = 6;
  $number_of_result = $sql_result->num_rows;
  
  $number_of_pages = ceil($number_of_result / $result_per_page);
  
  
  
  
  if (!isset($_GET['pages'])) {
      $pages = 1;
  } else {
      $pages = $_GET['pages'];
  }
  $page_num = ($pages - 1) * $result_per_page; //set a number limmit output of this query is 0
  
  
  //pagination logic end only limit keyword added to the query
  
  $sql_query_2 = "SELECT * FROM OperatingSystems LIMIT " . $page_num . ',' . $result_per_page;
  
 
  
  
   $sql_result_2 = $conn->query($sql_query_2);
  
   if (!$sql_result_2) {
    echo "NO DATA IS ADDED"  . $sql_query_2->error;
  } else {
    if ($sql_result_2->num_rows > 0) {
      while ($row = $sql_result_2->fetch_assoc()) {
          echo '
          
          <div class="col-lg-4">
              <div class="card notes pb-0"style = "margin-bottom : 60px">
                  <img src="video-upload/'.$row['Video'].'" class = "imge-size" ">
                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                          <h4 class="card-title fw-semibold">Practical 1</h4>
                          <span style="cursor: pointer;"><i class="fa-solid fa-circle-play text-danger fs-2"></i></span>
                      </div>
                      <p class="fs-5 text-capitalize fw-semibold py-3">dail pad</p>
                    <a href="#" class="btn btn-primary text-capitalize float-end"  data-bs-toggle="modal" data-bs-target="#session">view session</a>
                  </div>
                </div>
          </div>
          
      ';
      }
  } 
  }
  
  
  
  
  echo ' 
  <nav aria-label="...">
  <ul class="pagination page float-right me-3 mt-auto">';

if ($pages > 1) {
  $prev = $pages - 1;
  echo '<li class="page-item">
      <a class="page-link" href= "./sem1.subject1.php?pages=' . $prev . '">Previous</a>
    </li>';
} else {
  echo '<li class="page-item">
      <a class="page-link">Previous</a>
    </li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
  $active = ($i == $pages) ? "active" : "";
  echo ' <li class="page-item ' . $active . '"><a class="page-link" href="./sem1.subject1.php?pages=' . $i . '">' . $i . '</a></li>';
}

if ($pages < $number_of_pages) {
  $next_pages = $pages + 1;
  echo '<li class="page-item">
            <a class="page-link" href="./sem1.subject1.php?pages=' . $next_pages . '">Next</a>
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