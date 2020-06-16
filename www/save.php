<?php   

    if (!empty($_FILES['fileimagem']))
    {
        echo move_uploaded_file($_FILES['fileimagem']['tmp_name'], 'img/'.$_FILES['fileimagem']['name']);       
    }
    else
    {
        echo 'false';
    }