<?php
/*
 * MyBB: [jQuery] Smooth Scroll to Top Bottom
 *
 * File: smoothtotopbottom.php
 * 
 * Authors: Vintagedaddyo
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 1.2
 * 
 */

// Disallow direct access to this file for security reasons

if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$plugins->add_hook("pre_output_page","smoothtotopbottom");

function smoothtotopbottom_info()
{
    global $lang;

    $lang->load("smoothtotopbottom");
    
    $lang->smoothtotopbottom_Desc = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;">' .
        '<input type="hidden" name="cmd" value="_s-xclick">' . 
        '<input type="hidden" name="hosted_button_id" value="AZE6ZNZPBPVUL">' .
        '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">' .
        '<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">' .
        '</form>' . $lang->smoothtotopbottom_Desc;

    return Array(
        'name' => $lang->smoothtotopbottom_Name,
        'description' => $lang->smoothtotopbottom_Desc,
        'website' => $lang->smoothtotopbottom_Web,
        'author' => $lang->smoothtotopbottom_Auth,
        'authorsite' => $lang->smoothtotopbottom_AuthSite,
        'version' => $lang->smoothtotopbottom_Ver,
        'compatibility' => $lang->smoothtotopbottom_Compat
    );
}

// Activate

function smoothtotopbottom_activate() {

global $db, $lang;

    $lang->load("smoothtotopbottom");

$smoothtotopbottom_group = array(
        'gid'    => '0',
        'name'  => 'smoothtotopbottom',
        'title'      => $lang->smoothtotopbottom_settings_Title,
        'description'    => $lang->smoothtotopbottom_settings_Description,
        'disporder'    => "1",
        'isdefault'  => "0",
    );

$db->insert_query('settinggroups', $smoothtotopbottom_group);

 $gid = $db->insert_id();

$smoothtotopbottom_setting_1 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable',
        'title'            => $lang->smoothtotopbottom_option_1_Title,
        'description'    => $lang->smoothtotopbottom_option_1_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 1,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_2 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_input',
        'title'            => $lang->smoothtotopbottom_option_2_Title,
        'description'    => $lang->smoothtotopbottom_option_2_Description,
        'optionscode'    => 'textarea',
        'value'        => $lang->smoothtotopbottom_options_2_Site,
        'disporder'        => 2,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_3 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_index',
        'title'            => $lang->smoothtotopbottom_option_3_Title,
        'description'    => $lang->smoothtotopbottom_option_3_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 3,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_4 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_forumdisplay',
        'title'            => $lang->smoothtotopbottom_option_4_Title,
        'description'    => $lang->smoothtotopbottom_option_4_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 4,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_5 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_showthread',
        'title'            => $lang->smoothtotopbottom_option_5_Title,
        'description'    => $lang->smoothtotopbottom_option_5_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 5,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_6 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_memberlist',
        'title'            => $lang->smoothtotopbottom_option_6_Title,
        'description'    => $lang->smoothtotopbottom_option_6_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 6,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_7 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_member',
        'title'            => $lang->smoothtotopbottom_option_7_Title,
        'description'    => $lang->smoothtotopbottom_option_7_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 7,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_8 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_misc',
        'title'            => $lang->smoothtotopbottom_option_8_Title,
        'description'    => $lang->smoothtotopbottom_option_8_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 8,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_9 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_search',
        'title'            => $lang->smoothtotopbottom_option_9_Title,
        'description'    => $lang->smoothtotopbottom_option_9_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 9,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_10 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_modcp',
        'title'            => $lang->smoothtotopbottom_option_10_Title,
        'description'    => $lang->smoothtotopbottom_option_10_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 10,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_11 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_usercp',
        'title'            => $lang->smoothtotopbottom_option_11_Title,
        'description'    => $lang->smoothtotopbottom_option_11_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 11,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_12 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_private',
        'title'            => $lang->smoothtotopbottom_option_12_Title,
        'description'    => $lang->smoothtotopbottom_option_12_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 12,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_13 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_printthread',
        'title'            => $lang->smoothtotopbottom_option_13_Title,
        'description'    => $lang->smoothtotopbottom_option_13_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 13,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_14 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_calendar',
        'title'            => $lang->smoothtotopbottom_option_14_Title,
        'description'    => $lang->smoothtotopbottom_option_14_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 14,
        'gid'            => intval($gid),
    );

