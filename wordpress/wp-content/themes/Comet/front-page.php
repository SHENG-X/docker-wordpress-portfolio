<?php get_header() ?>

<div class="font-page-content">
  <div class="row">
    <div class="intro col-md-8">
      <div>
        <?php if(is_active_sidebar('front-page-intro')) :?>
          <?php dynamic_sidebar('front-page-intro') ?>
        <?php endif; ?>
      </div>
      <div class="social-media">
        <?php if(is_active_sidebar('front-page-social')) :?>
          <?php dynamic_sidebar('front-page-social') ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-4">
      <?php if(is_active_sidebar('front-page-pic')) :?>
        <?php dynamic_sidebar('front-page-pic') ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h4>
        Skills
      </h4>
    </div>
    <div class="col-md-12">
      <div class="skills-container">
        <div class="skill-item">
          <div class="title">
            Frontend
          </div>
          <div>
            <div>
              JavaScript
            </div>
            <div>
              TypeScript
            </div>
            <div>
              HTML
            </div>
            <div>
              CSS
            </div>
            <div>
              SCSS
            </div>
            <div>
              React.js
            </div>
            <div>
              React Native
            </div>
            <div>
              Vue.js
            </div>
            <div>
              jQuery.js
            </div>
          </div>
        </div>
        <div class="skill-item">
          <div class="title">
            Backend
          </div>
          <div>
            <div>
              Node.js
            </div>
            <div>
              Django
            </div>
            <div>
              .Net
            </div>
            <div>
              PHP
            </div>
          </div>
        </div>
        <div class="skill-item">
          <div class="title">
            Database
          </div>
          <div>
            <div>
              MySQL
            </div>
            <div>
              MongoDB
            </div>
            <div>
              MS SQL
            </div>
            <div>
              SQLite
            </div>
          </div>
        </div>
        <div class="skill-item">
          <div class="title">
            Version Control
          </div>
          <div>
            GIT
          </div>
          <div>
            TFS
          </div>
        </div>
        <div class="skill-item">
          <div class="title">
            Project MGMT Tools
          </div>
          <div>
            <div>
              Azure DevOps
            </div>
            <div>
              GitHub
            </div>
            <div>
              MS Teams
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php if(is_active_sidebar('front-page-projects')) :?>
        <?php dynamic_sidebar('front-page-projects') ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer() ?>