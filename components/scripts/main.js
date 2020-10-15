$(function () {
  // мобменю
  const mmenu = new Mmenu('.mmenu', {
    navbar: {
      title: 'Основное меню сайта',
      titleLink: 'none'
    },
    onClick: {
      close: true
    },
    hooks: {
      'close:after': () => {
        $('.top-menu__burger').removeClass('top-menu__burger_close').attr('src', './view/img/menu/burger.png');
      }
  }
  });
  const mmapi = mmenu.API;
  
  $('.top-menu__burger').click(e => {
    mmapi.open();
    $(e.target).addClass('top-menu__burger_close').attr('src', './view/img/menu/close.png');
  });

  // карусель
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true
  });

  // найсскролл для сайдбара
  $('.sidebar').niceScroll({
    horizrailenabled: false
  });

  // форма отправки сообщения
  $('.feedback__button').click(e => {
    e.preventDefault();

    const form = $('form[name="feedback"]')[0];
    const formdata = {};

    $(form).find('.feedback__input, .feedback__text').each(function() {
      formdata[this.name] = $(this).val();
    });
    if (form.reportValidity()) {
      $.fancybox.close();

      $.post('/src/mail.php', formdata, answer => {
        // успех        
        if (answer.result == 'success') {
          $.fancybox.open({
            src  : '#answer',
            type : 'inline'
          });
        }
        // ошибка
        if (answer.result == 'error') {
          $('.feedback__answer .feedback__title').html('Сожалеем, произошла ошибка...');
          $('.feedback__answer .feedback__message').html(answer.status + '<br>Попрбуйте ещё раз.');
          $.fancybox.open({
            src  : '#answer',
            type : 'inline'
          });
        }
      }, 'json');
    }
  });
});