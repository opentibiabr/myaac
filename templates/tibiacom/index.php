<?php
defined('MYAAC') or die('Direct access not allowed!');

if(isset($config['boxes']))
	$config['boxes'] = explode(",", $config['boxes']);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo template_place_holder('head_start'); ?>
	<link rel="shortcut icon" href="<?php echo $template_path; ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo $template_path; ?>/images/favicon.ico" type="image/x-icon" />
	<link href="<?php echo $template_path; ?>/basic.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="tools/basic.js"></script>
	<script type="text/javascript" src="<?php echo $template_path; ?>/ticker.js"></script>
	<script id="twitter-wjs" src="<?php echo $template_path; ?>/js/twitter.js"></script>
	<script id="facebook-jssdk" async src="https://connect.facebook.net/en_US/all.js"></script>
	<link href="<?php echo $template_path; ?>/css/facebook.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		var menus = '';
		var loginStatus="<?php echo ($logged ? 'true' : 'false'); ?>";
		<?php
			if(PAGE !== 'news') {
				if(strpos(URI, 'subtopic=') !== false) {
					$tmp = $_REQUEST['subtopic'];
					if($tmp === 'accountmanagement') {
						$tmp = 'accountmanage';
					}
				}
				else {
					$tmp = str_replace('/', '', URI);
					$exp = explode('/', URI);
					if(URI !== 'account/create' && URI !== 'account/lost' && isset($exp[1])) {
						if ($exp[0] === 'account') {
							$tmp = 'accountmanage';
						} else if ($exp[0] === 'news' && $exp[1] === 'archive') {
							$tmp = 'newsarchive';
						}
						else
							$tmp = $exp[0];
					}
				}
			}
			else {
				$tmp = 'news';
			}
		?>
		var activeSubmenuItem="<?php echo $tmp; ?>";
		var IMAGES="<?php echo $template_path; ?>/images";
		var LINK_ACCOUNT="<?php echo BASE_URL; ?>";

		function rowOverEffect(object) {
			if (object.className == 'moduleRow') object.className = 'moduleRowOver';
		}

		function rowOutEffect(object) {
			if (object.className == 'moduleRowOver') object.className = 'moduleRow';
		}

		function InitializePage() {
		  LoadLoginBox();
		  LoadMenu();
		}

		// initialisation of the loginbox status by the value of the variable 'loginStatus' which is provided to the HTML-document by PHP in the file 'header.inc'
		function LoadLoginBox()
		{
		  if(loginStatus == "false") {
			document.getElementById('ButtonText').style.backgroundImage = "url('" + IMAGES + "/global/buttons/mediumbutton_login.png.gif')";
			document.getElementById('LoginstatusText_2').style.backgroundImage = "url('" + IMAGES + "/loginbox/loginbox-font-create-account.gif')";
			document.getElementById('LoginstatusText_2_1').style.backgroundImage = "url('" + IMAGES + "/loginbox/loginbox-font-create-account.gif')";
			document.getElementById('LoginstatusText_2_2').style.backgroundImage = "url('" + IMAGES + "/loginbox/loginbox-font-create-account-over.gif')";
		  } else {
			document.getElementById('ButtonText').style.backgroundImage = "url('" + IMAGES + "/global/buttons/mediumbutton_myaccount.png')";
			document.getElementById('LoginstatusText_2').style.backgroundImage = "url('" + IMAGES + "/loginbox/loginbox-font-logout.gif')";
			document.getElementById('LoginstatusText_2_1').style.backgroundImage = "url('" + IMAGES + "/loginbox/loginbox-font-logout.gif')";
			document.getElementById('LoginstatusText_2_2').style.backgroundImage = "url('" + IMAGES + "/loginbox/loginbox-font-logout-over.gif')";
		  }
		}

		// mouse-over and click events of the loginbox
		function MouseOverLoginBoxText(source)
		{
		  source.lastChild.style.visibility = "visible";
		  source.firstChild.style.visibility = "hidden";
		}
		function MouseOutLoginBoxText(source)
		{
		  source.firstChild.style.visibility = "visible";
		  source.lastChild.style.visibility = "hidden";
		}
		function LoginButtonAction()
		{
		  if(loginStatus == "false") {
			window.location = "<?php echo getLink('account/manage'); ?>";
		  } else {
			window.location = "<?php echo getLink('account/manage'); ?>";
		  }
		}
		function LoginstatusTextAction(source) {
		  if(loginStatus == "false") {
			window.location = "<?php echo getLink('account/create'); ?>";
		  } else {
			window.location = "<?php echo getLink('account/logout'); ?>";
		  }
		}

		var menu = [];
		menu[0] = {};
		var unloadhelper = false;

		// load the menu and set the active submenu item by using the variable 'activeSubmenuItem'
		function LoadMenu()
		{
		  document.getElementById("submenu_"+activeSubmenuItem).style.color = "white";
		  document.getElementById("ActiveSubmenuItemIcon_"+activeSubmenuItem).style.visibility = "visible";
		  menus = localStorage.getItem('menus');
		  if(menus.lastIndexOf("&") === -1) {
			  menus = "news=1&account=0&community=0&library=0&forum=0<?php if($config['gifts_system']) echo '&shops=0'; ?>&";
		  }
		  FillMenuArray();
		  InitializeMenu();
		}

		function SaveMenu()
		{
		  if(unloadhelper == false) {
			SaveMenuArray();
			unloadhelper = true;
		  }
		}

		// store the values of the variable 'self.name' in the array menu
		function FillMenuArray()
		{
			while(menus.length > 0 ){
				var mark1 = menus.indexOf("=");
				var mark2 = menus.indexOf("&");
				var menuItemName = menus.substr(0, mark1);
				menu[0][menuItemName] = menus.substring(mark1 + 1, mark2);
				menus = menus.substr(mark2 + 1, menus.length);
			}
		}

		// hide or show the corresponding submenus
		function InitializeMenu()
		{
		  for(menuItemName in menu[0]) {
			if(menu[0][menuItemName] == "0") {
			  document.getElementById(menuItemName+"_Submenu").style.visibility = "hidden";
			  document.getElementById(menuItemName+"_Submenu").style.display = "none";
			  document.getElementById(menuItemName+"_Lights").style.visibility = "visible";
			  document.getElementById(menuItemName+"_Extend").style.backgroundImage = "url(" + IMAGES + "/general/plus.gif)";
			}
			else {
			  document.getElementById(menuItemName+"_Submenu").style.visibility = "visible";
			  document.getElementById(menuItemName+"_Submenu").style.display = "block";
			  document.getElementById(menuItemName+"_Lights").style.visibility = "hidden";
			  document.getElementById(menuItemName+"_Extend").style.backgroundImage = "url(" + IMAGES + "/general/minus.gif)";
			}
		  }
		}

		function SaveMenuArray()
		{
			var stringSlices = "";
			var temp = "";

			for(menuItemName in menu[0]) {
				stringSlices = menuItemName + "=" + menu[0][menuItemName] + "&";
				temp = temp + stringSlices;
			}

			localStorage.setItem('menus', temp);
		}

		// onClick open or close submenus
		function MenuItemAction(sourceId)
		{
		  if(menu[0][sourceId] == 1) {
			CloseMenuItem(sourceId);
		  }
		  else {
			OpenMenuItem(sourceId);
		  }
		}
		function OpenMenuItem(sourceId)
		{
		  menu[0][sourceId] = 1;
		  document.getElementById(sourceId+"_Submenu").style.visibility = "visible";
		  document.getElementById(sourceId+"_Submenu").style.display = "block";
		  document.getElementById(sourceId+"_Lights").style.visibility = "hidden";
		  document.getElementById(sourceId+"_Extend").style.backgroundImage = "url(" + IMAGES + "/general/minus.gif)";
		}
		function CloseMenuItem(sourceId)
		{
		  menu[0][sourceId] = 0;
		  document.getElementById(sourceId+"_Submenu").style.visibility = "hidden";
		  document.getElementById(sourceId+"_Submenu").style.display = "none";
		  document.getElementById(sourceId+"_Lights").style.visibility = "visible";
		  document.getElementById(sourceId+"_Extend").style.backgroundImage = "url(" + IMAGES + "/general/plus.gif)";
		}

		// mouse-over effects of menubuttons and submenuitems
		function MouseOverMenuItem(source)
		{
		  source.firstChild.style.visibility = "visible";
		}
		function MouseOutMenuItem(source)
		{
		  source.firstChild.style.visibility = "hidden";
		}
		function MouseOverSubmenuItem(source)
		{
		  source.style.backgroundColor = "#14433F";
		}
		function MouseOutSubmenuItem(source)
		{
		  source.style.backgroundColor = "#0D2E2B";
		}
	</script>
	<?php echo template_place_holder('head_end'); ?>
