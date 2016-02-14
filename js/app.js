angular.
	module('Bundesliga', [
		'ui.router'
	])
	.config([ '$urlRouterProvider', '$stateProvider', function( $urlRouterProvider, $stateProvider ) {
		$urlRouterProvider.otherwise('/');

		$stateProvider
			.state('home', {
				url: '/',
				templateUrl: 'home.php'
			})
			.state('terminarz', {
				url: '/terminarz',
				templateUrl: 'tabela.php'
			})
			.state('tabela', {
				url: '/tabela',
				tamplateUrl: 'tabela.php'
			})
			.state('strzelcy', {
				url: '/strzelcy',
				tamplateUrl: 'strzelcy.php'
			})
			.state('zespoly', {
				url: '/zespoly',
				tamplateUrl: 'zespoly.php'
			})
			.state('autor', {
				url: '/autor',
				tamplateUrl: 'autor.php'
			})
	}])