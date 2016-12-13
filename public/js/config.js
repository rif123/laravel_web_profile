require.config({
	baseUrl : baseAsset,
	shim : {
		'customIndex' : {
			deps: ['jquery']
		},
		'customDemo' : {
			deps: ['jquery']
		},
		'jqueryFlot' : {
			deps: ['jquery']
		},
		'jqueryFlotResize' : {
			deps: ['jquery', 'jqueryFlot']
		},
		'jqueryFlotPie' : {
			deps: ['jquery']
		},
		'jqueryFlotCategories' : {
			deps: ['jquery']
		},
		'jquerySparkiLines' : {
			deps: ['jquery']
		},
		'customIndex' : {
			deps: ['jquery']
		}
	},
	paths : {
		jquery            : 'plugins/jquery/jquery.min',
		bootstrap         : 'plugins/bootstrap/js/bootstrap',
		bootstrapSelect   : 'plugins/bootstrap-select/js/bootstrap-select',
		jquerySlimscroll  : 'plugins/jquery-slimscroll/jquery.slimscroll',
		waves             : 'plugins/node-waves/waves',
		jqueryCountTo     : 'plugins/jquery-countto/jquery.countTo',
		raphael           : 'plugins/raphael/raphael.min',
		morris            : 'plugins/morrisjs/morris',
		bundle            : 'plugins/chartjs/Chart.bundle',
		jqueryFlot        : 'plugins/flot-charts/jquery.flot',
		jqueryFlotResize  : 'plugins/flot-charts/jquery.flot.resize',
		jqueryFlotPie     : 'plugins/flot-charts/jquery.flot.pie',
		jqueryFlotCategories : 'plugins/flot-charts/jquery.flot.categories',
		jquerySparkiLines : 'plugins/jquery-sparkline/jquery.sparkline',
		customAdmin       : 'js/admin',
		customIndex       : 'js/pages/index',
		customDemo        : 'js/demo',
        method            : 'js/method',
	}
});
