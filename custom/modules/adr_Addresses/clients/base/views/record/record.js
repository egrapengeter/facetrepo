({

  extendsFrom: 'RecordView',

  initialize: function(opts) {
    this._super('initialize', [opts]);
    this.context.on('button:address_convert_button:click', this.convertAddress, this);
  },

  convertAddress: function() {

    if (this.model.get('leads_adr_addresses_1leads_ida')) {
      return app.alert.show('convert-address', {
        level: 'error',
        messages: 'Lead already attached',
        autoClose: true,
        autoCloseDelay: 5000
      });
    }

    console.log(this.model);
    // return;

    window.leadFromAddress = {

      leads_adr_addresses_1adr_addresses_idb: this.model.get('id'),
      leads_adr_addresses_1_name: this.model.get('name'),

      primary_address_street: this.model.get('house_number') + ' ' + this.model.get('street'),
      primary_address_city: this.model.get('city'),
      primary_address_state: this.model.get('state'),
      primary_address_postalcode: this.model.get('zip'),

      alt_address_street: this.model.get('house_number') + ' ' + this.model.get('street'),
      alt_address_city: this.model.get('city'),
      alt_address_state: this.model.get('state'),
      alt_address_postalcode: this.model.get('zip'),

      description: this.model.get('description'),
      assigned_user_id: this.model.get('assigned_user_id'),
      assigned_user_name: this.model.get('assigned_user_name'),
      team_name: this.model.get('team_name'),

      priority_not_home_c: this.model.get('priority_not_home'),
      property_type_c: this.model.get('property_type'),
      rating_c: this.model.get('rating'),
      sub_division_c: this.model.get('sub_division'),
      home_class_c: this.model.get('home_class'),
      type_of_substrate_c: this.model.get('type_of_substrate_c'),

    };

    app.router.navigate('#Leads/create', {trigger: true});
  }

})
