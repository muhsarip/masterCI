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
                        echo var_dump($co);
                        foreach($co as $v)
                        {
                            #$this->timeago->inWords($v->tanggal_comment);
                            echo "
                            <li class='username'>
                                <h1>".$v->nama_user."</h1>
                                <p>".$v->isi_comment."</p>
                                <p class='moment'>".$tanggal_comment."</p>
                            </li>
                            ";
                        }

                        ?>
                            <li class="username">
                                <h1>Gilang22 :</h1>
                                <p>Waah.. Lagu paporit saya ini mah !</p>
                                <p class="moment">5 minutes ago</p>
                            </li>
                            <li class="username2">
                                <h1>Indri :</h1>
                                <p>Bisa request lewat chat ini gak sih? :( kalo bisa, aku mau coba reques dong! lagunya Rossa yang ayat-ayat cinta. buat miminnyah, maacih ya udah mau puterin lagunya :*</p>
                                <p class="moment">4 minutes ago</p>
                            </li>
                            <li class="username">
                                <h1>Gilang22 :</h1>
                                <p>Kayaknya bisa deh. @indri</p>
                                <p class="moment">3 minutes ago</p>
                            </li>
                            <li><p class="user-join">user xxx Join room !!</p></li>
                            <li class="username2">
                                <h1>Indri :</h1>
                                <p>ohh gitu. Makasih ya @gilang22. :)</p>
                                <p class="moment">2 minutes ago</p>
                            </li>
                            <li class="username">
                                <h1>Gilang22 : </h1>
                                <p>Sama2 Indri......</p>
                                <p class="moment">1 minutes ago</p>
                            </li>
                            <li><p class="user-left">user xxx Left room !!</b></li>
                            <li class="username3">
                                <h1>Me : </h1>
                                <p >Min, mau request lagunya Oasis dong yang mana aja</p>
                                <p class="moment">1 minutes ago</p>
                            </li>
                        </ul>

                        <div class="panel-chat">
                            <form class="form-horizontal">
                              <div class="col-lg-12">
                                <div class="input-group">
                                	<span class="input-group-btn">
                                    <button class="btn btn-send" type="button"><i class="fa fa-smile-o"></i></button>
                                  </span>
                                  <input type="text" class="form-control" placeholder="Please type your message here...">
                                  <span class="input-group-btn">
                                    <button class="btn btn-send" type="button"><i class="fa fa-paper-plane"></i></button>
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