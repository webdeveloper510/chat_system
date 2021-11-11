$(".register_user").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "post",
        url: "http://localhost:8080/chat_system/Admin/create_user",
        data: $(this).serialize(),
        success: function (responseData,) {
            console.log(responseData); 
            if (responseData == 1) {
                console.log(responseData); 
            setTimeout(function(){
                    window.location.href = "http://localhost:8080/chat_system/Login"
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
        url: "http://localhost:8080/chat_system/Admin/login_user",
        data: $(this).serialize(),
        success: function (responseData,) {
            console.log(responseData);
            if (responseData == 1) {
                console.log(responseData); 
            setTimeout(function(){
                    window.location.href = "http://localhost:8080/chat_system/operator"
            }, 3000);
               
            } else {
                alert('something went wrong');
            }
        },
    })
})



