<!-- Sidebar/drop-down menu -->
<section id="menu" role="complementary">

    <!-- This wrapper is used by several responsive layouts -->
    <div id="menu-content">

        <header>
            <?php echo $this->session->userdata['logged_in']['account_type']; ?>
        </header>

        <div id="profile">
            <img src="<?php echo base_url(); ?>assets/img/user.png" width="64" height="64" alt="User name" class="user-icon">
            Bienvenue
            <span class="name"><b><?php echo $username; ?></b></span>
        </div>

        <!-- By default, this section is made for 4 icons, see the doc to learn how to change this, in "basic markup explained" -->
        <ul id="access" class="children-tooltip">
            <li><a href="<?php echo base_url('dashboard'); ?>" title="Accueil"><span class="icon-book"></span></a></li>
            <li><a href="<?php echo base_url('load_review_card/'.$nif); ?>" title="Profil"><span class="icon-user"></span></a></li>
            <li><a href="<?php echo base_url('message'); ?>" title="Messages"><span class="icon-inbox"></span><span class="count">3</span></a></li>
            <li><a href="<?php echo base_url('logmeout'); ?>" title="Logout"><span class="icon-logout"></span></a></li>
        </ul>

        <section class="navigable">
            <ul class="big-menu">

                <li class="with-right-arrow">
                    <a id="navdashboard" href="<?php echo base_url('dashboard'); ?>" title="Accueil">Accueil</a>

                </li>


                <li class="with-right-arrow">
                    <span><span class="list-count">2</span>Mon Profil</span>
                    <ul class="big-menu">
                        <li><a id="myprofile" href="<?php echo base_url('load_review_card/'.$nif); ?>">Vérifier Mon Profil</a></li>
                        <li><a id="edit_profile" href="<?php echo base_url('load_edit_card/'.$nif); ?>">Éditer Mon Profil</a></li>
                    </ul>
                </li>

                <li class="with-right-arrow">
                    <a id="navmessage" href="<?php echo base_url('message'); ?>" title="Mes Messages">Messages</a>

                </li>

                <li class="with-right-arrow">
                    <span><span class="list-count">3</span>Mes Déclarations</span>
                    <ul class="big-menu">
                        <li><a href="#">TVA</a></li>
                        <li><a href="#">TPS</a></li>
                        <li class="with-right-arrow">
                            <span><span class="list-count">5</span>Impôt sur le revenu</span>
                            <ul class="big-menu">
                                <li><a href="#">2016</a></li>
                                <li><a href="#">2015</a></li>
                                <li><a href="#">2014</a></li>
                                <li><a href="#">2013</a></li>
                                <li><a href="#">2012</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <?php if($this->session->userdata['logged_in']['account_type'] == 'Admin'){ ?>
                    <li class="with-right-arrow">
                        <span><span class="list-count">11</span>Tables Personnes</span>
                        <ul class="big-menu">
                            <li><a id="physiques" href="<?php echo base_url('cardtable'); ?>">Personnes Physiques</a></li>
                            <li><a id="morales" href="#">Personnes Morales</a></li>

                        </ul>
                    </li>
                <?php }?>

            </ul>
        </section>


        <ul class="unstyled-list">
            <li class="title-menu">Dates importantes</li>
            <li>
                <ul class="calendar-menu">
                    <li>
                        <a href="#" title="See event">
                            <time datetime="2011-02-24"><b>24</b> Feb</time>
                            <small class="green">10:30</small>
                            Event's description
                        </a>
                    </li>
                </ul>
            </li>


            <!-- messages -->
            <li class="title-menu">Nouveaux messages</li>
            <li>
                <ul class="message-menu">
                    <li>
							<span class="message-status">
								<a href="#" class="starred" title="Starred">Starred</a>
								<a href="#" class="new-message" title="Mark as read">New</a>
							</span>
							<span class="message-info">
								<span class="blue">17:12</span>
								<a href="#" class="attach" title="Download attachment">Attachment</a>
							</span>
                        <a href="#" title="Read message">
                            <strong class="blue">John Doe</strong><br>
                            <strong>Mail subject</strong>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Read message">
								<span class="message-status">
									<span class="unstarred">Not starred</span>
									<span class="new-message">New</span>
								</span>
								<span class="message-info">
									<span class="blue">15:47</span>
								</span>
                            <strong class="blue">May Starck</strong><br>
                            <strong>Mail subject a bit longer</strong>
                        </a>
                    </li>
                    <li>
							<span class="message-status">
								<span class="unstarred">Not starred</span>
							</span>
							<span class="message-info">
								<span class="blue">15:12</span>
							</span>
                        <strong class="blue">May Starck</strong><br>
                        Read message
                    </li>
                </ul>
            </li>
        </ul>

    </div>
    <!-- End content wrapper -->


</section>
<!-- End sidebar/drop-down menu -->










