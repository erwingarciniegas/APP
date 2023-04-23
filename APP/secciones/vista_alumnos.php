<?php include('../templates/cabecera.php');?>
<?php include('../secciones/alumnos.php');?>
    
<div class="row">
    <div class="col-12">
        <br>
        <div class="row">
    <div class="col-5">
        <form action="" method="post">
        <div class="card">
            <div class="card-header">
                Alumnos
            </div>
            <div class="card-body">    
            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text"
                class="form-control" 
                name="id" 
                id="id" 
                aria-describedby="helpId" 
                placeholder="ID">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">NOMBRE</label>
              <input type="text"
                class="form-control" 
                name="nombre" 
                id="nombre" 
                aria-describedby="helpId" 
                placeholder="ESCRIBA UN NOMBRE">
            </div>

            <form class="d-flex">
                <div class="col">
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" 
                        name="apellidos" 
                        id="apellidos" 
                        class="form-control"
                        placeholder="ESCRIBA LOS APELLIDOS" 
                        aria-describedby="helpId">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Cursos del  alumno</label>
                        <select multiple class="form-select form-select-lg" 
                        name="cursos[]" 
                        id="listacursos">
                            <option>Seleccione una opción</option>
                            <option>curso 1</option>
                            <option>curso 2</option>
                        </select>
                    </div>
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" class="btn btn-success">Agregar</button>
                        <button type="submit" name="accion" class="btn btn-warning">Editar</button>
                        <button type="submit" name="accion" class="btn btn-danger">Borrar</button>
                    </div>

                    
                   </div>

                </div> 
                <br>
                
        </form>
    </div>
    <div class="col-7">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col" >ID</th>
                        <th scope="col" >NOMBRE</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td scope="row" ></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            
        
    </div>
</div>        
<?php include('../templates/pie.php');?>