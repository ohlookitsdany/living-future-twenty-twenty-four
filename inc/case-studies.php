<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Case Studies.
	 */

	$labels = [
		"name" => __( "Case Studies", "custom-post-type-ui" ),
		"singular_name" => __( "Case Study", "custom-post-type-ui" ),
		"menu_name" => __( "Case Studies", "custom-post-type-ui" ),
		"all_items" => __( "All Case Studies", "custom-post-type-ui" ),
		"add_new" => __( "Add new", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Case Study", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Case Study", "custom-post-type-ui" ),
		"new_item" => __( "New Case Study", "custom-post-type-ui" ),
		"view_item" => __( "View Case Study", "custom-post-type-ui" ),
		"view_items" => __( "View Case Studies", "custom-post-type-ui" ),
		"search_items" => __( "Search Case Studies", "custom-post-type-ui" ),
		"not_found" => __( "No Case Studies found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Case Studies found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Case Study:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Case Study", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Case Study", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Case Study", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Case Study", "custom-post-type-ui" ),
		"archives" => __( "Case Study archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Case Study", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Case Study", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Case Studies list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Case Studies list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Case Studies list", "custom-post-type-ui" ),
		"attributes" => __( "Case Studies attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Case Study", "custom-post-type-ui" ),
		"item_published" => __( "Case Study published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Case Study published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Case Study reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Case Study scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Case Study updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Case Study:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Case Studies", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-clipboard",
		"supports" => [ "title", "editor", "thumbnail", "revisions" ],
		"taxonomies" => [ "program" ],
		"show_in_graphql" => false,
	];

	register_post_type( "case-studies", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Case Studies Types.
	 */

	$labels = [
		"name" => __( "Case Studies Types", "custom-post-type-ui" ),
		"singular_name" => __( "Case Study Type", "custom-post-type-ui" ),
		"menu_name" => __( "Case Studies Types", "custom-post-type-ui" ),
		"all_items" => __( "All Case Studies Types", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Case Study Type", "custom-post-type-ui" ),
		"view_item" => __( "View Case Study Type", "custom-post-type-ui" ),
		"update_item" => __( "Update Case Study Type name", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Case Study Type", "custom-post-type-ui" ),
		"new_item_name" => __( "New Case Study Type name", "custom-post-type-ui" ),
		"parent_item" => __( "Parent Case Study Type", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Case Study Type:", "custom-post-type-ui" ),
		"search_items" => __( "Search Case Studies Types", "custom-post-type-ui" ),
		"popular_items" => __( "Popular Case Studies Types", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Separate Case Studies Types with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => __( "Add or remove Case Studies Types", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Choose from the most used Case Studies Types", "custom-post-type-ui" ),
		"not_found" => __( "No Case Studies Types found", "custom-post-type-ui" ),
		"no_terms" => __( "No Case Studies Types", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Case Studies Types list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Case Studies Types list", "custom-post-type-ui" ),
		"back_to_items" => __( "Back to Case Studies Types", "custom-post-type-ui" ),
		"name_field_description" => __( "The name is how it appears on your site.", "custom-post-type-ui" ),
		"parent_field_description" => __( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "custom-post-type-ui" ),
		"slug_field_description" => __( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "custom-post-type-ui" ),
		"desc_field_description" => __( "The description is not prominent by default; however, some themes may show it.", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Case Studies Types", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'program', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "program",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "program", [ "case-studies" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
			<p>
				<strong>Location or Manufacturer</strong>
				<input name="location_text" type="text" value="<?php echo get_post_meta($object->ID, "location_text", true); ?>">
			</p>
			
			<p>
				<strong>LBC & LPC Typology</strong>
            <select name="typo_dropdown">
                <?php 
                    $option_values = array("","Building","Infrastructure + Landscape","Renovation","Consumer","Personal Care");

                    foreach($option_values as $key => $value) 
                    {
                        if($value == get_post_meta($object->ID, "typo_dropdown", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
			</p>

            <p>
			<strong>Petals</strong><br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "place_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="place_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="place_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="place_checkbox">Place</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "water_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="water_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="water_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
			<label for="water_checkbox">Water</label>			
			<br/>
			
            <?php
                $checkbox_value = get_post_meta($object->ID, "energy_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="energy_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="energy_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
			<label for="energy_checkbox">Energy</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "health_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="health_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="health_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
			<label for="health_checkbox">Health + Happiness</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "materials_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="materials_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="materials_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
			<label for="materials_checkbox">Materials</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "equity_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="equity_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="equity_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
			<label for="equity_checkbox">Equity</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "beauty_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="beauty_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="beauty_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
			<label for="beauty_checkbox">Beauty</label>			
			<br/>
			</p>
			<p>
				<strong>Certification Type</strong>
            <select name="cert_type_dropdown">
                <?php 
                    $option_values = array('','Living Certified','Petal Certified','Net Zero Energy Certified','Zero Energy Certified','Zero Carbon Certified','Imperative Certified','Core');

                    foreach($option_values as $key => $value) 
                    {
                        if($value == get_post_meta($object->ID, "cert_type_dropdown", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
			</p>
			<p>
				<strong>Square Footage</strong>
            <select name="sqfoot_dropdown">
                <?php 
                    $option_values = array("","N/A","< 1,000","1,000 - 10,000","10,000 - 50,000","50,000 - 100,000","> 150,000");

                    foreach($option_values as $key => $value) 
                    {
                        if($value == get_post_meta($object->ID, "sqfoot_dropdown", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
			</p>
            <p>
			<strong>Biophilic Design Elements</strong><br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "ef_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="ef_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="ef_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="ef_checkbox">Environmental Feature</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "nsf_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="nsf_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="nsf_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="nsf_checkbox">Natural Shapes & Forms</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "npp_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="npp_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="npp_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="npp_checkbox">Natural Patterns & Processes</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "ls_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="ls_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="ls_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="ls_checkbox">Light & Space</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "pbr_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="pbr_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="pbr_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="pbr_checkbox">Place-Based Relationships</label>			
			<br/>

            <?php
                $checkbox_value = get_post_meta($object->ID, "hnr_checkbox", true);

                if($checkbox_value == "")
                {
                    ?>
                        <input name="hnr_checkbox" type="checkbox" value="true">
                    <?php
                }
                else if($checkbox_value == "true")
                {
                    ?>  
                        <input name="hnr_checkbox" type="checkbox" value="true" checked>
                    <?php
                }
            ?>
            <label for="hnr_checkbox">Evolved Human-Nature Relationships</label>			
			<br/>			
			<p>
				<strong>Transect</strong><br />
            <select name="transect_dropdown">
                <?php 
                    $option_values = array("","L1. Natural Habitat Preserve","L2. Rural Agricultural Zone","L3. Village or Campus Zone","L4. General Urban Zone","L5. Urban Center Zone","L6. Urban Core Zone");

                    foreach($option_values as $key => $value) 
                    {
                        if($value == get_post_meta($object->ID, "transect_dropdown", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
			</p>
			<p>
				<strong>Standard Version</strong><br />
            <select name="standard_dropdown">
                <?php 
                    $option_values = array("","LPC 1.0","LBC 1.3","LBC 2.0","LBC 2.1","LBC 3.0","LBC 3.1","LBC 4.0");

                    foreach($option_values as $key => $value) 
                    {
                        if($value == get_post_meta($object->ID, "standard_dropdown", true))
                        {
                            ?>
                                <option selected><?php echo $value; ?></option>
                            <?php    
                        }
                        else
                        {
                            ?>
                                <option><?php echo $value; ?></option>
                            <?php
                        }
                    }
                ?>
            </select>
			</p>			
        </div>
    <?php  
}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Case Studies Options", "custom_meta_box_markup", "case-studies", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "case-studies";
    if($slug != $post->post_type)
        return $post_id;

    $location_text_value = "";
    $typo_dropdown_value = "";
    $place_checkbox_value = "";
	$water_checkbox_value = "";
	$energy_checkbox_value = "";
	$health_checkbox_value = "";
	$materials_checkbox_value = "";
	$equity_checkbox_value = "";
	$beauty_checkbox_value = "";
	$cert_type_dropdown_value = "";
	$sqfoot_dropdown_value = "";
	$ef_checkbox_value = "";
	$nsf_checkbox_value = "";
	$npp_checkbox_value = "";
	$ls_checkbox_value = "";
	$pbr_checkbox_value = "";
	$hnr_checkbox_value = "";
	$transect_dropdown_value = "";
	$standard_dropdown_value = "";

    if(isset($_POST["location_text"]))
    {
        $location_text_value = $_POST["location_text"];
    }   
    update_post_meta($post_id, "location_text", $location_text_value);

    if(isset($_POST["typo_dropdown"]))
    {
        $typo_dropdown_value = $_POST["typo_dropdown"];
    }   
    update_post_meta($post_id, "typo_dropdown", $typo_dropdown_value);

    if(isset($_POST["place_checkbox"]))
    {
        $place_checkbox_value = $_POST["place_checkbox"];
    }   
    update_post_meta($post_id, "place_checkbox", $place_checkbox_value);
	
    if(isset($_POST["water_checkbox"]))
    {
        $water_checkbox_value = $_POST["water_checkbox"];
    }   
    update_post_meta($post_id, "water_checkbox", $water_checkbox_value);

    if(isset($_POST["energy_checkbox"]))
    {
        $energy_checkbox_value = $_POST["energy_checkbox"];
    }   
    update_post_meta($post_id, "energy_checkbox", $energy_checkbox_value);

    if(isset($_POST["health_checkbox"]))
    {
        $health_checkbox_value = $_POST["health_checkbox"];
    }   
    update_post_meta($post_id, "health_checkbox", $health_checkbox_value);

    if(isset($_POST["materials_checkbox"]))
    {
        $materials_checkbox_value = $_POST["materials_checkbox"];
    }   
    update_post_meta($post_id, "materials_checkbox", $materials_checkbox_value);

    if(isset($_POST["equity_checkbox"]))
    {
        $equity_checkbox_value = $_POST["equity_checkbox"];
    }   
    update_post_meta($post_id, "equity_checkbox", $equity_checkbox_value);

    if(isset($_POST["beauty_checkbox"]))
    {
        $beauty_checkbox_value = $_POST["beauty_checkbox"];
    }   
    update_post_meta($post_id, "beauty_checkbox", $beauty_checkbox_value);

    if(isset($_POST["cert_type_dropdown"]))
    {
        $cert_type_dropdown_value = $_POST["cert_type_dropdown"];
    }   
    update_post_meta($post_id, "cert_type_dropdown", $cert_type_dropdown_value);

    if(isset($_POST["sqfoot_dropdown"]))
    {
        $sqfoot_dropdown_value = $_POST["sqfoot_dropdown"];
    }   
    update_post_meta($post_id, "sqfoot_dropdown", $sqfoot_dropdown_value);

    if(isset($_POST["ef_checkbox"]))
    {
        $ef_checkbox_value = $_POST["ef_checkbox"];
    }   
    update_post_meta($post_id, "ef_checkbox", $ef_checkbox_value);

    if(isset($_POST["nsf_checkbox"]))
    {
        $nsf_checkbox_value = $_POST["nsf_checkbox"];
    }   
    update_post_meta($post_id, "nsf_checkbox", $nsf_checkbox_value);	
	
	if(isset($_POST["npp_checkbox"]))
    {
        $npp_checkbox_value = $_POST["npp_checkbox"];
    }   
    update_post_meta($post_id, "npp_checkbox", $npp_checkbox_value);
	
    if(isset($_POST["ls_checkbox"]))
    {
        $ls_checkbox_value = $_POST["ls_checkbox"];
    }   
    update_post_meta($post_id, "ls_checkbox", $ls_checkbox_value);

    if(isset($_POST["pbr_checkbox"]))
    {
        $pbr_checkbox_value = $_POST["pbr_checkbox"];
    }   
    update_post_meta($post_id, "pbr_checkbox", $pbr_checkbox_value);

    if(isset($_POST["hnr_checkbox"]))
    {
        $hnr_checkbox_value = $_POST["hnr_checkbox"];
    }   
    update_post_meta($post_id, "hnr_checkbox", $hnr_checkbox_value);

    if(isset($_POST["transect_dropdown"]))
    {
        $transect_dropdown_value = $_POST["transect_dropdown"];
    }   
    update_post_meta($post_id, "transect_dropdown", $transect_dropdown_value);

    if(isset($_POST["standard_dropdown"]))
    {
        $standard_dropdown_value = $_POST["standard_dropdown"];
    }   
    update_post_meta($post_id, "standard_dropdown", $standard_dropdown_value);	
}

add_action("save_post", "save_custom_meta_box", 10, 3);

?>
