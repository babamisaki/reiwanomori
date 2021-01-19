<?php
/**
 * Template Name: 墓地トップ
 */
get_header(); ?>
<main class="page">
  <aside>
    <?php get_sidebar() ; ?>
  </aside>
  <div class="main">
    <?php
      if(have_posts()):
      while(have_posts()):
      the_post();
      the_content();
      endwhile;
      endif;
    ?>
    <section id="list">
      <a class="list-con">
        <h1>横浜令和の杜</h1>
        <img src="https://media-lab.tokyo/reiwanomori/img/article-yokohama.jpg" width="400" height="300" alt="墓地">
        <h2>京浜急行「南太田」徒歩5分</h2>
        <p>横浜みなとみらいを一望できる開放感にあふれた敷地に、「樹木墓地　横浜令和の杜」があります。山門を入り緑豊かな木々の中の階段を一段一段上っていくと静けさと歴史を感じられる本堂が目の前にあらわれます。豊かな自然と優しい陽射しに包まれて眠りたい。そんな願いをかなえてくれるお墓です。</p>
        <span class="detail">詳しく見る</span>
      </a>
      <a class="list-con">
        <h1>横浜令和の杜</h1>
        <img src="https://media-lab.tokyo/reiwanomori/img/article-yokohama.jpg" width="400" height="300" alt="墓地">
        <h2>京浜急行「南太田」徒歩5分</h2>
        <p>横浜みなとみらいを一望できる開放感にあふれた敷地に、「樹木墓地　横浜令和の杜」があります。山門を入り緑豊かな木々の中の階段を一段一段上っていくと静けさと歴史を感じられる本堂が目の前にあらわれます。豊かな自然と優しい陽射しに包まれて眠りたい。そんな願いをかなえてくれるお墓です。</p>
        <span class="detail">詳しく見る</span>
      </a>
      <a class="list-con">
        <h1>横浜令和の杜</h1>
        <img src="https://media-lab.tokyo/reiwanomori/img/article-yokohama.jpg" width="400" height="300" alt="墓地">
        <h2>京浜急行「南太田」徒歩5分</h2>
        <p>横浜みなとみらいを一望できる開放感にあふれた敷地に、「樹木墓地　横浜令和の杜」があります。山門を入り緑豊かな木々の中の階段を一段一段上っていくと静けさと歴史を感じられる本堂が目の前にあらわれます。豊かな自然と優しい陽射しに包まれて眠りたい。そんな願いをかなえてくれるお墓です。</p>
        <span class="detail">詳しく見る</span>
      </a>
      <a class="list-con">
        <h1>横浜令和の杜</h1>
        <img src="https://media-lab.tokyo/reiwanomori/img/article-yokohama.jpg" width="400" height="300" alt="墓地">
        <h2>京浜急行「南太田」徒歩5分</h2>
        <p>横浜みなとみらいを一望できる開放感にあふれた敷地に、「樹木墓地　横浜令和の杜」があります。山門を入り緑豊かな木々の中の階段を一段一段上っていくと静けさと歴史を感じられる本堂が目の前にあらわれます。豊かな自然と優しい陽射しに包まれて眠りたい。そんな願いをかなえてくれるお墓です。</p>
        <span class="detail">詳しく見る</span>
      </a>
    </section>
  </div>
</main>
<footer>

<?php get_footer(); ?>