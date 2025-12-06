<?php

function ts_handle_nastaveni(){

    //ověření, že je to post na stránce formuláře
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        return;
    }
    if(!is_page_template('page-prihlaska.php')){
        return;
    }
    //ověření nonce pole
    if(empty($_POST['ts_prihlaska_nonce']) || !wp_verify_nonce($_POST['ts_prihlaska_nonce'], 'ts_odeslat_prihlasku')){
        wp_die('Chyba zabezpečení. Zkuste to prosím znovu.');
    }

    //čištění dat
    $data = [
        'z1_jmeno' => sanitize_text_field($_POST['zastupce1-jmeno'] ?? ''),
        'z1_bydliste' => sanitize_text_field($_POST['zastupce1-bydliste'] ?? ''),
        'z1_email' => sanitize_email($_POST['zastupce1-email'] ?? ''),
        'z1_telefon' => sanitize_text_field($_POST['zastupce1-telefon'] ?? ''),

        'z2_jmeno' => sanitize_text_field($_POST['zastupce2-jmeno'] ?? ''),
        'z2_bydliste' => sanitize_text_field($_POST['zastupce2-bydliste'] ?? ''),
        'z2_email' => sanitize_email($_POST['zastupce2-email'] ?? ''),
        'z2_telefon' => sanitize_text_field($_POST['zastupce2-telefon'] ?? ''),

        'dite_jmeno' => sanitize_text_field($_POST['dite-jmeno'] ?? ''),
        'dite_prijmeni' => sanitize_text_field($_POST['dite-prijmeni'] ?? ''),
        'dite_bydliste' => sanitize_text_field($_POST['dite-bydliste'] ?? ''),
        'dite_narozeni' => sanitize_text_field($_POST['dite-narozeni'] ?? ''),
        'dite_trida' => sanitize_text_field($_POST['dite-trida'] ?? ''),
        'dite_doplneni' => sanitize_textarea_field($_POST['dite-doplneni'] ?? ''),

        'oddil_jmeno1' => sanitize_text_field($_POST['oddil-jmeno1'] ?? ''),
        'oddil_jmeno2' => sanitize_text_field($_POST['oddil-jmeno2'] ?? ''),

        'doprava_tam' => sanitize_text_field($_POST['doprava-tam'] ?? ''),
        'doprava_zpet' => sanitize_text_field($_POST['doprava-zpet'] ?? ''),

        'fakturace' => !empty($_POST['fakturace-check']) ? 1 : 0,
        'fakturace_ico' => sanitize_text_field($_POST['fakturace-ico'] ?? ''),
        'fakturace_doplneni' => sanitize_textarea_field($_POST['fakturace-doplneni'] ?? ''),

        'souhlas_gdpr' => !empty($_POST['souhlas-gdpr']) ? 1 : 0,
        'souhlas_podminky' => !empty($_POST['souhlas-podminky']) ? 1 : 0,
        'souhlas_fotky' => !empty($_POST['souhlas-fotky']) ? 1 : 0,
        'souhlas_rad' => !empty($_POST['souhlas-rad']) ? 1 : 0,
    ];

    $errors = [];

    //validace dat a vracení $errors při chybách
    $regex_jmeno = '/^[\p{L}\p{Zs}]+$/u';
    $regex_telefon = '/^\+?[0-9\s]{9,20}$/';
    $regex_ico = '/^[0-9]{8}$/';

    if(empty($data['z1_jmeno'])){
        $errors[] = 'Zadejte jméno zákonného zástupce č.1.';
    }else if(!preg_match($regex_jmeno, $data['z1_jmeno'])){
        $errors[] = 'Jméno zákonného zástupce č.1 může obsahovat pouze písmena a mezery.';
    }
    if(empty($data['z1_bydliste'])){
        $errors[] = 'Zadejte trvalé bydliště zákonného zástupce č.1.';
    }
    if(empty($data['z1_email']) || !is_email($data['z1_email'])){
        $errors[] = 'Zadejte platný e-mail zákonného zástupce č.1.';
    }
    if(empty($data['z1_telefon'])){
        $errors[] = 'Zadejte telefonní číslo zákonného zástupce č.1.';
    }else if(!preg_match($regex_telefon, $data['z1_telefon'])){
        $errors[] = 'Telefonní číslo zákonného zástupce č.1 může obsahovat jen číslice, mezery a případně + na začátku.';
    }

    if(!empty($data['z2_jmeno']) && !preg_match($regex_jmeno, $data['z2_jmeno'])){
        $errors[] = 'Jméno zákonného zástupce č.2 může obsahovat pouze písmena a mezery.';
    }
    if(!empty($data['z2_email']) && !is_email($data['z2_email'])){
        $errors[] = 'Zadejte platný e-mail zákonného zástupce č.2.';
    }
    if(!empty($data['z2_telefon']) && !preg_match($regex_telefon, $data['z2_telefon'])){
        $errors[] = 'Telefonní číslo zákonného zástupce č.2 může obsahovat jen číslice, mezery a případně + na začátku.';
    }

    if(empty($data['dite_jmeno'])){
        $errors[] = 'Zadejte jméno dítěte.';
    }else if(!preg_match($regex_jmeno, $data['dite_jmeno'])){
        $errors[] = 'Jméno dítěte může obsahovat pouze písmena a mezery.';
    }
    if(empty($data['dite_prijmeni'])){
        $errors[] = 'Zadejte příjmení dítěte.';
    }else if(!preg_match($regex_jmeno, $data['dite_prijmeni'])){
        $errors[] = 'Příjmení dítěte může obsahovat pouze písmena a mezery.';
    }
    if(empty($data['dite_bydliste'])){
        $errors[] = 'Zadejte trvalé bydliště dítěte.';
    }
    if(empty($data['dite_narozeni'])){
        $errors[] = 'Zadejte datum narození dítěte.';
    }
    if(empty($data['dite_trida'])){
        $errors[] = 'Zadejte třídu dítěte.';
    }

    if(!empty($data['oddil_jmeno1']) && !preg_match($regex_jmeno, $data['oddil_jmeno1'])){
        $errors[] = 'Jméno dítěte může obsahovat pouze písmena a mezery.';
    }
    if(!empty($data['oddil_jmeno2']) && !preg_match($regex_jmeno, $data['oddil_jmeno2'])){
        $errors[] = 'Jméno dítěte může obsahovat pouze písmena a mezery.';
    }

    if(empty($data['doprava_tam'])){
        $errors[] = 'Vyberte způsob dopravy na tábor.';
    }
    if(empty($data['doprava_zpet'])){
        $errors[] = 'Vyberte způsob dopravy z tábora.';
    }

    if($data['fakturace']){
        if(empty($data['fakturace_ico'])){
            $errors[] = 'Zadejte IČO pro fakturaci.';
        }else if(!preg_match($regex_ico, $data['fakturace_ico'])){
            $errors[] = 'IČO musí obsahovat přesně 8 číslic.';
        }
    }

    if(!$data['souhlas_gdpr'] || !$data['souhlas_podminky'] || !$data ['souhlas_fotky'] ||!$data['souhlas_rad']){
        $errors[] = 'Je nutné udělit všechny povinné souhlasy.';
    }

    //přidat reCAPTCHA validaci

    if(!empty($errors)){
        set_transient('ts_prihlaska_errors', $errors, 60);
        set_transient('ts_prihlaska_old_data', $data, 60);
        wp_safe_redirect(add_query_arg('prihlaska_status', 'chyba', get_permalink()));
        exit;
    }
    //uložení do CPT
    $prihlaska_post = [
        'post_title' => $data['dite_jmeno'] . ' ' . $data['dite_prijmeni'] . ' - ' . current_time('Y-m-d H:i:s'),
        'post_type' => 'prihlaska',
        'post_status' => 'publish',
        'meta_input' => $data,
    ];
    $post_id = wp_insert_post($prihlaska_post);

    if(is_wp_error($post_id)){
        wp_die('Došlo k chybě při ukládání přihlášky. Zkuste to prosím znovu.');
    }

    //aktualiza názvu o id
    wp_update_post([
        'ID' => $post_id,
        'post_title' => 'Přihláška #' . $post_id . ' - ' . $data['dite_jmeno'] . ' ' . $data['dite_prijmeni'],
    ]);

    delete_transient('ts_prihlaska_errors');
    delete_transient('ts_prihlaska_old_data');

    //url potvrzovací page s id přihlášky 
    $potvzeni_page = get_page_by_path('prihlaska-potvrzeno');
    if($potvzeni_page){
        $potvzeni_page_url = add_query_arg('prihlaska_id', $post_id, get_permalink($potvzeni_page->ID));
    }else{
        $potvzeni_page_url = add_query_arg('prihlaska_status', 'ok', get_permalink());
    }

    //úspěšné odeslání - redirect na potvrzovací page
    wp_safe_redirect($potvzeni_page_url);
    exit;

    //email notifikace uživateli

    //redirect na díky page
}
add_action('template_redirect', 'ts_handle_nastaveni');