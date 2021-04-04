$(function () {
    $("#btnSearch").click(function () {
        $.ajax({
            url: "search.php",
            type: "post",
            data: {
                itemname: $("#itemname").val()
            },
            beforeSend: function () {
                $(".loading").show();
            },
            complete: function () {
                $(".loading").hide();
            },
            success: function (data) {
                $("#list-data").html(data);
            }
        });
    });
    $("#searchform").on("keyup keypress", function (e) {
        var code = e.keycode || e.which;
        if (code == 13) {
            $("#btnSearch").click();
            return false;
        }
    });
});