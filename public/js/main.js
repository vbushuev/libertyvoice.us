
$(document).ready(function(){
    $(".pills > li > a").on("click",function(e){
        e.preventDefault();
        $(".pills-data").hide();
        $($(this).attr("href")+".pills-data").show();
        $(".pills > li").removeClass("active");
        $(this).closest("li").addClass("active");
    });
    $(".pills > li.active > a").click();
});
