'use strict';

describe('Controller: ControladortareasdbCtrl', function () {

  // load the controller's module
  beforeEach(module('ejemploYoemanApp'));

  var ControladortareasdbCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    ControladortareasdbCtrl = $controller('ControladortareasdbCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(ControladortareasdbCtrl.awesomeThings.length).toBe(3);
  });
});
