({
// 20150918: peter@facetdata.com: Model has changed, the Contractor signature focus module will be fdest_Estimates, not Opportunities.
// 20150918: peter@facetdata.com: Model has changed, the Contractor will be related to the fdest_Estimates, not Job.

  className: 'centered-pane content',

  opp_id: '',
  opportunity: {},
  account: {},
  // egrap added 8/23/15
  job: {},
  contractor: {},
  // ptebault added 9/18/2015
  est_id: '',
  estimate: {},
  // ptebault added 9/28/2015
  user_signature: '',
  user_id: '',
  
  line_items: [],
  areas_of_attention: [],
  paints: [],

  initialize: function(options) {
    console.log("initialize");
    this._super('initialize', [options]);
//    this.opp_id = localStorage.getItem('contractor_signature_view_id');
    this.est_id = localStorage.getItem('contractor_signature_view_id');

    this.interior_exterior_c_list = app.lang.getAppListStrings('interior_exterior_c_list');
    this.primary_interior_list = app.lang.getAppListStrings('primary_interior_list');
    this.primary_exterior_list = app.lang.getAppListStrings('primary_exterior_list');
    this.deck_patio_list = app.lang.getAppListStrings('deck_patio_list');
    this.additional_areas_interior_list = app.lang.getAppListStrings('additional_areas_interior_list');
    this.preparation_list = app.lang.getAppListStrings('preparation_list');
    this.area_of_attention_list = app.lang.getAppListStrings('area_of_attention_list');
  },

  loadData: function() {
    console.log("cs_loadData");
    var self = this;
    console.log("Est ID: " + this.est_id);
    app.api.call('read', 'rest/v10/ContractorSignature/fetch/' + this.est_id, {}, {

      success: function(res) {
        self.opportunity = res.opportunity;
        self.account = res.account;
        // egrap 8/23/15 - add job and contractor
        self.job = res.job;
        self.contractor = res.contractor;
        // ptebault 9/18/2015 - add estimate
        self.estimate = res.estimate;
        // ptebault 9/28/2015 - add user signature
        self.user_signature = res.user_signature;
        self.user_id = res.user_id;
        this.user_id = res.user_id;
        console.log("user_id is " + res.user_id);

        self.line_items = res.line_items;
        self.paints = res.paints;

        _.each(self.line_items, function(item, key) {

          // add related paints to line item
          var paints = _.where(self.paints, {wo_line_item_num_c: "" + item.line_item_num_c})
          var paintNames = [];
          _.each(paints, function(paint) {
            paintNames.push(paint.name);
          });
          self.line_items[key].paints = paintNames.join(', ');

          // set preparation and areas of attention
          if (item.interior_exterior_c == 'deckpatio') {
            item.preparation = item.prep_deck_c;
            // item.primary = item.deck_patio_c;
          }
          else if (item.interior_exterior_c == 'Exterior') {
            item.preparation = item.prep_exterior_c;
            // item.primary = item.primary_area_exterior;
          }
          else {
            item.preparation = item.prep_interior_c;
            // item.primary = item.primary_interior;
          }
        });

        // extract out areas of attention into separate object
        self.areas_of_attention = [];
        _.each(res.line_items, function(item) {
          if (item.sunware_c || item.faded_c || item.chalking_c || item.mildew_decay_c
            || item.peeling_flaking_c || item.structural_failures_c || item.surface_bondage_c
            || item.water_sealed_c || item.weathering_c
          ) {
            self.areas_of_attention.push(item);
          }
        });

        self.render();
      }
    });
  },

  render: function(opts) {
    console.log("render");
    this._super('render', [opts]);
    $('#signature').jSignature();
    $('#limesignature').jSignature();
  },

  events: {
    'click #reset': function(e) {
      $('#signature').jSignature('reset');
      $('#limesignature').jSignature('reset');
    },
    'click #submit': function(e) {
      console.log("submit");
      var self = this;
      var sig = $('#signature').jSignature('getData');
      var limesig = $('#limesignature').jSignature('getData');
      app.alert.show('save-signature', {
        level: 'info',
        messages: 'Saving Lime Signature...'
      });
      app.api.call('create', 'rest/v10/UserSignature/post/', {
         user_id: this.user_id,
         signature: limesig,
      }, {
         success: function(res) {
            console.log(res);
            app.alert.dismiss('save-signature');
         }
      });
      app.alert.show('save-signature', {
        level: 'info',
        messages: 'Saving Contractor Signature...'
      });
       app.api.call('create', 'rest/v10/ContractorSignature/post/', {
        est_id: this.est_id,
        signature: sig,
      }, {
        success: function(res) {
          console.log(res);
          app.router.navigate('#fdest_Estimates/' + self.est_id, { trigger:true });
          app.alert.dismiss('save-signature');
        }
      });

    },
    'click #cancel': function(e) {
      app.router.navigate('#fdest_Estimates/' + this.est_id, { trigger:true });
    }
  }

})
