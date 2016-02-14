angular.
	module('Bundesliga', [
		'ui.router'
	])
	.config([ '$urlRouterProvider', '$stateProvider', function( $urlRouterProvider, $stateProvider ) {
		$urlRouterProvider.otherwise('/home');

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
				templateUrl: 'tabela.php'
			})
			.state('strzelcy', {
				url: '/strzelcy',
				templateUrl: 'strzelcy.php'
			})
			.state('zespoly', {
				url: '/zespoly',
				templateUrl: 'zespoly.php'
			})
			.state('autor', {
				url: '/autor',
				templateUrl: 'autor.php'
			})
	}])
