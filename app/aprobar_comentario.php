<?php
include_once('models/Comments.php');

if( isset($_GET) )
{
  $idComment = intval($_GET['id']);

  $comment = new Comment();
  if( $comment->aprobarComment( $idComment ) ) {
    header("location:../index.php?msg=comment_aproved");
  }else{
    header("location:../index.php?msg=sin_efecto");
  }

}else{
  header("location:../index.php?msg=no_data");
}