<?php
/**
 * Template Name: Home
 */

the_post();
get_header();
?>
    <main>
        <section class="welcome wow fadeIn" id="intro">
          <div class="container">
            <div class="title">
              <h3>WELCOME</h3>
            </div>
            <h2>Cannabis Strategic Ventures</h2>
            <p class="lead">We're here to help entrepenuers grow. Simplify how you're capitalizing on the rapidly growing cannabis market. We provide the financial and administrative tools to support your business operations. Ready to grow a dream?</p>
            <a href="#" class="btn">LET'S TALK</a>
          </div>
        </section>
        <div class="capitalizing wow fadeIn" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/cash-crop.jpg')">
          <div class="container">
            <h1>CAPITALIZING ON A CASH CROP</h1>
          </div>
        </div>
        <section class="facts wow fadeIn" id="market">
          <div class="container">
            <div class="title">
              <h3>INDUSTRY FACTS</h3>
            </div>
            <h2>A growing market</h2>
            <p>The cannabis industry has become a legitimate economic resource, and has rapidly become the largest growing market in the US. As entrepenuers, we recognize the growing pains of a fresh market, so we've crafed as smarter approach facilitate healthy growth in the modern Cannabis market</p>
            <ul>
              <li><a href="#" class="medical" onclick="return false;">Medical Use</a></li>
              <li><a href="#" class="recreational" onclick="return false;">Recreational</a></li>
              <li><a href="#" class="jobs-created" onclick="return false;">Jobs Created</a></li>
              <li><a href="#" class"job-creation" onclick="return false;">Job Creation</a></li>
            </ul>
            <div class="mui-select">
              <select>
                <option class="medical" onclick="return false;">Medical Use</option>
                <option class="recreational" onclick="return false;">Recreational</option>
                <option class="jobs-created" onclick="return false;">Jobs Created</option>
                <option class="job-creation" onclick="return false;">Job Creation</option>
              </select>
            </div>
            <div class="graph-container">
              <img class="graph graph-1" src="<?php echo get_template_directory_uri(); ?>/img/industry-graph-1.jpg"/>
              <img class="graph graph-2" src="<?php echo get_template_directory_uri(); ?>/img/industry-graph-2.jpg"/>
              <img class="graph graph-3" src="<?php echo get_template_directory_uri(); ?>/img/industry-graph-3.jpg"/>
              <img class="graph graph-4" src="<?php echo get_template_directory_uri(); ?>/img/industry-graph-4.jpg"/>
            </div>
          </div>
        </section>
        <div class="vision wow fadeIn" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/stat-city.jpg')">
          <div class="container">
            <div class="logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/vision-logo.svg')"></div>
            <h1>OUR VISION</h1>
            <p>We want to diversify and support entrepeural growth in the cannabis industry. From small business launches to corporate dreams, we'll help you plant it and watch it grow.</p>
          </div>
        </div>
        <section class="services" id="work">
          <div class="recruiting-modal">
            <h2>Recruiting & Staffing</h2>
            <a href="#" class="close" onclick="return false;" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/ic_clear_48px.svg')"></a>
          </div>
          <div class="experience-modal">
            <h2>Industry Experience</h2>
            <a href="#" class="close" onclick="return false;" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/ic_clear_48px.svg')"></a>
          </div>
          <div class="container">
            <div class="title">
              <h3>OUR SERVICES</h3>
            </div>
            <h2>Tools for planting</h2>
            <p>Leverage our services to successfully grow your business into what you envisioned. Our team of experts will give you the tools to lay the foundation of your business with support in Recruiting your dream team, and guiding your industry experience.</p>
            <div class="tools-container">
              <div class="tool1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/recruiting-staffing.jpg')">
                <h3>Recruiting & Staffing</h3>
                <p>Assemble your help, from seasonal trimmers, warehouse workers, to your administrative team.</p>
              </div>
              <div class="tool2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/industry-experience.jpg')">
                <h3>Industry Experience</h3>
                <p>We provide an experience team of experts in ther respective industries, the resources you need to grow</p>
              </div>
            </div>
          </div>
        </section>
        <section class="investment wow fadeIn" id="invest">
          <div class="title">
            <h3>INVESTMENT OPPORTUNITIES</h3>
          </div>
          <div class="container">
            <div class="col1">
              <h2>Want to grow a business together?</h2>
              <p>We love meeting fellow dreamers & making your vision our own. Please, messages us to inquire about business and lets schedule the beginning of a dream come true</p>
            </div>
            <div class="col2">
              <div class="info-container">
                <h2>Say Hello</h2>
                <form class="info" id="contact" action="index.html" method="post">
                  <div class="mui-textfield">
                    <input type="text" name="name" placeholder="Name" required>
                  </div>
                  <div class="mui-textfield">
                    <input type="text" name="email" placeholder="Email" required>
                  </div>
                  <div class="mui-textfield">
                    <input type="text" name="business" placeholder="Business" required>
                  </div>
                  <div class="mui-dropdown">
                    <button class="mui-btn mui-btn--primary" data-mui-toggle="dropdown">
                      Reaching out for...
                      <span class="mui-caret"></span>
                    </button>
                    <ul class="mui-dropdown__menu">
                      <li><a href="#">Option 1</a></li>
                      <li><a href="#">Option 2</a></li>
                      <li><a href="#">Option 3</a></li>
                      <li><a href="#">Option 4</a></li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="message-container">
                <textarea class="message" name="message" rows="8" cols="80" form="contact" required>Message...</textarea>
              </div>
            </div>
          </div>
        </section>
        <section class="map wow fadeIn" id="contact">
          <div class="location-info">
            <h2>Cannabis Strategic Venture</h2>
            <div class="contact">
              <p>555.555.5555</p>
              <p><a href="#">info@cannabisstrategic.com</a></p>
            </div>
            <div class="address">
              <p>1235 Address Ln.</p>
              <p>Seattle, Washington 00000</p>
            </div>
          </div>
          <iframe src="https://snazzymaps.com/embed/11548" width="100%" height="600px" style="border:none;"></iframe>
        </section>
    </main>
<?php get_footer();
