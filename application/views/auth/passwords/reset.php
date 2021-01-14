<?php $this->load->view('header'); ?>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        Resetear Contraseña
                    </div>
                    <div class="card-body">
                        <form action="/reset_password/<?php echo $code; ?>" method="post">
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Correo" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" name="password" placeholder="Contraseña" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Repetir Contraseña</label>
                                <input type="password" name="password_confirmation" placeholder="Repetir contraseña" class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Resetear Contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('footer'); ?>