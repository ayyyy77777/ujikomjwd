$(document).ready(function () {
    $('#inputEmail').change(function () {
        var email = $("#inputEmail").val();

        if (email == "drayy23@gmail.com") {
            $("#inputNama").val("Draco Malfoy");
            $("#inputIpk").val("3.4");
            $("#tombolDaftar").prop('disabled', false);
        } else if (email == "jack@gmail.com") {
            $("#inputNama").val("Jackson Wang");
            $("#inputIpk").val("2.9");
            $("#tombolDaftar").prop('disabled', true);
            $("#customFile").prop('disabled', true);
            $("#inputBeasiswa").prop('disabled', true);
        } else {
            $('#warningModal').modal('show');
            $("#tombolDaftar").prop('disabled', true);
        }
    });
});
