<?php

$fieldEntries = '';
for ($counter = 1; $field_total >= $counter; $counter++) {
    if (set_value("view_field_label$counter") == null) {
        continue; // Move onto next iteration of the loop
    }

    $field_label = set_value("view_field_label$counter");
    $field_name  = set_value("view_field_name$counter");

    $fieldEntries .= "
\$lang['{$module_name_lower}_field_{$field_name}'] = '{$field_label}';";
}

echo $lang = "<?php defined('BASEPATH') || exit('No direct script access allowed');
" . PHP_EOL . "
\$lang['{$module_name_lower}_manage']      = 'Manage {$module_name}';
\$lang['{$module_name_lower}_edit']        = 'Edit';
\$lang['{$module_name_lower}_true']        = 'Betul';
\$lang['{$module_name_lower}_false']       = 'Salah';
\$lang['{$module_name_lower}_create']      = 'Baru';
\$lang['{$module_name_lower}_list']        = 'List';
\$lang['{$module_name_lower}_new']         = 'Baru';
\$lang['{$module_name_lower}_edit_text']     = 'Edit';
\$lang['{$module_name_lower}_no_records']    = 'Data {$module_name_lower} tidak ada.';
\$lang['{$module_name_lower}_create_new']    = 'Baru {$module_name}.';
\$lang['{$module_name_lower}_create_success']  = '{$module_name} sukses tersimpan.';
\$lang['{$module_name_lower}_create_failure']  = 'Gagal menyimpan {$module_name_lower}: ';
\$lang['{$module_name_lower}_create_new_button'] = 'Buat Baru {$module_name}';
\$lang['{$module_name_lower}_invalid_id']      = 'ID {$module_name} nggak cocok.';
\$lang['{$module_name_lower}_edit_success']    = '{$module_name} sukses tersimpan.';
\$lang['{$module_name_lower}_edit_failure']    = 'Gagal mengedit {$module_name_lower}: ';
\$lang['{$module_name_lower}_delete_success']  = 'Sukses menghapus.';
\$lang['{$module_name_lower}_delete_failure']  = 'Gagal menghapus data : ';
\$lang['{$module_name_lower}_delete_error']    = 'Kamu belum memilih data yang mau dihapus.';
\$lang['{$module_name_lower}_actions']     = 'Aksi';
\$lang['{$module_name_lower}_cancel']      = 'Batal';
\$lang['{$module_name_lower}_delete_record']   = 'Hapus {$module_name}';
\$lang['{$module_name_lower}_delete_confirm']  = 'Yakin menghapus {$module_name_lower} ?';
\$lang['{$module_name_lower}_edit_heading']    = 'Edit {$module_name}';

// Create/Edit Buttons
\$lang['{$module_name_lower}_action_edit']   = 'Simpan {$module_name}';
\$lang['{$module_name_lower}_action_create']   = 'Baru {$module_name}';

// Activities
\$lang['{$module_name_lower}_act_create_record'] = 'Data tersimpan ID';
\$lang['{$module_name_lower}_act_edit_record'] = 'Date terupdate ID';
\$lang['{$module_name_lower}_act_delete_record'] = 'Data terhapus ID';

//Listing Specifics
\$lang['{$module_name_lower}_records_empty']    = 'Tidak ditemukan.';
\$lang['{$module_name_lower}_errors_message']    = 'Silahkan cek kembali:';

// Column Headings
\$lang['{$module_name_lower}_column_created']  = 'Dibuat';
\$lang['{$module_name_lower}_column_deleted']  = 'Terhapus';
\$lang['{$module_name_lower}_column_modified'] = 'Modifikasi';
\$lang['{$module_name_lower}_column_deleted_by'] = 'Terhapus Oleh';
\$lang['{$module_name_lower}_column_created_by'] = 'Dibuat Oleh';
\$lang['{$module_name_lower}_column_modified_by'] = 'Modifikasi Oleh';

// Module Details
\$lang['{$module_name_lower}_module_name'] = '{$module_name}';
\$lang['{$module_name_lower}_module_description'] = '{$module_description}';
\$lang['{$module_name_lower}_area_title'] = '{$module_name}';

// Fields{$fieldEntries}";