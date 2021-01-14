<?php $this->load->view('header'); ?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        Reenviar Correo de Activación
                    </div>
                    <div class="card-body">
                        <form action="resend_activation" method="post">
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Correo" class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Reenviar Correo de Activación</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('footer'); ?>