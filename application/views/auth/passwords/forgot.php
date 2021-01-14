<?php $this->load->view('header'); ?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        Recuperar contraseña
                    </div>
                    <div class="card-body">
                        <form action="forgot_password" method="post">
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Correo electrónico" class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar correo de reseteo de contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('footer'); ?>