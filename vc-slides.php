<?php
vc_map( array(
      "name" => __( "Asif Slider", "my-text-domain" ),
      "base" => "asif_slides",
      "category" => __( "Asif", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Count", "my-text-domain" ),
            "param_name" => "count",
            "value" => __( "3", "my-text-domain" ),
            "description" => __( "Select Slides Count, If you want to show unlimited, type -1", "my-text-domain" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Select Slide?", "my-text-domain" ),
            "param_name" => "slider_id",
            "value" => asif_toolkit_get_slide_as_list(),
			"description" => __( "", "my-text-domain" ),
			"dependency" => array (
                'element' => "count",
                'value' => array("1")
            )
         ),
			 
		 array( 
				"type" => "textfield",
				"heading" => __( "Slider Height", "my-text-domain" ),
				"param_name" => "height",
				"std" => __( "730", "my-text-domain" ),
				"description" => __( "Type slider height in px. Numbers only", "my-text-domain" )
         ),
			 
		 array( 
				"type" => "dropdown", 
				"heading" => __( "Enable loop?", "my-text-domain" ), 
				"param_name" => "loop", 
				"std" => __( "true", "my-text-domain" ), 
				"value" => array ( 
				'yes' => 'true',
				'no' => 'false'
				),
            	"description" => __( "", "my-text-domain" ),
            	"dependency" => array (
                'element' => "count",
                'value' => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
            )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable autoplay?", "my-text-domain" ),
            "param_name" => "autoplay",
            "std" => __( "true", "my-text-domain" ),
            "value" => array (
                'yes' => 'true',
                'no' => 'false'
            ),
            "description" => __( "", "my-text-domain" ),
			"dependency" => array (
            'element' => "count",
            'value' => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
            )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Slide Time", "my-text-domain" ),
            "param_name" => "autoplayTimeout",
            "std" => __( "5000", "my-text-domain" ),
            "value" => array (
                '1 Second' => '1000',
                '2 Seconds' => '2000',
                '3 Seconds' => '3000',
                '4 Seconds' => '4000',
                '5 Seconds' => '5000',
                '6 Seconds' => '6000',
                '7 Seconds' => '7000',
                '8 Seconds' => '8000',
                '9 Seconds' => '9000',
                '10 Seconds' => '10000'
            ),
            "description" => __( "", "my-text-domain" ),
			 "dependency" => array (
                'element' => "count",
                'value' => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
            )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable navigation?", "my-text-domain" ),
            "param_name" => "nav",
            "std" => __( "true", "my-text-domain" ),
            "value" => array (
                'yes' => 'true',
                'no' => 'false'
            ),
            "description" => __( "", "my-text-domain" ),
			 "dependency" => array (
                'element' => "count",
                'value' => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
            )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable dots?", "my-text-domain" ),
            "param_name" => "dots",
            "std" => __( "true", "my-text-domain" ),
            "value" => array (
                'yes' => 'true',
                'no' => 'false'
            ),
            "description" => __( "", "my-text-domain" ),
			 "dependency" => array (
                'element' => "count",
                'value' => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15"),
            )
         )
      )
   ) );
