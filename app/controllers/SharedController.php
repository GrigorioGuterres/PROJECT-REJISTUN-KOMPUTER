<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * tb_prosses_kode_komputer_option_list Model Action
     * @return array
     */
	function tb_prosses_kode_komputer_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_komputer AS value,naran_komputer AS label FROM tb_komputer ORDER BY naran_komputer";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prosses_kode_tipu_komputer_option_list Model Action
     * @return array
     */
	function tb_prosses_kode_tipu_komputer_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_komputer AS value,naran_komputer AS label FROM tb_tipu_komputer ORDER BY naran_komputer";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prosses_kode_avaria_diak_option_list Model Action
     * @return array
     */
	function tb_prosses_kode_avaria_diak_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nara_komputer AS value,nara_komputer AS label FROM tb_avaria ORDER BY nara_komputer";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tb_prosses_kode_staff_option_list Model Action
     * @return array
     */
	function tb_prosses_kode_staff_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_staff AS value,naran_staff AS label FROM tb_staff ORDER BY naran_staff";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * users_username_value_exist Model Action
     * @return array
     */
	function users_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * rlt_geral_rlt_geralkode_tipu_komputer_option_list Model Action
     * @return array
     */
	function rlt_geral_rlt_geralkode_tipu_komputer_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT naran_komputer AS value,naran_komputer AS label FROM tb_tipu_komputer ORDER BY naran_komputer";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rlt_geral_rlt_geraldata_rejistu_option_list Model Action
     * @return array
     */
	function rlt_geral_rlt_geraldata_rejistu_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT data_rejistu AS value,data_rejistu AS label FROM tb_prosses ORDER BY data_rejistu";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * rlt_geral_rlt_geralkode_avaria_diak_option_list Model Action
     * @return array
     */
	function rlt_geral_rlt_geralkode_avaria_diak_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nara_komputer AS value,nara_komputer AS label FROM rlt_avaria ORDER BY nara_komputer";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_totaldadusavaria Model Action
     * @return Value
     */
	function getcount_totaldadusavaria(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_avaria";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totaldaduskomputer Model Action
     * @return Value
     */
	function getcount_totaldaduskomputer(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_komputer";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totaldaduskomputer_2 Model Action
     * @return Value
     */
	function getcount_totaldaduskomputer_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_staff";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
