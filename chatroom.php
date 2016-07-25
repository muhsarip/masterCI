  	<div class="container">

    	<div class="row" style="margin-left:-15px;margin-right:-15px;" align="center">
        	<div class="col-lg-12 col-xs-12 col-md-6 col-sm-6 stream-video" style="padding:0;">
            	<div class="wrapper">

					<div class="videocontent">
						<video id="example_video_1" class="video-js vjs-default-skin"
							controls preload="auto" width="100%" height="100%" poster="images/bg_video1.png"
							data-setup='{"example_option":true}'>
								<source src="http://cdn.n3radio.com/images/kartu_KMP.mp4" type='video/mp4' />
						</video>
					</div>

                </div>
                
                <span class="separator-landscape">
                    <img class="img-responsive" src="http://cdn.n3radio.com/images/separator_landscape.png">
                </span>
                <span class="separator-potrait pull-right">
                    <img class="img-responsive" src="http://cdn.n3radio.com/images/separator_potrait.png">
                </span>
            </div>
            <div class="col-lg-12 col-xs-12 col-md-6 col-sm-6" style="padding:0;">
            	<div class="blue">  
                    <div class="window-chat">
                        <ul id="style-3" class="chat-view">
                        <?php
                       
                        $i=1;
                        foreach($co as $v)
                        {
                            #$this->timeago->inWords($v->tanggal_comment);
                            echo "
                            <li class='username'>
                                <h1>".$v->nama_user."</h1>
                                <p>".$v->isi_comment."</p>
                                <p class='moment'>".$v->tanggal_comment."</p>
                            </li>
                            ";
                            $i++;
                        }

                        ?>
     
                        </ul>

                        <div class="panel-chat">
                            <form class="form-horizontal">
                              <div class="col-lg-12">
                                <div class="input-group">
                                	<span class="input-group-btn">
                                    <button class="btn btn-send" type="button"><i class="fa fa-smile-o"></i></button>
                                  </span>
                                  <input type="hidden" id="nama_user" value="sarif">
                                  <input type="hidden" id="id_user" value="1">
                                  <input type="hidden" id="tanggal_comment" value="2015-09-12 12:30:30">
                                  <input type="text" id="isi_comment" class="form-control" placeholder="Please type your message here...">
                                  <span class="input-group-btn">
                                    <button id="submit" class="btn btn-send" type="button"><i class="fa fa-paper-plane"></i></button>
                                  </span>
                                </div><!-- /input-group -->
                              </div>
                            </form>
                        </div>

                    </div>
                    
                  </div>
            </div>
        </div>
    </div>  
    <script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
    <script>
$(document).ready(function(){

    $("#load").hide();

    $("#submit").click(function(){
      
      $( "#load" ).show();

       var dataString = { 
              id_user : $("#id_user").val(),
              nama_user : $("#nama_user").val(),
              tanggal_comment : $("#tanggal_comment").val(),
              isi_comment : $("#isi_comment").val()
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('home/submit');?>",
            data: dataString,
            dataType: "json",
            cache : false,
            success: function(data){

              $( "#load" ).hide();
              $("#name").val('');
              $("#email").val('');
              $("#subject").val('');
              $("#message").val('');

              if(data.success == true){

                $("#notif").html(data.notif);

                var socket = io.connect( 'http://'+window.location.hostname+':3000' );

                socket.emit('new_count_message', { 
                  new_count_message: data.new_count_message
                });

                socket.emit('new_message', { 
                  id_user: data.id_user,
                  nama_user: data.nama_user,
                  tanggal_comment: data.tanggal_comment,
                  isi_comment: data.isi_comment
                });

              } else if(data.success == false){

                 $("#isi_comment").val(data.name);

              }
          
            } ,error: function(xhr, status, error) {
              alert(error);
            },

        });

    });
socket.on('new_message', function(data){
    $( "#style-3" ).prepend('<li class="username"><h1>'+data.nama_user+' :</h1><p> '+data.isi_comment+'</p><p class="moment">'+data.tanggal_comment+'</p></li>');
  });
  });
    
    </script>