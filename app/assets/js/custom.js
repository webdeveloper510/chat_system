var BASE_URL = "http://localhost:8080/chat_system";


$(".register_user").submit(function (event) {

    event.preventDefault();
    $.ajax({
        type: "post",
        url: BASE_URL+'/Admin/create_user',
        data: $(this).serialize(),
        success: function (responseData,) {
            //console.log(responseData); return false;
            if(responseData == 'data'){
                $('#msg').show();
                $('#msg').html('User already exist');
            }                                

           else if (responseData == 1) {
            $('#msg').show();
            $('#msg').html('User Registered successfully'); 
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





   function getSingleUser(users,profile){
        $('#myModal').modal('show');
        $('#userid').val(users.id);
        $('#name').val(users.name);
        $('#email').val(users.email);
        $('#type').val(profile.type);

        $("input[name=gender][value=" + profile.gender + "]").prop('checked', true);

        $('#age').val(profile.age);
        $('#country').val(profile.country);
        $('#postarea').val(profile.postarea);
        $('#city').val(profile.city);
        $('#coins').val(profile.coins);
        $('#status').val(profile.status);
        $('#profiletext').val(profile.profiletext);
        $('#username').val(profile.username);
        $('#residence').val(profile.residence);
        $('#profession').val(profile.profession);
        $('#family').val(profile.family);
        $('#hobbies').val(profile.hobbies);

        $("#selectbox option[value='profile.role']").prop('selected', true); 

        console.log(profile); 
        
        }

               
        

      $('#submitProfileUser').submit(function (event) {
             event.preventDefault();
             $.ajax({
                type: "post",
                url: BASE_URL+'/Admin/create_user_profile',
                data: $(this).serialize(),
                success: function (responseData) {
                    console.log(responseData);    
                    if (responseData==1) {
                    $('#alertmsg').show();
                    $('#alertmsg').html('Profile created successfully');
                        setTimeout(function(){
                                window.location.href =BASE_URL+'/users'
                        }, 5000);
                       
                    } 
                    else if(responseData=='update'){                           
                        $('#alertmsg').show();
                        $('#alertmsg').html('Profile updated successfully');
                            setTimeout(function(){
                                    window.location.href =BASE_URL+'/users'
                            }, 5000);

                    }
                    
                    else {
                        alert('something went wrong');
                    }
                }
            })

        })
        






