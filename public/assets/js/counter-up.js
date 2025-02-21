/*---------- Counter-Up ----------*/

$(document).ready(function(){

    $('.count').each(function() {
      var $this = $(this),
          countTo = $this.attr('data-count');
      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },
      {
        duration: 5000,
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          // Si el número final NO es 100%, agrega '+'
          if (countTo != "100") {
            $this.text(this.countNum + '+');
          } else {
              $this.text(this.countNum + '%');
          }
        }
      });
    });
    
    });