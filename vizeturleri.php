<?php include "header.php" ?>

<div class="container-fluid" id="breadcrumb">
    <div class="container d-flex justify-content-between align-items-between py-4 flex-column flex-lg-row">

        <div class="breadcrumb-left">
            <h2>VİZE TÜRLERİ</h2>
            <div class="path"><a href=""><i class="fas fa-home"></i></a> <span><i class="fas fa-circle mx-2"></i></span> <a href="">Tüm Vize Türleri</a></div>
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

<div class="content container py-3">

    <div class="row">
        <div class="col-12 col-lg-3 pb-3">
            <div>
                <div class="blog-filter">
                    <div class="blog-filter-title">
                        <span>Ülke Seçimi</span>
                        <button class="btn d-lg-none d-block stretched-link" type="button" data-bs-toggle="collapse" data-bs-target=".blog-filter-body" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="blog-filter-body collapse p-3">

                        <div class="blog-filter-search mb-3">
                            <form class="input-group sidebar-search2">
                                <span class="input-group-text bg-white" id="search-icon"><i class="fa fa-search m-0"></i></span>
                                <input class="form-control border-start-0 border shadow-none ps-0 search-input" type="search" placeholder="İçerik Arayın" id="search-input">
                            </form>
                        </div>
                        <div id="blog-filter-checbox">
                            <form class="formfilter" id="visascountryFilterForm">
                                <div class="form-label filter-area search-list pe-3" id="countryType">
                                    <div class="form-group">
                                        <label class="custom-checkbox">Tüm Ülkeler
                                            <input type="checkbox" name="countryType_0" id="allSelected" value="0" checked="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-lg-9">
            <h3 class="content-details-header">Vize Türleri</h3>
            <p>Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
                <br><br>
                Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-3 py-3 blogin-visas" id="all-visas">
                <!-- Visas  -->

            </div>


            <button class="btn load-more" id="loadMoreBlogVisa">
                Daha Fazla Göster
                <i class="fas fa-chevron-down text-black ms-2"></i>
            </button>
        </div>
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
        $("#all-visas").loadJson({
            type: "GET",
            limit: 6,
            loadItem: 12,
            url: "services/visas.json",
            loadBtn: "#loadMoreBlogVisa",
            getData: function(elem, data) {

                $.each(data, function(index, value) {
                    $(elem).append(
                        '<div class="col visa">' +
                        '<div class="card border-0">' +
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
            },
        });

    }
</script>

<!-- Load Sidecard Country filters with ajax -->
<script>
    $(document).ready(
        $(function() {
            $.ajax({
                url: "services/countries.json",
                type: "GET",
                dataType: "json",
                success: sidecardVisasFilterCountries,
                error: function() {
                    console.log("Error in the request");
                },
            });
        })
    );

    function sidecardVisasFilterCountries(data) {
        $.each(data, function(key, value) {

            $("#countryType").append(
                '<div class="form-group">' +
                '<label class="custom-checkbox">' + value["country_name"] +
                ' <input type="checkbox" name="countryType_' + value["country_id"] + '" value="' + value["country_id"] + '">' +
                '<span class="checkmark"></span>' +
                '</label>' +
                '</div>'
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

<script>
    // İçerik seçimi-Ülke seçimi sidebar search - blog, dikkatedilmesigerekenler,vizeturleri.php 
    $(document).ready(function() {
        $(".sidebar-search2 .search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".formfilter .custom-checkbox").filter(function() {
                $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>