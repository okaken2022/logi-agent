<?php get_header();?>
  <!-- // ------------------------------------------------
  // page-title
  // ------------------------------------------------   -->
  <main>
    <div class="page-title page-title--jobinfo">
      <div class="page-title__mask">
        <h2 class="page__title section__title">
          <span class="page__title--en section__title--en">JOBINFO</span>
          <span class="page__title--ja section__title--ja">お仕事情報</span>
        </h2>
      </div>
    </div>
    <div class="wrapper-w1088 page-jobinfo--single page-jobinfo">
      <!-- // ------------------------------------------------
// jobinfo-content
// ------------------------------------------------   -->
      <section class="jobinfo-content wrapper-w814">
        <div class="jobinfo-single-titlebox">
          <span class="date">2021/8/6掲載</span>
          <a href="" class="cat">定期便</a>
          <h3 class="jobinfo-single-title"><?php the_title();?></h3>
        </div>
        <div class="job-info__list">
          <div class="job-info__card">
            <div class="job-info-card__img">
              アイコンが<br>入ります<br>正方形
            </div>
            <div class="job-info-card__text-part">
              <table class="jobinfo-table">
                <tr class="text_box">
                  <th>お問い合わせNo：</th>
                  <td><?php $job_no = scf::get('job_no'); echo nl2br($job_no); ?></td>
                </tr>
                <tr class="text_box">
                  <th>掲載日：</th>
                  <td><?php $job_date = scf::get('job_date');echo nl2br ($job_date); ?></td>
                </tr>
                <tr class="text_box">
                  <th>配送エリア：</th>
                  <td><?php $job_area = scf::get('job_area');echo nl2br ($job_area); ?></td>
                </tr>
                <tr class="text_box">
                  <th>車種：</th>
                  <td><?php $job_car = scf::get('job_car');echo nl2br ($job_car); ?></td>
                </tr>
              </table>
              <div class="jobinfo-table02-box">
                <p><?php $job_lead = scf::get('job_lead');echo nl2br ($job_lead); ?></p>
                <div class="jobinfo-table">
                  <p>
                  <?php $job_description = scf::get('job_description');echo nl2br ($job_description); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="jobinfo-single-titlebox">
          <h3 class="jobinfo-single-title02">この案件について今すぐ問い合わせる</h3>
        </div>
        <div class="jobinfo-contact tab" id="js-tab">
          <div class="tab-nav">
            <a href="" class="tab-nav-item is-active" data-nav="0">電話で問い合わせる<span></span></a>
            <a href="" class="tab-nav-item" data-nav="1">フォームから問い合わせる<span></span></a>
          </div>
          <div class="tab-contents">
            <div class="tab-contents-item" data-content="0">
              <div class="main-cta__text-part">
                <p class="main-cta__heading">お電話でのお問い合わせはこちら<span><img src="<?php echo get_template_directory_uri();?>/assets/images/contact/contact-cta02.png" alt=""></span></p>
                  <div class="main-cta__contact-unit">
                    <a href="" class="main-cta__tel"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/index/icon-tel.png" alt=""></span>03-5667-0305</a>
                    <p class="main-cta__contact-text">お電話・FAXでのお問い合わせ</p>
                    <a href="" class="main-cta__fax"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/index/icon-fax.png" alt=""></span>03-5667-0306</a>
                  </div>
                </div>
              </div>
            <div class="tab-contents-item" data-content="1">
              <div class="main-cta__text-part">
                <p class="main-cta__heading">フォームでのお問い合わせはこちら<span><img src="<?php echo get_template_directory_uri();?>/assets/images/contact/contact-cta02.png" alt=""></span></p>
                <form>
                  <?php echo do_shortcode('[mwform_formkey key="130"]'); ?>
                </form>
                <div class="privacy-content">
                  <div class="privacy-item">
                    <div class="overlay">
                      <p class="overlay-text">クリックして内容を表示</p>
                    </div>
                    <div class="scroll">
                      <dl>
                        <dt>[プライバシーポリシー]</dt>
                        <dd class="privacy_text">
                          ロジエージェント株式会社（以下、当社）では、お客様のプライバシーを尊重し、お客様の個人情報を大切に保護することを重要な責務と考えております。 当ウェブサイトでは、個人情報保護に関する法令を遵守するとともに、個人情報の取扱に関して次のような姿勢で行動しています。<br><br>
                          個人情報の利用目的<br><br><br>
                          当社では、ユーザーのみなさまから受け取った個人情報（現行システムではメールアドレス）は、ユーザーのみなさまに当社からご連絡させていただく場合にのみ利用します。<br><br>
                          第三者への提供<br><br><br>
                          お客様からのご提供頂いた個人情報は、お客様のご了承がない限り収集した個人情報を第三者に提供致しません。 当社以外の企業／団体から皆様に有益と思われる情報のお届けを代行する場合にも、お客様のご承諾がない限り、個人情報はそうした企業／団体には開示･提供は致しません。ただし、利用目的に必要な限りにおいて、当社の業務委託先に対して開示を行う場合は除きます。
                        </dd>
                      </dl>
                    </div>
                  </div>
                  <div class="privacy-item">
                    <div class="overlay">
                      <p class="overlay-text">クリックして内容を表示</p>
                    </div>
                    <div class="scroll">
                      <dl>
                        <dt>[お問い合わせ前にご確認ください]</dt>
                        <dd class="domain_text">
                          携帯のメールアドレスにてお問い合わせの方は、携帯のメール受信設定で「@logiagent.jp」のドメイン受信設定、「info@logiagent.jp」のメールアドレス受信設定を必ず行ってからご登録下さい。<br><br>
                          ＜ドメイン指定＞<br>@logiagent.jp<br><br>
                          ＜メール指定＞<br>  <br>
                          info@logiagent.jp
                        </dd>
                      </dl>
                    </div>
                  </div>
                  <div class="check-list">
                    <label>
                      <input type="checkbox" name="type" value="同意。">
                      <span class="radio_text">上記内容にて送信しますので、よろしければチェックを入れてください。</span>
                    </label>
                  </div>
                </div>
                <div class="button-wrap">
                  <div class="btn-send">
                    <input class="c-more-info-button more-info-button--cta" type="submit" name="submit" value="送信する"><span
                      class="arrow arrow-right arrow-cta"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ul class="pagenation">
          <li><a class="pagenation-btn prev-btn" href=""><i class="fa-solid fa-angle-left"></i>前の記事へ</a></li>
          <li><a class="pagenation-btn back-btn" href="/job-info">一覧へ</a></li>
          <li><a class="pagenation-btn next-btn" href="">次の記事へ<i class="fa-solid fa-angle-right"></i></a></li>
        </ul>
      </section>


<!-- // ------------------------------------------------
// サイドバー
// ------------------------------------------------   -->

      <div class="wrapper-w242">
      <?php get_sidebar( 'jobinfo' );?>
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