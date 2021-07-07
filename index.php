 <!--sart header-->
 <?php
  require('./template/header.php');
  ?>
 <!-- Header End -->

 <main>
   <div class="hero">



     <div class="overlay">
       <p>مرحبا بكم في موقع مدرستي... <br><br><br>الصف الاول -الصف الثاني -الصف الثالث</p>
       <p></p>

     </div>
   </div>

   <!-- hero End ************************-->





   <!-- about ************************-->

   <div class="container">

     <div class="aboutrow row">

       <div class=" aboutR col-sm-6">
         <h2> نبذة عن المدرسة :</h2>

         <p>
           * تعتبر مدرستنا مؤسسة حضارية تربوية وطنية تسعى لتقديم خدمة تربوية وتعليمية متميزة من أجل النهوض بالمستوى التعليمى والتربوى وانشاء جيل مثقف مؤن بالله ووطنه وأمته مواكب للتطورات العصر بالفهم الحضارى لذا تسعى مدرسة الرؤية لتقديم تعليم ذو جودة عالية ووفير بيئة تربوية مناسبة ومشوقة ومشاركة مجتمعية فاعلة وتوفير كادر ادارى وتعليمى مؤهل

           <a href="about.html">...</a>
         </p>

       </div>
       <div class="col-sm-6"> <img src="img/aboutR.jpg" class="rounded float-left" alt="..."></div>
     </div>
   </div>


   <!-- end about ************************-->

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
     </div>

     <a class="  ca carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

       <span class=" sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

       <span class="sr-only">Next</span>
     </a>
   </div>
   </div>
   <!-- .breaking-news -->




   <!-- images ************************-->

   <div class="container">

     <div class=" publicR row">

       <div class=" imagesR v col-sm-6">
         <h2>فيديو </h2>

         <p>
           كن على إطلاع دائم بكل ما هو جديد لدينا <br> <br>
         </p>

         <iframe width="500" height="360" src="https://www.youtube.com/embed/UDIpOJvdB80" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <a class=" cont" href="public.html" class="">المزيد</a>
       </div>

       <div class=" imagesR col-sm-6">
         <h2> معرض الصور</h2>

         <p>
           كن على إطلاع دائم بكل ما هو جديد لدينا <br> <br>
         </p>
         <div class=" pb row">
           <!-- ألبوم الصور ************************-->

           <div class="im col-sm-4">
             <img class="w-100" src="img/castjpg.jpg" alt="">
             <img class="w-100" src="img/sport.jpg" alt="">
             <img class="w-100" src="img/art.jpg" alt="">
           </div>


           <div class="im col-sm-4">
             <img class="w-100" src="img/cultur.jpg" alt="">
             <img class="w-100" src="img/1.jpg" alt="">
             <img class="w-100" src="img/2.jpg" alt="">
           </div>


           <div class="im col-sm-4">
             <img class="w-100" src="img/3.jpg" alt="">
             <img class="w-100" src="img/4.jpg" alt="">
             <img class="w-100" src="img/5.jpg" alt="">
           </div>


         </div>
         <a class=" cont" href="public.html" class="btn btn-danger btn-rounded">المزيد</a>

       </div>
     </div>
   </div>

   <!-- images end ************************-->







   <!-- public  ************************-->

   <div class="puplicimg   my-4">

     <h5 class="heading">النشاطات المدرسية </h5>


     <p> <strong>تقوم المدرسة بالعديد من الانشطة والتي من دوها ان تحفز الطلاب في مختلف النشاطات المدرسي... </p>

     <hr class="my-4">

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

                   <a class="btn btn-primary">المزيد</a>
                 </div>
               </div>
             </div>

             <div class="col-md-4 clearfix d-none d-md-block">
               <div class="card mb-2">
                 <img class="card-img-top" src="img/sport.jpg" alt="Card image cap">
                 <div class="card-body">
                   <h4 class="card-title">االرياضة</h4>

                   <a class="btn btn-primary">المزيد</a>
                 </div>
               </div>
             </div>

             <div class="col-md-4 clearfix d-none d-md-block">
               <div class="card mb-2">
                 <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
                 <div class="card-body">
                   <h4 class="card-title">العلوم</h4>

                   <a href="public.html" class="btn btn-primary">المزيد</a>
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

                   <a href="public.html" class="btn btn-primary">المزيد</a>
                 </div>
               </div>
             </div>

             <div class="col-md-4 clearfix d-none d-md-block">
               <div class="card mb-2">
                 <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                 <div class="card-body">
                   <h4 class="card-title">االحفلات</h4>

                   <a href="public.html" class="btn btn-primary">المزيد</a>
                 </div>
               </div>
             </div>

             <div class="col-md-4 clearfix d-none d-md-block">
               <div class="card mb-2">
                 <img class="card-img-top" src="img/cultur.jpg" alt="Card image cap">
                 <div class="card-body">
                   <h4 class="card-title">الثقافة</h4>

                   <a href="public.html" class="btn btn-primary">المزيد</a>
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
 <div class="map">
   <div class="section-title">
     <h5 class="heading">موقعنا على الخريطة</h5>
   </div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54462.20848857218!2d34.440780631294295!3d31.444749331989225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcfc616c1c51896ad!2z2YXYr9ix2LPYqSDYp9mE2YbYtdmK2LHYp9iqINin2YTZhdi02KrYsdmD2Kk!5e0!3m2!1sar!2s!4v1589894390034!5m2!1sar!2s" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div> <!-- map -->


 <!-- stary footer -->
 <?php
  require('./template/footer.php');
  ?>

 <!-- Footer -->