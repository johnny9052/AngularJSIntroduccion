'use strict';

describe('Controller: ControladortareasCtrl', function () {

  // load the controller's module
  beforeEach(module('ejemploYoemanApp'));

  var ControladortareasCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ControladortareasCtrl = $controller('ControladortareasCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(ControladortareasCtrl.awesomeThings.length).toBe(3);
  });
});
