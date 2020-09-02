String.prototype.toPermalink = function() {
    return this.toString()
        .trim()
        .toLowerCase()
        .replace(/\s/g, "-");
};

$(".original-text").on("focusout", function() {
    $(".target-text").val(
        $(this)
            .val()
            .toPermalink()
    );
});

$(".add-to-cart-btn").on("click", function() {
    $.ajax({
        url: BASE_URL + "shop/ajax/add-to-cart",
        type: "GET",
        dataType: "html",
        data: { pid: $(this).data("pid") },
        success: function(res) {
            window.location.reload();
        }
    });
});

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
$(document).ready(function() {
    if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".img").click(function(e) {
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (
                $(this)
                    .closest(".img")
                    .hasClass("hover")
            ) {
                $(this)
                    .closest(".img")
                    .removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".img")
            .mouseenter(function() {
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function() {
                $(this).removeClass("hover");
            });
    }
});
$("#product-slider").owlCarousel({
    loop: false,
    margin: 10,
    smartSpeed: 1000,
    nav: true,
    dots: true,
    navText: [
        "<i class='fas fa-long-arrow-alt-left'></i>",
        "<i class='fas fa-long-arrow-alt-right'></i>"
    ],
    items: 1,
    animateIn: "fadeIn",
    animateOut: "fadeOut"
});
$("#product-slider-2").owlCarousel({
    loop: false,
    margin: 10,
    smartSpeed: 1000,
    nav: true,
    dots: true,
    navText: [
        "<i class='fas fa-long-arrow-alt-left'></i>",
        "<i class='fas fa-long-arrow-alt-right'></i>"
    ],
    items: 1,
    animateIn: "fadeIn",
    animateOut: "fadeOut"
});
$("#product-slider-3").owlCarousel({
    loop: false,
    margin: 10,
    smartSpeed: 1000,
    nav: true,
    navText: [
        "<i class='fas fa-long-arrow-alt-left'></i>",
        "<i class='fas fa-long-arrow-alt-right'></i>"
    ],
    items: 1,
    animateIn: "fadeIn",
    animateOut: "fadeOut"
});
$("#clients-carousel").owlCarousel({
    loop: true,
    margin: 100,
    dots: false,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
$("#clients-carousel").owlCarousel({
    loop: true,
    margin: 100,
    dots: false,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
$("#testimonials-carousel").owlCarousel({
    loop: true,
    margin: 8,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
