<div class="mod_jshoppoing_categories">
    <?php
      foreach($categories_arr as $curr){
          $class = "jshop_menu_level_".$curr->level;
          if ($categories_id[$curr->level]==$curr->category_id) $class = $class."_a";
          ?>
          <div class = "<?php print $class?> category">
                <a href = "<?php print $curr->category_link?>">
                    <div class="img" style="background-image: url(<?php print $jshopConfig->image_category_live_path."/".$curr->category_image?>)">
                        <?php /*if ($show_image && $curr->category_image){?>
                            <img align = "absmiddle" src = "<?php print $jshopConfig->image_category_live_path."/".$curr->category_image?>" alt = "<?php print $curr->name?>" />
                        <?php }*/ ?>
                    </div>
                    <div class="name">
                        <?php print $curr->name?>
                    </div>
                </a>
          </div>
      <?php
      }
    ?>
</div>
