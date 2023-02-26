$(function() {
    $("#form").submit(function(event) {
        event.preventDefault();
        $.post("proses/proses.php", $(this).serialize(), function() {
            $("#form input[name='nama']").val("");
            $("#form input[name='nohp']").val("");
            $("#form input[name='domisili']").val("");
            $("#form input[name='email']").val("");
            window.open('p.pdf', '_blank');
        });
    });
});