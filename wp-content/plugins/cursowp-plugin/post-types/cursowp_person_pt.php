<?php

add_action('init', 'register_cursowp_person_pt');

function register_cursowp_person_pt()
{
    register_post_type('cursowp_person_pt',
        array(
            'labels' => array(
                'name' => __('Post Type Personalizado'),
                'singular_name' => __('Post Type Personalizado')
            ),
            'menu_icon' => 'dashicons-groups',
            'supports' => array(
                'title',
                'editor'
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array(
                'cursowp_tax'
            )

        )
    );
}

add_action( 'add_meta_boxes', 'cursowp_person_pt_metaboxes' );

function cursowp_person_pt_metaboxes(){
    add_meta_box( 'cursowp_person_pt_dados', 'Dados', 'cursowp_person_pt_dados_metabox', 'cursowp_person_pt');
}

function cursowp_person_pt_dados_metabox($post){

    $area = get_post_meta( $post->ID, 'cursowp_person_pt_area', true);

    ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Área</th>
            <td>
                <input type="text" name="cursowp_person_pt_area" value="<?php echo $area; ?>" />
            </td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'save_cursowp_person_pt');

function save_cursowp_person_pt($post_id){

    if ( !isset( $_POST['post_type'] ) || 'cursowp_person_pt' != $_POST['post_type'] ) {
        return;
    }

    $metabox_field = 'cursowp_person_pt_area';

    $area = (isset($_POST[$metabox_field]) ? trim($_POST[$metabox_field]) : '');

    if ( !$area ) {
        delete_post_meta( $post_id, $metabox_field );
    }else {

        if ( get_post_meta( $post_id, $metabox_field, FALSE ) ) {
            update_post_meta( $post_id, $metabox_field, $area );
        } else {
            add_post_meta( $post_id, $metabox_field, $area );
        }
    }
}

add_action( 'init', 'register_cursowp_tax' );

function register_cursowp_tax() {
    register_taxonomy(
        'cursowp_tax',
        'cursowp_person_pt',
        array(
            'label' => __( 'Catergoria Personalizada' ),
            'rewrite' => array( 'slug' => 'cursowp_tax' ),
            'hierarchical' => false
        )
    );
}



?>