</head>
<body onBeforeUnLoad="SaveMenu();" onUnload="SaveMenu();">
	<?php echo template_place_holder('body_start'); ?>
	<?php if(!empty($config['network_facebook'])) {?>
	<script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                appId      : 497232093667125, // App ID
                status     : true,              // check login status
                cookie     : true,              // enable cookies to allow the server to access the session
                xfbml      : true               // parse XFBML
            });
            FB.Event.subscribe('auth.login', function() {
                var URLHelper = "?";
                if (window.location.search.replace("?", "").length > 0) {
                    URLHelper = "&";
                }
                if (FB_TryLogin == 1) {
                    window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
                } else if (FB_TryLogin == 2) {
                    window.location = window.location + URLHelper + "page=facebooktrylogin&wasreloaded=1";
                } else {
                    window.location = window.location + URLHelper + "wasreloaded=1";
                }
            });
            FB.Event.subscribe('auth.logout', function(a_Response) {
                if (a_Response.status !== 'connected') {
                    window.location.href=window.location.href;
                } else {
                    /* nothing to do here*/
                }
            });
            FB.Event.subscribe('auth.statusChange', function(response) {
                if (FB_ForceReload == 1 && response.status == "connected") {
                    var URLHelper = "?";
                    if (window.location.search.replace("?", "").length > 0) {
                        URLHelper = "&";
                    }
                    window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
                }
            });
        };
        (function(d){
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
	</script>
	<?php } ?>
  <div id="top"></div>
  <div id="ArtworkHelper" style="background-image:url(<?php echo $template_path; ?>/images/header/<?php echo $config['background_image']; ?>);" >
    <div id="Bodycontainer">
      <div id="ContentRow">
        <div id="MenuColumn">
          <div id="LeftArtwork">
            <img id="TibiaLogoArtworkTop" src="<?php echo $template_path; ?>/images/header/<?php echo $config['logo_image']; ?>" onClick="window.location = '<?php echo getLink('news')?>';" alt="logoartwork" />
            <img id="LogoLink" src="<?php echo $template_path; ?>/images/header/tibia-logo-artwork-string.gif" onClick="window.location = 'mailto:<?php echo $config['mail_address']; ?>';" alt="logoartwork" />
          </div>

  <div id="Loginbox" >
    <div id="LoginTop" style="background-image:url(<?php echo $template_path; ?>/images/general/box-top.gif)" ></div>
    <div id="BorderLeft" class="LoginBorder" style="background-image:url(<?php echo $template_path; ?>/images/general/chain.gif)" ></div>

   

    <div id="LoginButtonContainer" style="background-image:url(<?php echo $template_path; ?>/images/loginbox/loginbox-textfield-background.gif)" >
      <div id="LoginButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/mediumbutton.gif)" >
        <div onClick="LoginButtonAction();" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);"><div class="Button" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/mediumbutton-over.gif)" ></div>
			<?php
          echo '<div id="ButtonText" '.($logged ? '' : 'style="background-image:url('.$template_path.'/images/global/buttons/mediumbutton_login.png)"').'>
			 </div>';
			 ?>
        </div>
      </div>

    </div>

    <div style="clear:both" ></div>

    <div class="Loginstatus" style="background-image:url(<?php echo $template_path; ?>/images/loginbox/loginbox-textfield-background.gif)" >
      <div id="LoginstatusText_2" onClick="LoginstatusTextAction(this);" onMouseOver="MouseOverLoginBoxText(this);" onMouseOut="MouseOutLoginBoxText(this);" ><div id="LoginstatusText_2_1" class="LoginstatusText" style="background-image:url(<?php echo $template_path; ?>/images/loginbox/loginbox-font-create-account.gif)" ></div><div id="LoginstatusText_2_2" class="LoginstatusText" style="background-image:url(<?php echo $template_path; ?>/images/loginbox/loginbox-font-create-account-over.gif)" ></div></div>
    </div>

    <div id="BorderRight" class="LoginBorder" style="background-image:url(<?php echo $template_path; ?>/images/general/chain.gif)" ></div>
    <div id="LoginBottom" class="Loginstatus" style="background-image:url(<?php echo $template_path; ?>/images/general/box-bottom.gif)" ></div>
  </div>
			
	<div class="SmallMenuBox" id="DownloadBox">
		<div class="SmallBoxTop" style="background-image:url(<?php echo $template_path; ?>/images/global/general/box-top.gif)"></div>
		<div class="SmallBoxBorder" style="background-image:url(<?php echo $template_path; ?>/images/global/general/chain.gif);"></div>
		<div class="SmallBoxButtonContainer" style="background-image:url(<?php echo $template_path; ?>/images/global/loginbox/loginbox-textfield-background.gif)">
			<a href="?downloadclient">
			<div id="PlayNowContainer">
				<div class="MediumButtonBackground" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/mediumbutton.gif)" onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="MediumButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/mediumbutton-over.gif); visibility: hidden;" ></div><input class="MediumButtonText" type="image" name="Download" alt="Download" src="<?php echo $template_path; ?>/images/global/buttons/mediumbutton_download.png"></div>
			</div>
			</a>
		</div>
	<div class="SmallBoxBorder BorderRight" style="background-image:url(<?php echo $template_path; ?>/images/global/general/chain.gif);"></div>
	<div class="Loginstatus SmallBoxBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/general/box-bottom.gif);"></div>
