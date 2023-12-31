<?php require_once 'header.php'; ?>


  <body class=" bg-light">

    <div class="container-fluid p-0 " id="home">

     <div class="row p-3">


      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="col-md-12 mb-3 d-flex justify-content-center">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="income-add.php">INCOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="expenses-add.php">EXPENSES</a>
                </li>
              </ul>
            </div>

            <?php 
                if(isset($_SESSION['sql_expenses_insert'])) {
                  if($_SESSION['sql_expenses_insert'] === 'ok') {
                      echo '<div class="alert alert-success">Gider ekleme başarılı!</div>';
                  } elseif($_SESSION['sql_expenses_insert'] === 'no') {
                      echo '<div class="alert alert-danger">Gider ekleme başarısız!</div>';
                  }
                  unset($_SESSION['sql_expenses_insert']); // Değişkeni temizle
              }

                unset($_SESSION['sql_income_insert']);
               ?>



            <form action="netting/islem.php" method="POST" class="needs-validation" novalidate>

              <div class="input-group mb-3">
                <span class="input-group-text">TL</span>
                <input type="number" pattern="\d*" class="form-control" id="validationCustom05" required aria-label="Amount (to the nearest dollar)" name="expenses_price">
                <span class="input-group-text">.00</span>
              </div>

              <div class="mb-3">
                <input name="expenses_category" required  class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Gider kategorisi seçin">
                <datalist id="datalistOptions">
                  <option value="Reklam Giderleri">
                    <option value="Ürün Giderleri">
                      <option value="Kargo">
                        <option value="İade">
                          <option value="Kullanılan Programlar">
                          </datalist>
                        </div>



                        <div class="input-group date mt-3" id="datepicker">
                          <input type="text" class="form-control" name="expenses_date" required value="20-11-2023">
                          <span class="input-group-append">
                            <span class="input-group-text bg-white">
                              <i class="bi bi-calendar"></i>
                            </span>
                          </span>
                        </div>



                        <div class="mt-3">
                         <button type="submit" name="expenses_add" href="#" class="btn btn-outline-secondary w-100 btn-lg"><i class="bi bi-dash"></i>
                         Gider Ekle</button>
                       </div>
                     </form>






                     <!--<div class="d-flex justify-content-center mt-4">
                      <i style="font-size: 20px;" class="bi bi-arrow-down-circle-fill"></i>
                    </div>-->

                    <div class="card mt-4">
                      <div class="card-header">
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p>Cüzdanın büyüdükçe, ihtiyaçların da büyür.</p>
                          <footer class="blockquote-footer"><cite title="Source Title">Yahudi Atasözü</cite></footer>
                        </blockquote>
                      </div>
                    </div>



                  </div>
                </div>
              </div>



            </div>


<?php require_once 'footer.php'; ?>