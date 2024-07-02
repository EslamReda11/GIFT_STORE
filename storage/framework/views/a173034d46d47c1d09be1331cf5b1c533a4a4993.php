<style>
/* Carousel Controls */
.carousel-controls {
    padding: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.carousel-controls a {
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-controls i {
    background: black;
    color: white;
    padding: 5px;
    border-radius: 20px;
    font-size: 2em;
    transition: background 0.3s, color 0.3s;
}

.carousel-controls a:hover i {
    background: white;
    color: black;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .carousel-controls {
        padding: 20px;
    }

    .carousel-controls i {
        font-size: 1.5em;
        padding: 4px;
        border-radius: 15px;
    }
}

@media (max-width: 480px) {
    .carousel-controls {
        padding: 10px;
    }

    .carousel-controls i {
        font-size: 1.2em;
        padding: 3px;
        border-radius: 10px;
    }
}
</style>


<div align="center" id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel" style="background-image:url(slideshow/SlideshowMobile/background.png);background-size:cover;height: 400px;"> <br>
    <div class="carousel-inner py-2" role="listbox">

        <div class="carousel-item  active" >
            <div class="col-12 col-md-3" style="border-radius:10px;">
                <div class="container">
                    <div class="card mb-2">
                        <img class="card-img-top  animated pulse infinite slow" src="<?php echo e(asset('slideshow/SlideshowMobile/1.png')); ?>" alt="Card image cap" style="border-radius:10px;height: 240px;">
                    </div><br><br>

                    <div class="bottom-left">
                        <a  href="/#Products" class="buttonO_N">
                            Order Now
                        <svg class="cartIconO_N" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="carousel-item" >
            <div class="col-12 col-md-3" style="border-radius:10px;">
                <div class="container">
                    <div class="card mb-2">
                        <img class="card-img-top  animated pulse infinite slow" src="<?php echo e(asset('slideshow/SlideshowMobile/2.png')); ?>" alt="Card image cap" style="border-radius:10px;height: 240px;">
                    </div><br><br>

                    <div class="bottom-left"  >
                        <a  href="/#Products" class="buttonO_N">
                            Order Now
                        <svg class="cartIconO_N" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="carousel-item" >
            <div class="col-12 col-md-3" style="border-radius:10px;">
                <div class="container">
                    <div class="card mb-2">
                        <img class="card-img-top  animated pulse infinite slow" src="<?php echo e(asset('slideshow/SlideshowMobile/3.png')); ?>" alt="Card image cap" style="border-radius:10px;height: 240px;">
                    </div><br><br>

                   <div class="bottom-left"  >
                        <a  href="/#Products" class="buttonO_N" >
                            Order Now
                        <svg class="cartIconO_N" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="carousel-item" >
            <div class="col-12 col-md-3" style="border-radius:10px;">
                <div class="container">
                    <div class="card mb-2">
                        <img class="card-img-top  animated pulse infinite slow" src="<?php echo e(asset('slideshow/SlideshowMobile/4.png')); ?>" alt="Card image cap" style="border-radius:10px;height: 240px;">
                    </div><br><br>

                    <div class="bottom-left"  >
                        <a  href="/#Products" class="buttonO_N">
                            Order Now
                        <svg class="cartIconO_N" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!--Controls-->
        <div class="carousel-controls">
            <p>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </a>
            </p>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fas fa-long-arrow-alt-right"></i>
            </a>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\E-Store\resources\views/components/mobileslideshow.blade.php ENDPATH**/ ?>