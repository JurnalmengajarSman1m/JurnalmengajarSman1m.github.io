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
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'guru', 
			'label' => 'Guru', 
			'icon' => '<i class="fa fa-user"></i>'
		),
		
		array(
			'path' => 'mapel', 
			'label' => 'Mapel', 
			'icon' => '<i class="fa fa-file "></i>'
		),
		
		array(
			'path' => 'kelas', 
			'label' => 'Kelas', 
			'icon' => '<i class="fa fa-group "></i>'
		),
		
		array(
			'path' => 'agenda', 
			'label' => 'Agenda', 
			'icon' => '<i class="fa fa-calendar"></i>','submenu' => array(
		array(
			'path' => 'agenda', 
			'label' => 'Tambah Agenda', 
			'icon' => '<i class="fa fa-calendar"></i>'
		),
		
		array(
			'path' => 'Rekap_Agenda', 
			'label' => 'Rekap Agenda', 
			'icon' => '<i class="fa fa-calendar"></i>'
		)
	)
		),
		
		array(
			'path' => 'file', 
			'label' => 'File Pembelajaran', 
			'icon' => '<i class="fa fa-file "></i>','submenu' => array(
		array(
			'path' => 'file', 
			'label' => 'Tambah File', 
			'icon' => '<i class="fa fa-file "></i>'
		),
		
		array(
			'path' => 'rekap_file', 
			'label' => 'Rekap File', 
			'icon' => '<i class="fa fa-file "></i>'
		)
	)
		),
		
		array(
			'path' => 'roles', 
			'label' => 'Wewenang', 
			'icon' => '<i class="fa fa-database "></i>'
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Akses', 
			'icon' => '<i class="fa fa-user-secret "></i>'
		)
	);
		
	
	
}