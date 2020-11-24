var url = "bd/alta.php";

var appEquipos = new Vue({    
el: "#appEquipos",   
data:{     
     equipos:[],          
     cliente:"",
     serie:"",
     imei:"",
     sim:"",
     linea:"",
     alias:"",
     fecha:"",
     plataforma:"",
     nombre:"",
     stock:"",
     total:0,       
 },    
methods:{  
    //BOTONES        
    btnAlta:async function(){                    
        const {value: formValues} = await Swal.fire({
        title: 'ALTA',
        html:
        '<div class="row"><label class="col-sm-3 col-form-label">Cliente</label><div class="col-sm-7"><input id="cliente" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Serie</label><div class="col-sm-7"><input id="serie" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Imei</label><div class="col-sm-7"><input id="imei" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Sim</label><div class="col-sm-7"><input id="sim" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Linea</label><div class="col-sm-7"><input id="linea" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Alias</label><div class="col-sm-7"><input id="alias" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Fecha</label><div class="col-sm-7"><input id="fecha" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Plataforma</label><div class="col-sm-7"><input id="plataforma" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Nombre</label><div class="col-sm-7"><input id="nombre" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Stock</label><div class="col-sm-7"><input id="stock" type="number" min="0" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Guardar',          
        confirmButtonColor:'#1cc88a',          
        cancelButtonColor:'#3085d6',  
        preConfirm: () => {            
            return [
              this.cliente = document.getElementById('cliente').value,
              this.serie = document.getElementById('serie').value,
              this.imei = document.getElementById('imei').value,
              this.sim = document.getElementById('sim').value,
              this.linea = document.getElementById('linea').value,
              this.alias = document.getElementById('alias').value,
              this.fecha = document.getElementById('fecha').value,
              this.plataforma = document.getElementById('plataforma').value,
              this.nombre = document.getElementById('nombre').value,
             this.stock = document.getElementById('stock').value                    
            ]
          }
        })        
        if(this.cliente == "" || this.serie == "" || this.imei =="" || this.sim == "" || this.linea == "" || this.alias ==""|| this.fecha == "" || this.plataforma == "" || this.nombre =="" || this.stock == 0){
                Swal.fire({
                  type: 'info',
                  title: 'Datos incompletos',                                    
                }) 
        }       
        else{          
          this.altaEquipo();          
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
            Toast.fire({
              type: 'success',
              title: '¡Equipo Agregado!'
            })                
        }
    },           
    btnEditar:async function(id, cliente, serie, imei, sim, linea, alias, fecha, plataforma, nombre, stock){                            
        await Swal.fire({
        title: 'EDITAR',
        html:
        '<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Cliente</label><div class="col-sm-7"><input id="cliente" value="'+cliente+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Serie</label><div class="col-sm-7"><input id="serie" value="'+serie+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Imei</label><div class="col-sm-7"><input id="imei" value="'+imei+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Sim</label><div class="col-sm-7"><input id="sim" value="'+sim+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Linea</label><div class="col-sm-7"><input id="linea" value="'+linea+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Alias</label><div class="col-sm-7"><input id="alias" value="'+alias+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Fecha</label><div class="col-sm-7"><input id="fecha" value="'+fecha+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Plataforma</label><div class="col-sm-7"><input id="plataforma" value="'+plataforma+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Nombre</label><div class="col-sm-7"><input id="nombre" value="'+nombre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Stock</label><div class="col-sm-7"><input id="stock" value="'+stock+'" type="number" min="0" class="form-control"></div></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            cliente = document.getElementById('cliente').value,
            serie = document.getElementById('serie').value,
            imei = document.getElementById('imei').value,
            sim = document.getElementById('sim').value,
            linea = document.getElementById('linea').value,
            alias = document.getElementById('alias').value,
            fecha = document.getElementById('fecha').value,
            plataforma = document.getElementById('plataforma').value,
            nombre = document.getElementById('nombre').value,
            stock = document.getElementById('stock').value,                    
            
            this.editarEquipo(id,cliente,serie,imei,sim,linea,alias,fecha,plataforma,nombre,stock);
            Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'
            )                  
          }
        });
        
    },        
    btnBorrar:function(id){        
        Swal.fire({
          title: '¿Está seguro de borrar el registro: '+id+" ?",         
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor:'#d33',
          cancelButtonColor:'#3085d6',
          confirmButtonText: 'Borrar'
        }).then((result) => {
          if (result.value) {            
            this.borrarEquipo(id);             
            //y mostramos un msj sobre la eliminación  
            Swal.fire(
              '¡Eliminado!',
              'El registro ha sido borrado.',
              'success'
            )
          }
        })                
    },       
    
    //PROCEDIMIENTOS para el CRUD     
    listarEquipos:function(){
        axios.post(url, {opcion:4}).then(response =>{
           this.equipos = response.data;       
        });
    },    
    //Procedimiento CREAR.
    altaEquipo:function(){
        axios.post(url, {opcion:1, 
          cliente:this.cliente,
          serie:this.serie,
          imei:this.imei,
          sim:this.sim,
          linea:this.linea,
          alias:this.alias,
          fecha:this.fecha,
          plataforma:this.plataforma,
          nombre:this.nombre,
          stock:this.stock }).then(response =>{
            this.listarEquipos();
        });        
         this.cliente = "",
         this.serie = "",
         this.imei = "",
         this.sim = "",
         this.linea = "",
         this.alias = "",
         this.fecha = "",
         this.plataforma = "",
         this.nombre = "",
         this.stock = 0
    },               
    //Procedimiento EDITAR.
    editarEquipo:function(id,cliente,serie,imei,sim,linea,alias,fecha,plataforma,nombre,stock){       
       axios.post(url, {opcion:2, 
        id:id, cliente:cliente, 
        serie:serie, 
        imei:imei, 
        sim:sim, 
        linea:linea, 
        alias:alias, 
        fecha:fecha, 
        plataforma:plataforma, 
        nombre:nombre, 
        stock:stock }).then(response =>{           
           this.listarEquipos();           
        });                              
    },    
    //Procedimiento BORRAR.
    borrarEquipo:function(id){
        axios.post(url, {opcion:3, id:id}).then(response =>{           
            this.listarEquipos();
            });
    }             
},      
created: function(){            
   this.listarEquipos();            
},    
computed:{
    totalStock(){
        this.total = 0;
        for(equipo of this.equipos){
            this.total = this.total + parseInt(equipo.stock);
        }
        return this.total;   
    }
}    
});