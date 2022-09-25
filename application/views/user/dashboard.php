

            <!-- Begin Page Content -->    <div class="container-fluid">
            	<marquee>Selamat Datang Di Aplikasi Posyandu Onlineku</marquee>

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
        
<?= date('d F Y'); ?> <br>
<body onload="setInterval('displayServerTime()', 1000);">
      <span id="clock"><?php print date('H:i:s'); ?></span>
<br><br>
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8" style="background-color:black; ">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="http://poskotanews.com/cms/wp-content/uploads/2017/05/posyandu.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item"  >
      <img src="https://cdn0-production-images-kly.akamaized.net/X65Ob_YgXMxfCDmZVOs7VvNcGpM=/1280x720/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2743444/original/051600900_1551766739-IMG-20190304-WA0108.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item"  >
      <img src="https://tni.mil.id/mod/news/images/normal/a5786b3b12ea19722d0b75fcba0e394b.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-sm-2"></div>
</div>

        </div>
       

      </div>
    
     <script>
     $('.carousel').carousel({
  interval: 1000;
})
     </script>
