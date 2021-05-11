<?php
    function generateProjectCard($projectName, $projectDescription, $projectLanguage)
    {
        $projectLink = preg_replace("/[^a-zA-Z]/", "", strtolower(preg_replace("/\|.*/", "", $projectName)));
        $projectName = preg_replace("/\|/", "", $projectName);
        echo
            '<a href="projects/'.$projectLink.'.php" class="project-card">
                <img src="i/projects/'.$projectLink.'-banner.png" alt="'.$projectName.' screenshot">
                <h2>'.$projectName.'</h2>
                <p>'.$projectDescription.'</p>
                <img src="i/icons/'.$projectLanguage.'.svg" alt="'.$projectLanguage.' Logo" class="project-card-lang">
            </a>';
    }
?>