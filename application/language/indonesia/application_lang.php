<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2018, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT The MIT License.
 * @link      http://cibonfire.com
 * @since     Version 1.0
 */

/**
 * Application language file (Indonesia)
 *
 * Localization strings used by Bonfire
 *
 * @package Bonfire\Application\Language\Indonesia
 * @author  Bonfire Dev Team
 * @link    http://cibonfire.com/docs/developer
 */


//------------------------------------------------------------------------------
// ! GENERAL SETTINGS
//------------------------------------------------------------------------------
$lang['bf_site_name'] = 'Nama Web';
$lang['bf_site_email'] = 'Email Utama';
$lang['bf_site_email_help'] = 'Email administrator. Jika Emailer System Email belum dikonfigurasi, maka system-generated email akan dikirim menggunakan email ini.';
$lang['bf_site_status'] = 'Status Web';
$lang['bf_online'] = 'Online';
$lang['bf_offline'] = 'Offline';
$lang['bf_top_number'] = 'Baris tabel <em>per</em> halaman:';
$lang['bf_top_number_help'] = 'When viewing reports, how many items should be listed at a time?';
$lang['bf_home'] = 'Home';
$lang['bf_site_information'] = 'Informasi Web';
$lang['bf_timezone'] = 'Zona Waktu';
$lang['bf_language'] = 'Bahasa';
$lang['bf_language_help'] = 'Pilih bahasa yang bisa dipakai pengguna.';

//------------------------------------------------------------------------------
// ! AUTH SETTINGS
//------------------------------------------------------------------------------
$lang['bf_security'] = 'Keamanan';
$lang['bf_login_type'] = 'Tipe Login';
$lang['bf_login_type_email'] = 'Email Saja';
$lang['bf_login_type_username'] = 'Username Saja';
$lang['bf_allow_register'] = 'Buka pendaftaran user?';
$lang['bf_login_type_both'] = 'Email atau Username';
$lang['bf_use_usernames'] = 'Nama yang dipakai di tampilan:';
$lang['bf_use_own_name'] = 'Use Own Name';
$lang['bf_allow_remember'] = 'Aktifkan \'Ingat saya\'?';
$lang['bf_remember_time'] = 'Remember Users For';
$lang['bf_week'] = 'Week';
$lang['bf_weeks'] = 'Weeks';
$lang['bf_days'] = 'Days';
$lang['bf_username'] = 'Username';
$lang['bf_password'] = 'Password';
$lang['bf_password_confirm'] = 'Password (again)';
$lang['bf_display_name'] = 'Nama Lengkap';

//------------------------------------------------------------------------------
// ! CRUD SETTINGS
//------------------------------------------------------------------------------
$lang['bf_home_page'] = 'Home Page';
$lang['bf_pages'] = 'Pages';
$lang['bf_enable_rte'] = 'Enable RTE for pages?';
$lang['bf_rte_type'] = 'RTE Type';
$lang['bf_searchable_default'] = 'Searchable by default?';
$lang['bf_cacheable_default'] = 'Cacheable by default?';
$lang['bf_track_hits'] = 'Track Page Hits?';

$lang['bf_action_save'] = 'Simpan';
$lang['bf_action_delete'] = 'Hapus';
$lang['bf_action_edit'] = 'Edit';
$lang['bf_action_undo'] = 'Undo';
$lang['bf_action_cancel'] = 'Batal';
$lang['bf_action_download'] = 'Unduh';
$lang['bf_action_preview'] = 'Lihat';
$lang['bf_action_search'] = 'Cari';
$lang['bf_action_purge'] = 'Purge';
$lang['bf_action_restore'] = 'Restore';
$lang['bf_action_show'] = 'Tampilkan';
$lang['bf_action_login'] = 'Masuk';
$lang['bf_action_logout'] = 'Keluar';
$lang['bf_actions'] = 'Aksi';
$lang['bf_clear'] = 'Bersihkan';
$lang['bf_action_list'] = 'Daftar';
$lang['bf_action_create'] = 'Baru';
$lang['bf_action_ban'] = 'Ban';
$lang['bf_action_print'] = 'Print';
$lang['bf_action_forward'] = 'Teruskan';
$lang['bf_action_disposition'] = 'Disposisi';
$lang['bf_action_progress'] = 'Progress';
$lang['bf_action_export'] = 'Export';

//------------------------------------------------------------------------------
// ! SETTINGS LIB
//------------------------------------------------------------------------------
$lang['bf_ext_profile_show'] = 'Does User accounts have extended profile?';
$lang['bf_ext_profile_info'] = 'Check "Extended Profiles" to have extra profile meta-data available option(wip), omiting some default bonfire fields (eg: address).';

