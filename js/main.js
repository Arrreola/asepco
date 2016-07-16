function validateForm(idObj) {

    var _form = $('#' + idObj);
    var _stringVar = _form.serialize();

    //console.log('cadena de variables='+_stringVar);

    $.ajax({
        method: "POST",
        url: "send.php",
        data: _stringVar
    }).success(function (msg) {
        // alert("Data Saved: " + msg);
        if (msg == 'success')
            $('.msg').text('GRACIAS POR ENVIAR TUS DATOS');

    });
}
