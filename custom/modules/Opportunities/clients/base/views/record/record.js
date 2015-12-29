({

  extendsFrom: 'RecordView',

  initialize: function (options) {
    this._super('initialize', [options]);

    //add listener for custom button
    this.context.on('button:signature_view:click', this.signature_view, this);

    //add listener for Contractor Signature button
    this.context.on('button:contractor_signature_view:click', this.contractor_signature_view, this);
  },

  signature_view: function() {
    localStorage.setItem('signature_view_id', this.model.get('id'));
    app.router.navigate('#Opportunities/layout/signature', { trigger:true });
  },

  contractor_signature_view: function() {
    localStorage.setItem('contractor_signature_view_id', this.model.get('id'));
    localStorage.setItem('signature_view_id', this.model.get('id'));

    app.alert.show('Contractor-Sig', {
        level: 'success',
        messages: 'Executing Contractor Signature',
        autoClose: true
    });
    
    app.router.navigate('#Opportunities/layout/contractor_signature', { trigger:true });
    
  }

})
