
const registrarUsuario = document.querySelector('#registrarUsuario'),
      iniciarSesion = document.querySelector('#loginBtn'),
      generarReporte = document.querySelector('#generarReporte'),
      enviarServicio = document.querySelector('#enviarServicio'),
      agregarEquipo = document.querySelector('#agregarEquipo'),
      listadoUsuarios = document.querySelector('.listado-usuarios'),
      editUser = document.querySelector('#editarUsuario'),
      reportarMonitoreo = document.querySelector('#generarReporteMonitoreo'),
      enviarServicioMonitoreo = document.querySelector('#enviarServicioMonitoreo'),
      proponerPrograma = document.querySelector('#proponer'),
      proponerPersonaje = document.querySelector('#proponerPersonaje');


      function setFecha(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)
          dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)
          mes='0'+mes //agrega cero si el menor de 10
          const fechaActual = document.querySelector('#fechaActual');
          if(fechaActual) {
            fechaActual.value=ano+"-"+mes+"-"+dia;
          }
      }

      
      const fecha = document.querySelector('#fechaActual');
      if (fecha) {
         window.onload = function(){
           var fecha = new Date(); //Fecha actual
           var mes = fecha.getMonth()+1; //obteniendo mes
           var dia = fecha.getDate(); //obteniendo dia
           var ano = fecha.getFullYear(); //obteniendo año
           if(dia<10)
             dia='0'+dia; //agrega cero si el menor de 10
           if(mes<10)
             mes='0'+mes //agrega cero si el menor de 10
           document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
         }
        
      }

eventListenners();

function eventListenners() {
    if (registrarUsuario) {
        registrarUsuario.addEventListener('click', IngresarUsuario);
    }
    if(iniciarSesion){
      iniciarSesion.addEventListener('click', IniciarSesion);
    }
    if (generarReporte) {
      generarReporte.addEventListener('click', registrarReporte);
    }
    if (enviarServicio) {
      enviarServicio.addEventListener('click', reporteServicio);
    }
    if (agregarEquipo) {
      agregarEquipo.addEventListener('click', equipoComputo);
    }
    if (listadoUsuarios) {
      listadoUsuarios.addEventListener('click', eliminarUsuario);
    }
    if (editUser) {
      editUser.addEventListener('click', editarUsuario);
    }
    if (reportarMonitoreo) {
      reportarMonitoreo.addEventListener('click', reporteFalla);
    }
    if (enviarServicioMonitoreo) {
      enviarServicioMonitoreo.addEventListener('click', servicioMonitoreo);
    }  
    if (proponerPrograma) {
      proponerPrograma.addEventListener('click', programa);
    }
    if (proponerPersonaje) {
      proponerPersonaje.addEventListener('click', personaje);
    }
}

function notificacionFlotante(tipo, texto) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      
      Toast.fire({
        type: tipo,
        title: texto
      })
}

function IngresarUsuario(e) {
    e.preventDefault();
    
    const nombre = document.querySelector('#usuarioNombre').value,
          apellido = document.querySelector('#usuarioApellido').value,
          area = document.querySelector('#usuarioArea').value,
          usuario = document.querySelector('#usuarioUser').value,
          password = document.querySelector('#usuarioPassword').value,
          comPassword = document.querySelector('#comprobacionPassword').value;

          if (nombre === '' || apellido === '' || area === '' || usuario === '' || password === '' || comPassword === '') {
              notificacionFlotante('error', 'Todos los campos son obligatorios');
          } else {
              if (password !== comPassword) {
                notificacionFlotante('error', 'Password no coincide');
              }
              if (password === comPassword) {
    
                datosUsuario = new FormData();

                datosUsuario.append('nombre', nombre);
                datosUsuario.append('apellido', apellido);
                datosUsuario.append('area', area);
                datosUsuario.append('usuario', usuario);
                datosUsuario.append('password', password);

                const xhr = new XMLHttpRequest();

                xhr.open('POST', 'includes/model/registro.php', true);

                xhr.onload = function() {
                  if (this.status === 200) {
                    
                    const respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta);

                    if (respuesta.respuesta === 'correcto') {
                      notificacionFlotante('success', 'Usuario registrado correctamente');
                        document.querySelector('.formulario-usuario').reset();
                    } 
                    if (respuesta.respuesta === 'existe') {
                      notificacionFlotante('error', 'El usuario ya se encuentra registrado');
                    }
                    if (respuesta.respuesta === 'error') {
                      notificacionFlotante('error', 'Houston, tenemos un problema');
                    }
                  }
                }
                xhr.send(datosUsuario);
              }
              
          }         
}

