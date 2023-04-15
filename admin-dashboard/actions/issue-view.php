<?php

  $id = $_GET['id'];  
  $sql_query_2 = "SELECT * FROM student_issue_detail WHERE id = $id";
  $sql_result_2 = $conn->query($sql_query_2);
  $row = $sql_result_2 -> fetch_assoc();
  
  echo '
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                              <p class="text-uppercase text-dark fw-bold fs-5">student name:</p>
                              <p class="text-capitalize text-dark fw-semibold fs-6">' . $row['STUDENT_NAME'] . '</p>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <p class="text-uppercase text-dark fw-bold fs-5">student id:</p>
                              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <p class="text-uppercase text-dark fw-bold fs-5">student phone:</p>
                              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <p class="text-uppercase text-dark fw-bold fs-5">address:</p>
                              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <p class="text-uppercase text-dark fw-bold fs-5">book name:</p>
                              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
  
          </div>
          <div class="col-lg-6 col-md-6">
              <p class="text-uppercase text-dark fw-bold fs-5">book id:</p>
              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
          </div>
          <div class="col-lg-6 col-md-6">
              <p class="text-uppercase text-dark fw-bold fs-5">issue date:</p>
              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
          </div>
          <div class="col-lg-6 col-md-6">
              <p class="text-uppercase text-dark fw-bold fs-5">return date:</p>
              <p class="text-capitalize text-dark fw-semibold fs-6">djkshdjjasjdsa:</p>
          </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>';
?>