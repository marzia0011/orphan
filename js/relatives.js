$(document).ready(function() {
    $("#main-menu").load("menu.html");
    $.get("./api/relatives.php", function(data) {
        const results = jQuery.parseJSON(data);
        const items = [];
        results.data.forEach(result => {
            items.push('<tr><td>' + result.id + '</td><td>' + result.name + '</td><td>' + result.age + '</td><td>' + result.relation + '</td><td>' + result.address + '</td></tr>');
        });
        const ul = $('#relative-list');
        ul.append(items);
    })
});
