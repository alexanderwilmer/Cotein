

    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <br>
                                    <br>
                                    <br>
                                    <h2 class="main-title">Comercial tecnico industrial</h2>
                                    <hr>
                                    <p>Detalle del producto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
<section id="blog" class="white">
    <div class="container">
    <div class="gap"></div>
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">

                 
                <div class="widget tags">
                    <h3 class="widget-title">Redes sociales</h3>
                    <div class="addthis_sharing_toolbox"></div>
                     
                </div><!--/.tags-->
                <div class="widget tags">
                    <h3 class="widget-title">Marca</h3>
                    <ul class="tag-cloud">

                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#"><?= h($producto->marca->name) ?></a></li>
                         

                    </ul>
                </div><!--/.tags-->
                <div class="widget tags">
                    <h3 class="widget-title">Tipo</h3>
                    <ul class="tag-cloud">

                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#"><?= h($producto->tipo->name) ?></a></li>
                         

                    </ul>
                </div><!--/.tags-->
                <div class="widget tags">
                    <h3 class="widget-title">Areas</h3>
                    <ul class="tag-cloud">
                        <?php foreach ($areas as $productoAreas): ?>

                            <li><a class="btn btn-xs btn-primary btn-outlined" href="#"><?= h($productoAreas->area->name) ?></a></li>
                        <?php endforeach; ?>

                    </ul>
                </div><!--/.tags-->
                
                

            </aside>
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div class="blog-item">
                        <div class="blog-featured-image">
                            <img class="img-responsive img-blog" src="/images/productos/<?= h($producto->path) ?>" alt="" />
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="/images/productos/<?= h($producto->path) ?>" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="main-title"><?= h($producto->name) ?>.</h3>
                            <div class="entry-meta">
                                <span><i class="fa fa-user"></i> <a href="#"> <?= $producto->has('marca') ? $this->Html->link($producto->marca->name, ['controller' => 'Marcas', 'action' => 'view', $producto->marca->id]) : '' ?></a></span>
                                 
                            </div>
                            <p class="lead"><?= h($producto->descripcion) ?></p>

                          
                            <hr>

                            <div class="tags">
                                  <div class="addthis_sharing_toolbox"></div>
                            </div>

                            <hr>

                              <!-- 

                            <div id="comments">
                                <div id="comments-list">
                                    <h3>3 Comments</h3>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar img-thumbnail comment-avatar" src="http://placehold.it/400x400" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="well">
                                                <div class="media-heading">
                                                    <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2014</small>
                                                </div>
                                                <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                                <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="avatar img-thumbnail comment-avatar" src="http://placehold.it/400x400" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="well">
                                                        <div class="media-heading">
                                                            <strong>Peter Jackson</strong>&nbsp; <small>16th Jan, 2014</small>
                                                        </div>
                                                        <p>Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the. Abode stuff noisy manor blush yet the far. Up colonel so between removed so do.</p>
                                                        <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div> 
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar img-thumbnail comment-avatar" src="http://placehold.it/400x400" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="well">
                                                <div class="media-heading">
                                                    <strong>John Smith</strong>&nbsp; <small>14th Jan, 2014</small>
                                                </div>
                                                <p>Quitting informed concerns can men now. Projection to or up conviction uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p>
                                                <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="gap"></div>

                                <div id="comment-form">
                                    <h3  class="main-title">Leave a comment</h3>
                                    <hr>
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-outlined">Submit Comment</button>
                                    </form>
                                </div> 
                            </div>  
                        -->
                        </div>
                    </div>
                     
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </div>
</section><!--/#blog-->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546227ee7522b737"></script>
