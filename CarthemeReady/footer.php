</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="corpinfo">
                    Автокей, 2016 г.
                </div>
                <div class="copyright">
                    <?php dynamic_sidebar( 'footer-widget' ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Напишите Ваш телефон:</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <div class="input-group-addon">+7</div>
                        <input type="text" class="form-control" id="exampleInputAmount">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-danger">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>