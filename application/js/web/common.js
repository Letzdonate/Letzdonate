/****************************************************************************** *********************** Send E-Mail*******************/
function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}
	 function validateEmail(emailField){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (reg.test(emailField.value) == false) 
		{
		    $("#email").addClass('required');
			$("#emailHelp").removeClass('invalid-email');
		    return false;
		}else{
		  $("#email").removeClass('required');
		 $("#emailHelp").addClass('invalid-email');
		 return true;
		}
	}
	function ph(){
		var tex = document.getElementById('phone');
		if(tex.value.length < 10){
			
		}
	}
	function submit(){
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var message = $('#message').val();
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		
		if(name == "" && email == "" && message == ""){
			$("#name").addClass('required');
			$("#email").addClass('required');
			$("#message").addClass('requiredtextbox');
			return false;
		}
		else if(name == ""){
			$("#name").addClass('required');
			$("#email").removeClass('required');
			$("#message").removeClass('requiredtextbox');
			return false;
		}
		else if(email == ""){
			$("#name").removeClass('required');
			$("#email").addClass('required');
			$("#message").removeClass('requiredtextbox');
			return false;
		}
		else if(message == ""){
			$("#name").removeClass('required');
			$("#email").removeClass('required');
			$("#message").addClass('requiredtextbox');
			return false;
		}
		else if(reg.test(email) == false) 
		{
		    $("#email").addClass('required');
			$("#emailHelp").removeClass('invalid-email');
		    return false;
		}
		else{
			$("#name").removeClass('required');
			$("#email").removeClass('required');
			$("#message").removeClass('requiredtextbox');
			$("#emailHelp").addClass('invalid-email');
		$.ajax({
				url: "sendemail.php",
				data: { name: name, email: email , phone: phone ,message: message  },
				dataType: 'json',
				type: 'post',
				success: function(data) {
						window.location.replace("thanks.html");	
					},
					error: function (data) {
						window.location.replace("thanks.html");	
				   }	
			});
		window.location.replace("thanks.html");	
		}
	}
	
/****************************************************************************** *********************** Shrink Header*******************/
/*$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
*/

$(window).scroll(function () {
  if ($(document).scrollTop() > 100) {
    $('.navbar').addClass('affix');
    $('.nav-link').addClass('nav-link-white');
    $('.dropdown-item-white').addClass('navbar-toggler-icon');
  } else {
    $('.navbar').removeClass('affix');
	$('.nav-link').removeClass('nav-link-white');
    $('.dropdown-item-white').removeClass('navbar-toggler-icon');
  }  
});




$(document).scroll(function(e)
    {
        var winHeight = $(window).height(),
            curPos    = $(document).scrollTop(),
            $images   = $('.lazyload');

        for (var i=0; i<$images.length; ++i) {

            var $img   = $images.eq(i),                
                imgPos = $img.offset().top;

            if(curPos >= (imgPos - winHeight - 50)) {

                var url = $img.attr('data-src'),
                    img = $img.get(0);

                if (url.length) {
                    img.src = url;
                    img.setAttribute('data-src', '');
                    
                   
                    var frames = 20,
                        delay  = 50; 

                    for (var i=0; i<frames; i++) {
                        (function (i)
                        {
                            setTimeout(function ()
                            {
                                img.style.opacity = i * (1 / frames);
                            }, delay * i)
                        })(i)
                    }
                }
            }
        }
    });