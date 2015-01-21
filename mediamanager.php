<?php
/**
 * DokuWiki Default Template.
 *
 * This is the template for the media manager popup.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 * @author Mark C. Prins <mprins@users.sf.net>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html>
<html lang="<?php echo $conf['lang']?>" id="mediamanager" dir="<?php echo $lang['direction']?>">
<head<?php if (tpl_getConf('opengraphheading')) { ?> prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place# book: http://ogp.me/ns/book#"<?php } ?>>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    <?php echo hsc($lang['mediaselect'])?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>
  <?php tpl_metaheaders()?>
  <?php echo tpl_favicon() ?>
</head>

<body>
<div id="media__manager" class="dokuwiki">
    <div id="media__left">
        <?php html_msgarea()?>
        <h1><?php echo hsc($lang['mediaselect'])?></h1>

        <?php /* keep the id! additional elements are inserted via JS here */?>
        <div id="media__opts"></div>

        <?php tpl_mediaTree() ?>
    </div>

    <div id="media__right">
        <?php tpl_mediaContent() ?>
    </div>
</div>
</body>
</html>
