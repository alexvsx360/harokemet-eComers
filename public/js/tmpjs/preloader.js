//<![CDATA[
$(window).on("load", function() {
    // makes sure the whole site is loaded
    $("#preloader")
        .delay(0)
        .fadeOut("slow"); // will fade out the white DIV that covers the website.
    $("body")
        .delay(0)
        .css({ overflow: "visible" });
});
//]]>
