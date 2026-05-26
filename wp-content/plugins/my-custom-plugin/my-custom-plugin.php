<?php
/**
 * Plugin Name:     Custom plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     A breif description is not description
 * Author:          kuldeep patel
 * Author URI:      YOUR SITE HERE
 * Text Domain:     my-custom-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         My_Custom_Plugin
 */
// Your code starts here.
function contact_form()
{
    ob_start(); // important for shortcode output
    ?>

    <form id="my-form" method="POST">
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>E-mail</label>
            <input type="text" name="email">
        </div>

        <button type="submit">Submit</button>
    </form>
    <div id="response"></div>
    <script>
        document.getElementById('my-form').addEventListener('submit', function (e) {
            e.preventDefault(); // stop page reload

            const formData = new FormData(this);
            formData.append('action', 'my_form_submit');
            formData.append('nonce', '<?php echo wp_create_nonce('my_form_nonce'); ?>');

            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    const box = document.getElementById('response');
                    if (data.success) {
                        box.innerHTML = data.data.message;
                    } else {
                        box.innerHTML = data.data.message || 'Something went wrong';
                    }
                })
                .catch(error => {
                    document.getElementById('response').innerHTML = 'Error: ' + error.message;
                });
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_form', 'contact_form');

add_action('wp_ajax_my_form_submit', 'my_form_submit');
add_action('wp_ajax_nopriv_my_form_submit', 'my_form_submit');

function my_form_submit()
{
    check_ajax_referer('my_form_nonce', 'nonce');

    $fullname = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');

    if ($fullname === '' || $email === '') {
        wp_send_json_error(['message' => 'Please fill in all fields.']);
    }

    wp_send_json_success([
        'message' => 'Form submitted successfully for ' . esc_html($fullname),
    ]);
}