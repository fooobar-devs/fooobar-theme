<header class="banner">
  <div class="container">

    <nav class="nav-primary navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

      <?php
        get_template_part('templates/nav-menu');
      ?>

      </div>
    </nav>

  </div>
</header>
