<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>All Users</title>
  </head>
  <style>
       .float-right {
    float: right;
}
.users {
    background: #dddddd;
    box-shadow: 2px 3px 12px 0px #b3a8a8;
    border-radius: 2px;
}
      </style>
  <body style="background: #e7e4e4;">



    <div class="container mt-5 ">
        <div class="row">
        <div class="col">
        </div>
        <div class="col-md-6">
            <div class="users p-3">
                <div class="text-center my-3">
                   <h1>All Users</h1>
                  </div>
        <?php
        $i=0; 

        foreach($allusers as $key=>$users)
        {
            ?>
                <div class="list-group">
                <div class="list-group">                
                        
 <button id="All_Users" type="button" class="list-group-item list-group-item-action userprofile" onclick="getSingleUser(<?php echo htmlspecialchars(json_encode($users)) ?>);"><?php echo $users->name ?><span class="float-right"><a href="<?=base_url('/chat/'.$users->id)?>">Check your profile</a></span></button>
 <div>
 
        </div>
                </div>
            </div>
        <?php 
        $i++;
    } ?>
        </div>
        <!-- Button trigger modal -->
        
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                       
            <form id= "submitProfileUser" method="post"  autocomplete="off"> 
                        
                    <div>                    
                    <input type="hidden" id="userid" name=id>                  
                   </div>

                 <div class="alert alert-success" style="display:none" id="alertmsg" role="alert">  
                 </div>
                    
                  <div class="form-group mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" id="name" placeholder="Username" name="username" type="text" >
                  
                </div>
                
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" id="email" placeholder="Email"  name="email"   type="email" disabled=disable>
                 
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Type</label>
                    <input class="form-control"  placeholder="type" name="type"  type="text" >
                  
                </div>
                

                

                <div class="form-group mb-3">
                <label class="form-label">Gender</label>
                 
                  <br>
                    <input class="form-check-input"  type="radio" name="gender" value="male" >Male
                    <input class="form-check-input"   type="radio"name="gender" value="female" >Female

                  </div>

  
                  <div class="form-group mb-3">
                  <label class="form-label">Age</label>
                  
                    <input class="form-control" placeholder="age" name="age" type="number">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Country</label>
                  
                    <input class="form-control"  placeholder="country" name="country" type="text">
                  
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Postarea</label>
                    <input class="form-control"  placeholder="postarea" name="postarea" type="text">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">City</label>
                 
                    <input class="form-control"  placeholder="city" name="city" type="text">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Coins</label>
                 
                 
                    <input class="form-control"  placeholder="coins" name="coins" type="number">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Status</label>
                 
                    <input class="form-control"  placeholder="status" name="status" type="text">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Profiletext</label>
                  
                    <input class="form-control" placeholder="profiletext" name="profiletext" type="text">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Name</label>
                 
                    <input class="form-control"  placeholder="name" name="name" type="text">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Residence</label>
                 
                    <input class="form-control"  placeholder="residence" name="residence" type="text">
                  
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Profession</label>
                  
                    <input class="form-control" placeholder="profession" name="profession" type="text">
                  
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Family</label>
                  
                    <input class="form-control" placeholder="family" name="family" type="text">
                 
                </div>

                <div class="form-group mb-3">
                <label class="form-label">Hobbies</label>
                    <input class="form-control"  placeholder="hobbies" name="hobbies" type="text">
                 
                </div>


                <div class="form-group mb-3">
                <label class="form-label">Roles</label>
                 
                    <select class="form-select form-control" id="select" name="role" aria-label="Default select example" required>
                    <option selected >Choose Role</option>
                      <option value="1">Admin</option>
                      <option value="2">Operator</option>
                      <option value="3">Customer</option>
                    </select>
                   
                </div>
                <div class="text-center">
                  <button type="submit" id="reg_btn" class="btn btn-primary mt-4 ">Create account</button>
                </div>
        </form>
                    </div>
                    </div>
                </div>
</div>
                </div>
        <div class="col">
        </div>
    </div>
</div>









    <script src="./app/assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>
