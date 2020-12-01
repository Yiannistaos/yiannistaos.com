<?php require_once("settings.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yiannis Christodoulou | Freelance Full-stack PHP Web Developer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I am Yiannis Christodoulou and this is my personal website. I am a freelance Full-stack PHP Web Developer and the guy behind Web357. I love building websites and applications with Joomla! and WordPress.">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.yiannistaos.com/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.yiannistaos.com/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.yiannistaos.com/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.yiannistaos.com/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.yiannistaos.com/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.yiannistaos.com/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.yiannistaos.com/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.yiannistaos.com/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.yiannistaos.com/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://www.yiannistaos.com/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.yiannistaos.com/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://www.yiannistaos.com/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.yiannistaos.com/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://www.yiannistaos.com/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://www.yiannistaos.com/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="google-site-verification" content="D-Uhf4uLWZBt23F8Uge-hGkMSyHKlvU4ar9e-1y4k5Q" />
    
    <!-- FACEBOOK OG TAGS -->
    <meta property="og:url" content="https://www.yiannistaos.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Yiannis Christodoulou - Freelance Full-stack PHP Web Developer" />
    <meta property="og:description" content="I am Yiannis Christodoulou and this is my personal website. I am a freelance Full-stack PHP Web Developer and the guy behind Web357. I love building websites and applications with Joomla! and WordPress." />
    <meta property="og:image" content="https://www.yiannistaos.com/images/yiannistaos_pic_2015_200x200.png" />
    <meta property="fb:app_id" content="108080083362044" />
    
    <!-- CSS STYLING -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />
    <link href="https://www.yiannistaos.com/css/style.min.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KZXM53T');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZXM53T"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
   
    <!-- PROFILE PICTURE AND NAME -->
    <div class="uk-text-center uk-margin-large-bottom">
        <div>
            <img src="https://www.yiannistaos.com/images/yiannistaos_pic_2015_160x160.jpg" title="Yiannis Christodoulou" alt="Yiannis Christodoulou">
        </div>
        <div class="uk-margin">
            <div><span class="uk-text-bold">Yiannis Christodoulou</span></div>
            <div>Full-stack PHP Web Developer</div>
            <div>Founder &amp; Lead Developer at <a href="https://www.web357.com/" title="Useful extensions for Joomla!">Web357</a></div>
        </div>
    </div>

    <div class="uk-grid-divider uk-child-width-expand@l" uk-grid>
    
        <!-- HELLO MESSAGE -->
        <div class="uk-width-1-2@l">
            <h4>About me</h4>
            
            <p>Hey, I am Yiannis Christodoulou.</p>

            <p>I am <?php echo $age; ?> years old and I was born in beatiful <a href="https://en.wikipedia.org/wiki/Rhodes">Rhodes island of Greece</a>. Today, I live in <a href="https://en.wikipedia.org/wiki/Cyprus">Cyprus</a>, since January 2011.</p>

            <p>I am a freelance Full-stack PHP Web Developer and the guy behind <a href="https://www.web357.com/" title="Useful extensions for Joomla!">Web357</a>. I love building websites and applications with <a href="https://www.joomla.org/">Joomla!</a> and <a href="https://www.wordpress.org/">WordPress</a>. Also I love travels, food, video games and football.</p>

            <h4>Send me a message</h4>
            <p>Feel free to send me a message at <strong>yiannis{@}web357{dot}com</strong></p>      

            <h4>You can also find me at Social Media</h4>
            <div class="uk-display-inline-block yt-margin-right">
                <a href="https://www.facebook.com/Yiannistaos" title="Facebook" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: facebook"></span>
                </a>
            </div>
            <div class="uk-display-inline-block yt-margin-right">
                <a href="https://twitter.com/Yiannistaos" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: twitter"></span>
                </a>
            </div>
            <div class="uk-display-inline-block yt-margin-right">
                <a href="https://www.instagram.com/yiannistaos/" title="Instagram" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: instagram"></span>
                </a>
            </div>
            <div class="uk-display-inline-block yt-margin-right">
                <a href="https://cy.linkedin.com/in/yiannis-christodoulou-3a7b5514" title="Linkedin" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: linkedin"></span>
                </a>
            </div>
            <div class="uk-display-inline-block yt-margin-right">
                <a href="https://volunteers.joomla.org/joomlers/yiannis-christodoulou" title="Joomla!" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: joomla"></span>
                </a>
            </div>
            <div class="uk-display-inline-block yt-margin-right">
                <a href="https://profiles.wordpress.org/yiannistaos" title="WordPress" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: wordpress"></span>
                </a>
            </div>
            <div class="uk-display-inline-block">
                <a href="https://github.com/Yiannistaos" title="Github" class="yt-social-link">
                    <span class="uk-icon-button" uk-icon="icon: github"></span>
                </a>
            </div>

        </div>

        <!-- PROJECTS (THIS YEAR) -->
        <div class="uk-width-expand@s">
            <h4>Websites I've developed this year</h4>
            <ul class="uk-list uk-list-divider">
                <?php for ($i=0; $i<count($websites_this_year); $i++): ?>
                    <li>
                        <a href="<?php echo $websites_this_year[$i][1]; ?>?utm_source=Yiannistaoscom&utm_medium=Yiannistaoscom-WebsiteVisitLink&utm_content=Yiannistaoscom-WebsiteVisitLink&utm_campaign=YiannistaoscomVisitLink"><?php echo $websites_this_year[$i][0]; ?></a> 

                        <?php if (isset($websites_this_year[$i][2])): ?>
                            <span class="uk-label uk-label-success uk-margin-small-left">
                                <?php echo $websites_this_year[$i][2]; ?>
                            </span>
                        <?php endif; ?>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>

        <!-- PROJECTS (EARLIER) -->
        <div class="uk-width-expand@s">
            <h4>Websites I've developed earlier</h4>
            <ul class="uk-list uk-list-divider">
                <?php for ($i=0; $i<count($websites_earlier); $i++): ?>
                    <li>
                        <a href="<?php echo $websites_earlier[$i][1]; ?>?utm_source=Yiannistaoscom&utm_medium=Yiannistaoscom-WebsiteVisitLink&utm_content=Yiannistaoscom-WebsiteVisitLink&utm_campaign=YiannistaoscomVisitLink"><?php echo $websites_earlier[$i][0]; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>

    </div>

    <!-- FOOTER -->
    <hr class="uk-margin-large-top">
    <footer class="uk-text-center uk-margin-large-bottom">
        <div class="uk-margin-medium-top">
            <div class="uk-text-muted">
                Copyright &copy; <?php echo date('Y'); ?> - Yiannis Christodoulou - All rights reserved.
            </div>
        </div>
    </footer>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js"></script>
</body>
</html>