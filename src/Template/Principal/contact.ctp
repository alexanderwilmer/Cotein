     

        <section id="contact" class="white">
            <div class="container">
                    <div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Contactenos</h2>
                        <hr>
                        <p>Para cualquier pregunta contactenos por.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4 fade-up">
                            <h3>Información de contacto</h3>
                            <p><span class="icon icon-home"></span>Honduras<br/>
                                <!--
                                <span class="icon icon-phone"></span>+<br/>
                                <span class="icon icon-mobile"></span>+36 65984 405<br/>
                                -->
                                <span class="icon icon-envelop"></span> <a href="#"><?= h($empresa->correo) ?>.</a> <br/>
                            </p>
                        </div><!-- col -->

                        <div class="col-md-8 fade-up">
                            <h3>Envie un mensaje</h3>
                            <br>
                            <br>
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Enviar" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="gap"></div>
                </div>
        </section>