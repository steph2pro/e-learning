<li class="<?php if ($active == '' || $active == 'dashboard' ) { echo 'active'; }?>">
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'cours' ) { echo 'active'; }?>">
                        <a href="?p=cours">
                            <i class="fas fa-clipboard-user"></i> <span>cours</span>
                        </a>
                    </li>
                    
                    <li class="<?php if ($active == 'formation' ) { echo 'active'; }?>">
                        <a href="?p=formation">
                            <i class="fas fa-clipboard-user"></i> <span>formation</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'questionnaire' ) { echo 'active'; }?>">
                        <a href="?p=questionnaire">
                            <i class="fas fa-clipboard-user"></i> <span>questionnaire</span>
                        </a>
                    </li>