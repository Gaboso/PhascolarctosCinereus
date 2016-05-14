<?php


add_action('admin_menu', 'wp_curso_menu');

function wp_curso_menu() {

    add_menu_page('Dados Cruso WP', 'Cruso WP', 'administrator', 'wp_curso_menu', 'settings_wp_curso_page');

}

add_action('admin_init', 'register_settings_wp_curso_group');


function register_settings_wp_curso_group(){

    register_setting('wp-curso-settings-group', 'wp_curso_telefone');
    register_setting('wp-curso-settings-group', 'wp_curso_email');

}

function settings_wp_curso_page() {
    ?>
    <div class="wrap">
        <h2>Curso Wp</h2>

        <form method="post" action="options.php">
            <?php settings_fields('wp-curso-settings-group'); ?>
            <?php do_settings_sections('wp-curso-settings-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Telefone</th>
                    <td><input type="text" name="wp_curso_telefone"
                               value="<?php echo esc_attr(get_option('wp_curso_telefone')); ?>"/></td>
                </tr>

                <tr valign="top">
                    <th scope="row">E-mail</th>
                    <td><input type="text" name="wp_curso_email" value="<?php echo esc_attr(get_option('wp_curso_email')); ?>"/>
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php } ?>
