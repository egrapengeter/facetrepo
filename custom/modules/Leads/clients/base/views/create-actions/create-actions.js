({

  extendsFrom: 'CreateActionsView',

  initialize: function(opts) {
    this._super('initialize', [opts]);

    var leadFromAddress = window.leadFromAddress;

    console.log(leadFromAddress);

    if (leadFromAddress) {
      this.model.set(leadFromAddress);
    }

    window.leadFromAddress = undefined;
  },

})