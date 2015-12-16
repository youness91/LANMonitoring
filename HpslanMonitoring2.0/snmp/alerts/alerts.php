


<!----------------------------------- ALerts   ---------------------------------->
                            <li id="alerts" role="presentation" class="dropdown" height="20px">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
								<span ></span>
                                <i ><img src="images/alertb.png"  height="40px"/></i>
                                </a>
								<strong>ALERTS : (1)</strong>
                               <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <br />
                                    <li>
                                        <a>
                                        
                                            <span>
                                        <span>Switch1</span>
                                            <span class="time"><?php  date_default_timezone_set('UTC');
                                             $heure = date("H:i");
                                             Print(" $heure");?>
											 </span>
                                            </span>
                                            <span class="message">
											<div id="notif"></div>
                                       
                                    </span>
                                        </a>
                                    </li>
                                   
                                    <li>
                                        <div class="text-center">
                                            <a href="allalerts.php">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
							
							
							
							
<!----------------------------------- ALerts  FIN ---------------------------------->

