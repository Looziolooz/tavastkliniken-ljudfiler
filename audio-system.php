<?php
/**
 * AUDIO SYSTEM - VERSIONE FINALE PULITA
 */

// 1. POST TYPE
function register_audio_track_post_type() {
    register_post_type('audio_track', array(
        'labels' => array('name' => 'Audio Tracks', 'singular_name' => 'Audio Track', 'add_new' => 'Lägg till ny', 'all_items' => 'Alla Audio Tracks'),
        'public' => true, 'publicly_queryable' => false, 'show_ui' => true, 'show_in_menu' => true, 'rewrite' => false, 
        'menu_position' => 5, 'menu_icon' => 'dashicons-format-audio', 'supports' => array('title', 'page-attributes'),
    ));
}
add_action('init', 'register_audio_track_post_type');

// 2. TAXONOMY
function register_audio_category_taxonomy() {
    register_taxonomy('audio_category', 'audio_track', array(
        'labels' => array('name' => 'Audio Kategorier', 'singular_name' => 'Audio Kategori'),
        'hierarchical' => true, 'show_ui' => true, 'show_admin_column' => true, 'rewrite' => false,
    ));
}
add_action('init', 'register_audio_category_taxonomy');

// 3. MEDIA SCRIPTS
function audio_enqueue_media_scripts($hook) {
    if (($hook == 'post.php' || $hook == 'post-new.php') && get_post_type() == 'audio_track') wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'audio_enqueue_media_scripts');

// 4. META BOX
function audio_file_meta_box() {
    add_meta_box('audio_file_box', 'Audio File', 'audio_file_meta_box_html', 'audio_track', 'normal', 'high');
}
add_action('add_meta_boxes', 'audio_file_meta_box');

function audio_file_meta_box_html($post) {
    wp_nonce_field('audio_file_meta_save', 'audio_file_meta_nonce');
    $audio_url = get_post_meta($post->ID, '_audio_file_url', true);
    $durata = get_post_meta($post->ID, '_audio_durata', true);
    ?>
    <table class="form-table">
        <tr>
            <th>Audio File:</th>
            <td>
                <input type="url" id="audio_file_url" name="audio_file_url" value="<?php echo esc_attr($audio_url); ?>" style="width:70%;" />
                <button type="button" class="button button-primary upload_audio_button">📁 Välj fil</button>
                <?php if ($audio_url): ?><br><br><audio controls style="max-width:300px;"><source src="<?php echo esc_url($audio_url); ?>"></audio><?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>Durata:</th>
            <td><input type="text" name="audio_durata" value="<?php echo esc_attr($durata); ?>" placeholder="5:30" style="width:100px;" /></td>
        </tr>
    </table>
    <script>
    jQuery(function($){
        var uploader;
        $('.upload_audio_button').click(function(e){
            e.preventDefault();
            if(uploader){uploader.open();return;}
            uploader = wp.media({title:'Välj Audio',button:{text:'Använd'},library:{type:'audio'},multiple:false});
            uploader.on('select',function(){$('#audio_file_url').val(uploader.state().get('selection').first().toJSON().url);});
            uploader.open();
        });
    });
    </script>
    <?php
}

