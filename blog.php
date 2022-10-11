<?php include "header.php" ?>

<?php include "breadcrumb.php" ?>

<div class="content container py-3" id="blog-main">

    <div class="row">
        <div class="col-lg-3 col-sm-12">
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
                            <form class="formfilter" id="countryFilterForm">
                                <div class="form-label filter-area pe-3" id="countryType">
                                    <div class="form-group">
                                        <label class="custom-checkbox">Tüm İçerikler
                                            <input type="checkbox" name="countryType_0" id="allSelected" value="0" checked="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="side-info mt-3 p-3">
                    <h3>Almanya Göç Yasası İle İş Bulma Ve Çalışma Fırsatı</h3>
                    <p>1 Mart 2020’de yürürlüğe giren Almanya Göç Yasası ile birlikte Almanya’da iş bulmak ve çalışmak isteyen kişiler başvuruda bulunabilirler.</p>
                    <a href="" class="text-decoration-none"><button class="card-button w-100" href="">Hemen Başvur<i class="fas fa-chevron-right ms-1"></i></button></a>
                    <img src="assets/img/portrait-happy-family-with-little-child-looking-camera-isolated_186202-6369-removebg-preview.png" alt="" class="banner-img">
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-sm-12 blog">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            </div>


            <button class="btn load-more" id="loadMoreBlog">
                Daha Fazla Göster
                <i class="fas fa-chevron-down text-black ms-2"></i>
            </button>

        </div>
    </div>

</div>
</div>


<?php include "footer.php" ?>

<!-- Initialize loadMore.js for main blog page /Blog.php -->
<script>
    var firstLoading = false;
    $(document).ready(function() {
        loadJson(true);
    });

    function loadJson() {
        $("#blog-main .blog .row").loadJson({
            type: "GET",
            limit: 9,
            loadItem: 18,
            url: "services/blog.json",
            loadBtn: "#loadMoreBlog",
            getData: function(elem, data) {

                $.each(data, function(index, value) {
                    $(elem).append(
                        '<div class="card border-0">' +
                        '<div class="crop">' +
                        '<img src="' + value["blog_img"] + '" class="card-img-top" alt="...">' +
                        '</div>' +
                        '<div class="card-body border-bottom pb-2">' +
                        '<p class="card-text">' +
                        '<small class="text-muted">' + value["blog_date"] + '</small>' +
                        '</p>' +
                        '<h5 class="card-title">' +
                        '<a href="' + value["blog_url"] + '" class="stretched-link">' +
                        value["blog_title"] + '</a>' +
                        '</h5>' +
                        '<p class="card-text">' +
                        value["blog_text"] +
                        '</p>' +
                        '</div>' +
                        '</div>'
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
                success: sidecardFilterCountries,
                error: function() {
                    console.log("Error in the request");
                },
            });
        })
    );

    function sidecardFilterCountries(data) {
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