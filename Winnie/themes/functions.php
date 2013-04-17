<?php
/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/
/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $win = CWinnie::Instance();  
  $html = null;
  if(isset($win->config['debug']['db-num-queries']) && $win->config['debug']['db-num-queries'] && isset($win->db)) {
    $html .= "<p>Database made " . $win->db->GetNumQueries() . " queries.</p>";
  }    
  if(isset($win->config['debug']['db-queries']) && $win->config['debug']['db-queries'] && isset($win->db)) {
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $win->db->GetQueries()) . "</pre>";
  }    
  if(isset($win->config['debug']['winnie']) && $win->config['debug']['winnie']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CWinnie:</p><pre>" . htmlent(print_r($win, true)) . "</pre>";
  }    
  return $html;
}



/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CWinnie::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return CWinnie::Instance()->request->current_url;
}
