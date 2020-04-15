<?php
/**
 * Clicky Stats - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package clickystats
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php if ($clicky_tracking_number): ?>
    <?= ___h($clicky_tracking_number) ?>
    <?php if ($affiliate_badge): ?>
        <a title="Real Time Web Analytics" href="http://clicky.com/<?= ___h($clicky_tracking_number) ?>"><img src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
    <?php endif ?>
    <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(<?= ___h($clicky_tracking_number) ?>);</script>
    <script async src="//static.getclicky.com/js"></script>
    <?php if ($track_no_js): ?>
        <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/<?= ___h($clicky_tracking_number) ?>ns.gif" /></p></noscript>
    <?php endif ?>
<?php else: ?>
    <x-ui:alert type="danger">
        <?= ___('Clicky tracking number has not been provided') ?>
    </x-ui:alert>

<?php endif ?>
