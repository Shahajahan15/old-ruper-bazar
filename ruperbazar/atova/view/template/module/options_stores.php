<?php 
/******************************************************
 * @package	SO Theme Framework for Opencart 2.0.x
 * @author	http://www.magentech.com
 * @license	GNU General Public License
 * @copyright(C) 2008-2015 Magentech.com. All rights reserved.
*******************************************************/
require('options_field.php');

?>

<ul class="nav nav-tabs main_tabs">
    <li class="active"><a href="#tab-general<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_general; ?></a></li>
    <li><a href="#tab-layout<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_layout; ?></a></li>
    <li><a href="#tab-products<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_products; ?></a></li>
    <li><a href="#tab-fonts<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_fonts; ?></a></li>
    <li><a href="#tab-slide<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_social; ?></a></li>
    <li><a href="#tab-custom<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_custom; ?></a></li>
	<li><a href="#tab-sampledata<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $maintabs_sampledata; ?></a></li>
</ul>
<div class="tab-content">
    <!-------------------------------------Tab General---------------------------------->
    <div class="tab-pane active" id="tab-general<?php echo $store['store_id']; ?>">
        <ul class="nav nav-tabs  main_tabs_2 ">
            <li class="active"><a href="#tab-general-layout1-<?php echo $store['store_id']; ?>" class="selected" data-toggle="tab"><?php echo $general_tab_general; ?></a></li>
            <li><a href="#tab-general-layout2-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $general_tab_header; ?></a></li>
            <li><a href="#tab-general-layout3-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $general_tab_footer; ?> </a></li>
			<li><a href="#tab-general-layout5-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $general_tab_language; ?></a></li>
        </ul>

        <div class="tab-content ">
			<?php // General  Blocks--------------------------------------------- ?>
            <div class="tab-pane active" id="tab-general-layout1-<?php echo $store['store_id']; ?>">
				<div class="so-panel">
					<h3 class="panel-title">General</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Themes Color</label>
							<div class="col-sm-3">
								<?php echo field_select('soconfig_general_store',$soconfig_general_store,'themecolor',$themesColor); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" ><?php echo $general_res_layout; ?> </label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'layouts'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" ><?php echo $general_cpanel; ?> </label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'cpanel'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" ><?php echo $general_back_top; ?> </label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'backtop'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								<span data-toggle="tooltip" title="Reveals animations when you scroll">On scroll animations:</span>
							</label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'scroll_animation'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">  <?php echo $general_copyright; ?>  </label>
							<div class="col-sm-4">
								<?php echo field_text('soconfig_general_store',$soconfig_general_store,'copyright','Footer copyright content'); ?>
							</div>
						</div>
						
					</div>
                </div>
            </div>
           

			<?php // Header  Blocks--------------------------------------------- ?>
            <div id="tab-general-layout2-<?php echo $store['store_id']; ?>" class="tab-pane">
			
			<div class="so-panel">
				<h3 class="panel-title">Header layout</h3>
				<div class="panel-container">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="logo_position<?php echo $store["store_id"]; ?>">
							<span data-toggle="tooltip" title=" Other header elements will be adjusted with each option.">Logo position</span>
						</label>
						<div class="col-sm-10">
							<?php echo field_select('soconfig_general_store',$soconfig_general_store,'logo_position',$logos,'width15'); ?>
							<span class="help-block">Other header elements will be adjusted with each option.</span>
						</div>
					</div>
					<div class="form-group last">
						<label class="col-sm-2 control-label">Show a regular search box</label>
						<div class="col-sm-10" id="soconfig_general_store_searchbox">
							
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'searchbox'); ?>
							<span class="help-block">Only with logo aligned to the left</span>
						</div>
					</div>
                </div>
			</div>	
			
			<div class="so-panel">
				<h3 class="panel-title">Top Panel</h3>
				<div class="panel-container">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="logo_position<?php echo $store["store_id"]; ?>">
							Status:
						</label>
						<div class="col-sm-10">
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'toppanel_status'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" >
							Type:
						</label>
						<div class="col-sm-10">
							<?php echo field_select('soconfig_general_store',$soconfig_general_store,'toppanel_type',$toppanel_type,'width30'); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">
							<span data-toggle="tooltip" title="Upload image in path: image/catalog/ and write the name here">Image (Top panel):</span>
						</label>
						<div class="col-sm-9">
							<div class="help-block">Upload image in path: catalog/ and write here only name as "image.png"</div>
							<input type="text" name="soconfig_general_store[soconfig_toppanel]" value="<?php echo (isset($soconfig_general_store['soconfig_toppanel']) ? $soconfig_general_store['soconfig_toppanel'] : ''); ?>" placeholder="Background image" id="toppanel<?php echo $store["store_id"]; ?>" class="form-control width30" />
								
							
						</div>
					</div>
                </div>
			</div>
			
			<div class="so-panel">	
				<h3 class="panel-title">Top Bar</h3>
				<div class="panel-container">
					<div class="form-group">
						<label class="col-sm-2 control-label">Telephone No</label>
						<div class="col-sm-2" id="soconfig_general_store_headerspy_container">
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'phone_status'); ?>
						</div>
						<div class="col-sm-8" >
							<?php echo field_langHori('soconfig_general_store',$soconfig_general_store,'contact_number');?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Welcome Message</label>
						<div class="col-sm-2" >
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'welcome_message_status'); ?>
						</div>
						<div class="col-sm-8" >
							<?php echo field_langHori('soconfig_general_store',$soconfig_general_store,'welcome_message');?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Wishlist Link</label>
						<div class="col-sm-3" >
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'wishlist_status'); ?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Checkout Link</label>
						<div class="col-sm-3" >
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'checkout_status'); ?>
						</div>
					</div>
					
					<div class="form-group last">
						<label class="col-sm-2 control-label">Language/Currency Title</label>
						<div class="col-sm-3" >
							<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'lang_status'); ?>
						</div>
					</div>
				</div>
            </div>
			
            </div>

			
			<?php // Footer Blocks ----------------------------------------------- ?>
            <div id="tab-general-layout3-<?php echo $store['store_id']; ?>" class="tab-pane">
            
				<div class="so-panel">
					<h3 class="panel-title">Social Block</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="name-footer_socials_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
								 <span data-toggle="tooltip" title="Set title for Footer Social Block.">
									Social status
								 </span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'socials_status'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >
								<span data-toggle="tooltip" title="Set title for Footer Social Block.">
									Social Block - Content
								</span>
							</label>
							<div class="col-sm-9">
								
								<ul class="nav nav-tabs" id="language-footer_socials_title">
									<?php foreach ($languages as $language) : ?>
									<li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-footer_socials_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
									<?php endforeach; ?>
								</ul>
								<div class="tab-content">
									<?php foreach ($languages as $language) : ?>
									<div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-footer_socials_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
										<input type="text" name="soconfig_general_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]; ?>][footer_socials_title]" value="<?php echo isset($soconfig_general_store[$language['language_id']][$store["store_id"]]['footer_socials_title']) ? $soconfig_general_store[$language['language_id']][$store["store_id"]]['footer_socials_title']:''; ?>" placeholder="Footer Social Block - title" id="name-footer_socials_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control margin15" />
										<textarea name="soconfig_general_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]; ?>][footer_socials]" placeholder="Footer Social Block content" id="input-description-footer_socials<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>">
										<?php echo isset($soconfig_general_store[$language['language_id']][$store["store_id"]]['footer_socials']) ? $soconfig_general_store[$language['language_id']][$store["store_id"]]['footer_socials'] : ''; ?>
										</textarea>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="so-panel">
					<h3 class="panel-title">Payment Block</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-3 control-label" >
								 <span data-toggle="tooltip" title="Set title for Footer Social Block.">
									Payment status
								 </span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'footerpayment_status'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								<span data-toggle="tooltip" title="Edit content here or change / add your own images for payment icons">
									Payment Block - Content
								</span>
							</label>
							<div class="col-sm-9">
								<textarea name="soconfig_general_store[<?php echo $store["store_id"]; ?>][footerpayment]" rows="5" placeholder="Footer payment icons images" id="input-description-footerpayment<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>" class="form-control"><?php echo $soconfig_general_store[$store["store_id"]]['footerpayment']; ?></textarea>
							</div>
						</div>
					</div>
				</div>
				
				<div class="so-panel">
					<h3 class="panel-title">Custom Block</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-3 control-label">
								<span data-toggle="tooltip" title="Here you can enable / disable custom html block in dark footer">
									 Custom status
								</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_general_store',$soconfig_general_store,'customblock_status'); ?>
							</div>
						</div>
							
						
						<div class="form-group">
							<label class="col-sm-3 control-label" >
								<span data-toggle="tooltip" title="Set html block title.">
									Custom Block - Content:
								</span>
							</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs" id="language-custom_html_title">
									<?php foreach ($languages as $language) : ?>
									<li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-custom_html_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]?>" data-toggle="tab"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
									<?php endforeach; ?>
								</ul>
								<div class="tab-content">
									<?php foreach ($languages as $language) : ?>
									<div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-custom_html_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]?>">
										<input type="text" name="soconfig_general_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][custom_html_title]" value="<?php echo isset($soconfig_general_store[$language['language_id']][$store["store_id"]]['custom_html_title']) ? $soconfig_general_store[$language['language_id']][$store["store_id"]]['custom_html_title'] : ''; ?>" placeholder="Custom footer block title" id="name-custom_html_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control margin15" />
										<textarea name="soconfig_general_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][customblock_html]" placeholder="Custom footer block content" id="input-description-customblock<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>"><?php echo isset($soconfig_general_store[$language['language_id']][$store["store_id"]]['customblock_html']) ? $soconfig_general_store[$language['language_id']][$store["store_id"]]['customblock_html'] : ''; ?></textarea>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
            
            </div>
            
			
			<!--Some language variables-->
            <div id="tab-general-layout5-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="so-panel">
					<h3 class="panel-title">Other Block</h3>
					<div class="panel-container">
						<span class="help-block">Keep in mind, if you leave some field empty corresponding block will not be displayed.</span>
						<ul class="nav nav-tabs" id="translation">
							<?php foreach ($languages as $language) : ?>
							<li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#translation<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
							<?php endforeach; ?>
						</ul>
						<div class="tab-content">
							<?php foreach ($languages as $language) : ?>
							<div style="padding:0" class="tab-pane panel-container <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="translation<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
								
								<div class="form-group">
									<label class="col-sm-4 control-label" for="view_details<?php echo $store["store_id"]; ?>">"view details" button in inline "quick view" block:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][view_details]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['view_details']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['view_details'] : ''; ?>" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="tags_tab_title<?php echo $store["store_id"]; ?>">"tags" tab title on Product page:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][tags_tab_title]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['tags_tab_title']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['tags_tab_title'] : ''; ?>" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="brands_title<?php echo $store["store_id"]; ?>">"Brands" title in Carousel module:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][brands_title]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['brands_title']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['brands_title'] : ''; ?>" class="form-control" />
									</div>
								</div>

							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				
				<div class="so-panel">
					<h3 class="panel-title">Countdown block</h3>
					<div class="panel-container">
						<span class="help-block">Keep in mind, if you leave some field empty corresponding block will not be displayed.</span>
						<ul class="nav nav-tabs" id="translation">
							<?php foreach ($languages as $language) : ?>
							<li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#translation_countdown_<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
							<?php endforeach; ?>
						</ul>
						<div class="tab-content">
							<?php foreach ($languages as $language) : ?>
							<div style="padding:0" class="tab-pane panel-container <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="translation_countdown_<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="countdown_title<?php echo $store["store_id"]; ?>">Title:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][countdown_title]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title'] : ''; ?>" placeholder="This limited  offer ends" id="countdown_title<?php echo $store["store_id"]; ?>" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="countdown_title_day<?php echo $store["store_id"]; ?>">"Day" title:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][countdown_title_day]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_day']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_day'] : ''; ?>" placeholder="Day" id="countdown_title_day<?php echo $store["store_id"]; ?>" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="countdown_title_hour<?php echo $store["store_id"]; ?>">"Hour" title:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][countdown_title_hour]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_hour']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_hour'] : ''; ?>" placeholder="Hour" id="countdown_title_hour<?php echo $store["store_id"]; ?>" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="countdown_title_minute<?php echo $store["store_id"]; ?>">"Minute" title:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][countdown_title_minute]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_minute']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_minute'] : ''; ?>" placeholder="Minute" id="countdown_title_minute<?php echo $store["store_id"]; ?>" class="form-control" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="countdown_title_second<?php echo $store["store_id"]; ?>">"Second" title:</label>
									<div class="col-sm-7">
										<input type="text" name="soconfig_lang_store[<?php echo $language['language_id']; ?>][<?php echo $store["store_id"]?>][countdown_title_second]" value="<?php echo isset($soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_second']) ? $soconfig_lang_store[$language['language_id']][$store["store_id"]]['countdown_title_second'] : ''; ?>" placeholder="Second" id="countdown_title_second<?php echo $store["store_id"]; ?>" class="form-control" />
									</div>
								</div>

							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>


            </div>
            <!--end Some language variables-->
        </div>
    </div>
    <!-------------------------------------end tab General---------------------------------->

    <!-------------------------------------Tab Layout---------------------------------------->
    <div class="tab-pane" id="tab-layout<?php echo $store['store_id']; ?>">
		<!--subtabs: General -->
		<div class="tab-pane active" id="tab-colors-layout1-<?php echo $store['store_id']; ?>">
			<div class="so-panel">
				<h3 class="panel-title">Theme Layout Settings</h3>
				<div class="panel-container">
					<div class="form-group">
						<label class="col-sm-3 control-label" >
							<span data-toggle="tooltip" title="With the boxed layout you can choose additional options such as custom background images, patterns and solid colors">Layout Style</span>
						</label>
						<div class="col-sm-9">
							<div class="btn-group btn-toggle block-group " data-toggle="buttons">
								<?php echo field_select('soconfig_layout_store',$soconfig_layout_store,'layoutstyle',$layoutStyle); ?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" ">
							 <span data-toggle="tooltip" title="Set background color for all content.">Body Background Color:</span>
						</label>
						<div class="col-sm-9">
							<input class="form-control width30" id="soconfig_colors_bgcolor<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $soconfig_layout_store[$store["store_id"]]['general_bgcolor']; ?>;color:white" type="text" name="soconfig_layout_store[<?php echo $store["store_id"]; ?>][general_bgcolor]" value="<?php echo $soconfig_layout_store[$store["store_id"]]['general_bgcolor']; ?>" placeholder="Background color:" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label" >Overlay pattern</label>
						<div class="col-sm-9">
							<?php for ($i = 1; $i <= 45; $i++) { ?>
								<div class="img-patt"><small><?php echo $i; ?></small><img src="../catalog/view/theme/<?php echo $template;?>/images/patterns/<?php echo $i; ?>.png" alt="pattern <?php echo $i; ?>"></div>
							<?php } ?>
						  
							<select class="form-control width30" name="soconfig_layout_store[<?php echo $store["store_id"]; ?>][pattern]" >
								<option value="none"selected="selected">None</option>
								<?php 
									for ($i = 1; $i <= 45; $i++) { 
									($soconfig_layout_store[$store["store_id"]]["pattern"]== $i) ? $currentpat = 'selected' : $currentpat = '';
								?>
								<option value="<?php echo $i; ?>" <?php echo $currentpat; ?>><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<small class="help-block">Select a pattern number if you want to use one.</small>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<span data-toggle="tooltip" title="Set background image for all site.">Background Image:</span>
						</label>
						<div class="col-sm-9">
								<div class="help-block">Upload image in path: catalog/ and write here only name as "image.png"</div>
								<input type="text" name="soconfig_layout_store[<?php echo $store["store_id"]; ?>][soconfig_contentbg]" value="<?php echo (isset($soconfig_layout_store[$store['store_id']]['soconfig_contentbg']) ? $soconfig_layout_store[$store['store_id']]['soconfig_contentbg'] : ''); ?>" placeholder="Background image" id="contentbg<?php echo $store["store_id"]; ?>" class="form-control width30" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label" >
							 <span data-toggle="tooltip" title="Set background image display mode">
								 Background Image display mode
							 </span>
						</label>
						<div class="col-sm-9">
							<?php echo field_select('soconfig_layout_store',$soconfig_layout_store,'content_bg_mode',$content_bg_mode,'width30'); ?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label" >
							Background Image display Attachment
						</label>
						<div class="col-sm-9">
							<?php echo field_select('soconfig_layout_store',$soconfig_layout_store,'content_attachment',$content_attachment,'width30'); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--subtabs: General -->
    </div>
    <!-------------------------------------end tab Colors,backgrounds,fonts-->

    <!-------------------------------------Tab Products sliders, products listings-->
    <div class="tab-pane" id="tab-products<?php echo $store['store_id']; ?>">

        <ul class="nav nav-tabs  main_tabs_2">
            <li class="active"><a href="#tab-products-layout1-<?php echo $store['store_id']; ?>" class="selected" data-toggle="tab"><?php echo $pages_pro_listings; ?></a></li>
            <li><a href="#tab-products-layout2-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $pages_pro_label; ?></a></li>
            <li><a href="#tab-products-layout3-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $pages_pro_detail; ?></a></li>
        </ul>
        <div class="tab-content">
            <!--subtabs: Listings -->
            <div class="tab-pane active wrapper-tabcategory" id="tab-products-layout1-<?php echo $store['store_id']; ?>">
				
				<div class="so-panel">
					<h3 class="panel-title">Refine Search</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-3 " for="input-product_catalog_refine">
								<?php echo $product_catalog_refine ?>
							</label>
							<div class="col-sm-9">
								<?php echo field_select('soconfig_pages_store',$soconfig_pages_store,'product_catalog_refine',$refine_search,'width30'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-product_catalog_refine_col"><?php echo $product_catalog_refine_col ?></span>
							</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs" >
									<?php foreach ($devices as $subfix => $device) : ?>
									<li class="<?php echo ($subfix == 'md' ? 'active' : ''); ?>"><a href="#language-catalog_refine_<?php echo $subfix ?><?php echo $store["store_id"]; ?>" data-toggle="tab"><?php echo $device ?></a></li>
									<?php endforeach; ?>
								</ul>
								<div class="tab-content">
									<?php foreach ($devices as $subfix => $device) : ?>
									<div class="tab-pane <?php echo ($subfix == 'md' ? 'active' : ''); ?>" id="language-catalog_refine_<?php echo $subfix ?><?php echo $store["store_id"]; ?>">
										<select name="soconfig_pages_store[<?php echo $store["store_id"]; ?>][product_catalog_refine_col_<?php echo $subfix; ?>]" class="form-control width30">
										   <?php foreach ($columns as $fv => $fc) { ?>
												<?php ($fv == $soconfig_pages_store[$store["store_id"]]["product_catalog_refine_col_".$subfix] ) ? $current = 'selected' : $current=''; ?>
												<option value="<?php echo $fv; ?>" <?php echo $current; ?> ><?php echo $fc; ?></option>	
											<?php } ?>
										</select>
									</div>
									<?php endforeach; ?>
									<span class="help-block"><?php echo $entry_catalog_column_help; ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="so-panel">
					<h3 class="panel-title">Category Page</h3>
					<div class="panel-container">
						<div class="form-group">
						
							<label class="col-sm-3 control-label"><?php echo $product_catalog_title; ?></label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'lsttitle_cate_status'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><?php echo $product_catalog_image; ?></label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'lstimg_cate_status'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label"><?php echo $product_list_compare; ?></label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'lstcompare_status'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-product_catalog_mode">
								<span data-toggle="tooltip" title="Create your listings into simple catalog."><?php echo $product_catalog_mode ?></span>
							</label>
							<div class="col-sm-9">
								<select name="soconfig_pages_store[<?php echo $store["store_id"]; ?>][product_catalog_mode]" id="input-product_catalog_mode" class="form-control width30">
									<option <?php if (isset($soconfig_pages_store[$store["store_id"]]['product_catalog_mode']) && $soconfig_pages_store[$store["store_id"]]['product_catalog_mode'] == 0) : ?> selected="selected" <?php endif; ?> value="0">Grid</option>
									<option <?php if (isset($soconfig_pages_store[$store["store_id"]]['product_catalog_mode']) && $soconfig_pages_store[$store["store_id"]]['product_catalog_mode'] == 1) : ?> selected="selected" <?php endif; ?> value="1">List</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-listing_quick_type"><?php echo $product_catalog_column ?></label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs" >
									<?php foreach ($devices as $subfix => $device) : ?>
									<li class="<?php echo ($subfix == 'md' ? 'active' : ''); ?>"><a href="#language-product_catalog_<?php echo $subfix ?><?php echo $store["store_id"]; ?>" data-toggle="tab"><?php echo $device ?></a></li>
									<?php endforeach; ?>
								</ul>
								<div class="tab-content">
									<?php foreach ($devices as $subfix => $device) : ?>
									<div class="tab-pane <?php echo ($subfix == 'md' ? 'active' : ''); ?>" id="language-product_catalog_<?php echo $subfix ?><?php echo $store["store_id"]; ?>">
										<select name="soconfig_pages_store[<?php echo $store["store_id"]; ?>][product_catalog_column_<?php echo $subfix; ?>]" class="form-control width30">
										   <?php foreach ($columns as $fv => $fc) { ?>
												<?php ($fv == $soconfig_pages_store[$store["store_id"]]["product_catalog_column_".$subfix] ) ? $current = 'selected' : $current=''; ?>
												<option value="<?php echo $fv; ?>" <?php echo $current; ?> ><?php echo $fc; ?></option>	
											<?php } ?>
										</select>
									</div>
									<?php endforeach; ?>
									<span class="help-block"><?php echo $entry_catalog_column_help; ?></span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="so-panel">
					<h3 class="panel-title">Product Item</h3>
					<div class="panel-container">
						<div class="form-group">
						
							<label class="col-sm-3 control-label">Slide to 2nd image automatically</label>
							<div class="col-sm-9">
								<?php echo field_select('soconfig_pages_store',$soconfig_pages_store,'secondimg',$secondimg,'width30'); ?>
							</div>
						</div>
					   <div class="form-group">
							<label class="col-sm-3 control-label">Show rating</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'rating_status'); ?>
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"><?php echo $show_product_item_desc; ?></label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'lstdescription_status'); ?>
								<span class="help-block">Only for "Grid" view. This option performs</span>
							</div>
						</div>
					</div>
				</div>
				
			</div>

            <!--subtabs: labels -->
            <div id="tab-products-layout2-<?php echo $store['store_id']; ?>" class="tab-pane">
				<div class="so-panel">
					<h3 class="panel-title">Product labels</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-3 control-label">Show "Sale" label:</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'sale_status'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="sale_text1">Title for "Sale" label:</label>
							<div class="col-sm-9">
								<?php echo field_langHori('soconfig_pages_store',$soconfig_pages_store,'sale_text');?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Show "New" label:</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'new_status'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="new_text1">Title for "New" label:</label>
							<div class="col-sm-9">
								<?php echo field_langHori('soconfig_pages_store',$soconfig_pages_store,'new_text');?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-days">
								<span data-toggle="tooltip" title="Number of days from the date "Date Available" to today date for a product.">
								Period of holding "New" label:
								</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_text('soconfig_pages_store',$soconfig_pages_store,'days','Period of holding New label:'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">
								<span data-toggle="tooltip" title="Set display or not 'QUICK VIEW' function on products in sliders.">Show "QUICK VIEW" function:</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'quick_status'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" for="quick_view_text1">Title for "Quick view" label:</label>
							<div class="col-sm-9">
								<?php echo field_langHori('soconfig_pages_store',$soconfig_pages_store,'quick_view_text');?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">
								<span data-toggle="tooltip" title="Set display or not 'Discount' label.">Show "Discount" label:</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'discount_status'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								<span data-toggle="tooltip" title="Set display or not countdown of Special Offer in product sliders.">Show countdown of Special Offer:</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'countdown_status'); ?>
							</div>
						</div>
					</div>
				</div>
            </div>

            <!--subtabs: product page -->
            <div id="tab-products-layout3-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="so-panel">
					<h3 class="panel-title">Product labels</h3>
					<div class="panel-container">
				
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-thumbnails_position">Position of block with thumbnails previews:</label>
							<div class="col-sm-9">
								<?php echo field_select('soconfig_pages_store',$soconfig_pages_store,'thumbnails_position',$thumbnailPos,'width30'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-cloudzoom_mode">
								<span data-toggle="tooltip" title="Choose position of cloudzoom image preview on product page.">Enable Product Zoom</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'product_enablezoom'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-tabs_position">Product Zoom Mode</label>
							<div class="col-sm-9">
								<?php echo field_select('soconfig_pages_store',$soconfig_pages_store,'product_zoommode',$zoommode,'width30'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">  Lens Zoom Size  </label>
							<div class="col-sm-2">
								<?php echo field_text('soconfig_pages_store',$soconfig_pages_store,'product_zoomlenssize'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-tabs_position">Tabs block:</label>
							<div class="col-sm-9">
								<?php echo field_select('soconfig_pages_store',$soconfig_pages_store,'tabs_position',$tabs_position,'width30'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-related">Related products</label>
							<div class="col-sm-9">
								<?php echo field_onOff('soconfig_pages_store',$soconfig_pages_store,'related_status'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" for="input-meta-keyword">
								<span data-toggle="tooltip" title="Here you can enter any html of iframe content of buttons">
									Social buttons:
								</span>
							</label>
							<div class="col-sm-9">
								<?php echo field_textarea('soconfig_pages_store',$soconfig_pages_store,'product_page_button','Footer payment icons images:'); ?>
							</div>
						</div>

						
					</div>
				</div>
            </div>
        </div>

    </div>
    <!------------------------------------end tab Pages-->

    <!-------------------------------------Tab Fonts-->
    <div class="tab-pane" id="tab-fonts<?php echo $store['store_id']; ?>">
		
		<div class="so-panel">
			<h3 class="panel-title">Fonts<span class="help-block">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>
			<div class="panel-container">
				<div class="form-group">
					
					<label class="col-sm-3 control-label" ><?php echo $fonts_body; ?> </label>
					<div class="col-sm-9">
						<div class="block-group fonts-change">
							<?php echo field_onOffFont('soconfig_fonts_store',$soconfig_fonts_store,'body_status'); ?>
							<div class="block-group items-font font-standard" >
								<?php echo field_select('soconfig_fonts_store',$soconfig_fonts_store,'normal_body',$fonts_normal); ?>
							</div>
							<div class="block-group items-font font-google" >
								<label class="control-label">  <?php echo $entry_google_url; ?>  </label>
								<div class="">
									<?php echo field_text('soconfig_fonts_store',$soconfig_fonts_store,'url_body'); ?>
									<span class="help-block"><?php echo $entry_google_url_help ?></span>
								</div>
							</div>
							<div class="block-group items-font font-google" >
								<label class=" control-label"> <?php echo $entry_google_family ?></label>
								<div class="">
									<?php echo field_text('soconfig_fonts_store',$soconfig_fonts_store,'family_body'); ?>
									<span class="help-block"> <?php echo $entry_google_family_help ?></span>
								</div>
							</div>
						</div>
						<div class="block-group">
							<?php echo field_textarea('soconfig_fonts_store',$soconfig_fonts_store,'selector_body','Add css selectors'); ?>
						</div>
					</div>
				</div>
		
				<div class="form-group">
					<label class="col-sm-3 control-label" ><?php echo $fonts_menu; ?> </label>
					<div class="col-sm-9">
						<div class="block-group fonts-change">
							<?php echo field_onOffFont('soconfig_fonts_store',$soconfig_fonts_store,'menu_status'); ?>
							<div class="block-group items-font font-standard" >
								<?php echo field_select('soconfig_fonts_store',$soconfig_fonts_store,'normal_menu',$fonts_normal); ?>
							</div>
							<div class="block-group items-font font-google" >
								<label class="control-label">  <?php echo $entry_google_url; ?>  </label>
								<div class="">
									<?php echo field_text('soconfig_fonts_store',$soconfig_fonts_store,'url_menu'); ?>
									<span class="help-block"><?php echo $entry_google_url_help ?></span>
								</div>
							</div>
							<div class="block-group items-font font-google" >
								<label class=" control-label"> <?php echo $entry_google_family ?></label>
								<div class="">
									<?php echo field_text('soconfig_fonts_store',$soconfig_fonts_store,'family_menu'); ?>
									<span class="help-block"> <?php echo $entry_google_family_help ?></span>
								</div>
							</div>
						</div>
						<div class="block-group">
							<?php echo field_textarea('soconfig_fonts_store',$soconfig_fonts_store,'selector_menu','Add css selectors'); ?>
						</div>
					</div>
				</div>	
				
				<div class="form-group">
					<label class="col-sm-3 control-label" ><?php echo $fonts_heading; ?> </label>
					<div class="col-sm-9">
						<div class="block-group fonts-change">
							<?php echo field_onOffFont('soconfig_fonts_store',$soconfig_fonts_store,'heading_status'); ?>
							<div class="block-group items-font font-standard" >
								<?php echo field_select('soconfig_fonts_store',$soconfig_fonts_store,'normal_heading',$fonts_normal); ?>
							</div>
							<div class="block-group items-font font-google" >
								<label class="control-label"> <?php echo $entry_google_url; ?> </label>
								<div class="">
									<?php echo field_text('soconfig_fonts_store',$soconfig_fonts_store,'url_heading'); ?>
									<span class="help-block"><?php echo $entry_google_url_help ?></span>
								</div>
							</div>
							<div class="block-group items-font font-google" >
								<label class=" control-label"> <?php echo $entry_google_family ?></label>
								<div class="">
									<?php echo field_text('soconfig_fonts_store',$soconfig_fonts_store,'family_heading'); ?>
									<span class="help-block"> <?php echo $entry_google_family_help ?></span>
								</div>
							</div>
						</div>
						<div class="block-group">
							<?php echo field_textarea('soconfig_fonts_store',$soconfig_fonts_store,'selector_heading','Add css selectors'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>				
    </div>
    <!-------------------------------------end tab Fonts-->
	
	<!-------------------------------------Tab Custom-->
	<div class="tab-pane" id="tab-slide<?php echo $store['store_id']; ?>">
		<div class="so-panel">
			<h3 class="panel-title">Social Accounts (right fixed panel)</h3>
			<div class="panel-container">
				<div class="form-group">
					<label class="col-sm-3 control-label" >Right fixed panel with social widgets </label>
					<div class="col-sm-9">
						<?php echo field_onOff('soconfig_social_store',$soconfig_social_store,'social_status'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" >
						Facebook profile name
					</label>
					<div class="col-sm-9">
						<?php echo field_text('soconfig_social_store',$soconfig_social_store,'facebook','Facebook profile name'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" >
						Twitter account 
					</label>
					<div class="col-sm-9">
						<?php echo field_text('soconfig_social_store',$soconfig_social_store,'twitter','Twitter account name'); ?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" >
						Youtube code
						<span class="help" data-toggle="tooltip" title="Video button in right fixed panel">
							For example, enter only code: HhEPvNx0OYw<br>
							<a href="https://support.google.com/youtube/answer/171780" target="_blank">Read here</a>
						</span>
					</label>
					<div class="col-sm-9">
						<?php echo field_text('soconfig_social_store',$soconfig_social_store,'video_code','Youtube code'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------------------Tab Sample Data-->
	<div class="tab-pane" id="tab-sampledata<?php echo $store['store_id']; ?>">
		<div class="so-panel">
			<h3 class="panel-title">Install sample data <span class="help-block">If you want to make your shop look exactly like our demo. Install sample data.</span></h3>
			<div class="panel-container">
				<div class="form-group">
					<label class="col-sm-3 control-label" > Install Store Configuration </label>
					<div class="col-sm-9">
						<div class="btn-group btn-toggle " data-toggle="buttons">
							<a onclick="installMegamenu();" data-toggle="tooltip" title="Intall Data" class="btn btn-success"><i class="fa fa-check"></i> Intall Data</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-------------------------------------Tab Custom-->
	<div class="tab-pane" id="tab-custom<?php echo $store['store_id']; ?>">
		<div class="tab-horizontal">
			<ul class="nav nav-tabs  main_tabs_2">
				<li class="active"><a href="#tab-custom-layout1-<?php echo $store['store_id']; ?>" class="selected" data-toggle="tab"><?php echo $custom_tab_css_input; ?></a></li>
				<li><a href="#tab-custom-layout2-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $custom_tab_css_file; ?></a></li>
				<li><a href="#tab-custom-layout3-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $custom_tab_js_input; ?></a></li>
				<li><a href="#tab-custom-layout4-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $custom_tab_js_file; ?></a></li>

			</ul>
		</div>
        <div class="tab-content ">
			<?php // Custom  CSS--------------------------------------------- ?>
		
            <div class="tab-pane active" id="tab-custom-layout1-<?php echo $store['store_id']; ?>">
				<div class="so-panel">
					<h3 class="panel-title">CSS CODE DIRECT INPUT</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Status </label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_custom_store',$soconfig_custom_store,'cssinput_status'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<textarea name="soconfig_custom_store[custom_css]" rows="20"  class="custom-code form-control code-input"><?php echo $soconfig_custom_store['custom_css']; ?></textarea>
							</div>
						</div>
					</div>
				</div>
            </div>
           
            <div id="tab-custom-layout2-<?php echo $store['store_id']; ?>" class="customcode_wrap tab-pane">
				<div class="so-panel">
					
					<div class="form-group no-margin" >
						<h3 class="col-sm-2 panel-title ">ADD CSS FILES</h3>
						<div class="col-sm-10 text-right"><a class="btn btn-success add-soconfig_cssfile_store" > <i class="fa fa-plus-circle"></i> Add file</a></div>
					</div>
					<div class="panel-container">
						
						<div class="form-group">
							<label class="col-sm-2 control-label" >Status </label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_custom_store',$soconfig_custom_store,'cssfile_status'); ?>
							</div>
						</div>
						<?php ?>
						<?php 
						
						if(isset($soconfig_cssfile_store)){
							foreach ($soconfig_cssfile_store as $store_id => $file_css) {
								if(($store['store_id']== $store_id)){
									
								if(!empty($file_css)){?>
									<div class="form-group">
										<label class="col-sm-2 control-label" >Enter file path</label>
										<div class="col-sm-9">
											<input class="form-control" type="text" name="soconfig_cssfile_store[<?php echo $store['store_id']; ?>]" value="<?php echo $file_css; ?>" />
										</div>
										<div class="col-sm-1">
											<a href="#" class="btn btn-success remove_field"><i class="fa fa-times"></i></a>
										</div>
									</div>
							<?php   }
								}
							}
						}else {?>
							<div class="form-group">
								<label class="col-sm-2 control-label" >Enter file path</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="soconfig_cssfile_store[<?php echo $store['store_id']; ?>]" value="catalog/view/theme/<?php echo $template;?>/css/custom.css" />
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<?php // Custom  JS--------------------------------------------- ?>
            <div id="tab-custom-layout3-<?php echo $store['store_id']; ?>" class="tab-pane">
				<div class="so-panel">
					<h3 class="panel-title ">JS CODE DIRECT INPUT</h3>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Status </label>
							<div class="col-sm-10">
								<?php echo field_onOff('soconfig_custom_store',$soconfig_custom_store,'jsinput_status'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<textarea name="soconfig_custom_store[custom_js]" rows="20" class="custom-code form-control code-input"><?php echo $soconfig_custom_store['custom_js']; ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="tab-custom-layout4-<?php echo $store['store_id']; ?>" class="customcode_wrap tab-pane">
				<div class="so-panel">
					
					<div class="form-group no-margin" >
						<h3 class="col-sm-2 panel-title ">ADD JS FILES</h3>
						<div class="col-sm-10 text-right"><a class="btn btn-success add-soconfig_jsfile_store" > <i class="fa fa-plus-circle"></i> Add file</a></div>
					</div>
					<div class="panel-container">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Status </label>
							<div class="col-sm-10">
								<div class="btn-group btn-toggle " data-toggle="buttons">
									<?php echo field_onOff('soconfig_custom_store',$soconfig_custom_store,'jsfile_status'); ?>
								</div>
							</div>
						</div>
						
						<?php 
						if(isset($soconfig_jsfile_store)){
							foreach ($soconfig_jsfile_store as $store_id=>$file_js) {
								if(($store['store_id']== $store_id)){
								if(!empty($file_js)){?>
									<div class="form-group">
										<label class="col-sm-2 control-label" >Enter file path</label>
										<div class="col-sm-9">
											<input class="form-control" type="text" name="soconfig_jsfile_store[<?php echo $store['store_id']; ?>]" value="<?php echo $file_js; ?>" />
										</div>
										<div class="col-sm-1">
											<a href="#" class="btn btn-success remove_field"><i class="fa fa-times"></i></a>
										</div>
									</div>
							<?php 	}
								}
							}
						}else {?>
							<div class="form-group">
								<label class="col-sm-2 control-label" >Enter file path</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="soconfig_jsfile_store[<?php echo $store['store_id']; ?>]" value="catalog/view/theme/<?php echo $template;?>/js/custom.js" />
								</div>
							</div>
						<?php } ?>	
					</div>
				</div>
			</div>
			
		</div>
	 
	</div>
	<!-------------------------------------end tab Custom-->
</div>