function IniciarSesion(e) {
  e.preventDefault();
  const usuario = document.querySelector('#usuarioLogin').value,
          password = document.querySelector('#passwordLogin').value;

    if (usuario === '' || password === '') {
        notificacionFlotante('error', 'Todos los campos son obligatorios');
    } else {
        const datosLogin = new FormData();
        datosLogin.append('usuario', usuario);
        datosLogin.append('password', password);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../includes/model/login.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                      const respuesta = JSON.parse(xhr.responseText);
                      console.log(respuesta);
                      if (respuesta.respuesta === 'correcto') {
                      if (respuesta.tipo === 'monitoreo') {
                          notificacionFlotante('success', 'Monitoreo');
                          window.location.href = '../user';
                      }
                      if (respuesta.tipo === 'administrativo') {
                          notificacionFlotante('success', 'Administrativo');
                          window.location.href = '../index.php';
                      }
                      if (respuesta.tipo === 'sistemas') {
                        notificacionFlotante('success', 'Sistemas');
                        window.location.href = '../index.php';
                    }
                      }
                      if (respuesta.respuesta === 'incorrecto') {
                          notificacionFlotante('error', 'Password Incorrecto');
                      }
                      if (respuesta.respuesta === 'noexiste') {
                          notificacionFlotante('error', 'Usuario no existe');
                      }
            }

            
        }
        xhr.send(datosLogin);
    }
}

function registrarReporte(e) {
  e.preventDefault();
  const nombre = document.querySelector('#nombre').value,
        departamento = document.querySelector('#departamentoInput').value,
        area = document.querySelector('#areaInput').value,
        fecha = document.querySelector('#fechaActual').value,
        falla = document.querySelector('#falla').value;

        if (area === '' || falla === '') {
          notificacionFlotante('error', 'Campos Obligatorios');
        } else {
          const reportes = new FormData();

          reportes.append('nombre', nombre);
          reportes.append('departamento', departamento);
          reportes.append('area', area);
          reportes.append('fecha', fecha);
          reportes.append('falla', falla);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', 'includes/model/reportes.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'El Reporte se ha enviado');
                document.querySelector('.formulario-reportes').reset();
                setFecha();

              }
              if (respuesta.respuesta === 'error') {
                notificacionFlotante('error', 'Houston tuvimos un problema');
              }
            }

          }
          xhr.send(reportes);
        }
}

function reporteServicio(e) {
  e.preventDefault();
  
  const nombre = document.querySelector('#nombre').value,
        ubicacion = document.querySelector('#ubicacionInput').value,
        equipo = document.querySelector('#equipoInput').value,
        serie = document.querySelector('#serie').value,
        fecha = document.querySelector('#fechaActual').value,
        problema = document.querySelector('#problema').value,
        observaciones = document.querySelector('#observaciones').value;

        if (nombre === '' || ubicacion === '' || equipo === '' || problema === '' || observaciones === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          const reporteServicio = new FormData();

          reporteServicio.append('nombre', nombre);
          reporteServicio.append('ubicacion', ubicacion);
          reporteServicio.append('equipo', equipo);
          reporteServicio.append('serie', serie);
          reporteServicio.append('fecha', fecha);
          reporteServicio.append('problema', problema);
          reporteServicio.append('observaciones', observaciones);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', 'includes/model/servicios.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'El Reporte se ha enviado');
                document.querySelector('.formulario-servicios').reset();
                setFecha();

              }
              if (respuesta.respuesta === 'error') {
                notificacionFlotante('error', 'Houston tuvimos un problema');
              }
            }

          }
          xhr.send(reporteServicio);
        }
}

function equipoComputo(e) {
  e.preventDefault();
  
  const fecha = document.querySelector('#fechaActual').value,
        nombre = document.querySelector('#nombre').value,
        serie = document.querySelector('#serie').value,
        marca = document.querySelector('#marca').value,
        modelo = document.querySelector('#modelo').value,
        procesador = document.querySelector('#procesadorInput').value,
        disco = document.querySelector('#discoInput').value,
        ram = document.querySelector('#ramInput').value,
        observaciones = document.querySelector('#observaciones').value;

        if (nombre === '' || serie === '' || marca === '' || modelo === '' || procesador === '' || disco === '' || ram === '' ) {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          const equipo = new FormData();

          equipo.append('fecha', fecha);
          equipo.append('nombre', nombre);
          equipo.append('serie', serie);
          equipo.append('marca', marca);
          equipo.append('modelo', modelo);
          equipo.append('procesador', procesador);
          equipo.append('disco', disco);
          equipo.append('ram', ram);
          equipo.append('observaciones', observaciones);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', 'includes/model/equipos.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'Se agrego el equipo correctamente');
                document.querySelector('.formulario-equipos').reset();
                setFecha();

              }
              if (respuesta.respuesta === 'error') {
                notificacionFlotante('error', 'Houston tuvimos un problema');
              }
            }

          }
          xhr.send(equipo);
        }

}



