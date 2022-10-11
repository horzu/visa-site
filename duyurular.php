<?php include "header.php" ?>

<div class="container-fluid" id="breadcrumb">
    <div class="container d-flex justify-content-between align-items-between py-4 flex-column flex-lg-row">

        <div class="breadcrumb-left">
            <h2>DUYURULAR</h2>
            <div class="path"><a href=""><i class="fas fa-home"></i></a> <span><i class="fas fa-circle mx-2"></i></span> <a href="">Tüm Duyurular</a></div>
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
            <div class="side-menu-nav">

                <div class="d-flex align-items-center justify-content-between sidebar-collapse position-relative">
                    <h3>Diğer İçerikler</h3>
                    <button class="btn d-lg-none d-block stretched-link" type="button" data-bs-toggle="collapse" data-bs-target=".list-group" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </button>
                </div>

                <ul class="list-group collapse">
                    <li class="list-group-item"><a href=""> Dikkat Edilmesi Gerekenler <i class="fas fa-chevron-right"></i> </a></li>
                    <li class="list-group-item"><a href=""> Kurumsal<i class="fas fa-chevron-right"></i> </a></li>
                    <li class="list-group-item"><a href=""> Ülkeler <i class="fas fa-chevron-right"></i> </a></li>
                    <li class="list-group-item"><a href=""> Vize Türleri <i class="fas fa-chevron-right"></i> </a></li>
                    <li class="list-group-item"><a href=""> Blog <i class="fas fa-chevron-right"></i> </a></li>
                    <li class="list-group-item"><a href=""> Ofislerimiz <i class="fas fa-chevron-right"></i> </a></li>
                </ul>

            </div>
        </div>
        <div class="col-12 col-lg-9">
            <h3 class="content-details-header">Güncel Duyurular</h3>
            <p>Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
                <br><br>
                Ülkelerin vize prosedürleri; seyahat amacınız ile vize tipinizi belirler. Vize tipiniz ve seyahat süreniz için seyahat sağlık sigortasınız, otel ve uçak rezervasyonunuz ve maddi durum ispatınız da vizenizin olumlu sonuç vermesi için doğru bir şekilde planlanmalıdır.
            </p>

            <div class="announcements">





            </div>

            <button class="btn load-more" id="loadMoreAnnouncement">
                Daha Fazla Göster
                <i class="fas fa-chevron-down text-black ms-2"></i>
            </button>

        </div>
    </div>
</div>



<?php include "footer.php" ?>

<!-- Initialize loadMore.js for main blog page /duyurular.php -->
<script>
    var firstLoading = false;
    $(document).ready(function() {
        loadJson(true);
    });

    function loadJson() {
        $(".announcements").loadJson({
            type: "GET",
            limit: 6,
            loadItem: 12,
            url: "services/announcements.json",
            loadBtn: "#loadMoreAnnouncement",
            getData: function(elem, data) {
                console.log("deneme")
                $.each(data, function(index, value) {
                    $(elem).append(
                        '<div class="d-flex position-relative w-100 mb-3">' +
                        '<div class="announcement-box-text w-100">' +
                        '<div class="announcement-box-icon me-3 d-flex flex-column align-items-center justify-content-center">' +
                        '<span>' + value["announcement_day"] + '</span>' +
                        '<span>' + value["announcement_month"] + '</span>' +
                        '</div>' +
                        '<div class="d-flex flex-column justify-content-center">' +
                        '<p class="announcement-box-name m-0">' + value["announcement_text"] + '</p>' +
                        '<a class="link-black bold m-0 stretched-link" href="tel:0312 418 5 419">Detaylı Bilgi<i class="fas fa-chevron-right mx-2"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                });

            },
        });
    }
</script>