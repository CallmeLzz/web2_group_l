$(document).ready(function () {
    $('.delete').click(function () {
        var idMenu = $(this).attr('menu-id');
        if (confirm("Do you want to delete " + idMenu + "?") == true) {
            window.open('delete?id=' + idMenu, '.php');
        }
    });
});
