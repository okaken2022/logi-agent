<?php get_header();?>
<!-- // ------------------------------------------------
// recruit-fv
// ------------------------------------------------   -->

<?php if(have_posts()):?>
  <?php while(have_posts()):the_post();?>
    <main>
      <section class="recruit-fv">
        <img class="recruit__filter" src="<?php echo get_template_directory_uri();?>/assets/images/recruit/eyecatch-filter.png" alt="">
        <div class="recruit-fv__wrapper wrapper-w1088">
          <div class="recruit-fv__container">
            <div class="recruit-fv__catch">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/dream.png" alt="">
              <div class="recruit-fv__text-part">
                <p class="recruit-fv__text1">を追いかけている人を</p>
                <p class="recruit-fv__text2">応援してます</p>
              </div>
            </div>
            <h2 class="recruit-fv__driver">ドライバー募集中！</h2>
            <div class="recruit-fv__note">
              <p>高収入・高時給　/　働き方自由　/　未経験者歓迎</p>
            </div>
            <ul class="recruit-fv__list">
              <li class="recruit-fv__item">
                <p>しっかり</p>
                <p><span>稼ぎたい！</span></p>
              </li>
              <li class="recruit-fv__item">
                <p><span>決まった時間で</span></p>
                <p>働きたい！</p>
              </li>
              <li class="recruit-fv__item">
                <p><span>正社員</span>として</p>
                <p>働きたい！</p>
              </li>
            </ul>
          </div>
        </div>
      </section>


  <!-- // ------------------------------------------------
  // recruit-cta
  // ------------------------------------------------   -->
      <section class="recruit-cta">
        <p class="recruit-cta__intro">ロジエージェントで夢を叶えませんか？</p>
        <p class="recruit-cta__catch">どんな夢もわたしたちは<br class ="respond">とことん応援します</p>
        <p class="recruit-cta__note">＼　ご不明な点はお気軽にお問い合わせください！　／</p>
        <div class="c-to-form-button "><a href="#"><span>応募フォームへ</span><i class="fa-solid fa-angle-right"></i></a></div>
      </section>


  <!-- // ------------------------------------------------
  // recruit-video
  // ------------------------------------------------   -->
      <section class="recruit-video">
        <p class="recruit-video_head">実際に夢を叶えた仲間がいます！<br>
          あなたの夢を応援します</p>
        <div class="recruit-video__video">
          ※ビデオが入ります
        </div>
      </section>


  <!-- // ------------------------------------------------
  // worries
  // ------------------------------------------------   -->
      <section class="recruit-worries">
        <!-- <div class="recruit-worries__title">
          <p class="recruit-worries__text">こんな</p>
          <h3 class="recruit-worries__head"><span><img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/title-line.png" alt=""></span>仕事の悩み</h3>
          <p class="recruit-worries__text">ございませんか？</p>
        </div>
        <div class="recruit-worries__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/worries.png" alt="">
        </div> -->
        <div class="recruit-worries__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-worries.png" alt="">
        </div>
      </section>


  <!-- // ------------------------------------------------
  // merit
  // ------------------------------------------------   -->
      <section class="merit wrapper-w1088">
        <div class="merit-catch">
          <p class="merit-catch__head">ロジエージェントがお悩みを解決！</p>
          <p class="merit-catch__lead">あなたの夢を応援します。</p>
        </div>
        <div class="merit-title">
          <div class="merit-title__baloon">
            <p>ロジエージェントで</p>
          </div>
          <div class="recruit-title__head">
            <h3>働くメリット</h3>
          </div>
        </div>

        <ul class="merit-list wrapper-w1088">
          <li class="merit-list__item">
            <div class="merit-item__title">
              <img class="merit-item__title-icon" src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-icon.png" alt="">
              <div class="merit-item__title-text">
                <p>メリット<span>1</span></p>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">
              </div>
            </div>
            <p class="merit-item__head">あなたにピッタリの<br>
              配送業務が見つかります！</p>
            <div class="merit-item__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-litem01.png" alt="">
            </div>
            <p class="merit-item__text">
              東京都江戸川区のロジエージェントは、フリーペーパー、大手通販会社、個人向け配送、飲食配送、大手家電量販店配送など、さまざまな配送業務を手掛けています。あなたにピッタリな仕事をきっと見つけることができますので、どうぞ安心してお越しください。
            </p>
          </li>
          <li class="merit-list__item">
            <div class="merit-item__title">
              <img class="merit-item__title-icon" src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-icon.png" alt="">
              <div class="merit-item__title-text">
                <p>メリット<span>2</span></p>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">
              </div>
            </div>
            <p class="merit-item__head">同乗研修など充実の支援体制<br>
              熟練の先輩ドライバーが丁寧指導</p>
            <div class="merit-item__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-litem02.png" alt="">
            </div>
            <p class="merit-item__text">
              ロジエージェントは初心者の方でも安心して業務に臨むことができるよう、充実した研修制度をご用意しております。はじめは熟練の先輩ドライバーが同乗し、仕事の段取りや流れをしっかりと丁寧に指導してくれますので、どなたでも無理なく覚えることが可能です。 
            </p>
          </li>
          <li class="merit-list__item">
            <div class="merit-item__title">
              <img class="merit-item__title-icon" src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-icon.png" alt="">
              <div class="merit-item__title-text">
                <p>メリット<span>3</span></p>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">
              </div>
            </div>
            <p class="merit-item__head">20代～60代まで幅広く活躍<br>
              同年代の仲間たちが頑張っています！</p>
            <div class="merit-item__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-litem03.png" alt="">
            </div>
            <p class="merit-item__text">
              弊社には20代から60代まで、幅広い年齢層のスタッフが在籍しています。同年代の仲間たちと共に、あなたもぜひご自身の夢に向かってご活躍ください。ときには助け合い、ときには競い合いながら成長できる、理想の職場環境がロジエージェントには整っています。
            </p>
          </li>
          <li class="merit-list__item">
            <div class="merit-item__title">
              <img class="merit-item__title-icon" src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-icon.png" alt="">
              <div class="merit-item__title-text">
                <p>メリット<span>4</span></p>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">
              </div>
            </div>
            <p class="merit-item__head">ライフスタイルや<br>
              ご都合に合わせて働けます！</p>
            <div class="merit-item__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-litem04.png" alt="">
            </div>
            <p class="merit-item__text">
              配送業務には定期便やスポット便など、さまざまなスタイルがあります。そのため、あなたのライフスタイルやご都合等に合わせて、働く時間帯をお選びいただくことも可能です。働き方のご相談には柔軟に応じますので、ぜひお気軽にご相談いただければと思います。
            </p>
          </li>
        </ul>
        <div class="merit-list__item merit-list__item--5">
          <div class="merit-item__title">
            <img class="merit-item__title-icon" src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-icon.png" alt="">
            <div class="merit-item__title-text">
              <p>メリット<span>5</span></p>
              <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">
            </div>
          </div>
          <p class="merit-item__head">実際に夢を叶えた仲間がいます！<br>
            どんな夢もわたしたちはとことん応援します！！</p>
          <div class="merit-item__movie">
            動画が入ります
          </div>
          <p class="merit-item__text">
            東京都江戸川区のロジエージェントは、社員の夢をとことん応援する会社です。現在弊社で働いているスタッフの中には、将来カフェを出店したいという方もいますし、実際にレストランの出店という大きな夢を叶えたスタッフもいます。もちろん、将来独立したいという方も大歓迎です。スポット便や定期便など、自分に合った時間・働き方で稼ぐことができますので、ぜひ夢に向かって頑張ってください。        </p>
        </div>
      </section>


  <!-- // ------------------------------------------------
  // interview
  // ------------------------------------------------   -->
      <section class="interview wrapper-w1088">
        <div class="recruit-title__head interview__title">
          <h3>ドライバーインタビュー</h3>
        </div>
        <p class="interview__lead">実際に働く<span><img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">スタッフ</span>の声を集めました！</p>

