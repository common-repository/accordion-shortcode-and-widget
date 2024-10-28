#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-heading{
padding:0px !important;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title {
margin:0px !important; 
text-transform:none !important;
line-height: 1 !important;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a{
text-decoration:none;

display:block;
padding:0px;
font-size: <?php echo $title_size; ?>px !important;
font-family: <?php echo $font_family; ?> !important;
border-bottom:0px !important;

}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a, #wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a:hover, #wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-title a:focus {
	color:<?php echo $acc_title_icon_clr; ?> !important;
	text-transform:none !important;
}
#wpsm_accordion_<?php echo $post_id; ?> .acc-a{
	color: <?php echo $acc_title_icon_clr; ?> !important;
	background-color:<?php echo $acc_title_bg_clr; ?> !important;
	border-color: #ddd;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-default > .wpsm_panel-heading{
	color: <?php echo $acc_title_icon_clr; ?> !important;
	background-color: <?php echo $acc_title_bg_clr; ?> !important;
	border-color: <?php echo $acc_title_bg_clr; ?> !important;
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
}
#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-default {
	<?php if($acc_margin == 'yes' ) { ?>

	border:1px solid transparent !important;

	<?php } else { ?>
	border:0px solid transparent !important;
	<?php } ?>
}
#wpsm_accordion_<?php echo $post_id; ?> {
	margin-bottom: 20px;
	overflow: hidden;
	float: none;
	width: 100%;
	display: block;
}
#wpsm_accordion_<?php echo $post_id; ?> .ac_title_class{
	display: block;
	padding-top: 12px;
	padding-bottom: 12px;
	padding-left: 15px;
	padding-right: 15px;
	border: 1px solid #ddd;
	

}
#wpsm_accordion_<?php echo $post_id; ?>  .wpsm_panel {
	overflow:hidden;
	-webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .05);
	box-shadow: 0 0px 0px rgba(0, 0, 0, .05);
	<?php if($op_cl_icon == 'yes' ) 
	{ ?>
	padding-<?php echo $acc_op_cl_align; ?>:47px;
	<?php } ?>
	<?php if($acc_radius == 'yes' ) { ?>
	border-radius: 4px;
	<?php }
	else {
	?>
	border-radius: 0px;
	<?php
	}
	?>
}
#wpsm_accordion_<?php echo $post_id; ?>  .wpsm_panel + .wpsm_panel {
	<?php if($acc_margin == 'yes' ) { ?>
	margin-top: 5px;
	<?php }
	else {
	?>
	margin-top: 0px;
	<?php
	}
	?>
}
#wpsm_accordion_<?php echo $post_id; ?>  .wpsm_panel-body{
background-color:<?php echo $acc_desc_bg_clr; ?> !important;
color:<?php echo $acc_desc_font_clr; ?> !important;
border-top-color: <?php echo $acc_title_bg_clr; ?> !important;
font-size:<?php echo $des_size; ?>px !important;
font-family: <?php echo $font_family; ?> !important;
overflow: hidden;

border: 1px solid #ddd !important;

border-top:0px !important;
}

#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_icon{
	background-color:<?php echo $acc_open_cl_icon_bg_clr; ?>;
	color: <?php echo $acc_open_cl_icon_ft_clr; ?>;
	float:<?php echo $acc_op_cl_align; ?>; 
	padding-top: 12px;
	padding-bottom: 12px;
	line-height: 1.0;
	margin-<?php echo $acc_op_cl_align; ?>:-44px;
	text-align: center !important;
	width:45px !important;
	display: inline-block;
	border: 1px solid #ddd;
	<?php if($acc_op_cl_align=="left"){?>
	border-right: 1px solid transparent;
	<?php } else { ?>
	border-left: 1px solid transparent;
	<?php } ?>
	<?php if($acc_radius == 'yes' ) { ?>
	border-top-<?php echo $acc_op_cl_align; ?>-radius: 4px;
	border-bottom-<?php echo $acc_op_cl_align; ?>-radius: 4px;
	<?php } ?>
}

<?php 
	 switch($ac_styles){
			case "1":
			?>
			
			<?php
			break;
			case "2":
			 ?>
			 #wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-heading {
				background-image: url(<?php echo wpshopmart_accordion_shortcode_directory_url.'img/style-soft.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
			}
			#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_icon{
				background-image: url(<?php echo wpshopmart_accordion_shortcode_directory_url.'img/style-soft.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
			}
			<?php
			break;
			case "3":
			?>
				#wpsm_accordion_<?php echo $post_id; ?> .wpsm_panel-heading {
				background-image: url(<?php echo wpshopmart_accordion_shortcode_directory_url.'img/style-noise.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
				}
				#wpsm_accordion_<?php echo $post_id; ?> .ac_open_cl_icon{
				background-image: url(<?php echo wpshopmart_accordion_shortcode_directory_url.'img/style-noise.png'; ?>);
				background-position: 0 0;
				background-repeat: repeat-x;
				}
			<?php
			break;
		}
?>	
