Ext.onReady(function() {
	themeMdl.config.connector_url = OfficeConfig.actionUrl;

	var grid = new themeMdl.panel.Home();
	grid.render('office-thememdl-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});