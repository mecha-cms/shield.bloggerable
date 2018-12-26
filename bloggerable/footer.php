                </div><!-- /.posts -->
                <?php if ($site->is('pages') || $site->has('parent')): ?>
                  <?php static::pager(); ?>
                <?php endif; ?>
              </div><!-- /.main -->
            </main><!-- /.main-col -->
            <?php static::aside(); ?>
          </div><!-- /.main-content-row -->
        </div><!-- /.main-content-inner -->
      </div><!-- /.container -->
    </div><!-- /.main-content -->
    <footer class="footer" id="footer">
      <div class="container">
        <div class="footer-inner">
          <p class="footer-text">&#x00A9; <?php echo $site->title; ?> &#x00B7; <a href="https://mecha-cms.com"><?php echo $language->powered_by__(Mecha::version); ?></a></p>
          <p class="footer-text">Bloggerable is open source. It&#x2019;s developed and maintained on <a href="https://github.com/blogger-starter/blogger-starter">GitHub</a>.</p>
        </div><!-- /.footer-inner -->
      </div><!-- /.container -->
    </footer><!-- /.footer -->
  </body>
</html>