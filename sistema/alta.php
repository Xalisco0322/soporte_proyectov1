<!doctype html>
<html>
    <head>
    <link rel="shortcut icon" href="#" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontAwesom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">        
    <!--Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <!--CSS custom -->  
    <link rel="stylesheet" href="main.css">  
    </head>
    <body>
    <header>
        <h2 class="text-center text-dark"><span class="badge badge-primary">Alta de Equipos Gateway</span></h2>
    </header>    
    
     <div id="appEquipos">               
        <div class="container-fluid">                
            <div class="row">       
                <div class="col">        
                    <button @click="btnAlta" class="btn btn-primary" title="ALTA"><b>Agregar Alta</b></button>
                    <br><br>
                    <a class="btn btn-primary" href="../index.html" role="button"><b>Menu</b></a>
                    <a class="btn btn-primary" href="javascript:window.print()" role="button"><b>Imprimir</b></a>
                </div>
                <div class="col text-right">                        
                    <h5>Total de Equipos: <span class="badge badge-primary">{{totalStock}}</span></h5>
                </div>    
            </div>                
            <div class="row mt-5">
                <div class="col-lg-12">                    
                    <table class="table table-striped" class="table table-hover">
                        <thead>
                            <tr class="bg-dark text-light text-center">
                                <th>ID</th>                                    
                                <th>Cliente</th>
                                <th>Serie</th>
                                <th>Imei</th>
                                <th>Sim</th>
                                <th>Linea</th>
                                <th>Alias</th>
                                <th>Fecha</th>
                                <th>Plataforma</th> 
                                <th>Nombre</th>
                                <th>Stock</th>    
                                <th>Acciones</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr v-for="(equipo,indice) of equipos">                                
                                <td>{{equipo.id}}</td> 
                                <td>{{equipo.cliente}}</td> 
                                <td>{{equipo.serie}}</td> 
                                <td>{{equipo.imei}}</td> 
                                <td>{{equipo.sim}}</td> 
                                <td>{{equipo.linea}}</td> 
                                <td>{{equipo.alias}}</td> 
                                <td>{{equipo.fecha}}</td> 
                                <td>{{equipo.plataforma}}</td> 
                                <td>{{equipo.nombre}}</td>                 
                                <td>
                                    <div class="col-md-5">
                                    <input type="number" v-model.number="equipo.stock" class="form-control text-right" disabled>      
                                    </div>    
                                </td>
                                <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(equipo.id, equipo.cliente, equipo.serie, equipo.imei, equipo.sim, equipo.linea, equipo.alias, equipo.fecha, equipo.plataforma, equipo.nombre, equipo.stock)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(equipo.id)"><i class="fas fa-trash-alt"></i></button>      
								</div>
                                </td>
                            </tr>    
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>        
    </div>        
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>         
    <!--Vue.JS -->    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>            
    <!--Axios -->      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>    
    <!--Sweet Alert 2 -->        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>      
    <!--Código custom -->          
    <script src="registroalta.js"></script>         
    </body>
</html>