<div class="main-slider owl-carousel owl-btn-center-lr bg-line-bottom">
    <?php
    $SLIDER = new Slider(NULL);
    foreach ($SLIDER->all() as $slider) {
        ?>
        <div class="item">
            <div class="slide" style="background-image:url(upload/slider/<?php echo $slider['image_name'] ?>);">
                <div class="content">

                    <h2 class="title"><?php echo $slider['title'] ?> </h2>
                    <h4 class="sub-title"> <?php echo $slider['description'] ?> </h4>
                    <a href="about-us.php" class="btn btnhover">About Us</a>

                </div>
            </div>
        </div>
        <?php
    }
    ?> 
</div> 