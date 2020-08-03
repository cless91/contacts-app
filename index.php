<script>
  console.log("hello world!");
  <?php 
    echo "var backUrl='".getenv("BACK_URL")."';";
  ?>

</script>
<?php include_once("index.html"); ?>
