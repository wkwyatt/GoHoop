var app = angular.module('goHoopApp', []);

app.controller('loginCntrl', ['$scope', function ($scope){
	$scope.signup = false;
}]);

app.controller('headerCntrl', ['$scope', '$http', function ($scope, $http){
	$scope.login = verifyLogin;

	$scope.logout = function(){
		$http.post('signup.php', {logout: 'true'});
		$scope.login = false;
	}
}]);