<!-- SCF ドライバーインタビュー　繰り返し処理 -->

        <ul class="interview__list">
    <?php
      $interview = SCF::get('interview');
      foreach ($interview as $fields) { 

        if($fields['interview_title'] !== "" and $fields['interview_name']!== ""){
        ?>
          <li class="interview__item">
            <div class="interview__balloon">
              <p>
              <?php echo $fields['interview_title']; ?> 
              </p>
            </div>
            <div class="interview__content">
              <div class="interview__img">
                <img src="<?php echo wp_get_attachment_url($fields['interview_img']);  ?>" alt="">
              </div>
              <div class="interview__text">
                <div class="interview__name">
                  <p><?php echo $fields['interview_name'];  ?></p>
                </div>
                <p class="interview__text"><?php echo $fields['interview_text'];  ?></p>
              </div>
            </div>
          </li>
          <?php } 
        } ?> 
        </ul>
      </section>


  <!-- // ------------------------------------------------
  // income
  // ------------------------------------------------   -->
      <section class="income wrapper-w1088">
        <div class="recruit-title__head income__title">
          <h3>月収モデル</h3>
        </div>
        <p class="income__lead">平均月収<span><img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/line-w256.png" alt="">300,000～400,000円</span></p>
        <p class="income__lead2">＼繁忙期には、月収700,000～800,000円稼げます！／</p>

