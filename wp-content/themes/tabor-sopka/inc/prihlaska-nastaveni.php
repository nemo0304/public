<?php
//wp admin panel pro přepínání přihlášky

//vytvorení položky v menu wp
function ts_prihlaska_nastaveni(){
    add_menu_page(
        'Přihláška - nastavení režimu',
        'Přihláška',
        'manage_options',
        'ts_prihlaska',
        'ts_prihlaska_nastaveni_html',
        'dashicons-forms',
        20
    );
}
add_action('admin_menu', 'ts_prihlaska_nastaveni');

//vytvoření nastavení pro db
function ts_prihlaska_nastaveni_db(){
    register_setting(
        'ts_prihlaska_nastaveni_skupina',
        'ts_prihlaska_nastaveni_rezim',
        [
        'type' => 'string',
        'sanitize_callback' => 'ts_sanitize_rezim',
        'default' => 'uzavrena',
        ]
    );
}
add_action('admin_init', 'ts_prihlaska_nastaveni_db');

//sanitizace režimu
function ts_sanitize_rezim($input){
    $allowed = ['otevrena','nahradnici', 'uzavrena'];
    
    return in_array($input, $allowed, true) ? $input : 'uzavrena';
}

//html pro admin panel
function ts_prihlaska_nastaveni_html(){

    $current_rezim = get_option('ts_prihlaska_nastaveni_rezim', 'uzavrena');
    ?>
    <div class="wrap">
        <h1>Přihláška - nastavení režimu</h1>

        <form method="post" action="options.php">
            <?php
            settings_fields('ts_prihlaska_nastaveni_skupina');
            ?>
            <table class="form-table">
                <tr>
                    <th scope="row">Režim přihlášky</th>
                    <td>
                        <select name="ts_prihlaska_nastaveni_rezim">
                            <option value="otevrena" <?php selected($current_rezim, 'otevrena'); ?>>Přihlašování normální</option>
                            <option value="nahradnici" <?php selected($current_rezim, 'nahradnici'); ?>>Přihlašování náhradníků</option>
                            <option value="uzavrena" <?php selected($current_rezim, 'uzavrena'); ?>>Přihlašování uzavřeno</option>
                        </select>
                    </td>
                </tr>    
            </table>
            <?php
            submit_button();
            ?>
        </form>
    </div>
    <?php


}