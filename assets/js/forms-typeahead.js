'use strict';

$(function () {
  // String Matcher function
  var substringMatcher = function (strs) {
    return function findMatches(q, cb) {
      var matches = [];
      var substrRegex = new RegExp(q, 'i');
      $.each(strs, function (i, str) {
        if (substrRegex.test(str)) {
          matches.push(str);
        }
      });
      cb(matches);
    };
  };

  var specialties = [
    'Anesthesiology',
    'Cardiologist',
    'Dental Med',
    'Ear Nose Throat',
    'Family Medicine',
    'General Surgery',
    'Internal Medicine',
    'Nephrology',
    'Neurosurgery',
    'Obstetrics and Gynecology',
    'Occupational Medicine',
    'Ophthalmology',
    'Orthopaedics',
    'Pathologist',
    'Pediatrics',
    'Radiology',
    'Rehabilitation Medicine',
    'Urology'
  ];

  if (isRtl) {
    $('.typeahead').attr('dir', 'rtl');
  }

  // Initialize Typeahead
  $('.typeahead').typeahead(
    {
      hint: !isRtl,
      highlight: true,
      minLength: 1
    },
    {
      name: 'specialties', // ✅ FIXED NAME (was 'states')
      source: substringMatcher(specialties)
    }
  );
});
