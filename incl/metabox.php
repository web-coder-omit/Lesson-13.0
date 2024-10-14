<?php
function mb_fw_function(){
    add_action( 'acf/include_fields', function() {
        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }

        acf_add_local_field_group( array(
            'key' => 'group_670d4bd43540e',
            'title' => 'Add demo info:',
            'fields' => array(
                array(
                    'key' => 'field_670d4bd561956',
                    'label' => 'Your Name:',
                    'name' => 'your_name',
                    'type' => 'text',
                    'required' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_670d4cc33fdc7',
                    'label' => 'Enter Your Image:',
                    'name' => 'your_image',
                    'type' => 'image',
                    'required' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'library' => 'all',
                    'preview_size' => 'medium',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ) );
    });
}

add_action('init', 'mb_fw_function');
?>
