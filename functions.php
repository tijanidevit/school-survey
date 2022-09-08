<?php

function format_date($date){
    echo date('F d, Y h:mA', strtotime($date));
}
function getAdminMessage($result)
{
    $msg = "";
    if ($result >= 100  && $result <= 140) {
        $msg = "<span class='text-success text-center mt-4'>Flying high. Expect great results</span>";
    } elseif ($result >= 70  && $result <= 99) {
        $msg = "<span class='text-success'>Trying, a little bit of efforts and would be flying high</span>";
    } elseif ($result >= 50  && $result <= 69) {
        $msg = "<span class='text-info'>On an average performance
        </span>";
    } elseif ($result >= 30  && $result <= 49) {
        $msg = "<span class='text-warning'>Oh! A little bit poor.</span>";
    } elseif ($result >= 0  && $result <= 29) {
        $msg = "<span class='text-danger'>High chances of failure</span>";
    }

    echo $msg;
}


function getMessage($result)
{
    $msg = "";
    if ($result >= 100  && $result <= 140) {
        $msg = "<span class='text-success text-center mt-4'>You're flying high. You are made for the stars, expect great results</span>";
    } elseif ($result >= 70  && $result <= 99) {
        $msg = "<span class='text-success'>You're trying, a little bit of efforts and you'd be flying high</span>";
    } elseif ($result >= 50  && $result <= 69) {
        $msg = "<span class='text-info'>You're on a average performance, please buckle up and join the students at the top
        </span>";
    } elseif ($result >= 30  && $result <= 49) {
        $msg = "<span class='text-warning'>Oh! A little bit poor. You can perform better. Please, put in more efforts</span>";
    } elseif ($result >= 0  && $result <= 29) {
        $msg = "<span class='text-danger'>We are sorry to say this, your performance level is very low. You need to work very hard to avoid failure</span>";
    }

    echo $msg;
}


?>