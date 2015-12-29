(function() {

  Handlebars.registerHelper('translateValue', function(options, fieldValue) {
    return options[fieldValue] || '';
  });

  Handlebars.registerHelper('translateMultiValue', function(options, fieldValues) {

    var val = [];

    _.each(fieldValues, function(fieldValue, key) {
      var x = options[fieldValue] || '';
      if (x) val.push(x);
    });

    return val.join(', ');
  });

  Handlebars.registerHelper('dollarAmount', function(value) {

    var val = Number(value);
    if (val === NaN) val = 0;

    return '$' + val.toFixed(2);
  });

  Handlebars.registerHelper('date', function(value) {
    var d = new Date(value);
    return d.toLocaleDateString();
  });

}())