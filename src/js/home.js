$(document).ready(function () {
  $.getJSON('./db/monopoly.json', ({ components }) => {
    let output = '<div class="row">';
    components.map(({ name, short_description }) => {
      output +=
        '\
          <div class="col-sm-4">\
            <article class="card text-left">\
              <div class="card-header">\
                <a href="assets/images/' +
        name +
        '.png" data-fancybox=monopoly data-caption="' +
        name +
        '">\
                  <img src="assets/images/' +
        name +
        '.png" alt="' +
        name +
        '">\
                </a>\
              </div>\
              <div class="card-body">\
                <h1 id="title">' +
        name +
        '</h1>\
                <p id="description">' +
        short_description +
        '</p>\
              </div>\
            </article>\
          </div>';
    });

    output += '</div>';
    $('#articleCards').html(output);
  });
});
