<?php
include_once('models/Comments.php');

if( isset($_GET) )
{
  $id = intval($_GET['id']);
  $idPost = intval($_GET['postID']);

  $comment = new Comment();
  if( $comment->eliminarComment( $id ) ) {
    header("location: ../index.php?msg=comment_deleted");
  }else{
    header("location: ../index.php?msg=comment_deleted_error");
  }

}else{
  header("location: ../index.php?msg=no_data");
}