function save_audio_file_meta($post_id) {
    if (!isset($_POST['audio_file_meta_nonce']) || !wp_verify_nonce($_POST['audio_file_meta_nonce'],'audio_file_meta_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (isset($_POST['audio_file_url'])) update_post_meta($post_id, '_audio_file_url', esc_url_raw($_POST['audio_file_url']));
    if (isset($_POST['audio_durata'])) update_post_meta($post_id, '_audio_durata', sanitize_text_field($_POST['audio_durata']));
}
add_action('save_post_audio_track', 'save_audio_file_meta');

// 5. INSTÄLLNINGAR
function audio_player_settings_page() {
    add_submenu_page('edit.php?post_type=audio_track', 'Inställningar', '🎨 Inställningar', 'manage_options', 'audio-settings', 'audio_settings_html');
}
add_action('admin_menu', 'audio_player_settings_page');

function audio_settings_html() {
    if (isset($_POST['save'])) {
        check_admin_referer('audio_save');
        update_option('audio_category_color', sanitize_hex_color($_POST['cat_color']));
        update_option('audio_category_size', intval($_POST['cat_size']));
        update_option('audio_category_font', sanitize_text_field($_POST['cat_font']));
        update_option('audio_title_color', sanitize_hex_color($_POST['title_color']));
        update_option('audio_title_size', intval($_POST['title_size']));
        update_option('audio_title_font', sanitize_text_field($_POST['title_font']));
        update_option('audio_duration_color', sanitize_hex_color($_POST['dur_color']));
        update_option('audio_bg_color', sanitize_hex_color($_POST['bg_color']));
        update_option('audio_divider_color', sanitize_hex_color($_POST['div_color']));
        update_option('audio_player_controls_color', sanitize_hex_color($_POST['ctrl_color']));
        echo '<div class="notice notice-success"><p>✅ Sparat!</p></div>';
    }
    $fonts = array('inherit'=>'Standard','Arial, sans-serif'=>'Arial','"Helvetica Neue", Helvetica'=>'Helvetica Neue','Roboto, sans-serif'=>'Roboto','Lato, sans-serif'=>'Lato');
    ?>
    <div class="wrap"><h1>🎨 Audio Inställningar</h1>
    <form method="post"><?php wp_nonce_field('audio_save'); ?>
    <table class="form-table">
    <tr><th>Kategori Färg:</th><td><input type="color" name="cat_color" value="<?php echo get_option('audio_category_color','#999'); ?>" /></td></tr>
    <tr><th>Kategori Storlek (px):</th><td><input type="number" name="cat_size" value="<?php echo get_option('audio_category_size',13); ?>" min="10" max="30" /></td></tr>
    <tr><th>Kategori Font:</th><td><select name="cat_font"><?php foreach($fonts as $v=>$l) echo '<option value="'.$v.'" '.selected(get_option('audio_category_font','inherit'),$v,false).'>'.$l.'</option>'; ?></select></td></tr>
    <tr><th>Titel Färg:</th><td><input type="color" name="title_color" value="<?php echo get_option('audio_title_color','#333'); ?>" /></td></tr>
    <tr><th>Titel Storlek (px):</th><td><input type="number" name="title_size" value="<?php echo get_option('audio_title_size',15); ?>" min="12" max="24" /></td></tr>
    <tr><th>Titel Font:</th><td><select name="title_font"><?php foreach($fonts as $v=>$l) echo '<option value="'.$v.'" '.selected(get_option('audio_title_font','inherit'),$v,false).'>'.$l.'</option>'; ?></select></td></tr>
    <tr><th>Durata Färg:</th><td><input type="color" name="dur_color" value="<?php echo get_option('audio_duration_color','#999'); ?>" /></td></tr>
    <tr><th>Bakgrund:</th><td><input type="color" name="bg_color" value="<?php echo get_option('audio_bg_color','#fff'); ?>" /></td></tr>
    <tr><th>Linje Färg:</th><td><input type="color" name="div_color" value="<?php echo get_option('audio_divider_color','#e0e0e0'); ?>" /></td></tr>
    <tr><th>Player Kontroller:</th><td><input type="color" name="ctrl_color" value="<?php echo get_option('audio_player_controls_color','#4CAF50'); ?>" /></td></tr>
    </table>
    <p><input type="submit" name="save" class="button button-primary" value="💾 Spara" /></p>
    </form></div>
    <?php
}

// 6. SHORTCODE
function display_audio_player_shortcode() {
    $cc = get_option('audio_category_color','#999');
    $cs = get_option('audio_category_size',13);
    $cf = get_option('audio_category_font','inherit');
    $tc = get_option('audio_title_color','#333');
    $ts = get_option('audio_title_size',15);
    $tf = get_option('audio_title_font','inherit');
    $dc = get_option('audio_duration_color','#999');
    $bg = get_option('audio_bg_color','#fff');
    $dv = get_option('audio_divider_color','#e0e0e0');
    $ctrl = get_option('audio_player_controls_color','#4CAF50');
    
    ob_start();
    $cats = get_terms(array('taxonomy'=>'audio_category','hide_empty'=>false));
    if(empty($cats)) {echo '<div style="padding:40px;text-align:center;"><p style="color:#999;">📁 Inga ljudfiler ännu</p></div>'; return ob_get_clean();}
    
    echo '<div class="audio-player-system" style="background:'.esc_attr($bg).';padding:0;">';
    $idx=0;
    foreach($cats as $cat){
        $q = new WP_Query(array('post_type'=>'audio_track','posts_per_page'=>-1,'orderby'=>'menu_order title','order'=>'ASC','tax_query'=>array(array('taxonomy'=>'audio_category','field'=>'term_id','terms'=>$cat->term_id))));
        if($q->have_posts()){
            if($idx>0) echo '<hr style="border:none;border-top:2px solid '.esc_attr($dv).';margin:30px 0;">';
            echo '<div style="padding:15px 0 10px;"><h3 style="font-size:'.esc_attr($cs).'px;color:'.esc_attr($cc).';font-family:'.esc_attr($cf).';text-transform:uppercase;margin:0;font-weight:400;">'.esc_html($cat->name).'</h3></div>';
            while($q->have_posts()){
                $q->the_post();
                $url = get_post_meta(get_the_ID(),'_audio_file_url',true);
                $dur = get_post_meta(get_the_ID(),'_audio_durata',true);
                if($url){
                    echo '<div style="padding:12px 0;border-bottom:1px solid '.esc_attr($dv).';">';
                    echo '<div style="display:flex;justify-content:space-between;margin-bottom:10px;">';
                    echo '<span style="font-size:'.esc_attr($ts).'px;color:'.esc_attr($tc).';font-family:'.esc_attr($tf).';">'.get_the_title().'</span>';
                    echo '<span style="font-size:13px;color:'.esc_attr($dc).';">'.($dur?esc_html($dur):'00:00').'</span>';
                    echo '</div>';
                    echo '<audio controls preload="metadata" style="width:100%;height:32px;background:transparent;"><source src="'.esc_url($url).'"></audio>';
                    echo '</div>';
                }
            }
            wp_reset_postdata();
            $idx++;
        }
    }
    echo '</div>';
    echo '<style>.audio-player-system audio{accent-color:'.esc_attr($ctrl).';}.audio-player-system{border:none!important;box-shadow:none!important;margin:0!important;}</style>';
    return ob_get_clean();
}
add_shortcode('audio_player', 'display_audio_player_shortcode');

// 7. ADMIN
function audio_admin_columns($cols) {
    $cols['audio_preview']='🎵 Preview'; return $cols;
}
add_filter('manage_audio_track_posts_columns', 'audio_admin_columns');

function audio_admin_column_content($col, $id) {
    if($col=='audio_preview'){
        $u=get_post_meta($id,'_audio_file_url',true);
        echo $u?'<audio controls style="max-width:250px;"><source src="'.esc_url($u).'"></audio>':'—';
    }
}
add_action('manage_audio_track_posts_custom_column', 'audio_admin_column_content', 10, 2);
