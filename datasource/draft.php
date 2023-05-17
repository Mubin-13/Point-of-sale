<?php require_once("../config.php");
$fileData = file_get_contents($json . "adminNavData.json");
$data = json_decode($fileData, "true"); ?> <div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion"> <!-- Main -->
        <li class="nav-item-header">
            <div class="text-uppercase font-size-xs line-height-xs text-center">JSON</div> <i class="icon-menu" title="Main"></i>
        </li>
        <li class="nav-item"> 
            <a href="back-index.php" class="nav-link"> 
                <i class="icon-home4"></i> 
                <span> Dashboard </span> 
            </a> 
        </li> 
        <?php 
        foreach ($data as $nav) { 
            ?> 
            <li class="nav-item nav-item-submenu ">
                 <a href="" class="nav-link"> 
                    <i class="<?= $nav['icon'] ?>"></i> 
                    <span> <?= $nav['title'] ?> </span> 
                </a>
                <ul class="nav nav-group-sub" data-submenu-title="doctor category"> 
                    <?php foreach ($nav['sub']['title'] as $subName => $subLink) { 
                        ?> 
                        <li class="nav-item">
                            <a href="<?= $subLink ?>" class="nav-link"><?= $subName ?></a>
                        </li> 
                        <?php 
                    } ?> 
                    </ul>
            </li> 
            <?php } 
            ?>