<!-- SCF 月収モデル　繰り返し処理 -->

        <ul class="income__list">
    <?php
      $income = SCF::get('income');
      foreach ($income as $fields) { 
        if($fields['income_length'] !== "" and $fields['income_monthly']!== ""){
        ?>
          <li class="income__item">
            <div class="income-item__img">
              <img src="<?php echo wp_get_attachment_url($fields['income_img']);  ?>" alt="">
            </div>
            <p class="income__length"><?php echo $fields['income_length']; ?></p>
            <p class="income__position"><?php echo $fields['income_position']; ?></p>
            <h4 class="income__monthly-income">月収<strong><?php echo $fields['income_monthly']; ?></strong>円</h4>
            <div class="income-item__detail">
              <p><?php echo $fields['income_daily']; ?></p>
              <p><?php echo $fields['income_holiday']; ?></p>
            </div>
          </li>
          <?php } 
        } ?> 
        </ul>
      </section>


  <!-- // ------------------------------------------------
  // recruit-flow
  // ------------------------------------------------   -->
      <section class="recruit-flow wrapper-w1088">
        <div class="recruit-title__head recruit-flow__title">
          <h3>一日の流れ</h3>
        </div>
        <p class="recruit-flow__lead">ロジエージェントで働くドライバーの1日の流れを紹介します。</p>
        <ul class="recruit-flow__list">
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>7:00～9:00</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>物流倉庫に到着</p>
            </div>
          </li>
          <li class="recruit-flow__arrow">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-flow-arrow.png" alt="">
          </li>
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>9:00~</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>伝票を取り配送ルートを組む</p>
            </div>
          </li>
          <li class="recruit-flow__arrow">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-flow-arrow.png" alt="">
          </li>
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>9:30~</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>午前便の荷物を積み込む</p>
            </div>
          </li>
          <li class="recruit-flow__arrow">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-flow-arrow.png" alt="">
          </li>
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>10:00~</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>配送業務を開始</p>
            </div>
          </li>
          <li class="recruit-flow__arrow">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-flow-arrow.png" alt="">
          </li>
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>12:30~</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>お昼休憩</p>
            </div>
          </li>
          <li class="recruit-flow__arrow">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-flow-arrow.png" alt="">
          </li>
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>13:30~</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>午後便の荷物を積み込み配送</p>
            </div>
          </li>
          <li class="recruit-flow__arrow">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-flow-arrow.png" alt="">
          </li>
          <li class="recruit-flow__item">
            <div class="recruit-flow__time">
              <p>19:00～21:00</p>
            </div>
            <div class="recruit-flow__schedule">
              <p>午後便の配送終了 帰宅</p>
            </div>
          </li>
        </ul>
      </section>


  <!-- // ------------------------------------------------
  // recruit-start-flow
  // ------------------------------------------------   -->
    <section class="recruit-start-flow wrapper-w1088">
      <div class="recruit-title__head recruit-start-flow__title">
        <h3>お仕事開始までの流れ</h3>
      </div>
      <p class="recruit-start-flow__lead">＼ <span>5 STEP</span> で<img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/merit-item-title.png" alt="">カンタン！／</p>
      <ul class="recruit-start-flow__list">
        <li class="recruit-start-flow__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow01.png" alt="">
        </li>
        <li class="recruit-start-flow__arrow">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow-arrow.png" alt="">
        </li>
        <li class="recruit-start-flow__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow02.png" alt="">
        </li>
        <li class="recruit-start-flow__arrow">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow-arrow.png" alt="">
        </li>
        <li class="recruit-start-flow__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow03.png" alt="">
        </li>
        <li class="recruit-start-flow__arrow">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow-arrow.png" alt="">
        </li>
        <li class="recruit-start-flow__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow04.png" alt="">
        </li>
        <li class="recruit-start-flow__arrow">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow-arrow.png" alt="">
        </li>
        <li class="recruit-start-flow__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/recruit-start-flow05.png" alt="">
        </li>
      </ul>
    </section>


  <!-- // ------------------------------------------------
  // recruit-cta
  // ------------------------------------------------   -->
    <section class="recruit-cta mb120">
      <p class="recruit-cta__intro">ロジエージェントで夢を叶えませんか？</p>
      <p class="recruit-cta__catch">どんな夢もわたしたちは<br class ="respond">とことん応援します</p>
      <p class="recruit-cta__note">＼　ご不明な点はお気軽にお問い合わせください！　／</p>
      <div class="c-to-form-button "><a href="#"><span>応募フォームへ</span><i class="fa-solid fa-angle-right"></i></a></div>
    </section>


  <!-- // ------------------------------------------------
  // q-and-a
  // ------------------------------------------------   -->
      <section class="q-and-a wrapper-w1088">
        <div class="recruit-title__head q-and-a__title">
          <h3>よくある質問</h3>
        </div>
        <ul class="q-and-a__list">
