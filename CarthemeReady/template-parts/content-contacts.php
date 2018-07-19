<article id="post-<?php the_ID(); ?>" class="page-article">
    <h1 class="section-title"><?php the_title(); ?></h1>
    <div class="page-content">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="wrap-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d574867.1430784549!2d37.07207998953884!3d55.748516901306175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCw!5e0!3m2!1sru!2sru!4v1476300863274" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="wrap-contacts">
                    <?php the_content(); ?>
                </div>
                <div class="wrap-form">
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </div>
                                <input type="text" class="form-control" id="exampleInputAmount1" placeholder="Напишите Ваше имя">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                </div>
                                <input type="tel" class="form-control" id="exampleInputAmount2" placeholder="Напишите Ваш телефон">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Напишите Ваши комментарии в случае их наличия"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Заказать бесплатный звонок</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</article>