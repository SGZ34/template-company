function handleOnChange() {
    let empresa = $("#empresa option:selected").val();
    $.ajax({
        url: `/vacantes/getCity/${empresa}`,
        type: "GET",
        success: function ({ ciudades }) {
            let template = "<option value=''>--Seleccione--</option>";
            if (ciudades) {
                ciudades.forEach((ciudad) => {
                    template += `<option value='${ciudad.idCiudad}'>${ciudad.nameCiudad}</option>`;
                });

                $("#ciudad").html(template);
            } else {
                $("#ciudad").html(template);
            }
        },
    });
}

function agregarDetalle() {
    let idEmpresa = $("#empresa option:selected").val();
    let empresa = $("#empresa option:selected").text();
    let idCiudad = $("#ciudad option:selected").val();
    let ciudad = $("#ciudad option:selected").text();
    let cantidad = $("#cantidadVacantes").val();
    if (
        idEmpresa == "" ||
        idEmpresa == 0 ||
        idCiudad == "" ||
        idCiudad == 0 ||
        cantidad == "" ||
        cantidad == 0
    ) {
        alertify.set("notifier", "position", "top-right");
        alertify.error("Todos los campos son obligatorios");
    } else {
        const info = { idEmpresa, empresa, idCiudad, ciudad, cantidad };
        $("#tableVacantes").append(`
        <tr id="tr-${idEmpresa}" class="trs">
            <td>${info.empresa}</td>
            <td>${info.ciudad}: ${cantidad}</td>
            <td><button class="btn btn-danger" type="button" onclick="eliminarEmpresa(${idEmpresa})">Eliminar</button></td>
        </tr>
    `);
    }
}
function eliminarEmpresa(id) {
    $("#tr-" + id).remove();
}

function validateEmpresa() {
    let validate = false;
    if ($(".trs").length > 0) {
        $(".trs").each(function () {
            let idCiudad = $("#ciudad option:selected").val();
            if (this.id == `tr-${idCiudad}`) {
                validate = true;
            }
        });
    }
    return validate;
}
