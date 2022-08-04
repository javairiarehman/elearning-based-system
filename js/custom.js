$(document).ready(function (){
    $(function (){
        $("#playlist li").on("click",function(){
            $("#videoarea").attr({
                src:$(this).attr("movieurl"),
            });
        });
    });
});