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
                                <h5><a href="/principal/detalle/<?= h($producto->id) ?>"> <?= h($producto->name) ?></a><small class="role muted"><?= h($producto->marca->name) ?></small></h5>
                                <p style="height: 100px; overflow: hidden;"> <?= h($producto->descripcion) ?></p>
                               
                                <!--
                                <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    -->
                             <div class="addthis_sharing_toolbox"></div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                   
                 
                </div><!--/#meet-the-team-->
                 <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('primero')) ?>
                            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
                            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} elemento(s)  {{count}} total')]) ?></p>
                    </div>
                <div class="gap"></div>
                <div class="gap"></div>
            </div>
        </section>

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546227ee7522b737"></script>