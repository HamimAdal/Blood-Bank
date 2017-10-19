<?php
if(!mysql_connect("fdb14.freehostingeu.com","2110310_mist","mistcse1234"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("2110310_mist"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>