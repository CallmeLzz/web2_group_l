$(document).ready(function () {
    $('.deleteMenuDelete').click(function () {
        var idMenu = $(this).attr('menu-id');
        if (confirm("Do you want to delete " + idMenu + "?") == true) {
            window.open('delete?id=' + idMenu, '_self');
        }
    });
    $('.deleteCateDelete').click(function () {
        var idCate = $(this).attr('category-id');
        if (confirm("Do you want to delete " + idCate + "?") == true) {
            window.open('deleteCategories?id=' + idCate, '_self');
        }
    });
});
