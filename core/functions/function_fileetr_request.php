<?php

function fileetrRequest($name)
{
    return htmlspecialchars(strip_tags($_POST[$name]));
}
?>