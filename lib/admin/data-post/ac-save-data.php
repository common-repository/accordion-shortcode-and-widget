<?php
if(isset($PostID) && isset($_POST['ac_sh_save_data_action']) ) {
			$TotalCount = count($_POST['accordion_title']);
			$AccordionShortcodeArray = array();
			if($TotalCount) {
				for($i=0; $i < $TotalCount; $i++) {
					 $accordion_title = stripslashes(sanitize_text_field($_POST['accordion_title'][$i]));
					$accordion_title_icon = sanitize_text_field($_POST['accordion_title_icon'][$i]);
					$enable_single_icon = sanitize_text_field($_POST['enable_single_icon'][$i]);
					$accordion_desc = stripslashes($_POST['accordion_desc'][$i]);

					$AccordionShortcodeArray[] = array(
						'accordion_title' => $accordion_title,
						'accordion_title_icon' => $accordion_title_icon,
						'enable_single_icon' => $enable_single_icon,
						'accordion_desc' => $accordion_desc,
						
					);
				}
				update_post_meta($PostID, 'wpsm_accordion_shortcode_data', serialize($AccordionShortcodeArray));
				update_post_meta($PostID, 'wpsm_accordion_shortcode_count', $TotalCount);
			} else {
				$TotalCount = -1;
				update_post_meta($PostID, 'wpsm_accordion_shortcode_count', $TotalCount);
				$AccordionArray = array();
				update_post_meta($PostID, 'wpsm_accordion_shortcode_data', serialize($AccordionShortcodeArray));
			}
		}
 ?>