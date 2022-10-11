<?php include "header.php" ?>

<div class="container-fluid" id="breadcrumb">
    <div class="container d-flex justify-content-between align-items-between py-4 flex-column flex-lg-row">

        <div class="breadcrumb-left">
            <h2>
                ÜLKELER
            </h2>
            <div class="path"><a href=""><i class="fas fa-home"></i></a> <span><i class="fas fa-circle mx-2"></i></span> <a href="">Vize Alabileceğiniz Ülkeler</a></div>
        </div>

        <div class="breadcrumb-right d-flex mt-3 mt-lg-0 justify-content-between align-items-center">
            <div class="breadcrumb-social me-0 me-lg-3">
                <a id="breadcrumb-facebook" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a id="breadcrumb-twitter" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a id="breadcrumb-pinterest" href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                <a id="breadcrumb-linkedin" href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a id="breadcrumb-whatsapp" href="tel:05555555555" target="_blank"><i class="fab fa-whatsapp"></i></a>

            </div>
            <button class="btn"><i class="fas fa-arrow-left me-2"></i>Geri</button>

        </div>

    </div>
</div>

<div class="container">
    <div class="row my-5">
        <div class="col-12 col-lg-3 pb-3">
            <div class="blog-filter">
                <div class="blog-filter-title">
                    <span>Vize Türleri</span>
                    <button class="btn d-lg-none d-block stretched-link" type="button" data-bs-toggle="collapse" data-bs-target=".quick-visa-apply-sidebar" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="quick-visa-apply-sidebar collapse p-3">

                    <div class="blog-filter-search mb-3">
                        <form class="input-group sidebar-search">
                            <span class="input-group-text bg-white" id="search-icon"><i class="fa fa-search m-0"></i></span>
                            <input class="form-control border-start-0 border shadow-none ps-0 search-input" type="search" placeholder="Başvuru Arayın" id="search-input">
                        </form>
                    </div>
                    <div class="quick-visas-sidebar px-2 search-list">


                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <h3 class="content-details-header">Vize Alabileceğiniz Ülkeler</h3>
            <p>Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
                <br><br>
                Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
            </p>

            <div class="blog-filter-search my-4">
                <form class="input-group" id="ulkeler-arama">
                    <span class="input-group-text bg-white" id="search-icon"><i class="fa fa-search m-0"></i></span>
                    <input class="form-control border-start-0 border shadow-none ps-0 search-input" type="search" placeholder="Ülke Arayın" id="search-input">
                </form>
            </div>

            <div class="country-visas-bars">


            </div>

            <button class="btn load-more" id="loadMoreBlogVisa">
                Daha Fazla Göster
                <i class="fas fa-chevron-down text-black ms-2"></i>
            </button>

        </div>
    </div>
</div>


<?php include "footer.php" ?>

<!-- Initialize loadMore.js for Visas countries section -->
<script>
    var firstLoading = false;
    $(document).ready(function() {
        loadJson(true);
    });

    function loadJson() {
        $(".country-visas-bars").loadJson({
            type: "GET",
            limit: 6,
            loadItem: 12,
            url: "services/countries.json",
            loadBtn: "#loadMoreBlogVisa",
            getData: function(elem, data) {

                $.each(data, function(index, value) {
                    $(elem).append(
                        '<div class="w-100 mb-3 country-bar">' +
                        '<div class="announcement-box-text w-100 d-flex justify-content-between align-items-center flex-column flex-md-row">' +
                        '<div class="d-flex justify-content-between align-items-center mb-2 mb-md-0">' +
                        '<img src="assets/img/countries/' + value["country_img"] + '" alt="" class="card-img-top">' +
                        '<div class="d-flex flex-column justify-content-between pb-1">' +
                        '<p class="announcement-box-name m-0"> <span class="bold"> ' + value["country_name"] + ' </span>Vizesi</p>' +
                        '<p class=" m-0">' + value["country_name"] + ' vizesi için hızlı başvuru yapabilir veya detaylı bilgi alabilirsiniz.</p>' +
                        '</div>' +
                        '</div>' +
                        '<button class="card-button" href="">Hemen Başvur<i class="fas fa-chevron-right ms-1"></i></button>' +
                        '</div>' +
                        '</div>'
                    );
                });
            },
        });

    }
</script>

<script>
    // Ülke arama - ulkeler.php
    $(document).ready(function() {
        $("#ulkeler-arama .search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".announcement-box-name span").filter(function() {
                $(this).parents().eq(4).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<!-- Load QuickVisas Sidebar with ajax -->
<script>
    $(document).ready(
        $(function() {
            $.ajax({
                url: "services/visas.json",
                type: "GET",
                dataType: "json",
                success: quickVisasSidebar,
                error: function() {
                    console.log("Error in the request");
                },
            });
        })
    );

    function quickVisasSidebar(data) {
        $.each(data, function(key, value) {
            $(".quick-visas-sidebar").append(
                '<a class="justify-content-between align-items-center border-bottom py-2 mx-2" href="">' + value["visa_name"] + '<i class="fas fa-chevron-right"></i></a>'
            );
        });
    }
</script>



<script>
    // Hızlı Vize Başvuru sidebar search - 
    $(document).ready(function() {
        $(".sidebar-search .search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".search-list a").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>