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
        success: function (responseData) {
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

        $('#myModal').modal('show');
        $('#userid').val(users.id);
        $('#name').val(users.name);
        $('#email').val(users.email);
        //console.log(users); 
        }

               
        

      $('#submitProfileUser').submit(function (event) {
             event.preventDefault();
             $.ajax({
                type: "post",
                url: BASE_URL+'/Admin/create_user_profile',
                data: $(this).serialize(),
                success: function (responseData) {
                    console.log(responseData);        
                    if (responseData) {
                    $('#alertmsg').show();
                    $('#alertmsg').html('Profile created successfully');
                        setTimeout(function(){
                                window.location.href =BASE_URL+'/users'
                        }, 3000);
                       
                    } else {
                        alert('something went wrong');
                    }
                },
            })

        })
        






