/* global $,alert,console*/
$(function(){
  'use strict';

  var firstname   =$('#firstname').val();
  var lastname    =$('#lastname').val();
  var email       =$('#email').val();
  var phonenumber =$('#phonenumber').val();
  var password    =$('#password').val();



/*---------------- firstnam error -----------------------*/
$('#firstname').blur(function(){
  if ($(this).val().length <3) {
    $(this).css('border','1px solid #f00');
    $('.firstnamerror').html("<p>firstname must be larger than 3 characters!</p>");
    $('.firstnamerror').css('color','#f00');
    $(this).parent().find('.asterisx').fadeIn(100);
    firstnamerror=true;

  } else {
      $(this).css('border','1px solid #080');
      $(this).parent().find('.asterisx').fadeOut(100);
      $('.firstnamerror').fadeOut(100);
      firstnamerror=false;
  }

});

/*------------------- lastname error ---------------------------------*/
$('#lastname').blur(function(){
  if ($(this).val().length <3) {
    $(this).css('border','1px solid #f00');
    $('.lastnamerror').html("<p>lastname must be larger than 3 characters!</p>");
    $('.lastnamerror').css('color','#f00');
    $(this).parent().find('.asterisx').fadeIn(100);
    firstnamerror=true;

  } else {
      $(this).css('border','1px solid #080');
      $(this).parent().find('.asterisx').fadeOut(100);
      $('.lastnamerror').fadeOut(100);
      firstnamerror=false;
  }

});

/*-------------------------- email error -----------------------------------*/

$('#email').blur(function(){
  if ($(this).val()==='') {
    $(this).css('border','1px solid #f00');
    $('.emailerror').html("<p>This field can't be empty!</p>");
    $('.emailerror').css('color','#f00');
    $(this).parent().find('.asterisx').fadeIn(100);
    emerror=true;

  } else {
      $(this).css('border','1px solid #080');
      $(this).parent().find('.asterisx').fadeOut(100);
      $('.emailerror').fadeOut(100);
      emailerror=false;
  }

});

/*------------------------- phonenumber error -------------------*/

$('#phonenumber').blur(function(){
  if ($(this).val()==='') {
    $(this).css('border','1px solid #f00');
    $('.phoneerror').html("<p>This field can't be empty!</p>");
    $('.phoneerror').css('color','#f00');
    $(this).parent().find('.asterisx').fadeIn(100);
    emerror=true;

  } else {
      $(this).css('border','1px solid #080');
      $(this).parent().find('.asterisx').fadeOut(100);
      $('.phoneerror').fadeOut(100);
      emailerror=false;
  }

});


/*------------------------- submit form validation ----------------------*/

$('#Register').click(function(e){

var valid = this.form.checkValidity();
  if(valid){
    e.preventDefault();
    Swal.fire({
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 4000
      });

  }else {
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',

     });
  }


});




});
