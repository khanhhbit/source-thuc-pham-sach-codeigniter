/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// 
	config.filebrowserBrowseUrl = ckeditor_config.base_url+'/'+ ckeditor_config.html_path;
	 
	config.filebrowserImageBrowseUrl = ckeditor_config.base_url+'/'+ ckeditor_config.html_path+'?type=Images';
	 
	config.filebrowserFlashBrowseUrl = ckeditor_config.base_url+'/'+ ckeditor_config.html_path+'?type=Flash';
	 
	config.filebrowserUploadUrl = ckeditor_config.base_url+'/'+ ckeditor_config.connector_path+'?command=QuickUpload&type=Files';
	 
	config.filebrowserImageUploadUrl = ckeditor_config.base_url+'/'+ ckeditor_config.connector_path+'?command=QuickUpload&type=Images';
	 
	config.filebrowserFlashUploadUrl = ckeditor_config.base_url+'/'+ ckeditor_config.connector_path+'?command=QuickUpload&type=Flash';

};
