$(document).ready(function(){
    $(".themanhphu").click(function() {
        var lsthmtl = $(".anhphu").html();
        $(".anhphu").after(lsthmtl);
    });
})