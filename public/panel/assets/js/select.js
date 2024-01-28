$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $marca = document.getElementById('marca')
    //let $provincia = document.getElementById('modelo')
    //let $distrito = document.getElementById('distrito')

    function cargarDepartamentos() {
        $.ajax({
            url: '../select.php',
            type: 'GET',
            success: function(response) {
                const marcas = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                marcas.forEach(marca => {
                    template += `<option class="form-control" value="${marca.idMarca}">${marca.nomMarca}</option>`;
                })

                $marca.innerHTML = template;
            }
        }) 
    }
  cargarDepartamentos()

/*
    function cargarProvincias(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                respuestas.forEach(respuesta => {
                    template += `<option class="form-control" value="${respuesta.codProvincia}">${respuesta.nomProvincia}</option>`;
                })

                $provincia.innerHTML = template;
            }
        })
    }
    $departamento.addEventListener('change', () => {
        const codDepartamento = $departamento.value

        const sendDatos = {
            'codigoDepar': codDepartamento
        }
        
        cargarProvincias(sendDatos)

        $distrito.innerHTML = ''
    })
    function cargarDistritos(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                respuestas.forEach(respuesta => {
                    template += `<option class="form-control" value="${respuesta.codDistrito}">${respuesta.nomDistrito}</option>`;
                })

                $distrito.innerHTML = template;
            }
        })
    }
    $provincia.addEventListener('change', () => {
        const codProvincia = $provincia.value

        const sendDatos = {
            'codigoProv': codProvincia
        }
        
        cargarDistritos(sendDatos)
    })*/
})