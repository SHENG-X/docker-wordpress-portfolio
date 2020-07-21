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
        <div class="skill-item front-end">
          <div class="title">
            Frontend 
          </div>
          <div class="content">
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
              jQuery
            </div>
          </div>
        </div>

        <div class="skill-item back-end">
          <div class="title">
            Backend
          </div>
          <div class="content">
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

        <div class="skill-item database">
          <div class="title">
            Database
          </div>
          <div class="content">
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

        <div class="skill-item version-control">
          <div class="title">
            Version Control
          </div>
          <div class="content">
            <div>
              GIT
            </div>
            <div>
              TFS
            </div>
          </div>
        </div>

        <div class="skill-item project-management">
          <div class="title">
            Project MGMT Tools
          </div>
          <div class="content">
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