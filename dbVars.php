<?php

    if ($_SERVER['HTTP_HOST'] !== 'localhost') {
        $config = [
          'db_host' => '127.0.0.1',
          'db_name' => 'c3583world',
          'db_usern' => 'c3583imcrazydia',
          'db_passw' => 'diaquino2001',
        ];
      } else {
        $config = [
            'db_host' => 'localhost',
            'db_name' => 'world',
            'db_usern' => 'root',
            'db_passw' => ''
        ];
      }
    
    return $config;
?>