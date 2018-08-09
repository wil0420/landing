$(document).ready(function(){
  $('.determinate').addClass('determinate2');
  $('.dato1').addClass('margen');

    var elem = document.getElementById("dato1"); 
    var dato1 = 10;
    var id = setInterval(frame1, 20);
    function frame1() {
        if (dato1 >= 75) {
            clearInterval(id);
        } else {
            dato1++; 
            //elem.style.width = width + '%'; 
            elem.innerHTML = dato1 * 1 + '%';
        }
    }

    var elem2 = document.getElementById("dato2"); 
    var dato2 = 0;
    var id = setInterval(frame2, 20);
    function frame2() {
        if (dato2 >= 30) {
            clearInterval(id);
        } else {
            dato2++; 
            //elem.style.width = width + '%'; 
            elem2.innerHTML = dato2 * 1 + '%';
        }
    }

//FUNCIONALIDAD CAMBIO ICONO ACORDION
$(function() {
      $('.collapsible').on( 'click', function() {
              if($('li').hasClass('active')){
                $('li i.material-icons').text("add_circle_outline");
                $('li.active i.material-icons').text("remove_circle");

               }
               else{
                $('li i.material-icons').text("add_circle_outline");
               }

      });
});


});



//////// ACORDION

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

//ADD clase active cantidades a
$(".cantidades article").click(function() {
  $(this).siblings().removeClass('active');
  $(this).addClass('active');
  $('.header_tipo_ayuda').css("margin-top","5%");
  });
//ADD FIN clase active cantidades a

//ADD clase active cantidades a
$(".content_tipo_ayuda article").click(function() {
  $(this).siblings().removeClass('selected');
  $(this).addClass('selected');
  });



  var btnOpt1 = document.getElementById('opt1');
  btnOpt1.addEventListener('click', (e) => {
    $('#input_cantidad').val('10');
  });

  var btnOpt2 = document.getElementById('opt2');
  btnOpt2.addEventListener('click', (e) => {
    $('#input_cantidad').val('20');
  });

  var btnOpt3 = document.getElementById('opt3');
  btnOpt3.addEventListener('click', (e) => {
    $('#input_cantidad').val('30');
  });




    var inputAmount = document.getElementById('input_cantidad');

       inputAmount.addEventListener('keyup', (e) => {
      if($('#input_cantidad').val() == '10') {
        $('#opt1').addClass('active');
        $('.header_tipo_ayuda').css("margin-top","5%");
      }else if ($('#input_cantidad').val() == '20') {
        $('#opt2').addClass('active');
        $('.header_tipo_ayuda').css("margin-top","5%");
      }else if ($('#input_cantidad').val() == '30') {
        $('#opt3').addClass('active');
        $('.header_tipo_ayuda').css("margin-top","5%");
      }else{
        $('#opt1').removeClass('active');
        $('#opt2').removeClass('active');
        $('#opt3').removeClass('active');
        $('.header_tipo_ayuda').css("margin-top","0%");
      }

    });