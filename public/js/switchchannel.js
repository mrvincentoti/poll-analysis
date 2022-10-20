$('#inlineFormCustomSelectPref').change(function () {
    // document.getElementById('output').innerHTML = "";
    // document.getElementById('output').innerHTML = ``;

    $.ajax({
        url: '/sentiment/switch/' + 20,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            document.getElementById('output').innerHTML = "";
            $("#output").html(data);
        }
    });
});