$("#search").keyup(function() {
    _this = this;
    
    // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
    $.each($("#table tbody tr"), function() {
        if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
        else
            $(this).show();
    });
});