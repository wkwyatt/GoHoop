var app = angular.module('goHoopApp', []);

app.controller('registerCntrl', ['$scope', function ($scope){
	$scope.signup = registerUser;
}]);

app.controller('headerCntrl', ['$scope', '$http', function ($scope, $http){
	$scope.login = verifyLogin;

	$scope.logout = function(){
		$http.post('signup.php', {logout: 'true'});
		$scope.login = false;
	}
}]);

app.controller('indexCntrl', ['$scope', function ($scope){

}]);