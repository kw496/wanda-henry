window.onload = () => {
$("#nav a").on("click", function(){
   $("#nav a").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
}
