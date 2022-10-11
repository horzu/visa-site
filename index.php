<?php include "header.php" ?>

<section id="mainCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/annie-spratt-qyAka7W5uMY-unsplash.jpg" class="d-block w-100" alt="..." />
      <div class="overlay"></div>
      <div class="carousel-caption">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/passport-2642170_960_720.jpg" class="d-block w-100" alt="..." />
      <div class="overlay"></div>
      <div class="carousel-caption">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/jeshoots-com-mSESwdMZr-A-unsplash.jpg" class="d-block w-100" alt="..." />
      <div class="overlay"></div>
      <div class="carousel-caption">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>

<section class="container px-0 px-lg-3" id="select-visa">
  <div class="wrapper">
    <div class="mobile-wrapper">

      <form id="visa-form" method="POST" class="visa-form row" novalidate="novalidate">
        <div class="form-section mb-3 mb-sm-3 col-12 col-xl-5" id="country">
          <label for="country">Nereye gitmek istiyorsunuz?</label>
          <select class="form-select" name="country" id="chosen-countries" required="">

          </select>
        </div>
        <div class="form-section mb-3 mb-sm-3 col-12 col-xl-5" id="vize">
          <label for="visa">Ne için gitmek istiyorsunuz?</label>
          <select class="form-select" name="visa" data-placeholder="Vize türü seçin" id="chosen-visas" required="">

          </select>
        </div>
        <div class="col-12 col-xl-2 px-0 px-lg-2 mb-3 mb-lg-0">
          <button type="submit" name="visaformsubmit" id="visaformsubmit" class="btn">
            Hemen Başla <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </form>

      <p id="visa-info">
        Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi
        belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık
        sigortanız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da
        vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
        Mesai saatleri içerisinde ortalama cevap verme süresi
        <span class="visaUnderline">30 dakikadır.</span>
      </p>
      <div class="d-flex flex-wrap justify-content-start align-items-center" id="need-help-div">
        <p class="m-0 me-3 fw-bold mb-2 mb-md-0">
          Yardıma mı ihtiyacınız var? <i class="fas fa-chevron-right ms-1"></i>
        </p>
        <span class="me-3 mb-2 mb-md-0">Bizi arayabilirsiniz</span>
        <button type="button" class="btn text-white green-bg me-3 mb-2 mb-md-0" id="main-phone-button">
          <i class="fas fa-phone-volume"></i>0 312 418 5 419
        </button>
        <span class="me-3">veya</span>
        <i class="fas fa-comment-dots green-font me-3 fs-5"></i>
        <a href="" class="link-black text-decoration-underline mb-2 mb-md-0">bize yazabilirsiniz</a>
      </div>
    </div>

  </div>
</section>

<section class="container">
  <div class="d-flex align-items-center justify-content-between flex-column flex-lg-row" id="announcements">
    <div class="d-flex align-items-center w-50 justify-content-between my-3">
      <i class=" fas fa-bullhorn me-3"></i>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

        </div>

      </div>
    </div>

    <div class="d-flex align-items-center justify-content-between my-2">
      <div class="d-flex buttons align-items-center m-0 me-lg-3">

        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination mx-2 mx-sm-3"></div>
        <div class="swiper-button-next"></div>
      </div>
      <button>Tüm Duyurular <i class="fas fa-chevron-right ms-2"></i></button>
    </div>
  </div>
</section>

<section class="container py-5" id="quick-visa">
  <div class="
          d-flex
          justify-content-between
          align-items-center
          pb-3
          border-bottom
        ">
    <div>

      <h2 class="heading">Hızlı Vize Başvurusu</h2>
      <p class="m-0">
        Hızlı vize başvurusu için cevap verme süresi mesai saatleri içerisinde ortalama
        <span class="visaUnderline">30 dakikadır.</span>
      </p>
    </div>
    <form class="input-group">
      <span class="input-group-text bg-white" id="search-icon"><i class="fa fa-search m-0"></i></span>
      <input class="form-control border-start-0 border shadow-none ps-0" type="text" placeholder="Hızlı Vize Başvurusu İçin Ülke Arayın…" id="search-input" />
    </form>
  </div>
  <div id="countries">
    <div class="row row-cols-1 row-cols-md-6 g-3" id="countries-section">
      <!-- Countries Loading With Ajax  -->
    </div>
    <button class="btn load-more mt-5" id="loadMoreCountry">
      Tüm Ülkeleri Görüntüleyin
      <i class="fas fa-chevron-down text-black ms-2"></i>
    </button>

  </div>
