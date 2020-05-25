  <section id="services" class="white">
            <div class="container">
            <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">COSAS QUE HACEMOS</h2>
                            <hr>
                            <p>Vendemos instrumentos para análisis químico,soporte técnico y analítico,reactivos,cristaleria</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ($funciones as $item) : 
                        # code...
                     ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa  fa-flask fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading"><?= h($item->name) ?></h3>
                                <p><?= h($item->descripcion) ?>.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <?php endforeach; ?>

                    
                </div><!--/.row-->
            </div>
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Nuestras habilidades</h2>
                            <hr>
                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                    
                 <?php foreach ($habilidades as $item) : ?>
                    <div class="col-md-3">
                        <div class="tile-progress tile-red bounce-in">
                            <div class="tile-header">
                                <h3><?= h($item->name) ?></h3>
                                <span><?= h($item->descripcion) ?>.</span>
                            </div>
                            <div class="tile-progressbar">
                                <span data-fill="100%" style="width: 100%;"></span>
                            </div>
                            <div class="tile-footer">
                                <h4>
                                    <span class="pct-counter counter">100</span>%
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                     
                </div><!--/.row-->
                <div class="gap"></div>
            </div>
        </section>