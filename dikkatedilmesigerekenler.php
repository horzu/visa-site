<?php include "header.php" ?>

<div class="container-fluid" id="breadcrumb">
    <div class="container d-flex justify-content-between align-items-between py-4 flex-column flex-lg-row">

        <div class="breadcrumb-left">
            <h2>DİKKAT EDİLMESİ GEREKENLER</h2>
            <div class="path"><a href=""><i class="fas fa-home"></i></a> <span><i class="fas fa-circle mx-2"></i></span> <a href="">Dikkat Edilmesi Gerekenler</a></div>
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

<div class="content container py-3" id="thingstoconsider-main">

    <div class="row">
        <div class="col-12 col-lg-3 pb-3">
            <div>
                <div class="blog-filter">
                    <div class="blog-filter-title">
                        <span>İçerik Seçimi</span>
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
                            <form class="formfilter" id="thingsFilterForm">
                                <div class="form-label filter-area pe-3" id="thingType">
                                    <div class="form-group">
                                        <label class="custom-checkbox">Tüm İçerikler
                                            <input type="checkbox" name="thingType_0" id="allSelected" value="0" checked="">
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
            <h3 class="content-details-header">Dikkat Edilmesi Gerekenler</h3>
            <p>Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
                <br><br>
                Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
            </p>
            <div id="things-main" class="mt-4"></div>

            <button class="btn load-more" id="thingstoconsider-more">
                Daha Fazla Göster
                <i class="fas fa-chevron-down text-black ms-2"></i>
            </button>

        </div>
    </div>

</div>
</div>



<?php include "footer.php" ?>

<!-- Initialize loadMore.js for dikkatedilmesigerekenler main page -->
<script>
    var firstLoading = false;
    $(document).ready(function() {
        loadJson(true);
    });

    function loadJson() {
        $("#things-main").loadJson({
            type: "GET",
            limit: 6,
            loadItem: 12,
            url: "services/thingtoconsider.json",
            loadBtn: "#thingstoconsider-more",
            getData: function(elem, data) {

                $.each(data, function(index, value) {
                    $(elem).append(
                        '<div class="card mb-3">' +
                        '<div class="row g-0">' +
                        '<div class="col-md-4 col-xxl-3 pe-0 pe-md-3 mb-3 mb-md-0 d-flex align-items-start">' +
                        '<a href="' + value["things_url"] + '" ><img src="' + value["things_img"] + '" class="img-fluid h-100" alt="' + value["things_title"] + '" ></a>' +
                        '</div>' +
                        '<div class="col-md-8 col-xxl-9">' +
                        '<div class="card-body px-0 px-md-3 p-0">' +
                        '<h5 class="card-title semibold">' + value["things_title"] + '</h5>' +
                        '<p class="card-text">' +
                        value["things_text"] +
                        '</p>' +
                        '<div class="d-flex justify-content-between pe-3 card-links">' +
                        '<a href="" class="link-orange">' + value["things_category"] + '</a>' +
                        '<a href="' + value["things_url"] + '" class="text-black semibold link-black">Detaylı Bilgi<i class="fas fa-chevron-right ms-2"></i></a>' +
                        '</div>' +
                        '</div>'
                    );
                });
            },
        });

    }
</script>

<!-- Load Sidecard ThingstoConsider filters with ajax -->
<script>
    $(document).ready(
        $(function() {
            $.ajax({
                url: "services/thingtoconsider.json",
                type: "GET",
                dataType: "json",
                success: sidecardFilterThings,
                error: function() {
                    console.log("Error in the request");
                },
            });
        })
    );

    function sidecardFilterThings(data) {
        $.each(data, function(key, value) {

            $("#thingsFilterForm").append(
                '<div class="form-group">' +
                '<label class="custom-checkbox">' + value["things_category"] +
                ' <input type="checkbox" name="thingType_' + value["things_id"] + '" value="' + value["things_id"] + '">' +
                '<span class="checkmark"></span>' +
                '</label>' +
                '</div>'
            );

        });
    }
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