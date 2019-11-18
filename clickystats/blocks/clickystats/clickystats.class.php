<?php
namespace Block;
/**
 * Clicky Stats - Main Class
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
 * @link    http://www.schlix.com
 */
class ClickyStats extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                $affiliate_badge = $this->config['bool_affiliate_badge'];
                $track_no_js = $this->config['bool_track_no_js'];
                $clicky_tracking_number = $this->config['str_clicky_tracking_number'];
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