</section>

<section class="container-fluid" id="visas">
  <div class="container pb-5">
    <div class="
            d-flex
            justify-content-between
            align-items-center
            pb-3
            border-bottom
          ">
      <h2 class="heading">
        Başvuru Tipine Uygun Vizeyi Senin İçin Bulalım
      </h2>
      <a class="section-link" href="">Tüm Vize Tipleri <i class="fas fa-chevron-right ms-2"></i></a>
    </div>
    <p id="visa-info">
      Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi
      belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık
      sigortanız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da
      vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
      Mesai saatleri içerisinde ortalama cevap verme süresi
      <span class="visaUnderline">30 dakikadır.</span>
    </p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-3 py-3" id="visa-section">
      <!-- Visas  -->
    </div>
  </div>
</section>

<section class="container-fluid" id="things-to-consider">
  <div class="container py-5 px-0 px-lg-3">
    <div class="
            d-flex
            justify-content-between
            align-items-center
            pb-3
            border-bottom
          ">
      <h2 class="heading">Dikkat Edilmesi Gerekenler</h2>
      <a class="section-link" href="">Tüm İçerikler <i class="fas fa-chevron-right ms-2"></i></a>
    </div>
    <p class="pt-0 pt-lg-3 pb-2">
      Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi
      belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık
      sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da
      vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
    </p>
    <div class="d-flex" id="consider-body">
      <div class="col-lg-6 justify-content-center align-items-center pe-0 pe-lg-2  pe-xl-4 ">
        <div class="col-lg-12">
          <div class="contentImages" id="img_content1">
            <img src="assets/img/annie-spratt-qyAka7W5uMY-unsplash.jpg" class="img-fluid" alt="">
          </div>
          <div class="contentImages d-none" id="img_content2">
            <img src="assets/img/passport-2642170_960_720.jpg" class="img-fluid" alt="">
          </div>
          <div class="contentImages d-none" id="img_content3">
            <img src="assets/img/yousef-alfuhigi-bMIlyKZHKMY-unsplash.jpg" class="img-fluid" alt="">
          </div>
          <div class="contentImages d-none" id="img_content4">
            <img src="assets/img/jeshoots-com-mSESwdMZr-A-unsplash.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-3 mt-lg-0 ps-0 ps-lg-2   ps-xl-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#content1" aria-expanded="true" aria-controls="content1">
                Başvuru Tipleri<i class="fas fa-chevron-down ms-auto"></i>
              </button>
            </h2>
            <div id="content1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                  Yurt dışı seyahat süreci, ziyaretçiler için oldukça
                  detaylı ve komplike bir süreçtir. Özellikle vize isteyen
                  ülkelere yapılacak seyahatlerde dikkat edilmesi gereken
                  belli başlı unsurlar bulunmaktadır. Vize, bir ülkeye giriş
                  çıkış yapabilmek için alınan izin belgesidir.
                  <br /><br />
                  Hem seyahat süreci, hem vize süreci oldukça titiz
                  detayları bünyesinde barındırdığından dolayı, ziyaretçiler
                  bu konuda aşamalı bir şekilde dikkatli olmalıdır.
                  Dolayısıyla sağlık sigortasından uçak rezervasyonlarına,
                  istenilen belgelerden seçeceğiniz vize türlerine kadar her
                  türlü detayı dikkatli bir şekilde ele almanız
                  gerekmektedir. Yurt dışı seyahatlerinizin ilk adımı ise
                  doğru kategoriden doğru olan vize türünü seçmektir.
                </p>
                <a href="">Detaylı Bilgi Alın<i class="fas fa-chevron-right ms-2"></i></a>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content2" aria-expanded="false" aria-controls="content2">
                Maddi Durum İspatı <i class="fas fa-chevron-down ms-auto"></i>
              </button>
            </h2>
            <div id="content2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong>
                It is hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the
                showing and hiding via CSS transitions. You can modify any
                of this with custom CSS or overriding our default variables.
                It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the
                transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content3" aria-expanded="false" aria-controls="content3">
                Sağlık Sigortası<i class="fas fa-chevron-down ms-auto"></i>
              </button>
            </h2>
            <div id="content3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It
                is hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the
                showing and hiding via CSS transitions. You can modify any
                of this with custom CSS or overriding our default variables.
                It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the
                transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content4" aria-expanded="false" aria-controls="content4">
                Sağlık Sigortası<i class="fas fa-chevron-down ms-auto"></i>
              </button>
            </h2>
            <div id="content4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It
                is hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the
                showing and hiding via CSS transitions. You can modify any
                of this with custom CSS or overriding our default variables.
                It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the
                transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid pb-5 blog">
  <div class="container pt-5">
    <div class="
            d-flex
            justify-content-between
            align-items-center
            border-bottom pb-3
          " id="blog-content">
      <h2 class="heading">Blog</h2>
      <a class="section-link" href="">Tüm İçerikler <i class="fas fa-chevron-right ms-2"></i></a>
    </div>

    <div class="d-flex pt-3" id="blog-wrapper">
      <div class="d-flex pt-3 col-12 col-lg-8" id="blog-big">

      </div>
      <div class="col-12 col-lg-4 d-flex flex-column justify-content-between" id="blog-small">

      </div>
    </div>
  </div>
