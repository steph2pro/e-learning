<li class="<?php if ($active == '' || $active == 'dashboard' ) { echo 'active'; }?>">
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'enseignant' ) { echo 'active'; }?>">
                        <a href="?p=enseignant">
                            <i class="fas fa-clipboard-user"></i> <span>enseignant</span>
                        </a>
                    </li>
                    
                    <li class="<?php if ($active == 'apprennant' ) { echo 'active'; }?>">
                        <a href="?p=apprennant">
                            <i class="fas fa-clipboard-user"></i> <span>apprennant</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'admin' ) { echo 'active'; }?>">
                        <a href="?p=admin">
                            <i class="fas fa-clipboard-user"></i> <span>administrateur</span>
                        </a>
                    </li>