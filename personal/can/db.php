<?php
  class db {
    function __construct()
    {
        global $dbh;
        if (!is_null($dbh)) return;
        $dbh = mysql_pconnect('mysql.hostinger.mx', 'u812527798_conte', 'c4nt2n3d4s');
        mysql_select_db('u812527798_conte');
        mysql_query('SET NAMES utf8');
    }

    function select_list($query)
    {
        $q = mysql_query($query);
        if (!$q) return null;
        $ret = array();
        while ($row = mysql_fetch_array($q, MYSQL_ASSOC)) {
            array_push($ret, $row);
        }
        mysql_free_result($q);
        return $ret;
    }
  }
?>
