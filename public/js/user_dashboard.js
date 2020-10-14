
// ------- FUNCIONES BOTONES DASHBOARD --------------

    // ----- OBTENER DETALLE DE ORDEN -----

function getOrdenDetail(id){
    axios.get(`/order/Detail/${id}`)
        .then(res => {
            modalInfo(res.data, id);
        })
}

    // ----- OBTENER DETALLE DE ENVIO -----

function getOrdenInfo(id){
  axios.get(`/get/shiping-info/${id}`)
    .then(res => {
      modalEnvioInfo(res.data, id)
    })
}

// ----- GUARDAR DATOS DE ENVIO -----

function agregarDatosDeEnvio(d_identidad, dir_1, dir_2, tlfn, c_postal, orden_id){
    axios.post('/guardar/shiping-data', {
        documento_de_identidad: d_identidad,
        direccion_1: dir_1,
        direccion_2: dir_2,
        telefono: tlfn,
        codigo_postal: c_postal,
        orden_id: orden_id
    })
    .then(res => {
        if(res.status === 204){
            getOrdenInfo(orden_id);
        }
    })
}

// ----- MODAL DETALLES DE ORDEN -----
function modalInfo(detalles, orden){
    let orderId = document.getElementById('detalle_id'),
        container = document.getElementById('modal_container');

    container.innerHTML = ''
    orderId.textContent = `Orden: #${orden}`;

    detalles.forEach(detalle => {
        container.innerHTML += `
            <tr>
              <td>
                  <img src="/storage/${detalle.img}" width="40">
              </td>
              <td>${detalle.title}</td>
              <td>${detalle.cantidad}</td>
              <td>${detalle.price}</td>
            </tr>
        `
    });
}

// ----- MODAL DETALLES DE ENVIO -----

function modalEnvioInfo(info, orden){
  let container = document.getElementById('modal_info_container'),
      ordenId = document.getElementById('detalle_envio_id');

  container.innerHTML = '';

  if(Object.entries(info).length > 0){
    ordenId.innerHTML = `Información de envio, Orden: #${info.orden_id}`

    container.innerHTML += `
        <div>Identidad: <strong>${info.documento_de_identidad}</strong></div>
        <div>Dirección 1: <strong>${info.direccion_1}</strong> </div>
        <div>Dirección 2: <strong>${info.direccion_2}</strong> </div>
        <div>Telefono: <strong>${info.telefono}</strong> </div>
        <div>Código postal: <strong>${info.codigo_postal}</strong> </div>
    `
  }else {
    ordenId.innerHTML = 'No has agregado ninguna Información de envio, por favor agrega esta informacion'
    container.innerHTML = `
        <a href="#"id="agregar_datos_envio" class="btn btn-primary" >Agregar datos de envio</a>
    `
    document.getElementById('agregar_datos_envio').addEventListener('click', e => {
        
        modalFormularioDatosEnvio(container,orden)
    })
  }
}

// ----- AGREGAR FORMULARIO EN MODAL DATOS DE ENVIO PARA GUARDAR LOS DATOS -----

function modalFormularioDatosEnvio(container, orden_id){
    container.innerHTML = `
        <form>
            <div class="form-group row">
                <label for="name" class="col-md-5 col-form-label text-md-right">Documento de identidad</label>

                <div class="col-md-6">
                    <input id="documento_de_identidad" type="text" class="form-control" name="documento_de_identidad" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="direccion_1" class="col-md-5 col-form-label text-md-right">dirección 1</label>

                <div class="col-md-6">
                    <input id="direccion_1" type="text" class="form-control" name="direccion_1" required >
                </div>
            </div>

            <div class="form-group row">
                <label for="direccion_2" class="col-md-5 col-form-label text-md-right">dirección 2</label>

                <div class="col-md-6">
                    <input id="direccion_2" type="text" class="form-control" name="direccion_2"  required >
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono" class="col-md-5 col-form-label text-md-right">Telefono</label>

                <div class="col-md-6">
                    <input id="telefono" type="text" class="form-control" name="telefono" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="codigo_postal" class="col-md-5 col-form-label text-md-right">Código_postal</label>

                <div class="col-md-6">
                    <input id="codigo_postal" type="text" class="form-control" name="codigo_postal" required>
                </div>
            </div>
            <div class="col-md-6 offset-md-4">
                <button type="submit" id="edit_datos_envio" class="btn btn-primary">
                    Agregar datos de envio
                </button>
            </div>
        </form>
    `;

    document.getElementById('edit_datos_envio').addEventListener('click', e => {
        e.preventDefault();
        let documentoIdentidad = document.getElementById('documento_de_identidad'),
            direccion_1 = document.getElementById('direccion_1'),
            direccion_2 = document.getElementById('direccion_2'),
            telefono = document.getElementById('telefono'),
            codigo_postal = document.getElementById('codigo_postal');

        agregarDatosDeEnvio(documentoIdentidad.value, direccion_1.value, direccion_2.value, telefono.value, codigo_postal.value, orden_id)
    })
}





let ordenDetails = document.querySelectorAll('.orden-detalle'),
    ordenEnvios = document.querySelectorAll('.orden-envio-info');

document.addEventListener('DOMContentLoaded', () => {
    if(ordenDetails){
        ordenDetails.forEach(detalle => {
            detalle.addEventListener('click', e => {
                let id = e.target.id
                getOrdenDetail(id)
            });
        });
    }

    if(ordenEnvios){
      ordenEnvios.forEach(button => {
        button.addEventListener('click', e => {
          let id = e.target.id;
          getOrdenInfo(id)
        })
      })
    }
})

