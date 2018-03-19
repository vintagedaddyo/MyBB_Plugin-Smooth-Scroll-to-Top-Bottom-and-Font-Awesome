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
 * Plugin Version: 1.1
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


function smoothtotopbottom($page)
{
	global $mybb,$db;


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

?>