<?php

use yii\bootstrap\BaseHtml;

?>

<div class="form-group">
    <label>FORMULARIO DESDE YII2</label>
</div>

<div class="form-group">
            <label for="Matricula">Matricula</label>
            <input type="text" name="Matricula" id="Matricula" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Apellido1">Apellido Paterno</label>
            <input type="text" name="Apellido1" id="Apellido1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Apellido2">Apellido Materno</label>
            <input type="text" name="Apellido2" id="Apellido2" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Edad">Edad</label>
            <input type="number" name="Edad" id="Edad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Fecha">Fecha de nacimiento</label>
            <input type="date" name="Fecha" id="Fecha" class="form-control" required>
        </div>

        <div class="radio">
            <label for="Sexo">Sexo</label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="opciones1" id="opcion1"  >
                Femenino
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="opciones2" id="opcion2" >
                Maculino
            </label>
        </div>

        <div class="form-group">
            <label for="Estado">Estado civil</label>
            <input type="text" name="Estado" id="Estado" class="form-control" required>
        </div>

        <button type="button" class="btn btn-primary">Guardar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>
        var form = document.querySelector('.needs-validation');

        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        })
    </script>