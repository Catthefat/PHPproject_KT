function myFunction() {
    document.getElementById("size").defaultValue = 0;
    document.getElementById("weight").defaultValue = 0;
    document.getElementById("height").defaultValue = 0;
    document.getElementById("width").defaultValue = 0;
    document.getElementById("length").defaultValue = 0;

}

function showTable() {
    $(document).ready(function () {
        $("#productType").on('change', function () {
            $(".data").hide();
            $("#" + $(this).val()).fadeIn(0)
        }).change();
    });
}