</section>

<section class="container-fluid pb-5" id="online-islemler">
  <div class="container py-5">
    <div class="
            d-flex
            justify-content-between
            align-items-center
            pb-3
            border-bottom
          ">
      <h2 class="heading">Online İşlemler</h2>
      <a class="section-link" href="">Tüm İçerikler <i class="fas fa-chevron-right ms-2"></i></a>
    </div>

    <div class="pt-2">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 py-3 m-0">
        <div class="col px-0 pe-md-2">
          <div class="card h-100">
            <div>
              <i class="fas fa-user-edit"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">CV Hazırlama Robotu</h5>
              <a href="" class="stretched-link">
                <p class="card-text">
                  Başvurularınız için gereken CV’leri hazırlayabilirsiniz.
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="col px-0 px-md-2">
          <div class="card h-100">
            <div>
              <i class="fas fa-spell-check"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Dil Seviye Tespit Robotu</h5>
              <a href="" class="stretched-link">
                <p class="card-text">
                  İngilizce ve Almanca dil seviyenizi hemen
                  öğrenebilirsiniz.
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="col px-0 ps-md-0 pe-md-2 px-lg-2">
          <div class="card h-100">
            <div>
              <i class="fas fa-users-cog"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Almanya İş Arama Vizesi</h5>
              <a href="" class="stretched-link">
                <p class="card-text">
                  Çalışma veya iş arama vizesi uygunluğunuzu görebilirsiniz.
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="col px-0 ps-lg-2 px-md-2 pe-lg-0">
          <div class="card h-100">
            <div>
              <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Online Randevu</h5>
              <a href="" class="stretched-link">
                <p class="card-text">
                  Ofislerimizi ziyaret etmeden önce online randevu
                  oluşturabilirsiniz.
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<?php include "footer.php" ?>


<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<!-- Chosen Plugin -->
<script src="assets/js/chosen.jquery.min.js"></script>


<!-- Load Countries-select with ajax for Chosen -->
<script>
  $(document).ready(
    $(function() {
      $.ajax({
        url: "services/countries.json",
        type: "GET",
        dataType: "json",
        success: chosenCountries,
        error: function() {
          console.log("Error in the request");
        },
      });
    })
  );

  function chosenCountries(data) {
    $("#chosen-countries").append('<option value="" class="hidden">Ülke Seçin</option>')
    $.each(data, function(key, value) {
      $("#chosen-countries").append(
        '<option data-img-src="assets/img/countries/' + value["country_img"] + '" value="' + value["country_name"] + '">' + value["country_name"] + '</option>'
      );
    });

    $("#chosen-countries").chosenImage({
      no_results_text: "İlgili aramaya ait sonuç bulunamadı: ",
    });
    $("#country .chosen-search input").attr("placeholder", "Ülke arayın...");
    $('.chosenImage-container .chosen-drop ul').on("click", function() {
      $('.chosenImage-container .chosen-single span').css('padding-left', "40px")
    })
    $('.chosenImage-container .chosen-drop ul').on("touchstart", function() {
      $('.chosenImage-container .chosen-single span').css('padding-left', "40px")
    })
  }
