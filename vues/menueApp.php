<li class="<?php if ($active == '' || $active == 'dashboard' ) { echo 'active'; }?>">
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'coursApp' ) { echo 'active'; }?>">
                        <a href="?p=coursApp">
                            <i class="fas fa-clipboard-user"></i> <span>cours</span>
                        </a>
                    </li>
                    
                    <li class="<?php if ($active == 'formationApp' ) { echo 'active'; }?>">
                        <a href="?p=formationApp">
                            <i class="fas fa-clipboard-user"></i> <span>formations</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'quizApp' ) { echo 'active'; }?>">
                        <a href="?p=quizApp">
                            <i class="fas fa-clipboard-user"></i> <span>Quiz</span>
                        </a>
                    </li>