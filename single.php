<?php get_header();?>
<!-- // ------------------------------------------------
// page-title
// ------------------------------------------------   --><main>
    <div class="page-title page-title--news">
      <div class="page-title__mask">
        <h2 class="page__title section__title">
          <span class="page__title--en section__title--en">NEWS</span>
          <span class="page__title--ja section__title--ja">お知らせ</span>
        </h2>
      </div>
    </div>
<!-- // ------------------------------------------------
// news-content
// ------------------------------------------------   -->
    <div class="wrapper-w1088 page-jobinfo">


      <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
          <article class="news-content wrapper-w814">
            <div class="news-single-titlebox">
              <span class="date">2021/8/6</span>
              <a href="" class="cat">カテゴリー</a>
              <h1 class="news-single-title"><?php the_title();?></h1>
            </div>

            <div <?php post_class( 'news-single__content' ); ?>>
              <?php the_content();?>
            </div>
    
            <ul class="pagenation">
              <li>
                <?php previous_post_link('%link','<i class="fa-solid fa-angle-left"></i>前の記事へ'); ?>
              </li>
              <li><a class="pagenation-btn back-btn" href="/job-info">一覧へ</a></li>
              <li>
                <?php next_post_link('%link','次の記事へ<i class="fa-solid fa-angle-right"></i>'); ?>
              </li>
            </ul>
          </article>
        <?php endwhile;?>
      <?php endif;?>

<!-- // ------------------------------------------------
// サイドバー
// ------------------------------------------------   -->

      <div class="wrapper-w242">
      <?php get_sidebar('categories')?>

        <div class="sidebar__news">
          <p class="sidebar__head">最新の記事</p>
          <div class="sidebar-news__item">
            <div class="news-catbox">
              <time datetime="2018-07-07">2022/04/xx</time>
              <a class="cat--item" href="#">カテゴリー名</a>
            </div>
            <a class="sidebar-news__title" href="#">記事のタイトルが入ります...</a>
          </div>
          <div class="sidebar-news__item">
            <div class="news-catbox">
              <time datetime="2018-07-07">2022/04/xx</time>
              <a class="cat--item" href="#">カテゴリー名</a>
            </div>
            <a class="sidebar-news__title" href="#">記事のタイトルが入ります...</a>
          </div>
          <div class="sidebar-news__item">
            <div class="news-catbox">
              <time datetime="2018-07-07">2022/04/xx</time>
              <a class="cat--item" href="#">カテゴリー名</a>
            </div>
            <a class="sidebar-news__title" href="#">記事のタイトルが入ります...</a>
          </div>
          <div class="sidebar-news__item">
            <div class="news-catbox">
              <time datetime="2018-07-07">2022/04/xx</time>
              <a class="cat--item" href="#">カテゴリー名</a>
            </div>
            <a class="sidebar-news__title" href="#">記事のタイトルが入ります...</a>
          </div>
          <div class="sidebar-news__item">
            <div class="news-catbox">
              <time datetime="2018-07-07">2022/04/xx</time>
              <a class="cat--item" href="#">カテゴリー名</a>
            </div>
            <a class="sidebar-news__title" href="#">記事のタイトルが入ります...</a>
          </div>
        </div>
      </div>
    </div>
<!-- // ------------------------------------------------
// cta
// ------------------------------------------------   -->
<section class="main-cta wrapper-w1290">
      <div class="main-cta__img">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/index/cta.png" alt="">
      </div>
      <div class="main-cta__text-part">
        <div class="main-cta__heading">
          <h3>お困りの際は<br class="respond">お気軽にご相談ください。</h3>
          <img src="<?php echo get_template_directory_uri();?>/assets/images/index/line-w494.png" alt="">
        </div>
        <p class="main-cta__lead">ロジエージェントは軽貨物のプロフェッショナルエージェントとして、<br>
          日々お客様満足のために全力疾走しています。</p>
        <div class="c-more-info-button--cta"><a href="#"><span>フォームでのお問い合わせ</span><i class="fa-solid fa-angle-right"></i></a></div>
        <div class="main-cta__contact">
          <p class="main-cta__contact-text">お電話・FAXでのお問い合わせ</p>
          <div class="main-cta__contact-unit">
            <a href="" class="main-cta__tel"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/index/icon-tel.png" alt=""></span>03-5667-0305</a>
            <a href="" class="main-cta__fax"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/index/icon-fax.png" alt=""></span>03-5667-0306</a>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>