$(document).ready(function() { 
    $('.header__toggle').click(function(event) {
        $('.header__toggle, .header__navigation, .header, .page-body').toggleClass('active');
    });
});

//Scroll
document.querySelectorAll('a[href^="#"').forEach(link => {

  link.addEventListener('click', function(e) {
      e.preventDefault();

      let href = this.getAttribute('href').substring(1);

      const scrollTarget = document.getElementById(href);

      const topOffset = document.querySelector('.header').offsetHeight;
      //const topOffset = 0; // если не нужен отступ сверху 
      const elementPosition = scrollTarget.getBoundingClientRect().top;
      const offsetPosition = elementPosition - topOffset;

      window.scrollBy({
          top: offsetPosition,
          behavior: 'smooth'
      });
  });
});


//Add .checked to form
$('.onboarding__input').focus(function() {
    $('.onboarding__input, .onboarding__decor, .onboarding__btn--block').addClass('active');
});

$('.onboarding__input-radio').change(function() {
  if ($(this).attr("checked")) {
    $('.onboarding__btn--radio').addClass('active');
  }
});

$('.onboarding__input-checkbox').change(function() {
  if ($(this).attr("checked")) {
    $('.onboarding__btn--checkbox').addClass('active');
  }
});

function validateForm(params) {
  // Объявляем переменные (форма и кнопка отправки)
  let form = $(params),
  btn = form.find('.onboarding__btn-next');     

  // Добавляем каждому проверяемому полю, указание что поле пустое
  form.find('.onboarding__input').addClass('empty-field');

  // Функция проверки полей формы
  function checkInput(){
    form.find('.onboarding__input').each(function() {
      if($(this).val() != '' && $(this).val().indexOf('_') == -1) {
            // Если поле не пустое удаляем класс-указание
            $(this).removeClass('empty-field');
          } else {
            // Если поле пустое добавляем класс-указание
            $(this).addClass('empty-field');
          }
        });
  }

  // Функция подсветки незаполненных полей
  function lightEmpty(){
    form.find('.empty-field').addClass('error');
  }

  form.find('.empty-field').on('change', function(){
    if ($(this).val() != '' && $(this).val().indexOf('_') == -1) {
      $(this).removeClass('empty-field').removeClass('error');
    }
  });


  // Проверка в режиме реального времени
  setInterval(function(){
      // Запускаем функцию проверки полей на заполненность
      checkInput();
      // Считаем к-во незаполненных полей
      let sizeEmpty = form.find('.empty-field').length;
      // Вешаем условие-тригер на кнопку отправки формы
      if(sizeEmpty > 0) {
        if(btn.hasClass('disabled')){
          return false
        } else {
          btn.addClass('disabled')
        }
      } else {
        btn.removeClass('disabled')
      }

    }, 1500);

  // Событие клика по кнопке отправить
  btn.click(function(){
    if($(this).hasClass('disabled')) {
        // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
        lightEmpty();
        return false
      } else {
        // Все хорошо, все заполнено, отправляем форму           
        form.submit();
      }
    });
};

validateForm('#formSum');





