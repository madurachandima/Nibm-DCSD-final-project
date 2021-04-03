<?php 
  include "config.php"  ;
  if(isset($_GET['id'])){
      $id=$_GET['id'];
      $stat=$db->prepare("select * from newfiles where id=?");
      $stat->bindparam(1,$id);
      $stat->execute();
      $data=$stat->fetch();

      $file='media/'.$data['filename'];


      if(file_exists($file)){
          header('Content-Description'.$data['description']);
          header('Content-type: '.$data['type']);
          header('Content-Disposition: '.$data['dispodition'].'; filename="'.basename($file).'"');
          header('Expires: '.$data['expires']);
          header('Cache-Control: '.$data['cache']);
          header('pragma:'.$data['pragma']);
          header('Content-Length: '.filesize($file));
        
          exit;
      }

  }
?>