themeMdl.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'thememdl-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			html: '<h2>' + _('thememdl') + '</h2>',
			cls: '',
			style: {margin: '15px 0'}
		}, {
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: true,
			hideMode: 'offsets',
			items: [{
				title: _('thememdl_items'),
				layout: 'anchor',
				items: [{
					html: _('thememdl_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'thememdl-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	themeMdl.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(themeMdl.panel.Home, MODx.Panel);
Ext.reg('thememdl-panel-home', themeMdl.panel.Home);
