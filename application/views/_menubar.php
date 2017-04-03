<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class="nav">
    {menudata}
    <li><a href="{link}">{name}</a></li>
    {/menudata}
	
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{user}
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="/roles/actor/guest">Guest</a></li>
        <li><a href="/roles/actor/worker">Worker</a></li>
        <li><a href="/roles/actor/supervisor">Supervisor</a></li> 
        <li><a href="/roles/actor/boss">Boss</a></li> 
    </ul>
    </li>
</ul>
