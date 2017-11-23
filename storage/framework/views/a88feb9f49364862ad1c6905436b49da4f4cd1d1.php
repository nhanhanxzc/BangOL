<?php $__env->startSection('title','Home Page'); ?>
<?php $__env->startSection('contents'); ?> 
        <header class="header">
            <div class="header_top">
                <div class="SideMenu">
                    <a class="toggleSideMenu" href="#"><img src="/images/nav.png" alt="" /></a>
                    <ul class="SideNav">
                        <li><a href="#"><i><img src="/images/user.png" alt="" /></i><span>Profile</span></a></li>
                        <li><a href="#"><i><img src="/images/lock.png" alt="" /></i><span>Log Out</span></a></li>
                        <li><a href="#"><i><img src="/images/user.png" alt="" /></i><span>Profile</span></a></li>
                        <li><a href="#"><i><img src="/images/lock.png" alt="" /></i><span>Log Out</span></a></li>
                        <li><a href="#"><i><img src="/images/user.png" alt="" /></i><span>Profile</span></a></li>
                        <li><a href="#"><i><img src="/images/lock.png" alt="" /></i><span>Log Out</span></a></li>
                        <li><a href="#"><i><img src="/images/user.png" alt="" /></i><span>Profile</span></a></li>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="logo">
                    <h3>BangOL</h3>
                </div>
                <div class="menu">
                    <a class="toggleMenu" href="#"><img src="/images/settings.png" alt="" /></a>
                    <ul class="nav">
                        <li><a href="#"><i><img src="/images/user.png" alt="" /></i>Profile</a></li>
                        <li><a href="#"><i><img src="/images/lock.png" alt="" /></i>Log Out</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>  
                <div class="profile_details">
                    <div id="loginContainer">
                        <a id="loginButton" class=""><span>Username</span> <img class="profile_img" src="/images/profile_img40x40.jpg" alt="" /></a>   
                        <div id="loginBox">                
                            <form id="loginForm">
                                <fieldset id="body">
                                    <div class="user-info">
                                        <h4>Hello, <a href="#">Username</a></h4>
                                        <ul>
                                            <li class="profile active"><a href="#">Profile</a></li>
                                            <li class="logout"><a href="#">Log Out</a></li>
                                            <div class="clear"></div>       
                                        </ul>
                                    </div>                                      
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>          
                </div>  
                <div class="clear"></div>          
            </div>
        </header>
        <script type="text/javascript" src="/js/responsive-nav.js"></script>
        <div class="content">
            <nav class="menu_box column_left">
                <h3>Menu Box</h3>
                <div class="menu_box_list">
                    <ul>
                        <li><a href="#" class="messages"><span>Messages</span><label class="digits">24</label><div class="clear"></div></a></li>
                        <li class="active"><a href="#" class="invites"><span>Invites</span><label class="digits active">3</label><div class="clear"></div></a></li>
                        <li><a href="#" class="events"><span>Events</span><label class="digits">5</label><div class="clear"></div></a></li>
                        <li><a href="#" class="account_settings"><span>Account Settings</span></a></li>
                        <li><a href="#" class="statistics"><span>Statistics</span></a></li>                         
                    </ul>
                </div>
            </nav>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>