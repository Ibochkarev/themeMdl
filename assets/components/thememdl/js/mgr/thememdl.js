var themeMdl = function (config) {
	config = config || {};
	themeMdl.superclass.constructor.call(this, config);
};
Ext.extend(themeMdl, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('thememdl', themeMdl);

themeMdl = new themeMdl();