$("#equipoInput").change(function(){
  const valor = $(this).val();  
  // console.log(valor);
    const data = new FormData()
    data.append('valor', valor);

    const xhr = new XMLHttpRequest();

          xhr.open('POST', 'includes/model/data-equipos.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'existe') {
                document.querySelector('#serie').value = respuesta.serie;
              }

            }
          }
          xhr.send(data);

});

$("#equipoInputMonitoreo").change(function(){
  const valor = $(this).val();  
  // console.log(valor);
    const data = new FormData()
    data.append('valor', valor);

    const xhr = new XMLHttpRequest();

          xhr.open('POST', '../includes/model/data-equipos.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'existe') {
                document.querySelector('#serie').value = respuesta.serie;
              }

            }
          }
          xhr.send(data);

});

function eliminarUsuario(e) {
  if(e.target.parentElement.classList.contains('btn-borrar')) {
    const id = e.target.parentElement.getAttribute('data-id');
    console.log(id);

    Swal.fire({
      title: '¿Estas seguro(a)?',
      text: "Esta acción no se podrá deshacer",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#1d9e19',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, borrar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.value) {
        
          const xhr = new XMLHttpRequest();
          
          xhr.open('GET', `includes/model/borrarUser.php?id=${id}`, true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
               console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                 //Eliminar el registro del DOM
                // console.log(e.target.parentElement.parentElement.parentElement);
                e.target.parentElement.parentElement.parentElement.remove();
                if (result.value) {
                  Swal.fire(
                    'Eliminado',
                    'Usuario eliminado correctamente',
                    'success'
                  )
                }
                
              }
              if (respuesta.respuesta === 'error') {
                if (result.value) {
                  Swal.fire(
                    'Error',
                    'No se puede eliminar el Usuario',
                    'error'
                  )
                }
              }
            }
          }

          xhr.send();
      }
    })
  }
}

function editarUsuario(e) {
  e.preventDefault();

  const nombre = document.querySelector('#usuarioNombre').value,
          apellido = document.querySelector('#usuarioApellido').value,
          area = document.querySelector('#usuarioArea').value,
          usuario = document.querySelector('#usuarioUser').value,
          password = document.querySelector('#usuarioPassword').value,
          comPassword = document.querySelector('#comprobacionPassword').value,
          id = document.querySelector('#id-editar').value;

          if (nombre === '' || apellido === '' || area === '' || usuario === '' || password === '' || comPassword === '') {
              notificacionFlotante('error', 'Todos los campos son obligatorios');
          } else {
              if (password !== comPassword) {
                notificacionFlotante('error', 'Password no coincide');
              }
              if (password === comPassword) {
    
                datosUsuario = new FormData();

                datosUsuario.append('nombre', nombre);
                datosUsuario.append('apellido', apellido);
                datosUsuario.append('area', area);
                datosUsuario.append('usuario', usuario);
                datosUsuario.append('password', password);
                datosUsuario.append('id', id);

                const xhr = new XMLHttpRequest();

                xhr.open('POST', 'includes/model/editarUsuario.php', true);

                xhr.onload = function() {
                  if (this.status === 200) {
                    
                    const respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta);

                    if (respuesta.respuesta === 'correcto') {
                      notificacionFlotante('success', 'Usuario editado correctamente');
                      setTimeout(() => {
                        window.location.href = 'listaUsuarios.php';
                      }, 3000);
                    }

                    if (respuesta.respuesta === 'error') {
                      notificacionFlotante('error', 'No se editó el empleado');
                    }   
                  }
                }
                xhr.send(datosUsuario);
              }
              
          }   
}



//AREA DE MONITORISTAS

