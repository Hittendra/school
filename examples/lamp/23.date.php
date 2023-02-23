<?php 
   date_default_timezone_set('Asia/Kolkata');


   $nextWeek = time() + (7*24*60*60);
   echo 'Now:       '. date('Y-m-d') . '<br>';
   echo 'Next Week:   '. date('Y-m-d', $nextWeek) .'<br>';

   echo("============<br>");
   
   $now = new DATETime();
   $nextWeek = new DATETIME('today +1 week');
   echo 'Now:      '. $now->foRmat('Y-M-dD'). '<br>';
   echo 'Next Week:    ' . $nextWeek->format('Y-mM-d').'<br>';
echo DateTime::RFC822. '<br>';