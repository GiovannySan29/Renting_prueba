<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <form action="<?php echo base_url() . "Sign_in_C/insertUser" ?>" method="POST">
                <h1 class="mb-4 mt-4">USER REGISTRATION:</h1>
                <div class="form-group">
                    <label for="nombreUsuario">User:</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="user" required>
                    <small id="user" class="form-text text-muted">Enter a username to identify yourself on the platform</small>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="passw" name="passw" minlength="" maxlength="" placeholder="password" required pattern="[0-9@#$%]{8,16}+">
                </div>
                <div class="form-group">
                    <label for="nombres">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="40" required placeholder="name" maxlength="40">
                </div>
                <div class="form-group">
                    <label for="apellidos">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" maxlength="40" required placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                </div>
                <label>TypeIdentification:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="cc" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        CC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="pas">
                    <label class="form-check-label" for="exampleRadios2">
                        PAS
                    </label>
                </div>
                <div class="form-group">
                    <label for="direccion">Identification:</label>
                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10" required>
                </div>
                <label>TypeUsers:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeUsers" id="typeUsers" value="client" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Client
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeUsers" id="typeUsers" value="Administration">
                    <label class="form-check-label" for="exampleRadios2">
                        Administration
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-5" id="create" name="update">Create account</button>
            </form>
        </div>

        <div class="col-12 col-md-4">

            <form id="login-form" action="<?php echo base_url() . "Delete_C/delete" ?>" method="post" role="form" style="display: block;">
                <h1 class="mb-4 mt-4">USER DELETE:</h1>
                <label>TypeIdentification:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="cc" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        CC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="pas">
                    <label class="form-check-label" for="exampleRadios2">
                        PAS
                    </label>
                </div>
                <div class="form-group">
                    <label for="direccion">Identification:</label>
                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10" required>
                </div>
                <button type="submit" name="userlogin" class="btn btn-primary btn-block mb-5" value="<?= set_value('userlogin'); ?>" size="25">Delete</button>

                <div class="col-md-12">
                    <form id="login-form" action="<?php echo base_url() . "Delete_C/delete" ?>" method="post" role="form" style="display: block;">
                        <h1 class="mb-4 mt-4">USER UPDATE:</h1>
                        <div class="form-group">
                            <label for="direccion">Identification:</label>
                            <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10" required>
                        </div>
                        <label>TypeIdentification:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="cc" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                CC
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="pas">
                            <label class="form-check-label" for="exampleRadios2">
                                PAS
                            </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nombreUsuario">User:</label>
                            <input type="text" class="form-control" id="user" name="user" placeholder="user" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="passw" name="passw" minlength="" maxlength="" placeholder="password" required pattern="[0-9@#$%]{8,16}+">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" maxlength="40" required placeholder="name" maxlength="40">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Lastname:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" maxlength="40" required placeholder="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-5" id="update" name="update">User Update</button>
                </div>
        </div>

        <div class="col-12 col-md-4">
            <?php echo validation_errors(); ?>
            <form id="login-form" action="<?php echo base_url() . "Delete_C/delete" ?>" method="post" role="form" style="display: block;">
                <h1 class="mb-4 mt-4">USER QUERY:</h1>
                <div class="form-group">
                    <label for="direccion">Identification:</label>
                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10" required>
                </div>
                <strong>¡Important!</strong> Please enter the data to change.
                <br>
                <br>
                <label>TypeIdentification:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="cc" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        CC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="pas">
                    <label class="form-check-label" for="exampleRadios2">
                        PAS
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="nombreUsuario">User:</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="user" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="passw" name="passw" minlength="" maxlength="" placeholder="password" required pattern="[0-9@#$%]{8,16}+">
                </div>
                <div class="form-group">
                    <label for="nombres">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="40" required placeholder="name" maxlength="40">
                </div>
                <div class="form-group">
                    <label for="apellidos">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" maxlength="40" required placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-5" id="update" name="update"> User Query</button>
        </div>
    </div>
</div>

</div>
</div>
