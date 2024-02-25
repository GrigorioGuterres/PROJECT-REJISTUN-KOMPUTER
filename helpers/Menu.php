<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'HOME', 
			'icon' => '<i class="material-icons ">home</i>'
		),
		
		array(
			'path' => 'menu7', 
			'label' => 'MASTER INPUT', 
			'icon' => '<i class="material-icons ">open_in_new</i>',
'submenu' => array(
		array(
			'path' => 'tb_avaria', 
			'label' => 'Dadus Avaria', 
			'icon' => '<i class="material-icons ">call_missed_outgoing</i>'
		),
		
		array(
			'path' => 'tb_komputer', 
			'label' => 'Dadus komputer', 
			'icon' => '<i class="material-icons ">call_missed_outgoing</i>'
		),
		
		array(
			'path' => 'tb_tipu_komputer', 
			'label' => 'Tipu Komputer', 
			'icon' => '<i class="material-icons ">call_missed_outgoing</i>'
		),
		
		array(
			'path' => 'tb_staff', 
			'label' => 'Dadus Staff', 
			'icon' => '<i class="material-icons ">call_missed_outgoing</i>'
		)
	)
		),
		
		array(
			'path' => 'menu8', 
			'label' => 'PROSSESU DADUS', 
			'icon' => '<i class="material-icons ">explore</i>',
'submenu' => array(
		array(
			'path' => 'tb_prosses', 
			'label' => 'Prossesu Rejistu', 
			'icon' => '<i class="material-icons ">offline_pin</i>'
		)
	)
		),
		
		array(
			'path' => 'menu9', 
			'label' => 'OUTPUT', 
			'icon' => '<i class="material-icons ">filter_list</i>',
'submenu' => array(
		array(
			'path' => 'rlt_geral', 
			'label' => 'Relatorio Geral', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'rlt_avaria', 
			'label' => 'Relatorio Dadus Avaria', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'rlt_komputer', 
			'label' => 'Relatorio Komputer', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'rlt_staff', 
			'label' => 'Relatorio Dadus Staff', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		),
		
		array(
			'path' => 'rlt_tipu_komputer', 
			'label' => 'Relatorio Tipu Komputer', 
			'icon' => '<i class="material-icons ">attach_file</i>'
		)
	)
		),
		
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => '<i class="material-icons ">call_missed_outgoing</i>'
		)
	);
		
	
	
}