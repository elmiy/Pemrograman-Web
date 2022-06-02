@include ('navbar')
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/cs.css') !!}">

<html lang="en">
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="cs.css" rel="stylesheet">
    <html>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
      rel="stylesheet">
  </head>
  
  <body>
    <div class="container">
      <div class="d-flex justify-content-between" style="padding:16px 0px;">
        <button type="button" class="btn btn-secondary">Back</button>
        <h3 class=" text-center">Customer Service</h3>
        <button type="button" class="btn btn-info">More Menu</button>
      </div>
      <div class="messaging">
        <div class="inbox_msg">
          <div class="mesgs">
            <div class="msg_history">
              <div class="incoming_msg">
                <div class="incoming_msg_img">
                  <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                </div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p style="font-size: 24px;text-align: center;">Daftar FAQ</p>
                    <p>Apakah pada aplikasi ini bisa menjadwalkan penyewaan working space?</p>
                    <p>Berapa waktu minimal penyewaan working space?</p>
                    <p>Berapa biaya penyewaan working space?</p>
                    <span class="time_date"> 11:01 AM | June 9</span>
                  </div>
                </div>
              </div>
              <div class="outgoing_msg">
                <div class="outgoing_msg_img">
                  <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                </div>
                <div class="sent_msg">
                  <p>Apakah saya bisa membatalkan penyewaan working space?</p>
                  <span class="time_date"> 11:01 AM | Today</span>
                </div>
              </div>
            </div>
            <div class="type_msg">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
  </body>
  
  </html>