$lang['bf_yes'] = 'Ya';
$lang['bf_no'] = 'Tidak';
$lang['bf_none'] = 'None';
$lang['bf_id'] = 'ID';

$lang['bf_or'] = '';
$lang['bf_size'] = 'Ukuran';
$lang['bf_files'] = 'File';
$lang['bf_file'] = 'File';

$lang['bf_with_selected'] = 'Terpilih';

$lang['bf_env_dev'] = 'Development';
$lang['bf_env_test'] = 'Testing';
$lang['bf_env_prod'] = 'Production';

$lang['bf_show_profiler'] = 'Show Admin Profiler?';
$lang['bf_show_front_profiler'] = 'Show Front End Profiler?';

$lang['bf_cache_not_writable'] = 'The application cache folder is not writable';

$lang['bf_password_strength'] = 'Password Strength Settings';
$lang['bf_password_length_help'] = 'Minimum password length e.g. 8';
$lang['bf_password_force_numbers'] = 'Should password force numbers?';
$lang['bf_password_force_symbols'] = 'Should password force symbols?';
$lang['bf_password_force_mixed_case'] = 'Should password force mixed case?';
$lang['bf_password_show_labels'] = 'Display password validation labels';
$lang['bf_password_iterations_note'] = 'Higher values increase the security and the time taken to hash the passwords.<br/>See the <a href="http://www.openwall.com/phpass/" target="blank">phpass page</a> for more information. If in doubt, leave at 8.';

//------------------------------------------------------------------------------
// ! USER/PROFILE
//------------------------------------------------------------------------------
$lang['bf_user'] = 'User';
$lang['bf_users'] = 'Users';
$lang['bf_description'] = 'Deskripsi';
$lang['bf_email'] = 'Email';
$lang['bf_user_settings'] = 'Profil Saya';
$lang['bf_select_state'] = 'Pilih Negara';
$lang['bf_select_no_state'] = 'No State Available';

//------------------------------------------------------------------------------
// !
//------------------------------------------------------------------------------
$lang['bf_both'] = 'both';
$lang['bf_go_back'] = 'Go Back';
$lang['bf_new'] = 'Baru';
$lang['bf_required_note'] = 'Required fields are in <b>bold</b>.';
$lang['bf_form_label_required'] = '<span class="required">*</span>';

//------------------------------------------------------------------------------
// BF_Model
//------------------------------------------------------------------------------
$lang['bf_model_db_error'] = 'DB Error: %s';
$lang['bf_model_no_data'] = 'Masih kosong.';
$lang['bf_model_invalid_id'] = 'Invalid ID passed to model.';
$lang['bf_model_no_table'] = 'Model has unspecified database table.';
$lang['bf_model_fetch_error'] = 'Not enough information to fetch field.';
$lang['bf_model_count_error'] = 'Not enough information to count results.';
$lang['bf_model_unique_error'] = 'Not enough information to check uniqueness.';
$lang['bf_model_find_error'] = 'Not enough information to find by.';

//------------------------------------------------------------------------------
// Contexts
//------------------------------------------------------------------------------
$lang['bf_no_contexts'] = 'The contexts array is not properly setup. Check your application config file.';
$lang['bf_context_content'] = 'Konten';
$lang['bf_context_reports'] = 'Laporan';
$lang['bf_context_settings'] = 'Pengaturan';
$lang['bf_context_developer'] = 'Developer';

//------------------------------------------------------------------------------
// Activities
//------------------------------------------------------------------------------
$lang['bf_act_settings_saved'] = 'App settings saved from';
$lang['bf_unauthorized_attempt'] = 'unsuccessfully attempted to access a page which required the following permission "%s" from ';

$lang['bf_keyboard_shortcuts'] = 'Available keyboard shortcuts:';
$lang['bf_keyboard_shortcuts_none'] = 'There are no keyboard shortcuts assigned.';
$lang['bf_keyboard_shortcuts_edit'] = 'Update the keyboard shortcuts';

//------------------------------------------------------------------------------
// Common
//------------------------------------------------------------------------------
$lang['bf_question_mark'] = '?';
$lang['bf_language_direction'] = 'ltr';
$lang['bf_name'] = 'Nama';
$lang['bf_status'] = 'Status';

//------------------------------------------------------------------------------
// Login
//------------------------------------------------------------------------------
$lang['bf_action_register'] = 'Daftar';
$lang['bf_forgot_password'] = 'Lupa Password ?';
$lang['bf_remember_me'] = 'Ingat saya !';

//------------------------------------------------------------------------------
// Password Help Fields to be used as a warning on register
//------------------------------------------------------------------------------
$lang['bf_password_number_required_help'] = 'Password must contain at least 1 number.';
$lang['bf_password_caps_required_help'] = 'Password must contain at least 1 capital letter.';
$lang['bf_password_symbols_required_help'] = 'Password must contain at least 1 symbol.';

