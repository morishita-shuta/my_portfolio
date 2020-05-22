<?php get_header(); ?>

	<div class="main-area">
		<div class="container">
			<h2 class="main-area__title">Shuta Morishita</h2>
			<p class="main-area__text">
				都内在住の大学3年生です。普段は、渋谷のスタートアップでWeb開発系のインターンをしつつ、個人でもWebサイト制作の仕事を請負っています。<br>モットーは「素早い対応」です。<br>一緒にお仕事のできるWeb制作会社様や自分のWebサイトを持ちたいと思っているお客様を探しています。<br>どんなに些細なことでも構わないのでご連絡いただけると幸いです。
			</p>
    </div>
    <div class="main-area-img"></div>
  </div>
  
  <?php 
  $careers = [
    array(
      'title' => '高校時代',
      'text' => '高校は都内の某私立大学に通っていた。全国大会に出るようなチームで、毎日陸上競技に打ち込んでいた。そのため、あまり勉学に時間を費やすことはなかった印象。'
    ),
    array(
      'title' => '大学入学',
      'text' => '慶應義塾大学の理工学部に入学。学科はメカニクス系なのでプログラミングを授業で扱うことはほぼ皆無に等しかった。理系のキャンパスは文系とは違う場所でかなり地味。'
    ),
    array(
      'title' => 'Web制作開始',
      'text' => '「大学生でもプログラミングでお金を稼ぐことができる」という言葉に惹かれ独学でプログラミングの勉強を開始。初めはProgateから入ったが割と早い段階できり上げて実案件に移った。'
    ),
    array(
      'title' => 'Now !!!',
      'text' => '渋谷のスタートアップでインターンをし、日々Webメディアの開発をしている。インターンで学んだことを実案件に活かすという循環ができるようになってきた。'
    ),
  ];
  ?>
	<div class="career-area" id="career-area">
		<div class="container">
			<h2 class="area-title">経歴</h2>
      <?php if (!is_mobile()): ?>
			<div class="career-area__wrapper">
				<div class="career-area__left">
					<div class="career-area__item">
						<div class="career-area__circle"></div>
						<h3 class="career-area__item-title"><?php echo $careers[1]['title'] ?></h3>
						<div class="career-area__item-text"><?php echo $careers[1]['text'] ?></div>
					</div>
					<div class="career-area__item">
						<div class="career-area__circle"></div>
						<h3 class="career-area__item-title"><?php echo $careers[3]['title'] ?></h3>
						<div class="career-area__item-text"><?php echo $careers[3]['text'] ?></div>
					</div>
				</div>
				<div class="career-area__right">
					<div class="career-area__item">
						<div class="career-area__circle"></div>
						<h3 class="career-area__item-title"><?php echo $careers[0]['title'] ?></h3>
						<div class="career-area__item-text"><?php echo $careers[0]['text'] ?></div>
					</div>
					<div class="career-area__item">
						<div class="career-area__circle"></div>
						<h3 class="career-area__item-title"><?php echo $careers[2]['title'] ?></h3>
						<div class="career-area__item-text"><?php echo $careers[2]['text'] ?></div>
					</div>
        </div>
      </div>
      <?php else: ?>
      <div class="career-sp-area__wrapper">
        <?php foreach ($careers as $career): ?>
        <div class="career-sp-area__item">
          <div class="career-sp-area__circle"></div>
          <h3 class="career-sp-area__item-title"><?php echo $career['title']; ?></h3>
          <div class="career-sp-area__item-text"><?php echo $career['text']; ?></div>
        </div>
				<?php endforeach; ?>
      </div>
      <?php endif; ?>
		</div>
	</div>

	<div class="skil-area" id="skil-area">
		<div class="container">
			<h2 class="area-title">スキル</h2>
			<div class="skil-area__wrapper">
				<?php 
				$skils = [
					array(
						'name' => 'HTML',
						'img' => 'html.svg'
					),
					array(
						'name' => 'CSS',
						'img' => 'css.svg'
					),
					array(
						'name' => 'SASS',
						'img' => 'sass.svg'
					),
					array(
						'name' => 'WP',
						'img' => 'wordpress.svg'
					),
					array(
						'name' => 'js',
						'img' => 'javascript.svg'
					),
					array(
						'name' => 'Vue.js',
						'img' => 'vue.svg'
					),
					array(
						'name' => 'Nuxt.js',
						'img' => 'nuxt.svg'
					),
					array(
						'name' => 'Git Hub',
						'img' => 'github.svg'
					),
					array(
						'name' => 'Git',
						'img' => 'git.svg'
					),
					array(
						'name' => 'GTM',
						'img' => 'gtm.svg'
					),
				];
				?>
				<?php foreach ($skils as $skil): ?>
				<div class="skil-area__item">
					<?php load_svg("img/icons/".$skil['img']); ?>
					<h3 class="skil-area__item-title"><?php echo $skil['name']; ?></h3>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div class="work-cnt-area" id="work-cnt-area">
		<div class="container">
			<h2 class="area-title">仕事内容</h2>
			<div class="work-cnt-area__item-wrapper">
				<h3 class="work-cnt-area__item-title">LP（ランディングページ）作成</h3>
				<h3 class="work-cnt-area__item-title">WordPressを用いたサイト制作</h3>
				<h3 class="work-cnt-area__item-title">javascriptを用いたサイト制作</h3>
				<p class="work-cnt-area__item-text">
					他にも対応している業務内容はございますので、<br>まずは下記ボタンよりご連絡ください。
				</p>
				<a href="#contact-area" class="work-cnt-area__item-link">お問い合わせ</a>
			</div>
		</div>
	</div>

	<div class="work-area" id="work-area">
		<div class="container">
			<h2 class="area-title">作品</h2>
			<div class="work-area__wrapper <?php if (is_mobile()) { echo 'js-work-area__wrapper'; } ?>">
				<?php 
				$works = [
					array(
						'name' => 'サイト模写',
						'img' => 'sitecopy.png',
            'text' => 'プログラミングを始めて数ヶ月で作成した既存サイトの模写です。「Airbnb」とWordPressテンプレートの「SANGO」のサイト模写をしました。レスポンシブ化もしています。',
            'link' => 'https://drive.google.com/drive/folders/1X-mLw3bHtD76-9fiMV81-VLjfMzSuvBY?usp=sharing'
					),
          array(
            'name' => 'ジムサイト',
            'img' => 'work1.png',
            'text' => 'Web制作会社から頂いた案件でトレーニングジムのサイトを作成しました。一部、テキスト・画像が仮置きになっています。また、当サイトはWordPressを用いて作成しています。',
            'link' => 'http://higoone-client.deca.jp/consulting/'
          ),
					array(
						'name' => 'M＆A企業のLP',
						'img' => 'work2.png',
            'text' => 'M&A企業のLPです。こちらも一部テキストは仮置きになっています。作業時間は9時間ほどでWordPressを用いて作成しています。',
            'link' => 'http://higoone-client.deca.jp/seikou/'
					),
					array(
						'name' => 'EMS企業のLP',
						'img' => 'work3.png',
            'text' => 'EMSサイトのLPとなっています。ハンバーガーメニューにも対応していて、こちらもWordPressを用いています。作業時間は10時間ほどです。',
            'link' => 'http://higoone-client.deca.jp/ems/'
					),
					array(
						'name' => '株式会社tyotto様のメディアサイト',
						'img' => 'tyotto1.png',
            'text' => '株式会社tyotto様のメディアサイト開発のお手伝いをさせていただいています。javascriptや、バックエンドのスキルも使用しています。',
            'link' => 'https://tyottojuku.com/'
					),
					array(
						'name' => '株式会社tyotto様の塾サイト',
						'img' => 'tyotto2.png',
            'text' => '株式会社tyotto様の塾サイト開発のお手伝いをさせていただいています。Vue.jsなどのフロントエンドのスキルも使用しています。',
            'link' => 'https://tyottojuku.com/tyottojuku-musashikosugi/'
					),
				];
				?>
        <?php foreach ($works as $work): ?>
        <div class="work-area__item-wrapper">
          <div class="work-area__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/works/<?php echo $work['img']; ?>" alt=""  class="work-area__item-img">
            <div class="work-area__item-container">
              <h3 class="work-aera__item-title"><?php echo $work['name']; ?></h3>
              <div class="work-area__item-text">
                <?php echo $work['text']; ?>
              </div>
              <a href="<?php echo $work['link']; ?>" target="_blank" rel="noopener noreferrer" class="work-area_item-link">Watch !!</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
			</div>
      <?php if (wp_is_mobile()): ?>
        <div class="work-area__slider-nav js-work-area__slider-nav">
        </div>
      <?php endif; ?>
		</div>
	</div>

	<div class="contact-area" id="contact-area">
		<div class="container">
			<h2 class="area-title">お問い合わせ</h2>
			<div class="contact-area__contact-form" id="contact-form">
        
        <div class="contact-area__item">
					<div class="contact-area__item-label-wrapper">
						<label for="" class="contact-area__item-label">氏名 <span>*</span></label>
            <div class="contact-area__item-check" v-bind:class="{ checkActived: isNameValid }">
							<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5.2L6.8 10L14 2" stroke="white" stroke-width="3"/>
							</svg>  
						</div>
          </div>
          <div v-bind:class="{ delateArea: inputData}">
            <input type="text" name="name" class="contact-area__name-input" placeholder="例) 田中太郎" v-model="nameInput">
          </div>
          <div v-bind:class="{ delateArea: makeSure }">{{ nameInput }}</div>
          <p class="erroebox">{{ nameMiss }}</p>
        </div>

        <div class="contact-area__item">
					<div class="contact-area__item-label-wrapper">
						<label for="" class="contact-area__item-label">メールアドレス <span>*</span></label>
						<div class="contact-area__item-check" v-bind:class="{ checkActived: isMailValid }">
							<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5.2L6.8 10L14 2" stroke="white" stroke-width="3"/>
							</svg>  
						</div>
          </div>
          <div v-bind:class="{ delateArea: inputData}">
            <input type="text" name="mail" class="contact-area__mail-input" placeholder="例) mori1632@icloud.com" v-model="mailInput">
          </div>
          <div v-bind:class="{ delateArea: makeSure }">{{ mailInput }}</div>
          <p class="erroebox">{{ mailMiss }}</p>
        </div>

        <div class="contact-area__item">
					<div class="contact-area__item-label-wrapper">
						<label for="" class="contact-area__item-label">お問い合わせ内容 <span>*</span></label>
						<div class="contact-area__item-check" v-bind:class="{ checkActived: isMessageValid }">
							<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 5.2L6.8 10L14 2" stroke="white" stroke-width="3"/>
							</svg>  
						</div>
          </div>
          <div v-bind:class="{ delateArea: inputData}">
            <textarea name="message" id="" cols="30" rows="10" class="contact-area__message-input" v-model="messageInput"></textarea>
          </div>
          <div v-bind:class="{ delateArea: makeSure }">{{ messageInput }}</div>
          <p class="erroebox">{{ messageMiss }}</p>
				</div>
        
        <div v-bind:class="{ delateArea: inputData }">
          <button class="contact-area__submit" v-on:click="clickbtn" v-bind:class="{ btnActived: isClickValid }">確認する</button>
        </div>
        <div class="contact-area__make-sure" v-bind:class="{ delateArea: makeSure }">
          <button class="contact-area__submit" v-on:click="clickbtn_back">戻る</button>
          <button class="contact-area__submit" v-on:click="clickbtn_send">送信する</button>
        </div>
      </div>
		</div>
	</div>

<?php get_footer(); ?>