<!-- SCF よくある質問　繰り返し処理 -->
        <?php
          $example = SCF::get('q-and-a');
          foreach ($example as $fields) { 
            if($fields['question'] !== "" and $fields['answer']!== ""){
            ?>
          <li class="q-and-a__q">
            <span>Q.</span>
            <p><p><?php echo $fields['question']; ?></p></p>
          </li>
          <li class="q-and-a__a">
            <span>A.</span>
            <p><p><?php echo $fields['answer']; ?></p></p>
          </li>
          <?php } 
        } ?> 
        </ul>
      </section>


  <!-- // ------------------------------------------------
  // recruit-job info
  // ------------------------------------------------   -->
      <section class="recruit-job-info">
        <div class=" wrapper-w1088">
          <div class="recruit-title__head recruit-job-info__title">
            <h3>お仕事情報</h3>
          </div>
          <ul class="job-info__list">
            <li class="job-info__card">
              <div class="job-info-card__img">
                アイコンが<br>入ります<br>正方形
              </div>
              <div class="job-info-card__text-part">
                <h3 class="job-info-card-text-part__title">タイトルが入ります<br>タイトルが入ります</h3>
                <p class="job-info-card-text-part__detail">担当エリア内の企業様へ事務用品を配送<br> 積　　地：東京都江東区<br> 車種：軽ワンボックス
                </p>
                <a href="#" class="job-info-card-text-part__button">詳細はこちら</a>
              </div>
            </li>
            <li class="job-info__card">
              <div class="job-info-card__img">
                アイコンが<br>入ります<br>正方形
              </div>
              <div class="job-info-card__text-part">
                <h3 class="job-info-card-text-part__title">タイトルが入ります<br>タイトルが入ります</h3>
                <p class="job-info-card-text-part__detail">担当エリア内の企業様へ事務用品を配送<br> 積　　地：東京都江東区<br> 車種：軽ワンボックス
                </p>
                <a href="#" class="job-info-card-text-part__button">詳細はこちら</a>
              </div>
            </li>
            <li class="job-info__card">
              <div class="job-info-card__img">
                アイコンが<br>入ります<br>正方形
              </div>
              <div class="job-info-card__text-part">
                <h3 class="job-info-card-text-part__title">タイトルが入ります<br>タイトルが入ります</h3>
                <p class="job-info-card-text-part__detail">担当エリア内の企業様へ事務用品を配送<br> 積　　地：東京都江東区<br> 車種：軽ワンボックス
                </p>
                <a href="#" class="job-info-card-text-part__button">詳細はこちら</a>
              </div>
            </li>
          </ul>
          <div class="c-more-info-button--center"><a href="#"><span>もっと見る</span><i class="fa-solid fa-angle-right"></i></a></div>
        </div>
      </section>


  <!-- // ------------------------------------------------
  // job description
  // ------------------------------------------------   -->
      <section class="job-description wrapper-w1088">
        <div class="recruit-title__head job-description-job-info__title">
          <h3>募集要項</h3>
        </div>
        <div class="job-description__content">
          <div class="double-quote1">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/double quote1.svg" alt="">
          </div>
          <div class="job-description__inner">
            <dl>
              <dt class="job-description__head">
                仕事内容
              </dt>
              <dd class="job-description__text">
              <?php $job_description = scf::get('job-description'); echo nl2br($job_description); ?>
              </dd>
              <dt class="job-description__head">
                必要な資格
              </dt>
              <dd class="job-description__text">
              <?php $requirements = scf::get('requirements');echo nl2br ($requirements); ?>
              </dd>
              <dt class="job-description__head">
                担当エリア
              </dt>
              <dd class="job-description__text">
              <?php $area = scf::get('area'); echo nl2br($area); ?>
              </dd>
              <dt class="job-description__head">
                報酬
              </dt>
              <dd class="job-description__text mb20">
              <?php $reward = scf::get('reward'); echo nl2br($reward); ?>
              </dd>
              <dt class="job-description__head">
                別途月額費用
              </dt>
              <dd class="job-description__text">
              <?php $expense = scf::get('expense'); echo nl2br($expense); ?>
              </dd>
              <dt class="job-description__head">
                雇用形態
              </dt>
              <dd class="job-description__text">
              <?php $employment = scf::get('employment'); echo nl2br($employment); ?>
              </dd>
              <dt class="job-description__head">
                福利厚生・待遇
              </dt>
              <dd class="job-description__text">
              <?php $welfare = scf::get('welfare'); echo nl2br($welfare); ?>
              </dd>
            </dl>
          </div>
          <div class="double-quote2">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/double quote2.svg" alt="">
          </div>
        </div>
      </section>


  <!-- // ------------------------------------------------
  // recruit-form
  // ------------------------------------------------   -->
      <section class="recruit-form">
        <div class="recruit-form__wrapper wrapper-w1088">
          <div class="recruit-title__head recruit-form__title">
            <h3>応募フォーム</h3>
          </div>
          <p class="recruit-form__head">電話またはフォームのお好きな方からご応募いただけます！</p>
          <div class="recruit-form__note">
            <p>＼<img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/line-w192.png" alt="">お電話での応募はこちら／</p>
          </div>
          <div class="c-to-form-button"><a href="tel:">タップで電話発信</a></div>
          <div  class="recruit-form__lead">
            <p><img src="<?php echo get_template_directory_uri();?>/assets/images/recruit/line-w192.png" alt="">フォームからの応募は</p>
            <p>下記に必要事項をご記入の上、送信してください。</p>
          </div>
          <form action="">
          <?php echo do_shortcode('[mwform_formkey key="130"]'); ?>
          </form>
        </div> 
      </section>


  <!-- // ------------------------------------------------
  // company-description
  // ------------------------------------------------   -->
      <section class="company-description wrapper-w1088">
        <div class="recruit-title__head  company-description__title">
          <h3>会社概要</h3>
        </div>
        <table class="company-description__table">
          <tr>
            <th class="company-description__head">会社名</th>
            <th class="company-description__data">ロジエージェント　株式会社</th>
          </tr>
          <tr>
            <td class="company-description__head">所在地</td>
            <td class="company-description__data">〒134-0085　東京都江戸川区南葛西3-10-12　1F</td>
          </tr>
          <tr>
            <td class="company-description__head">TEL</td>
            <td class="company-description__data">03-5667-0305</td>
          </tr>
          <tr>
            <td class="company-description__head">FAX</td>
            <td class="company-description__data">03-5667-0306</td>
          </tr>
          <tr>
            <td class="company-description__head">設立日</td>
            <td class="company-description__data">平成23年（2011年）6月22日</td>
          </tr>
          <tr>
            <td class="company-description__head">資本金</td>
            <td class="company-description__data">1,000万円</td>
          </tr>
          <tr>
            <td class="company-description__head company-description__head--business">事業内容</td>
            <td class="company-description__data">貨物軽自動車運送業<br>
              第一種貨物利用運送事業　関自貨第1294号</td>
          </tr>
          <tr>
            <td class="company-description__head">取引銀行</td>
            <td class="company-description__data">三井住友銀行　葛西支店</td>
          </tr>
          <tr>
            <td class="company-description__head">認定届出</td>
            <td class="company-description__data">国土交通省　関東運輸局　陸運支局</td>
          </tr>
        </table>
      </section>

    </main>
  <?php endwhile;?>
<?php endif;?>
<?php get_footer();?>