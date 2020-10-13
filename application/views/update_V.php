<form action="<?php echo base_url(). "home/Update"?>"  method= "POST">
    <div class="container">
        <div class="row">
                <div class="col">
                        <h1 class="mb-4 mt-4">USER UPDATE:</h1>
                    <div class="alert-danger" id="msg-error" style="text-align: left">
                            <strong>¡Important!</strong>  Correct the following data.
                    </div>
                            <?php echo validation_errors(); ?>
                        
                    <div class="form-group">
                                 <label for="nombreUsuario">ID:</label>
                                 <input type="text" class="form-control" id="user" name="id"  placeholder="id" required >
                                 <small id="user" class="form-text text-muted">Enter a id to identify yourself on the platform</small>
                    </div>
                        <label >TypeIdentification:</label>
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
                            <label for="direccion">Identification:</label>
                                <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10"  required >
                    </div> 
                    <div class="form-group">
                        <label for="nombreUsuario">User:</label>
                            <input type="text" class="form-control" id="user" name="user"  placeholder="user" required >
                            <small id="user" class="form-text text-muted">Enter a username to identify yourself on the platform</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                            <input type="password" class="form-control" id="passw" name="passw"  minlength=""  maxlength="" placeholder="password" required pattern="[0-9@#$%]{8,16}+">
                    </div>
                    <div class="form-group">
                        <label for="nombres">Name:</label>
                            <input type="text" class="form-control" id="name" name="name"  maxlength="40" required placeholder="name" maxlength="40" >
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Lastname:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"  maxlength="40" required  placeholder="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" required >
                    </div>
                <button type="submit" class="btn btn-primary btn-block mb-5" id="btnUpdate" name="btnUpdate">Update account</button>
            </div>
        </div>  
    </div>
</form>