<?php
  global $conn;
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
  }
  else {
    $id = -1;
  }
?>
    
    <div class="site-section">
      <div class="container">
          
        <div class="row mb-5">

          <div class="col-md-3 order-1 mb-5 mb-md-0">
              <div class="border p-4 rounded mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                <ul class="list-unstyled mb-0">
                  <li class="mb-1"><a href="index.php?cmd=product&id=0" class="d-flex"><span>Vợt Cầu Lông</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                  <li class="mb-1"><a href="index.php?cmd=product&id=2" class="d-flex"><span>Giày Cầu Lông</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                  <li class="mb-1"><a href="index.php?cmd=product&id=3" class="d-flex"><span>Áo Cầu Lông</span> <span class="text-black ml-auto">(2,124)</span></a></li>
                </ul>
              </div>

              <div class="border p-4 rounded mb-4">
                <div class="mb-4">
                  <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                  <div id="slider-range" class="border-primary"></div>
                  <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                </div>

                <div class="mb-4">
                  <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                  <label for="s_sm" class="d-flex">
                    <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                  </label>
                  <label for="s_md" class="d-flex">
                    <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                  </label>
                  <label for="s_lg" class="d-flex">
                    <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                  </label>
                </div>

                <div class="mb-4">
                  <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                  <a href="#" class="d-flex color-item align-items-center" >
                    <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                  </a>
                  <a href="#" class="d-flex color-item align-items-center" >
                    <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                  </a>
                  <a href="#" class="d-flex color-item align-items-center" >
                    <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                  </a>
                  <a href="#" class="d-flex color-item align-items-center" >
                    <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                  </a>
                </div>

              </div>
            </div>

            <div class="col-md-9 order-2">

              <div class="row">
                <div class="col-md-12 mb-5">
                  <div class="float-md-left mb-4"><h2 class="text-black h5">See All</h2></div>
                  <div class="d-flex">
                    <div class="dropdown mr-1 ml-md-auto">
                      <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Latest
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="#">Giày Cầu Lông</a>
                        <a class="dropdown-item" href="#">Áo Cầu Lông</a>
                        <a class="dropdown-item" href="#">Vợt Cầu Lông</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item" href="#">Relevance</a>
                        <a class="dropdown-item" href="#">Name, A to Z</a>
                        <a class="dropdown-item" href="#">Name, Z to A</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Price, low to high</a>
                        <a class="dropdown-item" href="#">Price, high to low</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                
                <?php
                $data = '';
                  $sql = "select * from product where status = 1 and (idcategory = {$id} or {$id} = -1)";
                  $result = mysqli_query($conn, $sql);
                  while ($row=mysqli_fetch_assoc($result))
                  {
                    $data .= '
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                      <div class="block-4 text-center border">
                        <figure class="block-4-image">
                          <a href="index.php?cmd=product-detail&id='. $row['id'].'"><img src="images/'.$row['img'].'" alt="Image placeholder" class="img-fluid"></a>
                        </figure>
                        <div class="block-4-text p-4">
                          <h3><a href="index.php?cmd=product-detail='. $row['id'].'">'.$row['name'].'</a></h3>
                          <p class="text-secondaty font-weight-bold">'. number_format($row['price']).' VND</p>
                        </div>
                      </div>
                    </div>';
                  }
                  echo $data;
                ?>
              </div>
              <div class="row" data-aos="fade-up">
                <div class="col-md-12 text-center">
                  <div class="site-block-27">
                    <ul>
                      <li><a href="#">&lt;</a></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&gt;</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
    </div>