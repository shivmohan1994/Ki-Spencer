<script>
jQuery(document).ready(function() {
        
  jQuery('.carousel[data-type="multi"] .item').each(function(){
    var next = jQuery(this).next();
    if (!next.length) {
      next = jQuery(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo(jQuery(this));
    
    for (var i=0;i<2;i++) {
      next=next.next();
      if (!next.length) {
        next = jQuery(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
    }
  });
        
});
</script>
<style>
.carousel-control.left, .carousel-control.right {
  background-image:none;
}

.img-responsive{

}

@media (min-width: 992px ) {
  .carousel-inner .active.left {
    left: -25%;
  }
  .carousel-inner .next {
    left:  25%;
  }
  .carousel-inner .prev {
    left: -25%;
  }
}

@media (min-width: 768px) and (max-width: 991px ) {
  .carousel-inner .active.left {
    left: -33.3%;
  }
  .carousel-inner .next {
    left:  33.3%;
  }
  .carousel-inner .prev {
    left: -33.3%;
  }
  .active > div:first-child {
    display:block;
  }
  .active > div:first-child + div {
    display:block;
  }
  .active > div:last-child {
    display:none;
  }
}

@media (max-width: 767px) {
  .carousel-inner .active.left {
    left: -100%;
  }
  .carousel-inner .next {
    left:  100%;
  }
  .carousel-inner .prev {
    left: -100%;
  }
  .active > div {
    display:none;
  }
  .active > div:first-child {
    display:block;
  }
}
</style>
<div class="container text-center">
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel" >

    <div class="carousel-inner">
        
        <div class="item active" >
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="image/britannia.png" style="height: 30%;width: 70% !important;" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="image/nestle.png" style="height: 30%;width: 70% !important;" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="image/coca.png" style="height: 30%;width: 70% !important;" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="image/pepsico.jpg" style="height: 30%;width: 70% !important;" class="img-responsive"></a></div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="image/PG.png" style="height: 30%;width: 70% !important;" class="img-responsive"></a></div>
        </div>
         <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="image/cadbury.jpg" style="height: 30%;width: 70% !important;" class="img-responsive"></a></div>
        </div>
    </div>

</div>
</div>
 

</div>
