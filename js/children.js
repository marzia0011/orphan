$(document).ready(function() {
    $("#main-menu").load("menu.html");
    $.get("./api/children.php", function(data) {
        const results = jQuery.parseJSON(data);
        const items = [];
        results.data.forEach(result => {
            let gender = result.gender === '1' ? 'Male' : 'Female';
            items.push('<tr><td>' + result.id + '</td><td>' + result.name + '</td><td>' + result.age + '</td><td>' + gender + '</td></tr>');
        });
        const ul = $('#child-list');
        ul.append(items);
    })
});
