<footer class="footer mt-auto py-3 p-1  mt-5 af float-bottom algo rounded-top rounded-lg wow animated fadeInDow" style="font-family: 'Lexend Deca', sans-serif; float:bottom; position:bottom;">
  <div class="mt-1 mb-1 wow animated fadeInDow">
    <span class="text-center mt-1 mb-1" style="font-family: 'Lexend Deca', sans-serif;"><center>&copy; Copyright 2019 PROMOTION FACTORY - All Rights Reserved </center> </span>
  </div>
</footer>
<?php if(isset($_SESSION['error'])){ ?>
<script>
 $(document).ready(function(){
  $("#error").modal("show");
  setTimeout(function() { $('#error').modal('hide'); }, 4000);
 });
</script>
<?php
unset($_SESSION['error']);
} ?>
<script src="assets/js/java.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
</body>
</html>