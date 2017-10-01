// JavaScript Document

// criar o app angular
	var validationApp = angular.module('validationApp', []);

	// criar o controller angular
	validationApp.controller('mainController', function($scope) {

		// função para enviar o formulário depois que a validação estiver ok			
		$scope.submitForm = function() {

			// verifica se o formulário é válido
			if ($scope.userForm.$valid) {
				alert('Pedido realizado com sucesso!');
				alert('Seu pedido será entregue em 40 minutos!');
				alert('Obrigado!');
			}

		};

	});