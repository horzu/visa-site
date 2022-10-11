// Navbar Shadow
$(window).scroll(function () {
  if ($(window).scrollTop() > 123) {
    $("#bottomnavbar").addClass("navbarshadow");
  } else {
    $("#bottomnavbar").removeClass("navbarshadow");
  }
});

// Navbar Çözüm Merkezi Contact Form Validation
$(document).ready(function () {
  $("#getInfo").validate({
    errorClass: "my-error-class",
    validClass: "my-valid-class",
    rules: {
      nameSurname: {
        required: true,
      },
      phoneNumber: {
        minlength: 14,
        maxlength: 14,
        required: true,
      },
      kvkkCheck: {
        required: true,
      },
    },
    highlight: function (element) {
      $(element).addClass("has-error");
    },
    unhighlight: function (element) {
      $(element).removeClass("has-error");
    },
    messages: {
      cfPhone: {
        required: "Lütfen telefon numaranızı giriniz.",
        maxlength: jQuery.validator.format("Lütfen geçerli telefon numarası giriniz."),
        minlength: jQuery.validator.format("Lütfen geçerli telefon numarası giriniz."),
      },
      kvkkCheck: {
        required: "Lütfen KVKK metnini onaylayınız.",
      },
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "kvkkCheck") {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    },
  });

  jQuery.extend(jQuery.validator.messages, {
    required: "Lütfen ilgili alanı doldurunuz.",
    remote: "Bu alanı düzeltmeniz gereklidir.",
    number: "Lütfen geçerli bir numara giriniz.",
    digits: "Sadece rakam girebilirsiniz.",
    maxlength: jQuery.validator.format("{0} karakterden fazla olamaz."),
    minlength: jQuery.validator.format("{0} karakterden az olamaz."),
    max: jQuery.validator.format("{0}. karakterden fazla olamaz."),
    min: jQuery.validator.format("{0}. karakterden az olamaz."),
  });
});

// Load Countries with ajax for side modal
$(document).ready(
  $(function () {
    $.ajax({
      url: "services/countries.json",
      type: "GET",
      dataType: "json",
      success: modalCountries,
      error: function () {
        console.log("Error in the request");
      },
    });
  })
);

function modalCountries(data) {
  $.each(data, function (key, value) {
    $("#modal-countries").append(
      '<div class="col country">' +
        '<div class="card">' +
        '<img src="assets/img/countries/' +
        value["country_img"] +
        '" class="card-img-top" alt="' +
        value["country_name"] +
        '" />' +
        '<div class="card-body">' +
        '<a class="card-title stretched-link" href="' +
        value["country_url"] +
        '">' +
        value["country_name"] +
        " Vizesi</a>" +
        '<p class="card-text">Başvuru İşlemleri</p>' +
        "</div>" +
        "</div>" +
        "</div>"
    );
  });
}
// Load Countries with ajax for side modal ends

// Side Modal Country Search
$(document).ready(function () {
  $("#modal-search").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $(".modal-body .card-title").filter(function () {
      $(this)
        .parents()
        .eq(2)
        .toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});

// Modal Checkbox for Navbar Contact Modal Form
$(".modal-footer .btn-danger").click(function () {
  $("#kvkkCheck").prop("checked", false);
  $("#kvkkModal").modal("toggle");
});
$(".modal-footer .btn-success").click(function () {
  $("#kvkkCheck").prop("checked", true);
  $("#kvkkModal").modal("toggle");
});
// Modal Checkbox for Navbar Contact Modal Form E

// Key up Script
$("#cfPhone").keyup(function (e) {
  var number = $("#cfPhone")
    .val()
    .replace(/[^A-Z0-9]/gi, "")
    .substr(0, 1);
  if (number == 0) {
    $("#cfPhone").val("");
  }
});

// Contact Form Validation
$(document).ready(function () {
  $("#contactForm").validate({
    errorClass: "my-error-class",
    validClass: "my-valid-class",
    rules: {
      cfName: {
        required: true,
      },
      cfsurName: {
        required: true,
      },
      cfPhone: {
        minlength: 14,
        maxlength: 14,
        required: true,
      },
      cfCheck: {
        required: true,
      },
    },
    highlight: function (element) {
      $(element).addClass("has-error");
    },
    unhighlight: function (element) {
      $(element).removeClass("has-error");
    },
    messages: {
      cfPhone: {
        required: "Lütfen telefon numaranızı giriniz.",
        maxlength: jQuery.validator.format("Lütfen geçerli telefon numarası giriniz."),
        minlength: jQuery.validator.format("Lütfen geçerli telefon numarası giriniz."),
      },
      cfCheck: {
        required: "Lütfen KVKK metnini onaylayınız.",
      },
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "cfCheck") {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    },
  });

  jQuery.extend(jQuery.validator.messages, {
    required: "Lütfen ilgili alanı doldurunuz.",
    remote: "Bu alanı düzeltmeniz gereklidir.",
    number: "Lütfen geçerli bir numara giriniz.",
    digits: "Sadece rakam girebilirsiniz.",
    maxlength: jQuery.validator.format("{0} karakterden fazla olamaz."),
    minlength: jQuery.validator.format("{0} karakterden az olamaz."),
    max: jQuery.validator.format("{0}. karakterden fazla olamaz."),
    min: jQuery.validator.format("{0}. karakterden az olamaz."),
  });
});

// Jquery Autocomplate

$(function () {
  var availableTags = [
    '<button class="bg-blue search-category-btn me-3" href="">Vize Türleri</button><a href="" class=""> Almanya İş Arama Vizesi</a>',
    '<button class="bg-orange search-category-btn me-3" href="">Vize</button><a href="" class=""> Almanya Vize Başvurusu</a>',
    '<button class="bg-cyan search-category-btn me-3" href="">Blog</button><a href="" class=""> Almanya Aile Birleşimi Vizesini En Kolay Nasıl Alırım?</a>',
    '<button class="bg-lightgreen search-category-btn me-3" href="">Duyurular</button><a href="" class=""> Almanya Vize Başvuruları Açıldı</a>',
    "Dikkat Edilmesi Gerekenler",
    "İletişim Bilgilerimiz",
    "Sıkça Sorulan Sorular",
  ];
  $(".mobile-search #dropdown-search-input")
    .autocomplete({
      source: availableTags,
      position: {
        my: "left-0 top+8",
      },
      minLength: 3
    })
    .data("ui-autocomplete")._renderItem = function (ul, item) {
    return $("<li></li>")
      .data("item.autocomplete", item)
      .append("<a>" + item.label + "</a>")
      .appendTo(ul);
  };
  $("#navbar-social #dropdown-search-input")
    .autocomplete({
      source: availableTags,
      position: {
        my: "left-0 top+8",
      },
      minLength: 3
    })
    .data("ui-autocomplete")._renderItem = function (ul, item) {
    return $("<li></li>")
      .data("item.autocomplete", item)
      .append("<a>" + item.label + "</a>")
      .appendTo(ul);
  };
});