</div>

<div-- id='Menu'>
<div id='MenuTop' style='background-image:url(<?php echo $template_path; ?>/images/general/box-top.gif);'></div>

<?php
$menus = get_template_menus();

foreach($config['menu_categories'] as $id => $cat) {
	if(!isset($menus[$id]) || ($id == MENU_CATEGORY_SHOP && !$config['gifts_system'])) {
		continue;
	}
	?>
<div id='<?php echo $cat['id']; ?>' class='menuitem'>
	<span onClick="MenuItemAction('<?php echo $cat['id']; ?>')">
		<div class='MenuButton' style='background-image:url(<?php echo $template_path; ?>/images/menu/button-background.gif);'>
			<div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(<?php echo $template_path; ?>/images/menu/button-background-over.gif);'></div>
				<span id='<?php echo $cat['id']; ?>_Lights' class='Lights'>
					<div class='light_lu' style='background-image:url(<?php echo $template_path; ?>/images/menu/green-light.gif);'></div>
					<div class='light_ld' style='background-image:url(<?php echo $template_path; ?>/images/menu/green-light.gif);'></div>
					<div class='light_ru' style='background-image:url(<?php echo $template_path; ?>/images/menu/green-light.gif);'></div>
				</span>
				<div id='<?php echo $cat['id']; ?>_Icon' class='Icon' style='background-image:url(<?php echo $template_path; ?>/images/menu/icon-<?php echo $cat['id']; ?>.gif);'></div>
				<div id='<?php echo $cat['id']; ?>_Label' class='Label' style='background-image:url(<?php echo $template_path; ?>/images/menu/label-<?php echo $cat['id']; ?>.gif);'></div>
				<div id='<?php echo $cat['id']; ?>_Extend' class='Extend' style='background-image:url(<?php echo $template_path; ?>/images/general/plus.gif);'></div>
			</div>
		</div>
	</span>
	<div id='<?php echo $cat['id']; ?>_Submenu' class='Submenu'>
	<?php
		$default_menu_color = "ffffff";

		foreach($menus[$id] as $category => $menu) {
			$link_color = '#' . (strlen($menu['color']) == 0 ? $default_menu_color : $menu['color']);
			?>
			<a href='<?php echo $menu['link_full']; ?>'<?php echo $menu['blank'] ? ' target="_blank"' : ''?>>
				<div id='submenu_<?php echo str_replace('/', '', $menu['link']); ?>' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)' style="color: <?php echo $link_color; ?>;">
					<div class='LeftChain' style='background-image:url(<?php echo $template_path; ?>/images/general/chain.gif);'></div>
					<div id='ActiveSubmenuItemIcon_<?php echo str_replace('/', '', $menu['link']); ?>' class='ActiveSubmenuItemIcon' style='background-image:url(<?php echo $template_path; ?>/images/menu/icon-activesubmenu.gif);'></div>
					<div class='SubmenuitemLabel' style="color: <?php echo $link_color; ?>;"><?php echo $menu['name']; ?></div>
					<div class='RightChain' style='background-image:url(<?php echo $template_path; ?>/images/general/chain.gif);'></div>
				</div>
			</a>
			<?php
		}
	?>
	</div>
	<?php
	if($id == MENU_CATEGORY_SHOP || (!$config['gifts_system'] && $id == MENU_CATEGORY_SHOP - 1)) {
	?>
		<div id='MenuBottom' style='background-image:url(<?php echo $template_path; ?>/images/general/box-bottom.gif);'></div>
	<?php
	}
	?>
