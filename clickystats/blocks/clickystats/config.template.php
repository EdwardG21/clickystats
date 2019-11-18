<?php
/**
 * Clicky Stats - Config
 * 
 * 
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
<p><?= ___('Clicky Configuration') ?></p>
<!-- Example begins -->
<schlix-config:textbox config-key='str_clicky_tracking_number' label='<?= ___('Tracking Number') ?>' class='form-control' />


<schlix-config:checkbox config-key='bool_affiliate_badge' label='<?= ___('Affiliate badge') ?>' />
<schlix-config:checkbox config-key='bool_track_no_js' label='<?= ___('Track visitors without javascript') ?>' />

<!-- Example Ends -->
