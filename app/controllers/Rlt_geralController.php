<?php 
/**
 * Rlt_geral Page Controller
 * @category  Controller
 */
class Rlt_geralController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "rlt_geral";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"naran", 
			"data_rejistu", 
			"kode_komputer", 
			"kode_tipu_komputer", 
			"kode_avaria_diak", 
			"kode_staff");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				rlt_geral.id LIKE ? OR 
				rlt_geral.naran LIKE ? OR 
				rlt_geral.data_rejistu LIKE ? OR 
				rlt_geral.kode_komputer LIKE ? OR 
				rlt_geral.kode_tipu_komputer LIKE ? OR 
				rlt_geral.kode_avaria_diak LIKE ? OR 
				rlt_geral.kode_staff LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "rlt_geral/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("rlt_geral.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->rlt_geral_kode_tipu_komputer)){
			$vals = $request->rlt_geral_kode_tipu_komputer;
			$db->where("rlt_geral.kode_tipu_komputer", $vals, "IN");
		}
		if(!empty($request->rlt_geral_data_rejistu)){
			$vals = $request->rlt_geral_data_rejistu;
			$db->where("rlt_geral.data_rejistu", $vals, "IN");
		}
		if(!empty($request->rlt_geral_kode_avaria_diak)){
			$vals = $request->rlt_geral_kode_avaria_diak;
			$db->where("rlt_geral.kode_avaria_diak", $vals, "IN");
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Rlt Geral";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("rlt_geral/list.php", $data); //render the full page
	}
}
