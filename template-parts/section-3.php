<?php 
$slides = [
  [
    "img" => IMG_BASE . 'slick/slide-1.png',
  ],
  [
    "img" => IMG_BASE . 'slick/slide-2.png',
  ],
  [
    "img" => IMG_BASE . 'slick/slide-3.png',
  ]
]
?>
<section class="section3">
  <div class="section3__slick">
    <div class="slick0">
      <?php foreach ($slides as $key => $slide) { ?>
        <div class="slick-item">
          <div class="slick-item__bckg">
            <img src="<?php echo $slide['img']; ?>" alt="">
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>