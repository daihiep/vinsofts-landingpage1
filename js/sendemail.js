var baseUrl = window.location.href;
$(document).ready(function(){
	$('#form-ct').validate();
	$(document).on('click','.btn-send',function(){
		$('.loading').show();
		$(this).attr("disabled","disabled");
		var name = $('.form-contact').find('input[name="name"]').val();
		var email = $('.form-contact').find('input[name="email"]').val();
		var message = $('.form-contact').find('textarea[name="message"]').val();
		var data ={
			name: name,
			email: email,
			message: message
		}
		var url = baseUrl+"/sendmail.php";
		if ($("#form-ct").valid()) {
            $.post(url, data, function (response) {
	          console.log(response);
	          if(response){
	          	$('.loading').hide();
	          	$('.btn-send').removeAttr('disabled');
	          	if(response==1){
	          		$('.rs-mail').html('Thank you for your message. It has been sent.');
	          		$('.rs-mail').css('color','green');
	          	} else{
	          		$('.rs-mail').html('There was an error trying to send your message. Please try again later.');
	          		$('.rs-mail').css('color','red');
	          	}
	          }
	        return false;
			});
        }
	});
});