$lang['bf_password_min_length_help'] = 'Password must be at least %s characters long.';
$lang['bf_password_length'] = 'Password Length';

//------------------------------------------------------------------------------
// Activation
//------------------------------------------------------------------------------
$lang['bf_activate_method'] = 'Activation Method';
$lang['bf_activate_none'] = 'None';
$lang['bf_activate_email'] = 'Email';
$lang['bf_activate_admin'] = 'Admin';
$lang['bf_activate'] = 'Aktifasi';
$lang['bf_activate_resend'] = 'Kirim lagi kode aktifasi';

$lang['bf_reg_complete_error'] = 'An error occurred completing your registration. Please try again or contact the site administrator for help.';
$lang['bf_reg_activate_email'] = 'An email containing your activation code has been sent to [EMAIL].';
$lang['bf_reg_activate_admin'] = 'You will be notified when the site administrator has approved your membership.';
$lang['bf_reg_activate_none'] = 'Please login to begin using the site.';
$lang['bf_user_not_active'] = 'User account is not active.';
$lang['bf_login_activate_title'] = 'Need to activate your account?';
$lang['bf_login_activate_email'] = '<b>Have an activation code to enter to activate your membership?</b> Enter it on the [ACCOUNT_ACTIVATE_URL] page.<br /><br />    <b>Need your code again?</b> Request it again on the [ACTIVATE_RESEND_URL] page.';

//------------------------------------------------------------------------------
// Profiler Template
//------------------------------------------------------------------------------
$lang['bf_profiler_box_benchmarks'] = 'Benchmarks';
$lang['bf_profiler_box_console'] = 'Console';
$lang['bf_profiler_box_files'] = 'Files';
$lang['bf_profiler_box_memory'] = 'Memory Usage';
$lang['bf_profiler_box_queries'] = 'Queries';
$lang['bf_profiler_box_session'] = 'Session User Data';

$lang['bf_profiler_menu_console'] = 'Console';
$lang['bf_profiler_menu_files'] = 'Files';
$lang['bf_profiler_menu_memory'] = 'Memory Used';
$lang['bf_profiler_menu_memory_mb'] = 'MB';
$lang['bf_profiler_menu_queries'] = 'Queries';
$lang['bf_profiler_menu_queries_db'] = 'Database';
$lang['bf_profiler_menu_time'] = 'Load Time';
$lang['bf_profiler_menu_time_ms'] = 'ms';
$lang['bf_profiler_menu_time_s'] = 's';
$lang['bf_profiler_menu_vars'] = '<span>vars</span> &amp; Config';

$lang['bf_profiler_true'] = 'true';
$lang['bf_profiler_false'] = 'false';

//------------------------------------------------------------------------------
// Form Validation
//------------------------------------------------------------------------------
$lang['bf_form_allowed_types'] = '%s must contain one of the allowed selections.';
$lang['bf_form_allowed_types_none'] = 'Configuration Error: No valid types available for the %s field.';
$lang['bf_form_alpha_extra'] = 'The %s field may only contain alpha-numeric characters, spaces, periods, underscores, and dashes.';
$lang['bf_form_matches_pattern'] = 'The %s field does not match the required pattern.';
$lang['bf_form_max_file_size'] = 'The file in %s field must not exceed {max_size}';
$lang['bf_form_one_of'] = '%s must contain one of the available selections.';
$lang['bf_form_one_of_none'] = 'Configuration Error: No valid values available for the %s field.';
$lang['bf_form_unique'] = '&quot;%s&quot; sudah digunakan.';
$lang['bf_form_valid_password'] = 'Panjang kolom %s minimal {min_length}.';
$lang['bf_form_valid_password_nums'] = '%s harus ada minimal 1 angka.';
$lang['bf_form_valid_password_syms'] = '%s harus ada minimal 1 simbol.';
$lang['bf_form_valid_password_mixed_1'] = '%s harus ada minimal 1 HURUF BESAR.';
$lang['bf_form_valid_password_mixed_2'] = '%s harus ada minimal 1 huruf kecil.';
$lang['bf_form_valid_url'] = '%s harus URL yg benar.';

