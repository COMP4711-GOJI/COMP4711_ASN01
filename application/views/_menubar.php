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
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Guest</a></li>
      <li><a href="#">Worker</a></li>
      <li><a href="#">Supervisor</a></li> 
      <li><a href="#">Boss</a></li> 
    </ul>
  </li>

</ul>
