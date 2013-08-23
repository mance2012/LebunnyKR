<?php
/**
 * @file
 * Photo Theme implementation to display a single Drupal page.
 * structure of a single Drupal page.
 */
?>
 
  <!--div id="slideshow">							
	<img src="http://www.lebunnybleu.com/TT/new2/img/home_1280.jpg" alt="Css Template Preview" />
	<img src="http://www.lebunnybleu.com/TT/new2/img/collection_1280.jpg" alt="Css Template Preview" />
	<img src="http://www.lebunnybleu.com/TT/new2/img/store_1280.jpg" alt="Css Template Preview" />
	<img src="http://www.lebunnybleu.com/TT/new2/img/brand_1280.jpg" alt="Css Template Preview" />
	<img src="http://www.lebunnybleu.com/TT/new2/img/cs_1281.jpg" alt="Css Template Preview" />		
</div><!--#slider-->
<!--div id="header">
      
 
 </div><!--end header-->

<div class="master">
    	<span class="logo"> 
    		<?php if ($logo): ?>
		      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		      </a>
    		<?php endif; ?>
    	</span>
        
<!---------------------------------------DropMenu------------------------------->       
        <header class="ui" id="home">
        	<nav>
                <ul>
                    <li class="menu on"><a class="icon_menu"><span class="icon-menu"></span></a>
                        <?php
							$menu = menu_navigation_links('main-menu');
							print theme('links__system_main_menu', array('links' => $menu));
						?>
                    </li>
                </ul>        	
            </nav>
            
        </header>
<!----------------------------------------Dropmenu------------------------------------>



<!----------------------------------------Center Content------------------------------------>
        <div role="marquee" id="hero" style="height: 314px;">
            <div class="carousel">
            	<nav>
                    <a href="#prev" class="prev" title="Previous" data-action="prev" ></a>
                    <a href="#next" class="next" title="Next" data-action="next" ></a>
                <div class="pagination" id="hero_nav"><ol><li class="active"><a href="#1" data-action="1">1</a></li><li><a href="#2" data-action="2">2</a></li><li><a href="#3" data-action="3">3</a></li><li><a href="#4" data-action="4">4</a></li></ol></div>
                </nav>
                <div class="swipe" style="visibility: visible;">
                    <div class="swipe-wrap">
                        <div class="panel"  data-index="0">
                            <section class="wrapper">
                                <header>
                                	<div class="headerBG">
                                        <span class="mainBG" style="display:none;"></span>
                                        <h1><img src="sites/all/themes/photo/img/home_welcom.png" /></h1>
                                        <ul>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag01.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag02.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag03.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag04.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag05.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag06.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag07.jpg" /></a></li>
                                            <li><a href="#"><img src="sites/all/themes/photo/img/Flag08.jpg" /></a></li>
                                             <li><a href="#"><img src="sites/all/themes/photo/img/Flag_last.jpg" /></a></li>
                                        </ul>
                                    </div>
                                </header>
                            </section>
                            <section class="bg"></section>
                        </div>
                        
                    </div>
                </div>
                
                
                
            </div>
        </div>
<!----------------------------------------Center Content------------------------------------>        
        
</div>