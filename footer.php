<div class="prefooter">
  <span>Stay in the loop:</span>
  <form>
    <input type="email" placeholder="email address">
    <input type="submit" value="">
  </form>
</div>

<div class="footer">
  <div class="container">
    <?php if ( is_active_sidebar('footer')) : ?>
      <?php dynamic_sidebar('footer'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="copyright">
  <div class="container">
    <?php if ( is_active_sidebar('copyright')) : ?>
      <?php dynamic_sidebar('copyright'); ?>
    <?php endif; ?>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
