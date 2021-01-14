<?php $this->load->view('header'); ?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        Inicio de sesión
                    </div>
                    <div class="card-body">
                        <form action="login" method="post">
                            <div class="form-group">
                                <label>Nombre de Usuario</label>
                                <input type="text" name="username" placeholder="Nombre de usuario" class="form-control" value="<?php echo set_value('username'); ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" name="password" placeholder="Contraseña" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" <?php echo set_checkbox('remember',1);?>>

                                    <label class="form-check-label" for="remember">
                                        Recuérdame
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            ¿No tiene cuenta?&nbsp;<a href="/register"> Regístrese</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/forgot_password">¿Olvidó su contraseña?</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/resend_activation">¿No recibió su correo de activación?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('footer'); ?>