</script>

<!-- Load Visas-select with ajax for Chosen -->
<script>
  $(document).ready(
    $(function() {
      $.ajax({
        url: "services/visas.json",
        type: "GET",
        dataType: "json",
        success: chosenVisas,
        error: function() {
          console.log("Error in the request");
        },
      });
    })
  );

  function chosenVisas(data) {
    $("#chosen-visas").append('<option value="" class="hidden">Vize Türü Seçin</option>')
    $.each(data, function(key, value) {
      $("#chosen-visas").append(
        '<option value="' + value["visa_name"] + '">' + value["visa_name"] + '</option>'
      );
    });

    $("#chosen-visas").chosen({
      no_results_text: "İlgili aramaya ait sonuç bulunamadı: ",
    });
    $("#vize .chosen-search input").attr("placeholder", "Vize arayın...");

  }
</script>

<!-- Initialize loadMore.js for countries - mainpage -->
<script>
  var firstLoading = false;
  $(document).ready(function() {
    loadJson(true);
  });

  function loadJson(bool) {
    $("#countries-section").loadJson({
      type: "GET",
      limit: 6,
      loadItem: 12,
      url: "services/countries.json",
      loadBtn: "#loadMoreCountry",
      getData: function(elem, data) {
        console.log(data)
        $.each(data, function(index, value) {
          $(elem).append(
            '<div class="col country h-100">' +
            '<div class="card">' +
            '<img src="assets/img/countries/' +
            value["country_img"] +
            '" class="card-img-top" alt="' +
            value["country_name"] +
            '" />' +
            '<div class="card-body">' +
            '<a class="card-title stretched-link" href="' + value["country_url"] + '">' + value["country_name"] + ' Vizesi</a>' +
            '<p class="card-text">Başvuru İşlemleri</p>' +
            "</div>" +
            "</div>" +
            "</div>"
          );
        });
      },
    });

  }

  $("#quick-visa input").on("keyup", function() {
    let searchTerm = $(this).val();
    if (searchTerm.length > 2) {
      $("#countries-section").hide();
      $("#countries-search").remove();

      $(document).ready(function() {
        loadJson(true);
      });

      $("#quick-visa #countries").prepend(
        '<div class="row row-cols-1 row-cols-md-6 g-4" id="countries-search"></div>'
      )

      function loadJson(bool) {
        $("#countries-search").loadJson({
          type: "GET",
          limit: 6,
          loadItem: 12,
          url: "services/countries.json",
          loadBtn: "#loadMoreCountry",
          getData: function(elem, data) {
            var value = $("#quick-visa input").val().toLocaleUpperCase();
            const filtered_countries = data.filter((v) => v.country_name.toLocaleUpperCase().indexOf(value) > -1);

            $.each(filtered_countries, function(index, value) {
              $(elem).append(
                '<div class="col country">' +
                '<div class="card">' +
                '<img src="assets/img/countries/' +
                value["country_img"] +
                '" class="card-img-top" alt="' +
                value["country_name"] +
                '" />' +
                '<div class="card-body">' +
                '<h5 class="card-title searchTag">' +
                value["country_name"] +
                " Vizesi" +
                "</h5>" +
                '<p class="card-text">Başvuru İşlemleri</p>' +
                "</div>" +
                "</div>" +
                "</div>"
              );
            });
          },
        });
      }
    } else {
      $("#countries-search").remove();
      $("#countries-section").show();
    }
  });
</script>

