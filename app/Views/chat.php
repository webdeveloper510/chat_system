<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->
    <link href="https://onesignal.github.io/emoji-picker/lib/css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="./app/assets/css/argon.css?v=1.2.0" type="text/css">
  </head>
  <style>
      .header-chat {
    background: black;
    color: white;
    padding: 10px;
}
input.form-control {
    height: 25px;
}
.notif {
    max-height: 200px;
    overflow: scroll;
    height: 200px;
}
.chat .fas {
    background: #26fd26;
    padding: 4px;
    border-radius: 3px;
}
.chat .far {
    background: #26fd26;
    padding: 4px;
    border-radius: 3px;
}
.live {
    background: #e1dcdc;
    padding: 0px 3px;
    border-radius: 4px;
    margin-right: 9px;
}
table.table.table-borderless {
    font-size: 12px;
}
td {
    font-size: 11px;
}
button.btn.btn-success.btn-sm {
    padding: 4px;
}
th {
    font-size: 11px;
}
.text-right {
    text-align: right;
}
body {
    background: #e7e4e4;
}
.emoji-wysiwyg-editor {

    height: 100px;
}
img.profile {
    border: 3px solid white;
    border-radius: 50%;
}
.card.p-3 {
    background: #e7e4e4;
}
.emoji-picker-icon {
    z-index: 99999 !important;
    top: unset;
    margin-top: -22%;
}
.chatss {
    position: relative;
}
.card.send {
    background: black;
    color: white;
    font-size: 12px;
    padding: 2px 3px;
    margin-top: 10px;
}
.qur.d-flex h4 {
    font-size: 12px;
    background: #edd9be;
    padding: 4px;
    margin-right: 16px;
    border-radius: 5px;
}
.subss{
    position: absolute;
    right: 12px;
    top: 0;
}
.card.message {
    border: 3px solid #caffca;
}

