<?php
session_unset();
session_regenerate_id(true);
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
header('Location: http://underworld.clanweb.eu/hra_vyvoj_faramos/');
?>