function reporteFalla(e) {
  e.preventDefault();
  const nombre = document.querySelector('#nombre').value,
        departamento = document.querySelector('#departamentoInput').value,
        area = document.querySelector('#areaInput').value,
        fecha = document.querySelector('#fechaActual').value,
        falla = document.querySelector('#falla').value;

        if (area === '' || falla === '') {
          notificacionFlotante('error', 'Campos Obligatorios');
        } else {
          const reportes = new FormData();

          reportes.append('nombre', nombre);
          reportes.append('departamento', departamento);
          reportes.append('area', area);
          reportes.append('fecha', fecha);
          reportes.append('falla', falla);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', '../includes/model/reportes.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'El Reporte se ha enviado');
                document.querySelector('.formulario-reportes').reset();
                setFecha();

              }
              if (respuesta.respuesta === 'error') {
                notificacionFlotante('error', 'Houston tuvimos un problema');
              }
            }

          }
          xhr.send(reportes);
        }
}



function servicioMonitoreo(e) {
  e.preventDefault();
  
  const nombre = document.querySelector('#nombre').value,
        ubicacion = document.querySelector('#ubicacionInput').value,
        equipo = document.querySelector('#equipoInputMonitoreo').value,
        serie = document.querySelector('#serie').value,
        fecha = document.querySelector('#fechaActual').value,
        problema = document.querySelector('#problema').value,
        observaciones = document.querySelector('#observaciones').value;

        if (nombre === '' || ubicacion === '' || equipo === '' || problema === '' || observaciones === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          const reporteServicio = new FormData();

          reporteServicio.append('nombre', nombre);
          reporteServicio.append('ubicacion', ubicacion);
          reporteServicio.append('equipo', equipo);
          reporteServicio.append('serie', serie);
          reporteServicio.append('fecha', fecha);
          reporteServicio.append('problema', problema);
          reporteServicio.append('observaciones', observaciones);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', '../includes/model/servicios.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'El Reporte se ha enviado');
                document.querySelector('.formulario-servicios').reset();
                setFecha();

              }
              if (respuesta.respuesta === 'error') {
                notificacionFlotante('error', 'Houston tuvimos un problema');
              }
            }

          }
          xhr.send(reporteServicio);
        }
}



// var i = 2;
// var d = new Date();
// var year = d.getFullYear();
// const nReporte = 'M-' + year + '-' + i++;
// document.getElementById('reporte').value = nReporte;


//PROPUESTAS

function programa(e) {
  e.preventDefault();

  const fecha = document.querySelector('#fechaActual').value,
        nombre = document.querySelector('#nombre').value,
        tipo = document.querySelector('#resultadoTipo').value,
        fuente = document.querySelector('#fuente').value,
        programa = document.querySelector('#programa').value,
        comentarios = document.querySelector('#comentarios').value;

        if (tipo === '' || fuente === '' || programa === '' || comentarios === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          const propuestaPrograma = new FormData();
          
          propuestaPrograma.append('fecha', fecha);
          propuestaPrograma.append('nombre', nombre);
          propuestaPrograma.append('tipo', tipo);
          propuestaPrograma.append('fuente', fuente);
          propuestaPrograma.append('programa', programa);
          propuestaPrograma.append('comentarios', comentarios);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', 'includes/model/propuestaPrograma.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'Propuesta enviada correctamente');
                document.querySelector('.formulario-programa').reset();
                setFecha();
              }
            }

          }
          xhr.send(propuestaPrograma);
        }
}

function personaje(e) {
  e.preventDefault();
  
  const fecha = document.querySelector('#fechaActual').value,
        nombre = document.querySelector('#nombre').value,
        tipo = document.querySelector('#tipoValor').value,
        categoria = document.querySelector('#categoria').value,
        comentarios = document.querySelector('#comentarios').value;

        if (tipo === '' || categoria === '' || comentarios  === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          const propuestaPersonaje = new FormData();
          
          propuestaPersonaje.append('fecha', fecha);
          propuestaPersonaje.append('nombre', nombre);
          propuestaPersonaje.append('tipo', tipo);
          propuestaPersonaje.append('categoria', categoria);
          propuestaPersonaje.append('comentarios', comentarios);

          const xhr = new XMLHttpRequest();

          xhr.open('POST', 'includes/model/propuestaPersonaje.php', true);

          xhr.onload = function() {
            if (this.status === 200) {
              const respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
              if (respuesta.respuesta === 'correcto') {
                notificacionFlotante('success', 'Propuesta enviada correctamente');
                document.querySelector('.formulario').reset();
                setFecha();
              }
            }

          }
          xhr.send(propuestaPersonaje);
        }
}