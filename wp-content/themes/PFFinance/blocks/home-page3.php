<section class="home-page3 cnt" id="reviews">
  <div class="page3-content row">
    <div class="page3-head">
      <h2>Результаты клиентов</h2>
    </div>
    <div class="table-result">
      <div class="table-head">
        <div class="text-left">
          <p>Рефинансирование ипотеки</p>
        </div>
        <div class="switch">
          <div class="switch-tap <?php if (isset($_GET["simple"])) { echo 'switch-click'; }?>"></div>
        </div>
        <div class="text-right">
          <p>Ипотечное кредитование</p>
        </div>
      </div>
      <div class="table-review">
        <div class="table1 table-visible <?php if (isset($_GET["simple"])) { echo 'table-novisible'; }?>">
          <?php
            global $post;
            if (isset($allPosts)){
              $count = -1;
            } else {
              $count = 1;
            }
            $args = array(
              'category' => 9,
              'numberposts' => $count
            );
            $myposts = get_posts( $args );
            foreach( $myposts as $pst ){
              setup_postdata($pst);
          ?>
          <div class="result-block">
            <div class="review">
                  <div class="review-head">
                      <h3>Отзыв клиента</h3>
                  </div>
                  <div class="review-text">
                      <p>
                        <?php
                        echo $pst->post_content;
                        ?>
                      </p>
                      <div class="persone">
                        <?php
                        echo get_the_post_thumbnail( $pst->ID, 'full' );
                        ?>
                          <p><?php echo get_the_title( $pst ) ?><span> <br> <?php echo get_post_meta($pst->ID, 'city', true) ?></span></p>
                      </div>
                  </div>
              </div>
            <div class="table">
              <div class="table-position">
                <table>
                  <tr>
                    <th><img src="<?php echo get_template_directory_uri(); ?>/img/bad-icon.svg"/>
                      <p>Было</p>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <p>Ежемесячный платёж:</p><span><?php echo get_post_meta($pst->ID, 'monthly payment before', true) ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Ставка по ипотеке:</p><span><?php echo get_post_meta($pst->ID, 'mortgage rate before', true) ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Срок ипотеки:</p><span><?php echo get_post_meta($pst->ID, 'term of the mortgage before', true) ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Сумма переплаты:</p><span><?php echo get_post_meta($pst->ID, 'overpaid amount before', true) ?></span>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th><img src="<?php echo get_template_directory_uri(); ?>/img/good-icon.svg"/>
                      <p>Стало</p>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <p>Ежемесячный платёж:</p><span><?php echo get_post_meta($pst->ID, 'monthly payment after', true) ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Ставка по ипотеке:</p><span><?php echo get_post_meta($pst->ID, 'mortgage rate after', true) ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Срок ипотеки:</p><span><?php echo get_post_meta($pst->ID, 'term of the mortgage after', true) ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Сумма переплаты:</p><span><?php echo get_post_meta($pst->ID, 'overpaid amount after', true) ?></span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="cash">
                <p class="green-text">Экономия:</p>
                <p class="green-text"><?php echo get_post_meta($pst->ID, 'saving', true) ?></p>
              </div>
            </div>
          </div>
          <?php
      			}
      			wp_reset_postdata();
      		?>
          <a href="/отзывы-клиентов/" <?php if (isset($allPosts)){ echo 'hidden'; } ?>><button class="button-white">Смотреть все результаты</button></a>
        </div>
        <div class="table2 <?php if (!(isset($_GET["simple"]))) echo 'table-novisible';?>">
          <div class="result-block">
            <?php
              if (isset($allPosts)){
                $count = -1;
              } else {
                $count = 2;
              }
              $args = array(
                'category' => 8,
                'numberposts' => $count
              );
              $myposts = get_posts( $args );
              foreach( $myposts as $pst ){
                setup_postdata($pst);
            ?>
              <div class="review">
                <div class="review-head">
                  <h3>Отзыв клиента</h3>
                </div>
                <div class="review-text">
                  <p>
                    <?php
                      echo $pst->post_content;
                    ?>
                  </p>
                  <div class="persone">
                    <?php
                      echo get_the_post_thumbnail( $pst->ID, 'full' );
                    ?>
                    <p><?php echo get_the_title( $pst ) ?><br><span> <?php echo get_post_meta($pst->ID, 'city', true) ?></span></p>
                  </div>
                </div>
              </div>
            <?php
        			}
        			wp_reset_postdata();
        		?>
          </div>
          <a href="/отзывы-клиентов/?simple=true" <?php if (isset($allPosts)){ echo 'hidden'; } ?>><button class="button-white">Смотреть все результаты</button></a>
        </div>
      </div>
    </div>
  </div>
</section>
