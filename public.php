<!--sart header-->
<?php
require('./template/header.php');
?>
<!-- Header End -->

<main>



  <div class="row breaking-news">
    <span class=adv>إعلان</span>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php $i = 0;
        $connection = mysqli_connect("localhost", "root", "", "schoolpanel");
        $query = "SELECT * FROM advertisement ";
        $query_run = mysqli_query($connection, $query);
        if (mysqli_num_rows($query_run) > 0) {
          while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <div <?php if ($i == 0) { ?> class="carousel-item active" <?php } else { ?> class="carousel-item " <?php } ?>>
              <p>
                <?php if ($row['visible'] == '1') {
                  echo $row['advertise'];
                } 
                $i++;
                ?>

              </p>
            </div>
        <?php

          }
        } else {
          echo "No Record Found";
        }
        ?>

      </div>
      




      <a class="  ca carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

        <span class=" sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

        <span class="sr-only">Next</span>
      </a>
    </div>
  </div> <!-- .breaking-news -->





  <!-- about ************************-->

  <div class="container">

    <div class="aboutrow row">

      <div class=" aboutR col-sm-6">
        <h2> آخر الأخبار:</h2>

        <?php
        $connection = mysqli_connect("localhost", "root", "", "schoolpanel");
        $query = "SELECT * FROM news ORDER BY created_at DESC";
        $query_run = mysqli_query($connection, $query);
        $row=mysqli_fetch_all($query_run,MYSQLI_ASSOC);
        mysqli_free_result($query_run);

        
        ?>
            <p>
              <?php echo $row[0]['new'];?>
            </p>

    
      </div>
      <div class="p1 col-sm-6"> <img src="img/p.png" class="rounded float-left" alt="..."></div>
    </div>
  </div>


  <!-- end about ************************-->





  <!-- images ************************-->




  <div class=" imagesp container">
    <h2>فيديو </h2>

    <p>
      كن على إطلاع دائم بكل ما هو جديد لدينا <br> <br>
    </p>
    <div class="vedio row">
      <div class="col-sm-6 ">
        <iframe width="500" height="360" src="https://www.youtube.com/embed/UDIpOJvdB80" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-sm-6 ">
        <iframe width="500" height="360" src="https://www.youtube.com/embed/I-uFvTYf_28" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class=" imagesp container">
    <h2> معرض الصور</h2>

    <p>
      كن على إطلاع دائم بكل ما هو جديد لدينا <br> <br>
    </p>
    <div class=" pp row" id="pp row">
      <!-- ألبوم الصور ************************-->

      <?php
      $connection = mysqli_connect("localhost", "root", "", "schoolpanel");
      $query = "SELECT * FROM galleryschool";
      $query_run = mysqli_query($connection, $query);
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
      ?>
          <div class="im col-sm-3">
            <?php echo '<img src="schoolpanel/upload/' . $row['images'] . '" alt="image" width="100px" height="100px" ;>' ?>
          </div>

      <?php

        }
      } else {
        echo "No Record Found";
      }
      ?>


    </div>

  </div>


  <!-- images end ************************-->







  <!-- public  ************************-->

  <div class="imagesp container   my-4">

    <h2 class="heading">النشاطات المدرسية </h2>


    <p> <strong>تقوم المدرسة بالعديد من الانشطة والتي من دوها ان تحفز الطلاب في مختلف النشاطات المدرسي... </p>

    <br>


    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">



      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="img/castjpg.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">الإذاعة</h4>

                  <a href="#pp row" class="btn btn-primary">المزيد</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="img/sport.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">االرياضة</h4>

                  <a href="#pp row" class="btn btn-primary">المزيد</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">العلوم</h4>

                  <a href="#pp row" class="btn btn-primary">المزيد</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="img/art.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">فنون وحرف</h4>

                  <a href="#pp row" class="btn btn-primary">المزيد</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">االحفلات</h4>

                  <a href="#pp row" class="btn btn-primary">المزيد</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="img/cultur.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">الثقافة</h4>

                  <a href="#pp row" class="btn btn-primary">المزيد</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->


      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>






  <!-- public end  ************************-->








  <div class="back-top">
    <i class="fas fa-chevron-up"></i>
  </div>
</main>


<!-- stary footer -->
<?php
require('./template/footer.php');
?>

<!-- Footer -->