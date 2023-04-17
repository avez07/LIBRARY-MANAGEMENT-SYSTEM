        <div class="modal animate" id="exampleModal1" tabindex="-1" aria-labelledby="studentlabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="studentlabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">student name:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="studentname"></p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">student id:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="student_id"></p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">student phone:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="phone"></p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">address:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="addr"></p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">book name:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="book_name"></p>
        
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">book id:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="book_id"></p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">issue date:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="issue_date"></p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-uppercase text-dark fw-bold fs-5">return date:</p>
                                    <p class="text-capitalize text-dark fw-semibold fs-6" id="return_date"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <script>
            function openmodal(student_name, student_id, phone, addr,  book_name ,book_id, issue_date, return_date) {
                document.getElementById('studentname').innerHTML = student_name;
                document.getElementById('student_id').innerHTML = student_id;
                document.getElementById('phone').innerHTML = phone;
                document.getElementById('addr').innerHTML = addr;
                document.getElementById('book_name').innerHTML = book_name;
                document.getElementById('book_id').innerHTML = book_id;
                document.getElementById('issue_date').innerHTML = issue_date;
                document.getElementById('return_date').innerHTML = return_date;
                $('#exampleModal1').modal('show')
                console.log(student_id);
            }
        </script>
        
        <?php
        $admin = false;
        $user = false;
        if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == "admin") {
            $admin = true;
        } else {
        
            $user = true;
        }
        
        echo "<select name='datatable' class='select' id='select'>";
        echo "<option value='5'>5</option>";
        echo "<option value='10'>10</option>";
        echo "<option value='20'>20</option>";
        echo "<option value='100'>100</option>";
        echo "</select>";
        
        
        
        
        
        echo ' <label class="fs-5 text-dark fw-semibold">entries</label>
               </div>
               <div class=" col-lg-3 col-sm-3 offset-sm-3 col-md-3 d-flex ">
                   <p class="fs-5 pe-2 text-dark fw-semibold my-auto" >Search: </p>
                   <input type="search" class="form-control" id="search">_
               </div>
        
           </div>
        </div>';
        
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
        if ($admin) {
            echo '<div class="tables" style="overflow-x:auto;">
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
        
        
            if ($sql_result->num_rows > 0) {
                while ($row = $sql_result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['STUDENT_NAME'] . '</td>';
                    echo '<td>' . $row['STUDENT_ID'] . '</td>';
                    echo '<td>' . $row['STUDENT_PHONE'] . '</td>';
                    echo '<td>' . $row['STUDENT_ADDR'] . '</td>';
                    echo '<td>' . $row['BOOK_NAME'] . '</td>';
                    echo '<td> <span class="text-dark fw-bold" onClick= "openmodal(\'' . $row['STUDENT_NAME'] . '\',\'' . $row['STUDENT_ID'] . '\',\'' . $row['STUDENT_PHONE'] . '\',\'' . $row['STUDENT_ADDR'] . '\',\'' . $row['BOOK_NAME'] . '\',\'' . $row['BOOK_ID'] . '\',\'' . $row['ISSUE'] . '\',\'' . $row['RETURN_'] . '\')">view</span></td>';
                    echo '<td><a href = "./actions/issue-delete.php?id='. $row['id'] .'">delete</a></td>';
                    echo '<td>' . $row['RETURN_'] . '</td>';
                    echo '</tr>';
                
                }
            
            } else {
                echo "No rows found";
            }
        
            echo '</tbody></table></div></div>';
        }
        
     
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
        
        
        $conn->close();
        
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>