var BASE_URL = "http://localhost:8080/chat_system";



$(".register_user").submit(function (event) {

    event.preventDefault();
    $.ajax({
        type: "post",
        url: BASE_URL+'/Admin/create_user',
        data: $(this).serialize(),
        success: function (responseData,) {
            $('#msg').show();
            $('#msg').html('User Registered successfully');
            if (responseData == 1) {
            setTimeout(function(){
                    window.location.href = BASE_URL+'/Login';
            }, 3000);
               
            } else {
                alert('something went wrong');
            }
        },
    })
});


$('.user_login').submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "post",
        url: BASE_URL+'/Admin/login_user',
        data: $(this).serialize(),
        success: function (responseData,) {

            if (responseData) {
            $('#msg').show();
            $('#msg').html('Login successfull');
                setTimeout(function(){
                        window.location.href =BASE_URL+'/operator'
                }, 3000);
               
            } else {
                alert('something went wrong');
            }
        },
    })
})



function getSingleUser(users){
   
console.log(users); 
}


