<?php $this->load->view('header'); ?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        Registro
                    </div>
                    <div class="card-body">
                        <form action="register" method="post">
                            <div class="form-group">
                                <label>Nombre de Usuario</label>
                                <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Nombre de usuario" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Correo electrónico" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Nombre" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" name="password" placeholder="Contraseña" class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('footer'); ?>