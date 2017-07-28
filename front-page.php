<div class="home-wrapper">
    <div class="name-tag">
        <div class="name-tag-picture"></div>
        <h1>Mekel Harris</h1>
    </div>
    <div class="box blue psychologist-box" id="ph.d">
        <div class="upper-message">
            <h1>Ph.d</h1>
            <p>PSY 23756</p>
        </div>
        <div class="left">
            <p>I am a licensed psychologist, a nationally certified health service psychologist, and a nationally certified school psychologist (NCSP) based in Memphis, TN. I specialize in therapy and assessment for children, adolescents, adults, and families.</p>
            <div class="main-link">
                <a href="/psychologist/">I can help</a>
                
            </div>

        </div>
        <div class="right">
            <?php dynamic_sidebar('front-page'); ?>
        </div>
    </div>
    <div class="box green author-box" id="author">
        <div class="upper-message">
            <h1>Author</h1>
        </div>
        <p>After my beloved mother died in December 2012, it became important for me to share my story in order to inspire others traveling along grief's challenging road.</p>
        <div class="main-link">
            <a href="/author">Read my book</a>
            
        </div>


    </div>

    <div class="box red speaker-box" id="speaker">
        <div class="upper-message">
            <h1>Speaker</h1>

        </div>

        <p>I enjoyed the privilege of doing a TEDx talk on May 1, 2015 in Houston, TX, which showcased the theme: "A Palette of Perspectives."</p>
        <div class="main-link">
            <a href="/speaker">Watch my talk</a>
            
        </div>


    </div>

    <div class="box orange human-box" id="human">
        <div class="upper-message">
            <h1>Human</h1>
        </div>
        <p>I enjoy traveling and experiencing beautiful new sights around the world. When home, I enjoy quality time with my family and close friends, as well as singing.</p>
        <div class="main-link">
            <a href="/about">Get to know me</a>
            
        </div>
    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
</div>