<nav class="zichtbaar">
      <a href="index.php">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Blog</a>
      <a href="contact.php">Contact</a>
      <a href="produktenlijst.php">lijst</a>
      <a href="products.php">produkten</a>
      <a href="prodajax.html">ajax</a>

</nav>

<div class='menu'>menu</div>


<script>
  let nav = document.querySelector('nav');
  document.querySelector('.menu').addEventListener('click', function(){
    nav.classList.toggle("zichtbaar");;
  })
</script>
</body >
</html >