$(document).ready(function () {
            
    $("#prod1formodal").click(function() {
        $("#prod1").modal("toggle");
    });

    $("#prod2formodal").click(function() {
        $("#prod2").modal("toggle");
    });

    $("#prod3formodal").click(function() {
        $("#prod3").modal("toggle");
    });

    $("#prod4formodal").click(function() {
        $("#prod4").modal("toggle");
    });
    $("#prod5formodal").click(function() {
        $("#prod5").modal("toggle");
    });
    $("#prod6formodal").click(function() {
        $("#prod6").modal("toggle");
    });

    $("#prod7formodal").click(function() {
        $("#prod7").modal("toggle");
    });

    $("#prod8formodal").click(function() {
        $("#prod8").modal("toggle");
    });

    $("#prod9formodal").click(function() {
        $("#prod9").modal("toggle");
    });

    $("#prod10formodal").click(function() {
        $("#prod10").modal("toggle");
    });

    $("#prod11formodal").click(function() {
        $("#prod11").modal("toggle");
    });

    $("#prod12formodal").click(function() {
        $("#prod12").modal("toggle");
    });

    //code for Minus Input Plus
    $('.minus').click(function(){
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val())-1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });

    $('.plus').click(function(){
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val())+1);
        $input.change();
        return false;
    })
});