$smoothtotopbottom_setting_15 = array(
        'sid'            => '0',
        'name'        => 'smoothtotopbottom_enable_portal',
        'title'            => $lang->smoothtotopbottom_option_15_Title,
        'description'    => $lang->smoothtotopbottom_option_15_Description,
        'optionscode'    => 'yesno',
        'value'        => '1',
        'disporder'        => 15,
        'gid'            => intval($gid),
    );

$db->insert_query('settings', $smoothtotopbottom_setting_1);
// $db->insert_query('settings', $smoothtotopbottom_setting_2);
$db->insert_query('settings', $smoothtotopbottom_setting_3);
$db->insert_query('settings', $smoothtotopbottom_setting_4);
$db->insert_query('settings', $smoothtotopbottom_setting_5);
$db->insert_query('settings', $smoothtotopbottom_setting_6);
$db->insert_query('settings', $smoothtotopbottom_setting_7);
$db->insert_query('settings', $smoothtotopbottom_setting_8);
$db->insert_query('settings', $smoothtotopbottom_setting_9);
$db->insert_query('settings', $smoothtotopbottom_setting_10);
$db->insert_query('settings', $smoothtotopbottom_setting_11);
$db->insert_query('settings', $smoothtotopbottom_setting_12);
$db->insert_query('settings', $smoothtotopbottom_setting_13);
$db->insert_query('settings', $smoothtotopbottom_setting_14);
$db->insert_query('settings', $smoothtotopbottom_setting_15);

rebuild_settings(); 

}

// Deactivate

function smoothtotopbottom_deactivate()
{

  global $db, $lang;

    $lang->load("smoothtotopbottom");

 $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name IN ('smoothtotopbottom_enable')");
    $db->query("DELETE FROM ".TABLE_PREFIX."settinggroups WHERE name='smoothtotopbottom'");

rebuild_settings();

}

function smoothtotopbottom($page)
{
	global $mybb,$db;

 if ($mybb->settings['smoothtotopbottom_enable'] == 1){

 if ($mybb->settings['smoothtotopbottom_enable_index'] == 1){

        if(THIS_SCRIPT=="index.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_forumdisplay'] == 1){

	    if(THIS_SCRIPT=="forumdisplay.php")
	{
		{
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
			
			return $page;
		}
	}
}

 if ($mybb->settings['smoothtotopbottom_enable_showthread'] == 1){

        if(THIS_SCRIPT=="showthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_memberlist'] == 1){

        if(THIS_SCRIPT=="memberlist.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_member'] == 1){

        if(THIS_SCRIPT=="member.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_misc'] == 1){

        if(THIS_SCRIPT=="misc.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_search'] == 1){

        if(THIS_SCRIPT=="search.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_modcp'] == 1){

        if(THIS_SCRIPT=="modcp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_usercp'] == 1){

        if(THIS_SCRIPT=="usercp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_private'] == 1){

        if(THIS_SCRIPT=="private.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_printthread'] == 1){

        if(THIS_SCRIPT=="printthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_calendar'] == 1){

        if(THIS_SCRIPT=="calendar.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
            
            return $page;
        }
    }
}

 if ($mybb->settings['smoothtotopbottom_enable_portal'] == 1){

        if(THIS_SCRIPT=="portal.php")
	{

		{
			$page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/css/smoothtotopbottom.css" />
<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/font-awesome/css/font-awesome.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/jquery.totop.js"></script>
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/smoothtotopbottom/js/init_nofa.js"></script>
</head>',$page);

            $page=str_replace("<span id=\"copyright\">",'<div id="totopscroller"></div><span id=\"copyright\">',$page);
			
			return $page;
		}
	}
}

}
}
?>