<!-- Load Visas with ajax - Main page -->
<script>
  $(document).ready(
    $(function() {
      $.ajax({
        url: "services/visas.json",
        type: "GET",
        dataType: "json",
        success: visas,
        error: function() {
          console.log("Error in the request");
        },
      });
    })
  );

  function visas(data) {
    $.each(data, function(key, value) {
      $("#visa-section").append(
        '<div class="col visa">' +
        '<div class="card">' +
        "<div class=crop>" +
        '<img src="' + value["visa_img"] + '"' +
        'class="card-img-top"' +
        'alt="' + value["visa_name"] + '"' +
        " />" +
        "</div>" +
        '<div class="card-body d-flex justify-content-between">' +
        '<div class="card-divider">' +
        '<h5 class="card-title">' + value["visa_name"] + '</h5>' +
        '<p class="card-text">Başvuru İşlemleri</p>' +
        "</div>" +
        '<button class="card-button stretched-link" href="' + value["visa_url"] + '">' +
        "Başvuru" +
        '<i class="fas fa-chevron-right ms-1"></i>' +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>"
      );
    });
  }
</script>

<!-- accordion switch image -->
<script>
  $(document).on('show.bs.collapse', '#accordionExample', function(e) {
    $(".contentImages").addClass("d-none");
    var clicked = $(e.target).attr("id");
    $("#img_" + clicked).toggleClass("d-none");
  })
</script>

<!-- load announcements with ajax -->
<script>
  $(document).ready(
    $(function() {
      $.ajax({
        url: "services/announcements.json",
        type: "GET",
        dataType: "json",
        success: announcements,
        error: function() {
          console.log("Error in the request");
        },
      });
    })
  );

  function announcements(data) {
    $.each(data, function(key, value) {
      $("#announcements .swiper-wrapper").append(
        '<div class="swiper-slide">' + value["announcement_text"] + '</div>'
      );
    });
  }
</script>

<!-- load blog  -->
<script>
  $(document).ready(
    $(function() {
      $.ajax({
        url: "services/blog.json",
        type: "GET",
        dataType: "json",
        success: blog,
        error: function() {
          console.log("Error in the request");
        },
      });
    })
  );

  function blog(data) {
    $.each(data, function(key, value) {
      if (key < 2) {
        $("#blog-wrapper #blog-big").append(
          '<div class="card main border-0 col border-bottom">' +
          '<div class="crop">' +
          '<img src="' + value["blog_img"] + '" class="card-img-top" alt="..." />' +
          '</div>' +
          '<div class="card-body mb-4">' +
          '<p class="card-text mb-2">' +
          '<span class="text-muted">' + value["blog_date"] + '</span>' +
          '</p>' +
          '<h5 class="card-title mb-2">' +
          '<a href="" class="stretched-link">' +
          value["blog_title"] +
          '</a>' +
          '</h5>' +
          '<p class="card-text">' +
          value["blog_text"] +
          '</p>' +
          '</div>' +
          '</div>'
        );
      } else if (key < 6) {
        $("#blog-wrapper #blog-small").append(
          '<div class="card side py-3 border-0 d-flex flex-row">' +
          '<div class="crop">' +
          '<img src="' + value["blog_img"] + '" class="card-img-top" alt="..." height="" />' +
          '</div>' +
          '<div class="card-body">' +
          '<p class="card-text">' +
          '<span class="text-muted">' + value["blog_date"] + '</span>' +
          '</p>' +
          '<h5 class="card-title">' +
          '<a href="" class="stretched-link">' +
          value["blog_title"] + '</a>' +
          ' </h5>' +
          '</div>' +
          '</div>'
        );
      }



    });
    $("#blog-wrapper #blog-small").append(
      '<a class="tum-icerikler-button" href="">Tüm İçerikler <i class="fas fa-chevron-right ms-2"></i></a>'
    )
  }
</script>

<!-- Main Page Visa Search Section Validation -->
<script>
  $(document).ready(function() {
    $("#visa-form").validate({
      ignore: [],
      errorClass: "my-error-class",
      validClass: "my-valid-class",
      rules: {
        country: {
          required: true,
        },
        visa: {
          required: true,
        },
      },
      highlight: function(element) {
        $(element).parent().children("div").children("a").addClass("has-error");
      },
      unhighlight: function(element) {
        $(element).parent().children("div").children("a").removeClass("has-error");
      },
      errorPlacement: function(error, element) {
        error.insertAfter(element);
      },
    });

    jQuery.extend(jQuery.validator.messages, {
      required: "Lütfen ilgili alanı doldurunuz.",
    });
  });
</script>