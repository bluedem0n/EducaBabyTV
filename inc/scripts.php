<script src="js/jquery.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script>
		//Loader
		$(window).load(function () {
			$(".pre-load").fadeOut("slow");
		});
</script>
<script>
    lightbox(document.getElementById('carousel'));
</script>

<script>
    $(function(){
        $('.main-nav__toggle').on('click',function(){
            $(this).next().slideToggle();
        })
    })
</script>

<script type="text/javascript">
      $(document).ready(function() {
        $('.popup-with-form').magnificPopup({
          type: 'inline',
          preloader: false,
          focus: '#name',

          // When elemened is focused, some mobile browsers in some cases zoom in
          // It looks not nice, so we disable it:
          callbacks: {
            beforeOpen: function() {
              if($(window).width() < 700) {
                this.st.focus = false;
              } else {
                this.st.focus = '#name';
              }
            }
          }
        });
      });
    </script>
<script>
    // Hacemos la Function para abrir el contador de visitas
    function recargar_views(){
        $(".views").load("./contador.txt");
    }

    // Establecemos el temporizador a 1 segundos
    timer = setInterval("recargar_views()", 1000);
</script>
<script src="js/animated-scroll.js"></script>
<script src="js/popup.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
      });
</script>

<script>
    'use strict';

    function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

    var FilterGallery = function () {
        function FilterGallery() {
            _classCallCheck(this, FilterGallery);

            this.$filtermenuList = $('.menu-catalogo li');
            this.$container = $('.content-catalogo');

            this.updateMenu('todos');
            this.$filtermenuList.on('click', $.proxy(this.onClickFilterMenu, this));
        }

        FilterGallery.prototype.onClickFilterMenu = function onClickFilterMenu(event) {
            var $target = $(event.target);
            var targetFilter = $target.data('filter');

            this.updateMenu(targetFilter);
            this.updateGallery(targetFilter);
        };

        FilterGallery.prototype.updateMenu = function updateMenu(targetFilter) {
            this.$filtermenuList.removeClass('active-catalogo');
            this.$filtermenuList.each(function (index, element) {
                var targetData = $(element).data('filter');

                if (targetData === targetFilter) {
                    $(element).addClass('active-catalogo');
                }
            });
        };

        FilterGallery.prototype.updateGallery = function updateGallery(targetFilter) {
            var _this = this;

            if (targetFilter === 'todos') {
                this.$container.fadeOut(300, function () {
                    $('.item-catalogo').show();
                    _this.$container.fadeIn();
                });
            } else {
                this.$container.find('.item-catalogo').each(function (index, element) {
                    _this.$container.fadeOut(300, function () {
                        if ($(element).hasClass(targetFilter)) {
                            $(element).show();
                        } else {
                            $(element).hide();
                        }
                        _this.$container.fadeIn();
                    });
                });
            }
        };

        return FilterGallery;
    }();
    var fliterGallery = new FilterGallery();
</script>
<script src="js/lightslider.js"></script>

<script> // Carousel
    $(document).ready(function() { 
        $("#carousel").lightSlider({
        item: 3,
        pause: 3000,
        
        loop:true,
        pauseOnHover: true,
        auto: true,
            responsive : [
                {
                    breakpoint:1024,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:900,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                },
                 {
                    breakpoint:580,
                    settings: {
                        item:1,
                        slideMove:1
                      }
                }
            ]
        });
    });
</script>


