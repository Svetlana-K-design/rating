$(document).ready(function() {
    $('.header__toggle').click(function(event) {
      if (window.matchMedia("(max-width: 1152px)").matches) {
        $('.header__toggle, .header__navigation, .header, .page-body').toggleClass('active');
      }
    });
});

var mql = window.matchMedia("(max-width: 1152px)");
mql.addEventListener('change', function(e) {
  if (!e.matches) { // If media query matches
    $('.header__toggle, .header__navigation, .header, .page-body').removeClass('active');
  }
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

function validateForm(params) {
  // Объявляем переменные (форма и кнопка отправки)
  let form = $(params),
  btn = form.find('.btn-valid');     

  // Добавляем каждому проверяемому полю, указание что поле пустое
  form.find('.onboarding__input, .feedback__input').addClass('empty-field');

  // Функция проверки полей формы
  function checkInput(){
    form.find('.onboarding__input, .feedback__input').each(function() {
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
        if (!$(this).hasClass('not_submit')) {       
          form.submit();
        }
      }
    });
};

validateForm('#formSum');
validateForm('#callBack');
validateForm('#callBackRatingCustom');
validateForm('#callBackRating');

//Quiz
var steps = [false, false, false, false];
var curr_step = 0;


/*// возможность возвращаться к предыдущему вопросу
function set_history(index) {
	if (!(window.history && history.pushState))	{
		return false;
	}
	if (steps[index] == false) {
		history.pushState({'step_x': index}, null, window.location.href);
		steps[index] = true;
	}
}*/


// переходы по шагам
function to_step(index, need_push) {
	curr_step = index;
	for (var i = 0; i < steps.length; i++) {
		if (!$("#step" + i).is(':hidden')) {
			$("#step" + i).hide();
		}
	};
	$("#step" + index).show();
}


// Проверка заполненности радиокнопки или чекбокса
function check_radio_selected(elem_id, error_message) {
	obj = $('input[name="' + elem_id + '"]:checked');
	if (!(obj.length && obj.val()))	{
		alert(error_message);
		return false;
	}
	return true;
}

// Проверки полей по шагам
(function($) {
	
	$(document).ready(function() { to_step(0, true); }); // задаем первоначальный индекс
	
	$("#to-step1").click(function(event) {
		event.preventDefault();
    
	
  	if (!$('#sumSmall').val().length > 0) {
			//alert('Заполните поле');

			return false;
		}
  
		to_step(1, true);
	});

	$("#to-step2").click(function(event) {
		event.preventDefault();
		if (check_radio_selected("company", "Выберите хотя бы один вариант")) {
			to_step(2, true);
		}
	});

	$("#to-step3").click(function(event) {
		event.preventDefault();
		if (check_radio_selected("company", "Выберите хотя бы один вариант")) {
			to_step(3, true);
		}
	});

  $("#back-step2").click(function(event) {
		event.preventDefault();
		to_step(2, true);
	});


  $("#back-step1").click(function(event) {
		event.preventDefault();
		to_step(1, true);
	});

  $("#back-step0").click(function(event) {
		event.preventDefault();
		to_step(0, true);
	});

	/*// Отправка формы (нажатием на финальную кнопку)
	$("#submit").click(function(event) {
		event.preventDefault();
		$("#formSum").submit();
	});*/
	
	/*// для возврата к предыдущему вопросу
	window.addEventListener("popstate", function(e) {
		var step = 0;
        if (e.state) {
			step = e.state.step_x;
        }
        to_step(step);
    });*/

})(jQuery);

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