</div>
	<?php
	}
	?>
		<script type="text/javascript">
            InitializePage();
        </script>
        </div>
		

		
        <div id="ContentColumn">
			

			
          <div class="Content">
			  
			  
<div id="" class="Box">
	<div class="Corner-tl" style="background-image:url(<?php echo $template_path; ?>/images/global/content/corner-tl.gif);"></div>
	<div class="Corner-tr" style="background-image:url(<?php echo $template_path; ?>/images/global/content/corner-tr.gif);"></div>
	<div class="Border_1" style="background-image:url(<?php echo $template_path; ?>/images/global/content/border-1.gif);"></div>
	<div class="BorderTitleText" style="background-image:url(<?php echo $template_path; ?>/images/global/content/newsheadline_background.gif); height: 28px;">
		<div class="InfoBar">
				
<?php
	if(isset($config['discord_link'])){
?>
				<img class="InfoBarBigLogo" src="<?php echo $template_path; ?>/images/global/header/icon-discord.png">
				<span class="InfoBarNumbers">
					<a class="InfoBarLinks" href="<?php echo $config['discord_link']; ?>"><span class="InfoBarSmallElement">Join Discord</span></a>
				</span>
<?php
	}
?>
				<img class="InfoBarBigLogo" src="<?php echo $template_path; ?>/images/global/header/icon-download.png">
				<span class="InfoBarNumbers">
					<a class="InfoBarLinks" href="?downloadclient"><span class="InfoBarSmallElement">Download</span></a>
				</span>
				
				<span style="float: right;">
				<img class="InfoBarBigLogo" src="<?php echo $template_path; ?>/images/global/header/icon-players-online.png">
				<span class="InfoBarNumbers">
					<span class="InfoBarSmallElement">
						<a class="InfoBarLinks" href="">
							<?php
							if($status['online']){
								echo '' . $status['players'] . ' Players Online';
							} else {
								echo 'Server Offline';
							}
						?>
						</a>
					</span>
				</span>
			</span>
			
		</div>
	</div>
	<div class="Border_1" style="background-image:url(<?php echo $template_path; ?>/images/global/content/border-1.gif);"></div>
	<div class="CornerWrapper-b">
		<div class="Corner-bl" style="background-image:url(<?php echo $template_path; ?>/images/global/content/corner-bl.gif);"></div>
	</div>
	<div class="CornerWrapper-b">
		<div class="Corner-br" style="background-image:url(<?php echo $template_path; ?>/images/global/content/corner-br.gif);"></div>
	</div>
