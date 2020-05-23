       <section id="about-us" class="white">
            <div class="container">

                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Productos</h2>
                    <hr>
                    <p>Productos con los que trabajamos.</p>
                </div>
                <div class="gap"></div>

                <div id="meet-the-team" class="row">
                   
                      <?php foreach ($productos as $producto): ?>
                    <div class="col-md-3 col-xs-6">
                        <div class="center team-member">
                            <div class="team-image">
                                <img class="img-responsive img-thumbnail bounce-in" src="/images/productos/<?= h($producto->path) ?>" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="/images/productos/<?= h($producto->path) ?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="team-content fade-up">
                                <h5><?= h($producto->name) ?><small class="role muted"><?= h($producto->marca->name) ?></small></h5>
                                <p style="height: 100px; overflow: hidden;"> <?= h($producto->descripcion) ?></p>
                                <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                 
                </div><!--/#meet-the-team-->
                <div class="gap"></div>
                <div class="gap"></div>
            </div>
        </section>