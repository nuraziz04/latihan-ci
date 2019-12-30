$(document).ready(function() {
  $('#btn').click(function(e) {
    var fieldIDArray = [$('#title'), $('#url'), $('#menu'), $('#icon')]; //fix here
    var spanIDArray = [
      $('#titleRequired'), 
      $('#urlRequired'), 
      $('#menuRequired'), 
      $('#iconRequired')
    ]; //fix here
    for (i = 0; i < fieldIDArray.length; i++) {
      if (!fieldIDArray[i].val().length) {
        e.preventDefault();
        fieldIDArray[i].closest('.form-group')
          .removeClass('has-success').addClass(
            'has-error');
        spanIDArray[i].show();
      } else {
        fieldIDArray[i].closest('.form-group')
          .removeClass('has-error').addClass(
            'has-success');
        spanIDArray[i].hide();
      }
    }
  });

  $('#btn-menu').click(function(e) {
    var fieldIDArray = [$('#idMenu')]; //fix here
    var spanIDArray = [
      $('#idMenuRequired')
    ]; //fix here
    for (i = 0; i < fieldIDArray.length; i++) {
      if (!fieldIDArray[i].val().length) {
        e.preventDefault();
        fieldIDArray[i].closest('.form-group')
          .removeClass('has-success').addClass(
            'has-error');
        spanIDArray[i].show();
      } else {
        fieldIDArray[i].closest('.form-group')
          .removeClass('has-error').addClass(
            'has-success');
        spanIDArray[i].hide();
      }
    }
  });
});