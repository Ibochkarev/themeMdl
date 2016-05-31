themeMdl.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'thememdl-panel-home', renderTo: 'thememdl-panel-home-div'
		}]
	});
	themeMdl.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(themeMdl.page.Home, MODx.Component);
Ext.reg('thememdl-page-home', themeMdl.page.Home);