.card.message .card-head p {
    padding: 0px !important;
    margin: 0px;
}
.about {
    height: 210px;
    overflow: scroll;
    background: white;
    font-size: 13px;
    padding: 7px;
}
.card.message .card-head {
    background: red;
    color: white;
    padding: 0px 8px;
}
.card {
    box-shadow: -1px -1px 20px 6px #0000001a;
}
  </style>
  <body>
    <div class="header-chat">
        <div class="container">
            <div class="row">
              
                <div class="col-sm-1 chat">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <div class="col-sm-1 chat">
                    <i class="fas fa-redo-alt"></i>
                </div>
                <div class="col-sm-1 chat">
                    <i class="fas fa-gift"></i>
                </div>
                <div class="col-sm-1 chat">
                    <i class="fas fa-users"></i>
                </div>
                <div class="col-sm-2 d-flex">
                    <div class="live">
                        <i class="far fa-envelope"></i>
                        Live
                        <i class="far fa-envelope"></i>
                    </div>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="col-sm-2 chat">
                    <i class="far fa-clock"> 74.5</i>
                </div>
                <div class="col-sm-2 chat">
                    <i class="fas fa-comments"> 142</i>
                </div>
                <div class="col-sm-1 chat">
                    <i class="fas fa-comments"> 187</i>
                </div>
                <div class="col-sm-1 chat">
                    <i class="fas fa-mug-hot"></i>
                </div>
            </div>
        </div>
    </div>
    <section class="chat-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-6">
                                <img src="https://images.pexels.com/photos/10103736/pexels-photo-10103736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="100%" class="img-fluid">
                                <a href="#">Show more</a>
                                <p>Info about scripofix</p>
                                <div class="about">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                </div>

                                
                                <table class="table table-borderless">
                                    <tr>
                                        <th>
                                            Contact :
                                        </th>
                                        <td class="text-right">
                                            <small> 2021-11-05</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Match :
                                        </th>
                                        <td class="text-right">
                                            No
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Friend :
                                        </th>
                                        <td class="text-right">
                                            No
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Incoming :
                                        </th>
                                        <td class="text-right">
                                            442
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Outgoing :
                                        </th>
                                        <td class="text-right">
                                            442
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            
                            <div class="col-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>
                                            Username :
                                        </th>
                                        <td class="text-right">
                                            <small> <?php echo($getUserProfileData[0]->username)?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            typ :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->type)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Gender :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->gender)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Age :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->age)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Country :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->country)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Post-Area :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->postarea)?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Coins :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->coins)?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Status :
                                        </th>
                                        <td class="text-right">
                                        <?php echo($getUserProfileData[0]->status)?> 
                                        </td>
                                    </tr>
                                </table>
                                <button class="btn btn-warning" type="button">More Info</button>
                                <div class="forms">
                                    <h4>Profiltext :</h4>
                                    <div class="Profiltext">
                                        <input type="text" class="form-control" value="<?php echo($getUserProfileData[0]->profiletext)?>"/>
                                    </div>
                                </div>

                                <form>

                                
                                 
                                   
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Name : </label>
                                      <input type="text" class="form-control" value="<?php echo($getUserProfileData[0]->name)?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Place of Residence :</label>
                                        <input type="text" class="form-control" value="<?php echo($getUserProfileData[0]->residence)?>">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Profession :</label>
                                        <input type="text" class="form-control" value="<?php echo($getUserProfileData[0]->profession)?>">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Family :</label>
                                        <input type="text" class="form-control" value="<?php echo($getUserProfileData[0]->family)?>">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Hobbies :</label>
                                        <input type="text" class="form-control" value="<?php echo($getUserProfileData[0]->hobbies)?>">
                                      </div>
                                   
                                   
                                  </form>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="chatss">
                       <div class="card send">
                           <div class="row">
                               <div class="col-8">
                                   <p><b>Send a message (Elapsed time: 00:00:02 )</b></p>
                               </div>
                               <div class="col-4">
                                   <div class="qur d-flex">
                                       <h4>Queue: 7</h4>
                                       <i class="far fa-question-circle"></i>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="notif">
                           <table class="table">
                              <tr>
                                  <th>
                                      2021-02-01 08:30:37
                                  </th>
                                  <td>
                                      <p>Once you click on LAUNCH CHAT</p>
                                  </td>
                                  <td>
                                    <i class="far fa-trash-alt"></i>
                                  </td>
                              </tr>
                              <tr>
                                <th>
                                    2021-02-01 08:30:37
                                </th>
                                <td>
                                    <p>Once you click on LAUNCH CHAT</p>
                                </td>
                                <td>
                                  <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    2021-02-01 08:30:37
                                </th>
                                <td>
                                    <p>Once you click on LAUNCH CHAT</p>
                                </td>
                                <td>
                                  <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                              <tr>
                                <th>
                                    2021-02-01 08:30:37
                                </th>
                                <td>
                                    <p>Once you click on LAUNCH CHAT</p>
                                </td>
                                <td>
                                  <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    2021-02-01 08:30:37
                                </th>
                                <td>
                                    <p>Once you click on LAUNCH CHAT</p>
                                </td>
                                <td>
                                  <i class="far fa-trash-alt"></i>
                                </td>
                            </tr>
                           </table>
                       </div>
                       <div class="row">
                           <div class="col-6 text-left">
                               <a href="#" style="text-decoration: none;">Add Story +</a>
                           </div>
                           <div class="col-6 text-right">
                            <a href="#" style="text-decoration: none;"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add Note +</a>
                        </div>
                       </div>
                       <textarea class="form-control "row="4" data-emojiable="true" data-emoji-input="unicode"></textarea>
                       <small>Please enter at least 30 chars, (0 chars entered) </small>
                     
                     
                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add Note +</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <textarea class="form-control" aria-label="With textarea" placeholder="Note between ruedi and Melli1996"></textarea>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Set the Note to important</label>
                                  </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Add Note</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                       
                       <div class="row mt-4">
                           <div class="col-md-6">
                               <button class="btn btn-success btn-sm" type="button">Send Message</button>
                               <button class="btn btn-success btn-sm" type="button">Send Image</button>
                           </div>
                           <div class="col-md-6">
                            <button class="btn btn-danger btn-sm" type="button">Media Center</button>
                            <button class="btn btn-danger btn-sm" type="button">Panicroom </button>
                        </div>
                       </div>
                       <div class="row my-3">
                           <div class="col-2">
                               <img src="https://images.pexels.com/photos/7163731/pexels-photo-7163731.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="50px" height="50px" class="profile">
                           </div>
                           <div class="col-10">
                               <div class="card message">
                                   <div class="card-head">
                                       <p>Customer: scripofix</p>
                                       <div class="subss">
                                           <small>2021-02-01 16:40:20</small>
                                       </div>
                                   </div>
                                   <div class="card-body">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                       
                        <div class="col-10">
                            <div class="card message">
                                <div class="card-head">
                                    <p>Customer: scripofix</p>
                                    <div class="subss">
                                        <small>2021-02-01 16:40:20</small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="https://images.pexels.com/photos/7163731/pexels-photo-7163731.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="50px" height="50px" class="profile">
                        </div>
                    </div>
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="row">
                            
                            <div class="col-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>
                                            Username :
                                        </th>
                                        <td class="text-right">
                                            <small> scripofix</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            typ :
                                        </th>
                                        <td class="text-right">
                                            Customer
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Gender :
                                        </th>
                                        <td class="text-right">
                                            M
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Age :
                                        </th>
                                        <td class="text-right">
                                            1998-11-07
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Country :
                                        </th>
                                        <td class="text-right">
                                            Deutschland
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Post-Area :
                                        </th>
                                        <td class="text-right">
                                            Schleswig-Holstein
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Coins :
                                        </th>
                                        <td class="text-right">
                                            45
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Status :
                                        </th>
                                        <td class="text-right">
                                            online
                                        </td>
                                    </tr>
                                </table>
                                <button class="btn btn-warning" type="button">More Info</button>

                                <div class="forms">
                                    <h4>Profiltext :</h4>
                                    <div class="Profiltext">
                                        <input type="text" class="form-control"/>
                                    </div>
                                </div>
                                <form>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Name :</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Place of Residence :</label>
                                        <input type="text" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Profession :</label>
                                        <input type="text" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Family :</label>
                                        <input type="text" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Hobbies :</label>
                                        <input type="text" class="form-control">
                                      </div>
                                   
                                   
                                  </form>
                            </div>
                            <div class="col-6">
                                <img src="https://images.pexels.com/photos/10103736/pexels-photo-10103736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="100%" class="img-fluid">
                                <a href="#">Show more</a>
                                <p>Info about scripofix</p>
                                <div class="about">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                </div>
                                <table class="table table-borderless">
                                    <tr>
                                        <th>
                                            Contact :
                                        </th>
                                        <td class="text-right">
                                            <small> 2021-11-05</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Match :
                                        </th>
                                        <td class="text-right">
                                            No
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Friend :
                                        </th>
                                        <td class="text-right">
                                            No
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Incoming :
                                        </th>
                                        <td class="text-right">
                                            442
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Outgoing :
                                        </th>
                                        <td class="text-right">
                                            442
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                   
    <!-- Begin emoji-picker JavaScript -->
    <script src="https://onesignal.github.io/emoji-picker/lib/js/config.js"></script>
    <script src="https://onesignal.github.io/emoji-picker/lib/js/util.js"></script>
    <script src="https://onesignal.github.io/emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="https://onesignal.github.io/emoji-picker/lib/js/emoji-picker.js"></script>
    <!-- End emoji-picker JavaScript -->

    <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'https://onesignal.github.io/emoji-picker/lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
          // iconSize: 30
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./app/assets/js/argon.js?v=1.2.0"></script>
   
  </body>
</html>