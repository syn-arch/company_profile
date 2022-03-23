$(window).on("load", function () {
  const elem = document.querySelector(".mansory");
  new Masonry(elem, {
    itemSelector: ".mansory-item",
    columnWidth: 200,
    gutter: 20,
    columnWidth: ".mansory-sizer",
    percentPosition: true,
  });

  $(".btn-to-top").click(function () {
    $("html", "body").animate(
      {
        scrollTop: 0,
      },
      1500,
      "easeInOutExpo"
    );
  });

  AOS.init();

  const portfolioIsotope = $(".portfolio-container").isotope({
    itemSelector: ".portfolio-item",
  });

  $(".portfolio-filters li").click(function () {
    $(".portfolio-filters li").removeClass("filter-active");
    $(".portfolio-filters li").removeClass("text-white");
    $(this).addClass("filter-active");
    $(this).addClass("text-white");

    portfolioIsotope.isotope({
      filter: $(this).data("filter"),
    });

    AOS.init();
  });
});
