<?php
$lang = array();
$lang['lbl_lang'] = 'Sprache';
$lang['lbl_intro1'] = 'Script zum erstellen eines kompletten, passwortgeschützen Bereichs auf dem Server.';
$lang['lbl_intro2'] = 'Das Verzeichnis, welches geschützt werden soll, MUSS chmod 755 haben!';
$lang['lbl_protected_section'] = 'Geschützen-Bereich erstellen';
$lang['lbl_user_add'] = 'User hinzufügen';
$lang['lbl_user_delete'] = 'User löschen';
$lang['lbl_option_crypt'] = 'Verschlüsselung';
$lang['lbl_no_crypt'] = 'ohne Verschlüsselung';
$lang['lbl_no_space'] = 'Keine Leerzeichen und Umlaute';
$lang['lbl_max_section'] = 'Name des Bereichs (max. 30 Zeichen):';
$lang['lbl_usernamen'] = 'Username:';
$lang['lbl_root'] = 'Root:';
$lang['lbl_password'] = 'Passwort:';
$lang['lbl_select_user'] = 'Wähle einen User';
$lang['not_protected_section'] = '<font color="#FF3300">&#128275;</font> Kein geschützer Bereich!';
$lang['lbl_error'] = 'FEHLER';
$lang['lbl_error_manager'] = 'htaccess - Manager meldet folgenden Fehler:';
$lang['lbl_htaccess_edit'] = 'VORSICHT!</b><br>Dies sollten nur Leute machen, die auch wirklich wissen, was sie tun!<br>';
$lang['lbl_server_crypt'] = 'Der Server unterstütz folgende Verschlüsselungen: ';
$lang['lbl_attention_php'] = ' - Achtung: Es wird mindestens PHP 5.3.2 benötigt.';
$lang['lbl_browse'] = '<b>Browse:</b><br><br>'.$dir.'<br>';
$lang['btn_save'] = 'Speichern';
$lang['btn_delete'] = 'Löschen';
$lang['btn_yes'] = ' Ja ';
$lang['btn_no'] = ' Nein ';
$lang['btn_ok'] = ' Weiter ';
$lang['btn_cancel'] = 'Abbrechen';
$lang['btn_clear'] = 'Freigeben';
$lang['btn_edit'] = 'Bearbeiten';
$lang['err_htaccess_exists'] = 'Datei .htaccess ist bereits vorhanden!';
$lang['err_htaccess_not_exists'] = 'Die Datei .htaccess existiert nicht!';
$lang['err_crypt'] = 'Bitte eine Verschlüsselung wählen!';
$lang['err_section'] = 'Bitte Eingabe des Bereichsnamens prüfen!';
$lang['err_username'] = 'Bitte Eingabe des Usernamens prüfen!';
$lang['err_password'] = 'Bitte Eingabe des Passwortes prüfen!';
$lang['err_htaccess_create'] = 'Datei .htaccess konnte nicht erstellt werden.<br>';
$lang['err_htpasswd_create'] = 'Datei .htpasswd konnte nicht erstellt werden.<br>';
$lang['err_htaccess_save'] = 'Datei konnte nicht geschrieben werden!';
$lang['err_user_create'] = 'Der User <font color="#FF8040">( '.$user.' )</font> konnte nicht hinzugefügt werden.<br>';
$lang['err_folder_cmod'] = '. Bitte das Verzeichnis auf 755 chmoden!';
$lang['err_htpasswd_not_exists'] = 'Datei .htpasswd ist nicht vorhanden!<br>Bitte erst einen Bereich erstellen.';
$lang['err_user_exists'] = 'Der User <font color="#FF8040">( '.$user.' )</font> ist bereits vorhanden!';
$lang['err_user_deleted'] = 'Der User <font color="#FF8040">( '.$user.' )</font> konnte nicht gelöscht werden.';
$lang['err_htaccess_delete_manual'] = 'Die Datei .htaccess konnte nicht gelöscht werden!<br>Bitte manuell, per FTP löschen.<br>';
$lang['err_no_htaccess_delete'] = 'Keine .htaccess - Datei zum löschen vorhanden!!??<br>';
$lang['err_htpasswd_delete_manual'] = 'Die Datei .htpasswd konnte nicht gelöscht werden!<br>Bitte manuell, per FTP löschen.';
$lang['err_no_htpasswd_delete'] = 'Keine .htpasswd - Datei zum löschen vorhanden!!??';
$lang['msg_htaccess_created'] = 'Datei .htaccess wurde erstellt.<br>';
$lang['msg_htpasswd_created'] = 'Datei .htpasswd wurde erstellt.<br>';
$lang['msg_htaccess_save'] = 'Datei erfolgreich gespeichert!';
$lang['msg_user_created'] = 'Der User <font color="#FF8040">( '.$user.' )</font> wurde hinzugefügt.<br>';
$lang['msg_user_deleted'] = 'Der User <font color="#FF8040">( '.$user.' )</font> wurde gelöscht.';
$lang['msg_htaccess_deleted'] = 'Die Datei .htaccess wurde erfolgreich gelöscht!<br>';
$lang['msg_htpasswd_deleted'] = 'Die Datei .htpasswd wurde erfolgreich gelöscht!<br>';
$lang['msg_confirm_clear'] = 'Wollen Sie den geschützen Bereich freigeben<br>und die Dateien .htaccess und .htpasswd löschen?';
$lang['msg_confirm_user_delete'] = 'Wollen Sie den User <font color="#FF8040">( '.$user.' )</font> wirklich löschen?';
?>
