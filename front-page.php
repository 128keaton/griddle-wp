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
                <a href="/psychologist/">Services</a>
                <a class="arrow"></a>
            </div>

        </div>
        <div class="right">
            <div class="contact-form">
                <form id="contact-form" action="/" method="post">
                    <h3>Get in touch</h3>
                    <div>
                        <input placeholder="Name" type="text" tabindex="1" required>
                    </div>
                    <div>
                        <input placeholder="Email Address" type="email" tabindex="2" required>
                    </div>
                    <div>
                        <textarea placeholder="Message" tabindex="5" required></textarea>
                    </div>
                    <div>
                        <button name="submit" type="submit" id="contact-submit">Send Email</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <div class="box green" id="author">
        <div class="upper-message">
            <h1>Author</h1>

        </div>

        <p>After my beloved mother died in December 2012, it became important for me to share my story in order to inspire others traveling along grief's challenging road. <br> <br> 'Relaxing Into the Pain' is my God-breathed debut book, a publication by
            WestBow Press</p>
        <div class="main-link">
            <a href="/author">Read my book</a>
            <a class="arrow"></a>
        </div>


    </div>

    <div class="box red" id="speaker">
        <div class="upper-message">
            <h1>Speaker</h1>

        </div>

        <p>Lorum ipsum bull</p>
        <div class="main-link">
            <a href="">View my talks</a>
            <a class="arrow"></a>
        </div>


    </div>

    <div class="box orange" id="human">
        <div class="upper-message">
            <h1>Human</h1>

        </div>

        <p>I enjoy traveling and experiencing beautiful new sights around the world. When home, I enjoy quality time with my family and close friends, as well as singing. I'm an avid journal writer who cherishes quiet time with Jesus, cinnamon Chai tea lattes,
            gorgeous sunsets, and walks in the park with my sweet 14 year-old Beagle, Hunter</p>
        <div class="main-link">
            <a href="">Get to know me</a>
            <a class="arrow"></a>
        </div>


    </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
</div>