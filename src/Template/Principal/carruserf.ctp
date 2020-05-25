
        <section id="testimonial-carousel" class="divider-section">
            <div class="gap"></div>
                <div class="container">
                    <div class="row">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">NUESTRAS MARCAS</h2>
                            <hr>
                            <p>Marcas con las que trabajamos</p>
                            <div class="gap"></div>
                        </div>
                        <div class='col-md-offset-2 col-md-8 fade-up'>
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators"> 

                                    
                                    <?php $isFirst = true; ?>
                                    <?php foreach ($marcas as $item) : ?>

                                    <li data-target="#quote-carousel" data-slide-to="0"  <?php if ($isFirst) {   ?>  class="active"<?php  } $isFirst = false;   ?>  ></li>
                                   <?php endforeach; ?>
                                     
                                     
                                </ol>
                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner">
                                  <!-- Quote 1 -->

                                    <?php $isFirst = true; ?>

                                    <?php foreach ($marcas as $item) : ?>

                                    <div  class="item <?php if ($isFirst) {  echo 'active';  ?>    <?php  } $isFirst = false;   ?> "  >
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-sm-3 text-center">
                                                    <img class="img-responsive" src="images/marcas/<?= h($item->path) ?>" style="width: 100px;height:100px;">
                                                </div>
                                                <div class="col-sm-9">
                                                    <h4 style="overflow: hidden;"><?= h($item->name) ?>!</h4>

                                                    <p style="height: 50px; overflow: hidden;"><?= h($item->descripcion) ?>!</p>
                                                    
                                                    <small><?= h($item->name) ?></small>
                                                    
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                   <?php endforeach; ?>

                                    <!-- Quote 2 -->
                                     
                                    <!-- Quote 3 -->
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gap"></div>
                </div>
        </section>