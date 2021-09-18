$(document).ready(function() {
    $("#main-menu").load("menu.html");
});

function donate() {
    console.log($('#name').val());
    if ($('#name').val() === '') return;
    const data = {
        name: $('#name').val(),
        email: $('#email').val(),
        mobile: $('#mobile').val(),
        medium: $('#medium').val(),
        account: $('#account').val(),
        amount: $('#amount').val()
    };
    $.post("./api/donate.php", data, function(result) {
        alert(result);
        location.reload();
    });
}