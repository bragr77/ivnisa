function cal() {
    try {

        var montoPrestamo = parseInt(document.formCalPres.montoPrestamo.value);
        var nroCuotas = parseInt(document.formCalPres.nroCuotas.value);

        var interes = 8 / 100;
        var calInteres = montoPrestamo * interes;

        var cuota = Math.round(((montoPrestamo * interes) / (1 - (Math.pow(1 + interes, -nroCuotas)))) * 100) / 100;

        var totalprestamo = cuota * nroCuotas;

        document.formCalPres.montoCuota.value = cuota;

        document.formCalPres.montoPagar.value = new Intl.NumberFormat("es-ES", {
            style: "currency",
            currency: "DOP"
        }).format(totalprestamo);

        document.formCalPres.montoCuotaV.value = new Intl.NumberFormat("es-ES", {
            style: "currency",
            currency: "DOP"
        }).format(cuota);



        //document.formCalPres.montoCuota.value = montoPrestamo + nroCuotas;

    } catch (e) {}
}