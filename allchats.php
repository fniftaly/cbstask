<?php

$con = mysql_connect('localhost:8889','root','root');

mysql_select_db('appdb',$con);

$res = mysql_query("Select * from chatbox order by id desc");

while ($fetch = mysql_fetch_array($res)){
    
    echo "<span style='color:blue'>".$fetch['name']."</span>".": "."<span style='color:green'>"
            .$fetch['msg']."</span>"."</br>";
    
}