//------------------------------------------------------------------------------
// Menu Strings - feel free to add your own custom modules here
// if you want to localize your menus
//------------------------------------------------------------------------------
$lang['bf_menu_activities'] = 'Activities';
$lang['bf_menu_code_builder'] = 'Code Builder';
$lang['bf_menu_db_tools'] = 'Database Tools';
$lang['bf_menu_db_maintenance'] = 'Maintenance';
$lang['bf_menu_db_backup'] = 'Backups';
$lang['bf_menu_emailer'] = 'Email Queue';
$lang['bf_menu_email_settings'] = 'Settings';
$lang['bf_menu_email_template'] = 'Template';
$lang['bf_menu_email_queue'] = 'View Queue';
$lang['bf_menu_kb_shortcuts'] = 'Keyboard Shortcuts';
$lang['bf_menu_logs'] = 'Logs';
$lang['bf_menu_migrations'] = 'Migrations';
$lang['bf_menu_permissions'] = 'Permissions';
$lang['bf_menu_queue'] = 'Queue';
$lang['bf_menu_roles'] = 'Roles';
$lang['bf_menu_settings'] = 'Settings';
$lang['bf_menu_sysinfo'] = 'System Information';
$lang['bf_menu_template'] = 'Template';
$lang['bf_menu_translate'] = 'Translate';
$lang['bf_menu_users'] = 'Users';

//------------------------------------------------------------------------------
// Module Name
//------------------------------------------------------------------------------
$lang['bf_menu_departement'] = 'Department';
$lang['bf_menu_notification'] = 'Notification';
$lang['bf_menu_perusahaan'] = 'Perusahaan';
$lang['bf_menu_daftar_kab'] = 'Daftar Kab / Kota';
$lang['bf_menu_provinsi'] = 'Daftar Provinsi';
$lang['bf_menu_tpk'] = 'Daftar TPK';
$lang['bf_menu_petugas'] = 'Daftar Petugas Perusahaan';
$lang['bf_menu_hhsortimen'] = 'Sortimen HH';
$lang['bf_menu_hhjenis'] = 'Jenis HH';
$lang['bf_menu_hhkelompok'] = 'Kelompok Jenis HH';
$lang['bf_menu_dokumen'] = 'Dokumen';
$lang['bf_menu_sk'] = 'SK';
$lang['bf_menu_skkoordinator'] = 'SK Koordinator';
$lang['bf_menu_skpejabat'] = 'SK Pejabat';
$lang['bf_menu_skretribusi'] = 'SK Retribusi';
$lang['bf_menu_wilayah'] = 'Wilayah / Pos';
$lang['bf_menu_pppkbnoreg'] = 'Registrasi P3KB';
$lang['bf_menu_agenda'] = 'Agenda Penerimaan HH';
$lang['bf_menu_agenda_dokumen'] = 'Penerimaan Dokumen';
$lang['bf_menu_agenda_dokumen_isi'] = 'Detail Dokumen';
$lang['bf_menu_bap'] = 'BAP';
$lang['bf_menu_penetapan'] = 'SKRD';
$lang['bf_menu_penyetoran'] = 'STS';
$lang['bf_menu_pelabuhan'] = 'Bongkar Muat';
$lang['bf_menu_lhb'] = 'LKB';
$lang['bf_menu_lhbtuju'] = 'Daftar Kegiatan LKB';
$lang['bf_menu_pelsus'] = 'Pelabuhan Khusus';

//------------------------------------------------------------------------------
// Anything that doesn't follow the 'bf_*' convention:
//------------------------------------------------------------------------------
$lang['log_intro'] = 'These are your log messages';

//------------------------------------------------------------------------------
// User Meta examples
//------------------------------------------------------------------------------
$lang['user_meta_street_name'] = 'Street Name';
$lang['user_meta_type'] = 'Type';
$lang['user_meta_country'] = 'Country';
$lang['user_meta_state'] = 'State';

//------------------------------------------------------------------------------
// extended Setting
//------------------------------------------------------------------------------
$lang['user_meta_company'] = 'Nama Institusi / Perusahaan';
$lang['user_meta_address'] = 'Alamat';
$lang['user_meta_telp'] = 'Telp';
$lang['user_meta_facebook_page'] = 'Facebook Page';
$lang['user_meta_twitter'] = 'Twitter';
$lang['user_meta_instagram'] = 'Instagram';
$lang['user_meta_youtube'] = 'Youtube';

//------------------------------------------------------------------------------
// Migrations lib
//------------------------------------------------------------------------------
$lang['no_migrations_found'] = 'No migration files were found';
$lang['multiple_migrations_version'] = 'Multiple migrations version: %d';
$lang['multiple_migrations_name'] = 'Multiple migrations name: %s';
$lang['migration_class_doesnt_exist'] = 'Migration class does not exist: %s';
$lang['wrong_migration_interface'] = 'Wrong migration interface: %s';
$lang['invalid_migration_filename'] = 'Wrong migration filename: %s - %s';

//------------------------------------------------------------------------------
// Form validation labels (for CI 3.0, should be fixed in 3.0.1)
//------------------------------------------------------------------------------
$lang['form_validation_bf_users'] = 'Users';

$lang['bf_context_archive'] = 'Arsip';

$lang['bf_context_operation'] = 'Operasional';
$lang['bf_context_mailbox'] = 'Kotak Pesan';