</div>
			  
			  
            <div id="ContentHelper">
			<?php echo tickers(); ?>


  <div id="<?php echo PAGE; ?>" class="Box">
    <div class="Corner-tl" style="background-image:url(<?php echo $template_path; ?>/images/content/corner-tl.gif);"></div>
    <div class="Corner-tr" style="background-image:url(<?php echo $template_path; ?>/images/content/corner-tr.gif);"></div>
    <div class="Border_1" style="background-image:url(<?php echo $template_path; ?>/images/content/border-1.gif);"></div>
    <div class="BorderTitleText" style="background-image:url(<?php echo $template_path; ?>/images/content/title-background-green.gif);"></div>
	<?php
	$headline = $template_path.'/images/header/headline-' . PAGE . '.gif';
	if(!file_exists($headline))
		$headline = $template_path . '/headline.php?t=' . ucfirst($title);
?>
	<img class="Title" src="<?php echo $headline; ?>" alt="Contentbox headline" />
    <div class="Border_2">
      <div class="Border_3">
		<?php $hooks->trigger(HOOK_TIBIACOM_BORDER_3); ?>
		<div class="BoxContent" style="background-image:url(<?php echo $template_path; ?>/images/content/scroll.gif);">
			<?php echo template_place_holder('center_top') . $content; ?>
		</div>
      </div>
    </div>
    <div class="Border_1" style="background-image:url(<?php echo $template_path; ?>/images/content/border-1.gif);"></div>

    <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(<?php echo $template_path; ?>/images/content/corner-bl.gif);"></div></div>
    <div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?php echo $template_path; ?>/images/content/corner-br.gif);"></div></div>
  </div>
           </div>
          </div>
          <div id="Footer"><?php echo template_footer(); ?><br/>Layout by CipSoft GmbH.</div>
        </div>
			
			
			
        <div id="ThemeboxesColumn">
