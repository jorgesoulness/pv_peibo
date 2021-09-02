//Scripts layoutScripts v1.0

$(function(){
  // Slider Servicios
  $('.sliderCards').slick({
    dots: false,
    infinite: false,
    autoplay: false,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: false,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      }
    ]
  });
  $('.sliderCards--per').slick({
    dots: false,
    infinite: false,
    autoplay: false,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 2,
    adaptiveHeight: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      }
    ]
  });

  // Formulario Contacto
  var $urlSitio = siteURL;
  $("#frmContact").validate({
    errorElement: "div",
    errorClass: "error-line",
    rules: {
      inpNombre: "required",
      inpApellidos: "required",
      inpEmail: {
        required: true,
        email: true
      },
      inpMensaje: "required",
      // acceptFrm: "required",
    },
    messages: {
      inpNombre: "<i class='fa fa-exclamation-triangle'><i>",
      inpApellidos: "<i class='fa fa-exclamation-triangle'><i>",
      inpEmail: {
        required: "<i class='fa fa-exclamation-triangle'><i>",
        email: "<i class='fa fa-exclamation-triangle'><i>"
      },
      inpMensaje: "<i class='fa fa-exclamation-triangle'><i>",
      // acceptFrm: "<i class='fa fa-exclamation-triangle'><i>",
    },
    // submitHandler: function(form) {
    //   var dataForm = $('#frmContact').serialize();
    //   $.ajax({
    //     url: $urlSitio + 'contactscript.php',
    //     type: 'POST',
    //     data: dataForm,
    //     beforeSend: function(xhr) {
    //       $('.btnSend').addClass('loadBtn');
    //     },
    //     complete: function(xhr, textstatus) {
    //       $('.btnSend').removeClass('loadBtn');
    //     },
    //     success: function(data) {
    //       console.log(data);
    //       $("#frmContact").each (function(){
    //         this.reset();
    //       });
    //       $('#modalCongrats').removeClass('hideMo').addClass('showMo');
    //       setTimeout(function(){
    //         $('#modalCongrats').removeClass('showMo').addClass('hideMo');
    //       }, 5000);
    //     },
    //     error: function(e) {
    //       console.log(e);
    //     }
    //   });
    // }
  });
});