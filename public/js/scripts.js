function agregarDetalle() {
    if (!validateCiudad()) {
        let idCiudad = $("#ciudad option:selected").val();
        let ciudad = $("#ciudad option:selected").text();
        let cantidad = $("#cantidadVacantes").val();
        if (
            idCiudad == "" ||
            idCiudad == 0 ||
            cantidad == "" ||
            cantidad == 0
        ) {
            alertify.set("notifier", "position", "top-right");
            alertify.error("Todos los campos son obligatorios");
        } else {
            const info = { idCiudad, ciudad, cantidad };
            $("#tableVacantes").append(`
        <tr id="tr-${info.idCiudad}" class="trs">
            <input type="hidden" value="${idCiudad}" name="idCiudad[]" class="idCiudadValidate">
            <input type="hidden" value="${cantidad}" name="cantidades[]" class="cantidadesValidate">
            <td>${info.ciudad}</td>
            <td><span class="text-cantidad">${info.cantidad}</span></td>
            <td><button class="btn btn-danger" type="button" onclick="eliminarCiudad(${idCiudad})">Eliminar</button></td>
        </tr>
    `);
            let cantidadTotalVacantes =
                parseInt($("#cantidadTotalVacantes").val()) || 0;
            $("#cantidadTotalVacantes").val(
                cantidadTotalVacantes + parseInt(info.cantidad)
            );
        }
    }
}
function eliminarCiudad(id) {
    const tr = $("#tr-" + id);
    const vacantesTr = parseInt($(tr).find("span.text-cantidad").html());
    const cantidadVacantes = parseInt($("#cantidadTotalVacantes").val());
    $("#cantidadTotalVacantes").val(cantidadVacantes - vacantesTr);
    $(tr).remove();
}

function validateCiudad() {
    let validate = false;
    if ($(".trs").length > 0) {
        $(".trs").each(function () {
            let idCiudad = $("#ciudad option:selected").val();
            if (this.id == `tr-${idCiudad}`) {
                validate = true;
                let cantidadTotalVacantes = parseInt(
                    $("#cantidadTotalVacantes").val()
                );
                $("#cantidadTotalVacantes").val(
                    cantidadTotalVacantes +
                        parseInt($("#cantidadVacantes").val())
                );
                $(this)
                    .find("span.text-cantidad")
                    .html(
                        parseInt($(this).find("span.text-cantidad").html()) +
                            parseInt($("#cantidadVacantes").val())
                    );
                $(this)
                    .find("input.cantidadesValidate")
                    .val(
                        parseInt(
                            $(this).find("input.cantidadesValidate").val()
                        ) + parseInt($("#cantidadVacantes").val())
                    );
            }
        });
    }
    return validate;
}

function eliminarCiudadExistente(id) {
    if (confirm("¿Estás seguro de eliminar esta ciudad?")) {
        $.ajax({
            url: `/vacantes/eliminarCiudadExistente/${id}`,
            type: "GET",
            success: function ({ isValid }) {
                if (isValid) {
                    location.reload();
                }
            },
        });
    }
}
