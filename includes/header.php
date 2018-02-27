<header>
  <div class = "title_div">
    <h1 id="title">KATHY T. WANG</h1>
  </div>
  <div class = "menu_div">
    <nav id="menu">
      <ul>

        <?php
        foreach( $pages as $id => $name ) {
          if ( $id == $current_page_id ) {
            $css = "id='current_page'";
          } else {
            $css = "";
          }

        echo "<li> <a " . $css . " href='" . $id. ".php'>$name</a></li>";
      }
      ?>
      </ul>
    </nav>
  </div>
</header>
