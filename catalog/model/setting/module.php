<?php
class ModelSettingModule extends Model {
	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");
		
		if ($query->row) {
            $setting = json_decode($query->row['setting'], true);
            $setting['date_modified'] = $query->row['date_modified'];
            $setting['date_added'] = $query->row['date_added'];
			return $setting;
		} else {
			return array();	
		}
	}		
}