<?PHP
$monsterquery = $SQL->query("SELECT `boostname`, `looktype`, `lookfeet` , `looklegs` , `lookhead` , `lookbody` , `lookaddons` , `lookmount`   FROM `boosted_creature`")->fetch();
$monstername = $monsterquery["boostname"];
$monstertype = $monsterquery["looktype"];
$monsterfeet = $monsterquery["lookfeet"];
$monsterlegs = $monsterquery["looklegs"];
$monsterhead = $monsterquery["lookhead"];
$monsterbody = $monsterquery["lookbody"];
$monsteraddons = $monsterquery["lookaddons"];
$monstermount= $monsterquery["lookmount"];
?>
          <div id="RightArtwork">
			<img id="Monster" src="<?php $config['outfit_images_url'] ?>/AnimatedOutfits/animoutfit.php?id=<?php echo $monstertype; ?>&addons=<?php echo $monsteraddons; ?>&head=<?php echo $monsterhead; ?>&body=<?php echo $monsterbody; ?>&legs=<?php echo $monsterlegs; ?>&feet=<?php echo $monsterfeet; ?>&mount=<?php echo $monstermount; ?>" alt="Monster of the Day" title="Today's boosted creature: <?PHP echo ucwords(strtolower(trim($monstername))); ?>">
            <img id="PedestalAndOnline" src="<?php echo $template_path; ?>/images/header/pedestal.gif" alt="Monster Pedestal and Players Online Box"/>
        </div>

        <div id="Themeboxes">
			<?php
			$twig_loader->prependPath(__DIR__ . '/boxes/templates');

			foreach($config['boxes'] as $box) {
				/** @var string $template_name */
				$file = TEMPLATES . $template_name . '/boxes/' . $box . '.php';
				if(file_exists($file)) {
					include($file); ?>
				<?php
				}
			}

	if($config['template_allow_change'])
		 echo '<span style="color: white">Template:</span><br/>' . template_form();
 ?>
        </div>
      </div>
     </div>
    </div>
  </div>
	<?php echo template_place_holder('body_end'); ?>


<style>
.scrollToTop {
  width: 70px;
  height: 70px;
  padding: 10px;
  text-align: center;
  font-weight: bold;
  color: #444;
  text-decoration: none;
  position: fixed;
  bottom: 10px;
  right: 10px;
  display: none;
  z-index: 50000;
}
.scrollToTop:hover {
  text-decoration: none;
  cursor: pointer;
}
</style>
<script>
	$(document).ready(function(){
		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}
		});
		//Click event to scroll to top
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
	});
</script>

<div class="scrollToTop" style="background: url(<?php echo $template_path; ?>/images/global/content/top.png) no-repeat 0 0;"><!--<p class="scrollToTopText">BACK</p>--></div>

</body>
</html>
<?php
function logo_monster() {
	global $config;
	return str_replace(" ", "", trim(strtolower($config['logo_monster'])));
}
?>

