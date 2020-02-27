
<!-- Header -->
<header>
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-md-2 col-6">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.svg" class="img-fluid" alt="Wembley Stadium" /></a>
                </div>
            </div>
            <div class="col-md-10 col-6 right-top-bar-cont">
                <div class="right-top-bar">
                    <div class="dropdown userlogin">
                        <button class="dropdown-toggle" type="button" id="userLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrator</button>
                        <div class="dropdown-menu" aria-labelledby="userLogin">
                            <a class="dropdown-item" href="#">Ut diam pellentesque.</a>
                            <a class="dropdown-item" href="#">Parturient.</a>
                            <a class="dropdown-item" href="#">Scelerisque.</a>
                        </div>
                    </div>
                    <div class="dropdown usericon">
                        <button class="dropdown-toggle" type="button" id="userIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user.svg" width="25" /></button>
                        <div class="dropdown-menu" aria-labelledby="userIcon">
                            <a class="dropdown-item" href="#">Scelerisque.</a>
                            <a class="dropdown-item" href="#">Parturient.</a>
                            <a class="dropdown-item" href="#">Ut diam pellentesque.</a>
                        </div>
                    </div>
                    <div class="dropdown settings">
                        <button class="dropdown-toggle" type="button" id="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/settings.svg" width="25" /></button>
                        <div class="dropdown-menu" aria-labelledby="settings">
                            <ul class="mainmenu">
                                <li class="has-submenu">
                                    <a class="dropdown-item" href="javascript:void(0);">Events</a>
                                    <ul class="submenu">
                                        <li><a class="submenu-item" href="index.php">Event Details</a></li>
                                        <li><a class="submenu-item" href="participating-teams.php">Participating Teams</a></li>
                                        <li><a class="submenu-item" href="event-checklist-main.php">Events Checklist</a></li>
                                        <li><a class="submenu-item" href="team-allocation.php">Team Allocation</a></li>
                                        <li><a class="submenu-item" href="zone-allocation.php">Zone Allocation</a></li>
                                        <li><a class="submenu-item" href="itinerary-plan.php">Itinerary Plan</a></li>
                                        <li><a class="submenu-item" href="steward-requested.php">Steward Requested</a></li>
                                        <li><a class="submenu-item" href="briefing-document.php">Briefing Documents</a></li>
                                        <li><a class="submenu-item" href="event-peaps-rules.php">Events PEAP's Rules</a></li>
                                        <li><a class="submenu-item" href="steward-management.php">Steward Management</a></li>
                                        <li><a class="submenu-item" href="steward-allocation.php">Steward Allocation</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a class="dropdown-item" href="javascript:void(0);">Master</a>
                                    <ul class="submenu">
                                        <li><a class="submenu-item" href="master/departments.php">Departments</a></li>
                                        <li><a class="submenu-item" href="master/event-categories.php">Events Categories</a></li>
                                        <li><a class="submenu-item" href="master/sections.php">Sections</a></li>
                                        <li><a class="submenu-item" href="master/floors.php">Floors</a></li>
                                        <li><a class="submenu-item" href="master/zones.php">Zones</a></li>
                                        <li><a class="submenu-item" href="master/vendors.php">Vendors</a></li>
                                        <li><a class="submenu-item" href="master/stewards.php">Stewards</a></li>
                                        <li><a class="submenu-item" href="master/employee-categories.php">Employee Categories</a></li>
                                        <li><a class="submenu-item" href="master/employees.php">Employees</a></li>
                                        <li><a class="submenu-item" href="master/peaps-template.php">PEAPs Template</a></li>
                                        <li><a class="submenu-item" href="master/checklist.php">Checklist</a></li>
                                        <li><a class="submenu-item" href="master/event-position.php">Event Position</a></li>
                                        <li><a class="submenu-item" href="master/de-briefing-documents.php">Briefing Documents</a></li>
                                        <li><a class="submenu-item" href="master/acess-roles.php">Access Roles</a></li>
                                        <li><a class="submenu-item" href="master/settings.php">Settings</a></li>
                                        <li><a class="submenu-item" href="master/stewards-position.php">stewards Position</a></li>
                                        <li><a class="submenu-item" href="master/stewards-position-1.php">stewards Position 1</a></li>
                                        <li><a class="submenu-item" href="master/certification.php">certification</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col calendar-container">
                <!-- Year Carousel -->
                <div class="row text-center">
                    <div id="year-carousel" class="owl-carousel owl-theme">
                        <div class="item text-center">2018</div>
                        <div class="item text-center">2019</div>
                        <div class="item text-center">2020</div>
                        <div class="item text-center">2021</div>
                        <div class="item text-center">2022</div>
                    </div>
                </div>
                <!-- Year Carousel Ends Here -->
                <!-- Month Carousel -->
                <div class="row text-center">
                    <div id="month-carousel" class="owl-carousel owl-theme">
                        <div class="item">Jan</div>
                        <div class="item">Feb</div>
                        <div class="item selected">Mar</div>
                        <div class="item">Apr</div>
                        <div class="item">May</div>
                        <div class="item">Jun</div>
                        <div class="item">Jul</div>
                        <div class="item">Aug</div>
                        <div class="item">Sep</div>
                        <div class="item">Oct</div>
                        <div class="item">Nov</div>
                        <div class="item">Dec</div>
                    </div>
                </div> 
                <!-- Month Carousel Ends Here -->
                <!-- Days Carousel -->
                <div class="row text-center">
                    <div id="day-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="event-day">01</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">02</div>
                            <div class="event-booked" 
                                data-toggle="tooltip"
                                data-trigger="click"
                                data-placement="bottom"
                                data-html="true"
                                title="<p><span>Scelerisqueacquamadipiscinganteleovestibulumlitora</span><a href='index.php'>View</a></p>
                                        <p><span>hendrerit vel adipiscing</span><a href='javascript:void(0);'>View</a></p>">
                                2
                            </div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">03</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">04</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">05</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">06</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">07</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item selected">
                            <div class="event-day">08</div>
                            <div class="event-booked" 
                                data-toggle="tooltip"
                                data-trigger="click"
                                data-placement="bottom"
                                data-html="true"
                                title="<p><span>Scelerisqueacquamadipiscinganteleovestibulumlitora</span><a href='index.php'>View</a></p>
                                        <p><span>facilisis hendrerit vel adipiscing vel</span><a href='javascript:void(0);'>View</a></p>
                                        <p><span>hendrerit vel adipiscing</span><a href='javascript:void(0);'>View</a></p>">
                                3
                            </div>
                        </div>
                        <div class="item">
                            <div class="event-day">09</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">10</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">11</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">12</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">13</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">14</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">15</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">16</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                       
                        </div>
                        <div class="item">
                            <div class="event-day">17</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">18</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">19</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">20</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">21</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">22</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">23</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day selected">24</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">25</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">26</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">27</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">28</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">29</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                        <div class="item">
                            <div class="event-day">30</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>
                        </div>
                        <div class="item">
                            <div class="event-day">31</div>
                            <div class="event-add"><img src="images/add.svg" width="25" /></div>                        
                        </div>
                    </div>
                </div>
                <!-- Days Carousel Ends Here -->
            </div>
        </div>
        <span class="calendar-collapse"><span class="push-arrow"><img src="images/push-arrow.svg" width="12" /></span> <?php include 'absevent.php';?></span>
    </div>
</header>