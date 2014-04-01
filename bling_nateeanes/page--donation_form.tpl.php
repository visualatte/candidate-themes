<div class="gridwrap pagewrap cf head">
  <div class="inner cf">
    <div id="logo-top" class="first">
      <a href="/"><img src="/sites/all/themes/candidate_themes/bling_nateeanes/img/IRClogo_160px.jpg" /></a>
    </div>
    
    <div class="grid-3 last" id="header_right">
      <img src="/sites/all/themes/candidate_themes/bling_nateeanes/img/efficiency.png" /><br />
      More than ninety cents of every dollar we spend is used to support IRC programs.
    </div>

    <div class="grid-6" id="donation-message">
      <?php if ($title): print '<h1>'. $title .'</h1>'; endif; ?>
      <p>On the ground in some of the world&#39;s most troubled places, the IRC helps people at their moment of greatest need &mdash; providing shelter, medical care, and safety. And we stay for as long as we are able to help in the rebuilding of lives and livelihoods.</p>
      <p><strong>Make a tax-deductible gift to help the IRC aid refugees around the world.</strong></p>
    </div>
  </div><!-- /inner -->
</div><!--/header gridwrap-->

<div class="gridwrap pagewrap cf content">
  <div class="inner cf">
    <div class="grid-12 first last">
      <?php if (!empty($tabs['#primary'])): 
        print '<ul class="tabs primary">'. render($tabs) .'</ul>'; 
      endif; ?>
      <?php if ($show_messages && $messages): 
        print $messages; 
      endif; ?>
      <div id="ratings_from">
        <h2>The IRC has earned the highest ratings from:</h2>
        <img src="/sites/all/themes/candidate_themes/bling_nateeanes/img/sidebar_ratings.jpg" />
      </div>
      <?php print render($page['content']); ?>
    </div>
  </div><!-- /inner -->
</div><!--gridwrap-->

<div class="gridwrap pagewrap cf foot">
  <div class="inner cf">
    <div class="grid-4 first">
      <img src="/sites/all/themes/candidate_themes/bling_nateeanes/img/certifications.png" /><br />
    </div>

    <div class="grid-6 first last">
      Of every $1 the IRC spends, more than 90 cents goes to programs and services that directly benefit refugees and war affected populations.<br /><br />
      Donors living outside the US and Canada, please use our<br />
      <a href="/donate/international">international donation form</a>
    </div>
  </div><!-- /inner -->
</div><!--gridwrap-->

<div class="container cf close">
  <p class="footer-line">
    <strong>International Rescue Committee</strong> <strong>|</strong> 122
    East 42nd Street New York, NY 10168 USA <strong>|</strong> Phone: +1
    212 551 3000 <strong>|</strong> Donate: +1 855 9RESCUE
    <strong>|</strong> <a href="http://www.rescue.org/respecting-your-privacy" target="_blank">Privacy Policy</a>
  </p>
  
  <p class="footer-line">
    IRC is a 501(c)(3) not-for-profit organization <strong>|</strong>
    Copyright &copy; International Rescue Committee, <?php echo date("Y"); ?>
  </p>
</div>

</div><!--container-->
