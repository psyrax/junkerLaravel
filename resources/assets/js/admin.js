angular.module('junkerImage', [])
  .controller('imageSearchController', ['$scope','$http',function($scope, $http) {
    $http.get('/home/item/images')
    .success(function(data){
      $scope.images = data;
    });
    $scope.loadImage = function(id, path){
      angular.element('#imagep'+ id).html('<br /><img src="'+ path +'" style="width:320px;"/>')
    };
    $scope.saveImage = function(image){
      console.log(image);
      $http.put('/image/'+ image.id, {
        title: image.title,
        description: image.description,
        itemid: window.itemId,
        _token:  window.token
      })
      .success(function(data){
        console.log(data);
      })
    }
  }]);